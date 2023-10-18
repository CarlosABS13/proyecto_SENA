<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa con Ubicación por IP</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>

<body>
  <div id="map"></div>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
    var map = L.map('map').setView([0, 0], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker;

    // Función para actualizar el mapa con la ubicación proporcionada por el servidor API
    function updateMap(lat, lon) {
      // Borra el marcador anterior si existe
      if (typeof marker !== 'undefined') {
        map.removeLayer(marker);
      }

      marker = L.marker([lat, lon]).addTo(map);
      map.setView([lat, lon], 13);
    }

    // Llama a la función para obtener la ubicación por dirección IP
    async function getLocationByIP() {
      try {
        const response = await fetch('https://ipinfo.io/json');
        const data = await response.json();
        const [lat, lon] = data.loc.split(',');
        updateMap(parseFloat(lat), parseFloat(lon));
      } catch (error) {
        console.error('Error al obtener la ubicación por IP:', error);
      }
    }

    // Llama a la función para obtener la ubicación por IP
    getLocationByIP();
  </script>
</body>

</html>