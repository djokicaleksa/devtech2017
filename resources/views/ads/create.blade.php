@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Create ad'])
    {!! Form::open(['method'=>'post', 'action'=>'AdsController@store', 'class'=>'form-horizontal form-material', 'files'=>true]) !!}
        <div class="form-group">
            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" name="name" class="form-control" placeholder="Name"> 
            </div>

            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="file" name="image" class="" placeholder="Latitude"> 
            </div>

            <div class="col-lg-6 col-md-6 m-b-20">
                {!! Form::select('user_id', [''=>'Choose ad owner'] + $users->all(), null, ['class'=>'form-control']) !!}
            </div>    

            <div class="col-lg-6 col-md-6 m-b-20">
                <button class="btn btn-success" type="submit">Save</button>
            </div> 
        </div>
     {!! Form::close() !!}
@endsection