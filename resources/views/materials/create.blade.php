@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Create Material'])
	{!! Form::open(['method'=>'post', 'action'=>'MaterialController@store', 'class'=>'form-horizontal form-material']) !!}
        <div class="form-group">
            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" name="name" class="form-control" placeholder="Name"> 
            </div>

            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" name="price" class="form-control" placeholder="Price"> 
            </div>    

            <div class="col-lg-6 col-md-6 m-b-20">
                <button class="btn btn-success" type="submit">Save</button>
            </div> 
        </div>
     {!! Form::close() !!}
@endsection