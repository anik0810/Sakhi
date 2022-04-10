<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css" />
    <title>Document</title>
</head>
<body>
  <section>
      <div class="imgBx">
          <img src="slides/slide1.jpg">

      </div>
      <div class="contentBx">
          <div class="formBx">
              <h2>Book Your Cab</h2>
              <form>
                  <div class="inputBx">
                      <span>Your Location</span>
                      <input type="text" id="autocomplete">

                  </div>
                  <div class="inputBx">
                      <span>Drop Location</span>
                      <input type="text" id="autocomplete">
                  </div>
                  <div class="inputBx">
                      <input type="submit" value="Book Now" onclick="myFunction()" name="">
                  </div>
            </div>

      </div>
  </section>
  <script>
      function myFunction() {
        alert("Booking Successfull! Your Sakhi is on the way");
        window.open("index.php");
}
  </script>
  <script>
let autocomplete;
function initAutocomplete(){
    autocomplete = new google.maps.places.Autocomplete(
        document.getElementById('autocomplete'),
        );
}

</script>
<script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBydV9XnEtRSypTzOQNevE7FmeVdIWh6_4&libraries=places&callback=initAutocomplete" 
async defer></script>
</body>
</html>