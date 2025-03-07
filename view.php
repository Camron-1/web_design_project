<?php
include('connect.php');


$fname = $_POST['fname'];
$email = $_POST['email'];
$animal_id = $_POST['animal_id'];

// Mapping animal IDs to locations with geo-coordinates (latitude, longitude)
$animalLocations = [
  101 => ["Pacific Ocean", -15.7833, -127.8333], 
  103 => ["Atlantic Ocean", 14.5994, -60.9789], 
  105 => ["Arctic Ocean", 75.0000, -42.0000], 
  107 => ["Indian Ocean", -20.0000, 90.0000], 
  109 => ["Caribbean Sea", 15.7835, -75.0000], 
  111 => ["Mediterranean Sea", 35.0000, 18.0000], 
  113 => ["Great Barrier Reef", -18.2871, 147.6992], 
  115 => ["Gulf of Mexico", 25.0000, -90.0000], 
  117 => ["Coral Sea", -18.5000, 152.5000], 
  119 => ["South China Sea", 10.0000, 115.0000], 
  121 => ["Red Sea", 22.0000, 38.0000], 
  123 => ["Amazon River", -3.4653, -62.2159], 
  125 => ["North Sea", 56.0000, 3.000], 
  127 => ["Baltic Sea", 58.5000, 20.0000], 
  129 => ["Bay of Fundy", 45.5000, -64.5000], 
  131 => ["Tasman Sea", -40.0000, 160.0000], 
  133 => ["Andaman Sea", 10.0000, 95.0000], 
  135 => ["Southern Ocean", -65.0000, 0.0000], 
  137 => ["Bering Sea", 58.0000, -175.0000], 
  139 => ["Antarctica", -65.0000, 0.0000], 
  141 => ["Greenland Waters", 70.0000, -35.0000], 
  143 => ["Indian Ocean", -15.0000, 85.0000], 
  145 => ["Gulf Stream", 35.0000, -72.0000], 
  147 => ["Deep Atlantic", 0.0000, -30.0000], 
  149 => ["Hawaiian Waters", 20.7967, -156.3319], 
  151 => ["Caribbean Reefs", 17.0000, -80.0000], 
  153 => ["Coastal Waters", 34.5000, -75.5000], 
  155 => ["Alaskan Waters", 57.0000, -152.0000],
  102 => ["Pacific Ocean", -15.7833, -127.8333], 
  104 => ["Atlantic Ocean", 14.5994, -60.9789], 
  106 => ["Arctic Ocean", 75.0000, -42.0000], 
  108 => ["Indian Ocean", -20.0000, 90.0000], 
  110 => ["Caribbean Sea", 15.7835, -75.0000], 
  112 => ["Mediterranean Sea", 35.0000, 18.0000], 
  114 => ["Great Barrier Reef", -18.2871, 147.6992], 
  116 => ["Gulf of Mexico", 25.0000, -90.0000], 
  118 => ["Coral Sea", -18.5000, 152.5000], 
  120 => ["South China Sea", 10.0000, 115.0000], 
  122 => ["Red Sea", 22.0000, 38.0000], 
  124 => ["Amazon River", -3.4653, -62.2159], 
  126 => ["North Sea", 55.0000, 3.0000], 
  128 => ["Baltic Sea", 58.0000, 20.0000], 
  130 => ["Bay of Fundy", 45.0000, -64.0000], 
  132 => ["Tasman Sea", -40.0000, 160.0000], 
  134 => ["Andaman Sea", 10.0000, 95.0000], 
  136 => ["Southern Ocean", -70.0000, 20.0000], 
  138 => ["Bering Sea", 58.0000, -175.0000], 
  140 => ["Antarctica", -75.0000, -0.0714], 
  142 => ["Greenland Waters", 72.0000, -40.0000], 
  144 => ["Indian Ocean", -15.0000, 85.0000], 
  146 => ["Gulf Stream", 37.0000, -75.0000], 
  148 => ["Deep Atlantic", 0.0000, -30.0000], 
  150 => ["Hawaiian Waters", 20.7967, -156.3319], 
  152 => ["Caribbean Reefs", 17.0000, -80.0000], 
  154 => ["Coastal Waters", 34.0000, -76.0000], 
  156 => ["Alaskan Waters", 57.0000, -152.0000]
];

list($location, $latitude, $longitude) = $animalLocations[$animal_id];


$sql=("SELECT fname, email,animal,gender,id FROM animalsdb WHERE email = '$email' AND fname = '$fname' AND id = '$animal_id'");

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Display Animal Information
    echo "<h2>Animal Details</h2>";
    echo "First name: " . $row["fname"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Animal: " . $row["animal"] . "<br>";
    echo "Gender: " . $row["gender"] . "<br>";
    echo "ID: " . $row["id"] . "<br>";
    echo "Location: $location  <br> Your coords are latitude $latitude, longitude $longitude<br/>";

    // Output JavaScript for Google Maps integration
    echo "
    <div id='map' style='height: 400px; width: 100%;'></div>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCCOoHmTGdaPyRqYht9TA8JCM-CWMnPdsA&callback=initMap' async defer></script>
    <script>
        var latitude = $latitude;
        var longitude = $longitude;
        var locationName = '$location';

        function initMap() {
            var location = { lat: latitude, lng: longitude };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 5,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: locationName
            });
            var infowindow = new google.maps.InfoWindow({
                content: '<b>' + locationName + '</b><br>Animal Location'
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>";
} else {
    echo "<h2>Details not found. Please check your email, animal ID, or name.</h2>";
}

; 

$conn->close();
?>