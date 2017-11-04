<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Barcode;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Barcode as BarcodeResource;
use App\Events\RecycledEvent;
use App\Material;
use DB;
use App\Bin;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function getUser($token, $bin_id, $card_id)
    {
    	$user = User::where('card_id', $card_id)->first();

    	if($user == null){
    		return response()->json([
    			'status' => 404,
    			'message' => 'Card ID unknown'
    		]);
    	}

    	return new UserResource($user);
    }

    public function getProduct($token, $bin_id, $barcode)
    {
    	$barcode = Barcode::where('barcode', $barcode)->first();
    	
    	if($barcode == null){
    		return response()->json([
    			'status' => 404,
    			'message' => 'Barcode unknown'
    		]);
    	}

    	return new BarcodeResource($barcode);
    }

    public function recycle(Request $request)
    {
        $input['user_id'] = $request->input('user_id');
        $input['bin_id'] = $request->input('bin_id');
        $input['token'] = $request->input('token');
        $input['card_id'] = $request->input('card_id');

    	$user = User::findOrFail($input['user_id']);

        if($user == null){
            return response()->json([
                'status' => 404,
                'message' => 'User unknown'
            ]);
        }

    	$barcode = Barcode::find($input['barcode_id']);

        if($barcode == null){
            return response()->json([
                'status' => 404,
                'message' => 'Barcode unknown'
            ]);
        }

    	$user->barcodes()->attach($input['barcode_id'], ['bin_id'=>$input['bin_id']]);
    	$credit = $user->balance + ($barcode->material->price / 1000) * $barcode->weight;
    	$user->update([
    		'balance' => $credit 
    		]);

        event(new RecycledEvent($barcode->material->id, $barcode->material->getCount(), $barcode->material->percent()));

    	return response()->json([
    			'status'=> 200,
    			'message' => 'Successfully recycled',
    			'credit' => (string) $user->balance,
    		]);
    }

    public function cardBlockStats()
    {
        $data = [];
        $i = 0;
        $materials = Material::all();
        foreach ($materials as $material) {
            $data[$i]['material_id'] = $material->id;
            $data[$i]['number'] = $material->getCount();
            $data[$i]['percent'] = $material->percent();
            $data[$i]['css_class'] = "css-bar-" . $data[$i]['percent'];
            $i++;
        }

        return response()->json($data);
    }

    public function barChartStats(){
        $mon_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Monday"')->where('barcodes.material_id', 1)->count();
        $tue_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Tuesday"')->where('barcodes.material_id', 1)->count();
        $wed_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Wednesday"')->where('barcodes.material_id', 1)->count();
        $thu_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Thursday"')->count();
        $fri_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Friday"')->where('barcodes.material_id', 1)->count();
        $sat_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Saturday"')->where('barcodes.material_id', 1)->count();
        $sun_alu = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Sunday"')->where('barcodes.material_id', 1)->count();




        $mon_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Monday"')->where('barcodes.material_id', 2)->count();
        $tue_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Tuesday"')->where('barcodes.material_id', 2)->count();
        $wed_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Wednesday"')->where('barcodes.material_id', 2)->count();
        $thu_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Thursday"')->count();
        $fri_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Friday"')->where('barcodes.material_id', 2)->count();
        $sat_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Saturday"')->where('barcodes.material_id', 2)->count();
        $sun_plastic = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Sunday"')->where('barcodes.material_id', 2)->count();


        $mon_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Monday"')->where('barcodes.material_id', 3)->count();
        $tue_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Tuesday"')->where('barcodes.material_id', 3)->count();
        $wed_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Wednesday"')->where('barcodes.material_id', 3)->count();
        $thu_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Thursday"')->count();
        $fri_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Friday"')->where('barcodes.material_id', 3)->count();
        $sat_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Saturday"')->where('barcodes.material_id', 3)->count();
        $sun_glass = DB::table('barcode_user')->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')->whereRaw('DAYNAME(barcode_user.created_at) = "Sunday"')->where('barcodes.material_id', 3)->count();
        
        $data[0] = [$mon_alu, $tue_alu, $wed_alu, $thu_alu, $fri_alu, $sat_alu, $sun_alu];
        $data[1] = [$mon_plastic, $tue_plastic, $wed_plastic, $thu_plastic, $fri_plastic, $sat_plastic, $sun_plastic];
        $data[2] = [$mon_glass, $tue_glass, $wed_glass, $thu_glass, $fri_glass, $sat_glass, $sun_glass];
        return $data;
    }

    public function mapFeed(){
        $bins = Bin::all();
        $data = [];
        foreach ($bins as $bin) {
            array_push($data, [
                        'lat' => (float) $bin->lat,
                        'lng' => (float) $bin->long,
                    ]);
        }

        return response()->json($data);
    }

    public function revenueOverLastSevenDays()
    {   
        $materials = Material::all();
        $data = [];
        $i = 0;
        foreach ($materials as $material) {
            $data[$i] = $material->revenueOverLastSevenDays();
            $i++;
        }

        return $data;
    }
}
