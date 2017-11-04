@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Create bin'])
	{!! Form::open(['method'=>'post', 'action'=>'BinController@store', 'class'=>'form-horizontal form-material']) !!}
        <div class="form-group">
            <div class="col-md-12 m-b-20">
                <input type="text" class="form-control" placeholder="Type name"> </div>
            <div></div>
            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" class="form-control" placeholder="Email"> </div>
            <div class="col-lg-6 col-md-6 m-b-20">
                <input type="text" class="form-control" placeholder="Email"> </div>    
        </div>
     {!! Form::close() !!}
@endsection