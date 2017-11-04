@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Pocetna strana'])

<div class="row" id="app">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0" id="cans" >@{{cans_number}}</h2>
                                    <h6 class="text-muted">Limenki</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div v-bind:class="cans_class" 
                                    v-bind:data-label="cans_percent" class="css-bar m-b-0 css-bar-info"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">@{{pet_number}}</h2>
                                    <h6 class="text-muted">Plasticnih flasa</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div v-bind:class="pet_class" 
                                    v-bind:data-label="pet_percent" class="css-bar m-b-0 css-bar-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">@{{glass_number}}</h2>
                                    <h6 class="text-muted">Staklenih flasa</h6></div>
                                <!-- Column -->
                                <div class="col text-right ">
                                    <div v-bind:class="glass_class" 
                                    v-bind:data-label="glass_percent" class="css-bar m-b-0 css-bar-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card card-block">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">@{{total}}</h2>
                                    <h6 class="text-muted">Ukupno</h6></div>
                                <!-- Column -->
                                <div class="col text-right ">
                                    <div data-label="100%" class="css-bar m-b-0 css-bar-primary css-bar-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
</div>



<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Items Recycled per Day</h4>
                                <h6 class="card-subtitle">Plastic. Aluminium. Glass</h6>
                                <div class="amp-pxl" style="height: 300px;"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10"></i>Aluminium</h6> </li>
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Plastic</h6> </li>    
                                        <li>
                                            <h6 class="text-muted text-warning"><i class="fa fa-circle font-10 m-r-10 "></i>Glass</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"></h4>
                                <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                                <div class="campaign2 ct-charts" style="height: 300px;"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Open Rate</h6> </li>
                                        <li>
                                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Recurring</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Current Visitors</h4>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="usa" style="height: 300px"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Valley</h6> </li>
                                        <li>
                                            <h6 class="text-info"><i class="fa fa-circle font-10 m-r-10"></i>Newyork</h6> </li>
                                        <li>
                                            <h6 class="text-danger"><i class="fa fa-circle font-10 m-r-10"></i>Kansas</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

<div class="row">
	<div class="collapse in" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
</div>                
@endsection
