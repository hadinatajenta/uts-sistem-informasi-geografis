//API KEY ASRI LEAFLET
const apiKey = "AAPK6bda26370a9c4558b3ba1caaa0d5b446VRjKtwUU45dK6gaslLvpjfsALos8lJe3s7BBr_23X0exTpiNhfu0QL-EHet5IdqG";

const basemapEnum = "ArcGIS:Navigation";
const map = L.map("map", {
    minZoom: 2
})

map.setView([-5.4254, 105.2580], 14); // kota bandar lampung

L.esri.Vector.vectorBasemapLayer(basemapEnum, {
    apiKey: apiKey
}).addTo(map);

const searchControl = L.esri.Geocoding.geosearch({
    position: "topright",
    placeholder: "Enter an address or place e.g. 1 York St",
    useMapBounds: false,
    

    providers: [
        L.esri.Geocoding.arcgisOnlineProvider({
          apikey: apiKey,
          nearby: {
            lat: -33.8688,
            lng: 151.2093
          }
        })
      ]
  }).addTo(map);

  //hasil
  const results = L.layerGroup().addTo(map);

  searchControl.on("results", (data) => {
    results.clearLayers();
    for (let i = data.results.length - 1; i >= 0; i--) {
        const marker = L.marker(data.results[i].latlng);
        const lngLatString = `${Math.round(data.results[i].latlng.lng * 100000) / 100000}, ${
            Math.round(data.results[i].latlng.lat * 100000) / 100000
          }`;
          marker.bindPopup(`<b>${lngLatString}</b><p>${data.results[i].properties.LongLabel}</p>`);
        results.addLayer(marker);
        marker.openPopup();

      }
  });
 
$(document).ready(function() {
  $.getJSON('/gis', function(data){
    $.each(data, function(index){
      const marker = L.marker([parseFloat(data[index].longitude), parseFloat(data[index].latitude)]);
      marker.addTo(map);
    })
  })
});
