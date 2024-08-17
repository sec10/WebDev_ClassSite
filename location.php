<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Sandy's Petshop | Location</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("includes/header.html");?>
    <section id="main">
        <div>
            <h2>Address</h2>
            <p class="location">0000 E 0000 S
            Salt Lake City, UT 0000</p>
        </div>
        <div>
            <h2>Phone Number</h2>
            <p class="location">801-000-0000</p>
        </div>
        <div>
            <h2>Hours</h2>
            <ul class="location">
                <li>Monday-Friday 10AM-7PM</li>
                <li>Saturday-Sunday 10AM-5PM</li>
            </ul>
        </div>

</section>
<div>        
<h2 id="mapheading">Map</h2>
<div id="map"></div>
</div>           
<?php include("includes/footer.html");?>        
      
<script>
function initMap() {
var uluru = {lat:40.700021, lng:-111.803492};
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 4,
center: uluru
});
var marker = new google.maps.Marker({
position: uluru,
map: map
});
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeAb_s8TDaSGeYdNiGbdyVM2NC169d_rs&callback=initMap">
</script>
              
</body>
</html>

