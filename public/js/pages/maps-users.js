$(document).ready(function(){

    initMap();

    function initMap() {
        var uluru = {lat: 19.430721, lng: -99.181362};
        var map = new google.maps.Map(document.getElementById('overlayermap'), {
          zoom: 7,
          center: uluru
        });

        showLoader("Cargando usuarios...")
        getUsers(handleUsers);

        function handleUsers(response){

            console.log(response);

            response.forEach(function(item,index){

                //Sólo muestra usuarios activos y con coordenadas conocidas
                if( item.es_activo == 0 || item.latitud == null || item.longitud == null ){
                    return;
                }

                

                var dot = 'red-dot.png';

                /*switch ( item.id_estatus ) {
                    //Programado
                    case 2:
                        dot = 'blue-dot.png';
                        break;
                    //Iniciado
                    case 3:
                        dot = 'green-dot.png';
                        break;
                    //Finalizado
                    case 4:
                        dot = 'red-dot.png';
                        break;
                    default:
                        dot = 'yellow-dot.png';
                }*/

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
                  icon: 'images/map-school-32x32.png',
                  position: tmp,
                  map: map,
                  title: item.direccion
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });

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