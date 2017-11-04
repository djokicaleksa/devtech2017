<?php

namespace App\Http\Middleware;

use Closure;
use App\Bin;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        if($request->isMethod('post')){

            $bin = Bin::find($request->bin_id);
            if($bin == null){
                return response()->json(['message'=>'FuckOff']);
            }

            if($request->token === $bin->token){
                return $next($request);
            }
            
            return response()->json(['message'=>'FuckOff']);
        }else{
            
            $bin = Bin::find($request->route('bin_id'));
            if($bin == null){
                return response()->json(['message'=>'FuckOff']);
            }

            if($request->token === $bin->token){
                return $next($request);
            }
            return response()->json(['message'=>'FuckOff']);
        }



    }
}
