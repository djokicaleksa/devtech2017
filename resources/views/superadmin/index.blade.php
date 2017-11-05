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
                                    <h6 class="text-muted">Cans</h6></div>
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
                                    <h6 class="text-muted">Plastic</h6></div>
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
                                    <h6 class="text-muted">Glass</h6></div>
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
                                <h4 class="card-title">Value of recycled materials</h4>
                                <h6 class="card-subtitle">Value of recycled materials</h6>
                                <div class="campaign2 ct-charts" style="height: 300px;"></div>
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
                                <h4 class="card-title">Collected in [kg]</h4>
                                <h6 class="card-subtitle">Weight of all collected materials</h6>
                                <div id="usa" style="height: 300px"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-danger"><i class="fa fa-circle font-10 m-r-10"></i>Aluminium</h6> </li>
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Plastic</h6> </li>    
                                        <li>
                                            <h6 class="text-muted text-warning"><i class="fa fa-circle font-10 m-r-10 "></i>Glass</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12" style="height: 700px;">
    <h2>Bins locations</h2>
	   <div id="map"></div>
    </div>
</div>                
@endsection

@section('footer')
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 33.930598, lng: 33.930598}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }

      var locations = function () {
            var temp = null;
            $.ajax({
                url: 'http://hack.dev/api/map-feed',
                method: 'GET',
                async:false,
                success: function (data){
                    temp = data;
                },
                error: function (error) {
                    console.log(error);
                }

            });
            return temp;
        }();

        console.log(locations);


//       var locations = [
//     {
//         "lat": 20.684614,
//         "lng": 20.54684684
//     },
//     {
//         "lat": 22.684614,
//         "lng": 40.54684684
//     }
// ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBxZYniuLoJAxgIMo4gfdrSqk-JiKAE3Q &callback=initMap">
    </script>

@endsection