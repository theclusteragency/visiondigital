$(document).ready(function(){
  map = new GMaps({
    el: '#overlayermap',
    lat: 19.430721,
    lng: -99.181362
  });
  map.drawOverlay({
    lat: map.getCenter().lat(),
    lng: map.getCenter().lng(),
    layer: 'overlayLayer',
    content: '<div class="gmaps-overlay">Resuelve<div class="gmaps-overlay_arrow above"></div></div>',
    verticalAlign: 'top',
    horizontalAlign: 'center'
  });
});

