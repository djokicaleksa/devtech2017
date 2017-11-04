@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Pocetna strana'])

<div class="row" id="app">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">{{$limenke}}</h2>
                                    <h6 class="text-muted">Limenki</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">2376</h2>
                                    <h6 class="text-muted">Plasticnih flasa</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">1795</h2>
                                    <h6 class="text-muted">Staklenih flasa</h6></div>
                                <!-- Column -->
                                <div class="col text-right ">
                                    <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
 <!--  -->
                </div>
@endsection
