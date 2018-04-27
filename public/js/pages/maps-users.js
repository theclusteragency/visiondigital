$(document).ready(function(){

    initMap();

    function initMap() {
        var myLatLng = {lat: 19.3275467, lng: -99.6083953};
        var map = new google.maps.Map(document.getElementById('overlayermap'), {
          zoom: 9,
          center: myLatLng
        });

        showLoader("Cargando usuarios...")

        getUsers(handleUsers);

        function handleUsers(response){

            totalUsers = 0;
            i = 0;

            response.forEach(function(item,index){

                i++;

                //Sólo muestra usuarios activos y con coordenadas conocidas
                if( item.es_activo == 0 || item.latitud == '' || item.longitud == '' ){
                  return;
                }

                totalUsers++;

                lt = parseFloat(item.latitud);
                lg = parseFloat(item.longitud);

                var date = new Date(item.fecha_evento);
                date     = moment(date).format("YYYY-MM-DD");

                tmp = { lat:lt,  lng:lg };
                //events.push(tmp);

                var contentString = 
                    '<div id="content">'+
                        '<div style="float:left;">'+
                            '<img src="'+item.url_avatar+'" style="border-radius: 50px; max-width:100px" alt="user">'+
                        '</div>'+
                        '<div style="float:left; margin-left:15px">'+
                            '<h2 id="firstHeading" class="firstHeading">' + item.nombre + ' ' + item.apellido_paterno + '</h2>'+
                            '<h3 class="firstHeading">' + item.descripcion_rol + '</h3>'+
                            '<div id="bodyContent">'+
                                '<p><b>Correo:  </b>' + item.correo + '</p>'+
                                '<p><b>Edad:  </b>' + item.edad + '</p>'+
                                '<p><b>Teléfono:  </b>' + item.telefono + '</p>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                  content: contentString
                });

                var marker = new google.maps.Marker({
                  //icon: 'http://maps.google.com/mapfiles/ms/icons/'+dot,
                  icon: 'images/map-person-32x32.png',
                  position: tmp,
                  map: map,
                  title: item.direccion
                });

                marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });

                if(i = response.length) {
                  jQuery('#total-users').html(totalUsers.toLocaleString('en'));
                }

            });
        }
    }
});

// Regresa el listado de usuarios
function getUsers(callback) {
  $.ajax({
     url: dbinstance+'obtener_usuarios',
     headers:{"x-api-key":apikey},
     type: 'GET',
     data: {
        format: 'json'
     },
     error: function() {
       
     },
     dataType: 'json',
     success: function(response) {
    
     },
     complete: function(response){
        closeLoader()
      callback(response.responseJSON.data);
     }
  });
}

// Regresa el listado de Eventos
function getEvents(callback) {
  $.ajax({
     url: dbinstance+'obtener_eventos',
     headers:{"x-api-key":apikey},
     type: 'GET',
     data: {
        format: 'json'
     },
     error: function() {
       
     },
     dataType: 'json',
     success: function(response) {
    
     },
     complete: function(response){
        closeLoader()
      callback(response.responseJSON.data);
     }
  });
}

function showLoader(text) {
  $("#loaderText").text(text);
  $("#modal").removeClass("hide");
}

function closeLoader() {
  $("#loaderText").text("");
  $("#modal").addClass("hide");
}