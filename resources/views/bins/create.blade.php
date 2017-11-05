@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Create bin'])
    {!! Form::open(['method'=>'post', 'action'=>'BinController@store', 'class'=>'form-horizontal form-material']) !!}
        <div class="form-group">
            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" name="long" class="form-control" placeholder="Longitude"> 
            </div>

            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" name="lat" class="form-control" placeholder="Latitude"> 
            </div>    

            <div class="col-lg-6 col-md-6 m-b-20">
                <button class="btn btn-success" type="submit">Save</button>
            </div> 
        </div>
     {!! Form::close() !!}
@endsection