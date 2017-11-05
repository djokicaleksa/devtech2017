<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    @include('components.favicon')
    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/style/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{url('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Binary | Home</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        @include('components.front_nav')
        <div id="map" style="width: 100%; height: 800px;"></div>
        @include('components.front_footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins.js')}}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="{{url('js/functions.js')}}"></script>
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


</body>
</html>