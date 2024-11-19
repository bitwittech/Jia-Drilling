<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Map with Country Markers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .map-container {
      position: relative;
      width: 1400px;
      max-height: 800px;
      margin: auto;
    }
    .map-container img {
      width: 100%;
      height: auto;
    }
    .marker {
  position: absolute;
  width: 10px;
  height: 10px;
  transition: all 500ms ease;
  background-color: red;
  border-radius: 50%;
  cursor: pointer;
  z-index: 1; /* Ensures markers are in the correct stacking order */
}

.marker:hover {
  transform: scale(1.2);
  background-color: blue;
  z-index: 2; /* Increases stacking order on hover */
}

.marker:hover::after {
  content: attr(data-country);
  position: absolute;
  top: -20px;
  left: 20px;
  background-color: white;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 12px;
  white-space: nowrap;
  z-index: 3; /* Ensures the label is above everything else */
}

  </style>
</head>
<body>
  <div class="map-container">
    <!-- Replace the src URL with a world map image -->
    <img src="./assets/newImages/World_Map.png" alt="World Map">
    
    <!-- Markers -->
    <div class="marker" data-country="Nigeria" style="top: 48%; left: 49%;"></div>
    <div class="marker" data-country="Congo" style=" top: 52%; left: 54%;"></div>
    <div class="marker" data-country="Malawi" style=" top: 56%; left: 57%;"></div>
    <div class="marker" data-country="Somalia" style=" top: 47%; left: 59%;"></div>
    <div class="marker" data-country="Ghana" style="top: 47%; left: 46.5%;"></div>
    <div class="marker" data-country="Niger" style=" top: 42%; left: 49%;"></div>
    <div class="marker" data-country="Mali" style="top: 42%; left: 46.5%;"></div>
    <div class="marker" data-country="Uganda" style=" top: 51.5%; left: 55.8%;"></div>
    <div class="marker" data-country="Kenya" style="top: 51%; left: 58%;"></div>
    <div class="marker" data-country="Zimbabwe" style="top: 62.5%; left: 55%;"></div>
    <div class="marker" data-country="Nepal" style="top: 36%; left: 70%;"></div>
  </div>
</body>
</html>
