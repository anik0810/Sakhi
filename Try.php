<!DOCTYPE html>

<html>

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <title>Google map Places Autocomplete - Tutsmake.com</title>

 <style>

    .container{

    padding: 10%;

    text-align: center;

   } 

 </style>

</head>

<body>

 

<div class="container">

    <div class="row">

        <div class="col-12"><h2>Google Places Autocomplete InputBox Example Without Showing Map</h2></div>

        <div class="col-12">

            <div id="custom-search-input">

                <div class="input-group">

                    <input id="autocomplete_search" name="autocomplete_search" type="text" class="form-control" placeholder="Search" />

                    <input type="hidden" name="lat">

                    <input type="hidden" name="long">

                </div>

            </div>

        </div>

    </div>

</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVwqqdcWz6r6lQPPBWihhZVbS7rZtnJ3k&libraries=places"></script>

<script>

  google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {

      var input = document.getElementById('autocomplete_search');

      var autocomplete = new google.maps.places.Autocomplete(input);

      autocomplete.addListener('place_changed', function () {

      var place = autocomplete.getPlace();

      // place variable will have all the information you are looking for.

      $('#lat').val(place.geometry['location'].lat());

      $('#long').val(place.geometry['location'].lng());

    });

  }

</script>




</body>

</html>