$(document).ready(function(){

    initMap(7, 19.430721, -99.181362);

    function initMap(zoom, lati, longi, idmap = 'overlayermap') {
        var uluru = {lat: lati, lng: longi};
        var map = new google.maps.Map(document.getElementById(idmap), {
          zoom: zoom,
          center: uluru
        });

        showLoader("Cargando eventos...")
        getEvents(handleEvents);

        function handleEvents(response){

            //console.log(response);

            response.forEach(function(item,index){

                var dot = 'red-dot.png';

                switch ( item.id_estatus ) {
                    //Programado
                    case 1:
                        dot = '4.png';
                        break;
                    //Iniciado
                    case 2:
                        dot = '3.png';
                        break;
                    //Finalizado
                    case 3:
                        dot = '2.png';
                        break;
                    default:
                        dot = '1.png';
                }

                lt = parseFloat(item.latitud);
                lg = parseFloat(item.longitud);

                var date = new Date(item.fecha_evento);
                date     = moment(date).format("YYYY-MM-DD");

                tmp = { lat:lt,  lng:lg };
                //events.push(tmp);

                var contentString = 
                    '<div id="content">'+
                        '<h2 id="firstHeading" class="firstHeading">' + item.descripcion + '</h2>'+
                        '<div id="bodyContent">'+
                            '<p><b>Estatus:</b>' + item.estatus + '</p>'+
                            '<p><b>Categoría:</b>' + item.categoria + '</p>'+
                            '<p><b>Fecha:</b>' + date + '</p>'+
                            '<p>Dirección: '+ item.direccion +
                            '<p><a href="evento?evento=' + item.id_evento + '" style="color:#1e88e5; text-decoration: underline">Detalles del evento</a></p>'+
                        '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                  icon: 'https://s3.amazonaws.com/rafaganaimage/32/'+dot,
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

    states.forEach(function(item, index){
        $('#filter-state').append('<option value="'+index+'">'+item.edo+'</option>')
    })

    $('#filter-state').on('change', function(){

        var id_edo = $(this).val();

        var zoom = states[id_edo].zoom;
        var lat = states[id_edo].lat;
        var lon = states[id_edo].lon;

        initMap(zoom, lat, lon);

    });

    $('#col-rows').on('click', function(){
        
        $('#content-maps').html('');

        var cols = $('#cols').val();
        var rows = $('#rows').val();
        var render_maps = '';
        var array_idmaps = [];
        var array_idfilter = [];

        var with_col = 12;
        if ( cols == 3 ){
            with_col = 4;
        } else if ( cols == 2 ){
            with_col = 6
        } else {
            with_col = 12
        }

        for (var i = 1; i <= rows; i++) {
            
            render_maps += ''+
            '<div class="row">';

                for ( var j = 1 ; j <= cols ; j++ ) {
                    
                    idmap = 'overlayermap-' + i + '-' + j;
                    idfilter = 'filter-state-' + i + '-' + j;

                    array_idmaps.push(idmap);
                    array_idfilter.push(idfilter);

                    render_maps += ''+
                    '<div class="col-'+with_col+'">'+
                      '<div class="box box-default">'+
                        '<div class="box-header with-border">'+
                            '<form class="form-inline">'+
                                '<div class="form-group">'+
                                    '<label for="filter-state" style="margin-right: 15px;">Filtar por estado</label>'+
                                    '<select class="form-control filter-state" name="filter-state" id="' + idfilter + '" style="width: 300px " data-map="'+idmap+'"></select>'+
                                '</div>'+
                            '</form>'+
                        '</div>'+
                        '<div class="box-body">'+
                          '<div id="'+idmap+'" class="gmaps"></div>'+
                        '</div>'+
                      '</div>'+
                    '</div>';

                }

            render_maps += ''+
            '</div>';

        }

        console.log(array_idmaps);
        console.log(array_idfilter);

        

        $('#content-maps').append(render_maps);

        array_idmaps.forEach(function(item, index){

            initMap(7, 19.430721, -99.181362, item);

        });

        states.forEach(function(item, index){
            $('.filter-state').append('<option value="'+index+'">'+item.edo+'</option>')
        });

        $('.filter-state').on('change', function(){

            var id_edo = $(this).val();

            var zoom = states[id_edo].zoom;
            var lat = states[id_edo].lat;
            var lon = states[id_edo].lon;

            var idmap = $(this).data('map');

            initMap(zoom, lat, lon, idmap);

        });

        $(window).scrollTop($('#content-maps').offset().top);
    

    });

});


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
      closeLoader();
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

var states = [
    {
        edo: 'todos',
        abr: 'todos',
        zoom: 7,
        lat: 19.430721,
        lon: -99.181362
    },
    {
        edo: 'Aguascalientes',
        abr: 'AGS',
        zoom: 10,
        lat: 22.0041821,
        lon: -102.3064092
    },
    {
        edo: 'Baja California',
        abr: 'BCN',
        zoom: 8,
        lat: 31.3540874,
        lon: -115.5069053
    },
    {
        edo: 'Baja California Sur',
        abr: 'BCS',
        zoom: 7,
        lat: 25.537961,
        lon: -111.8869101
    },
    {
        edo: 'Campeche',
        abr: 'CAM',
        zoom: 8,
        lat: 19.1857401,
        lon: -90.4087677
    },
    {
        edo: 'Chiapas',
        abr: 'CHP',
        zoom: 8,
        lat: 16.6378723,
        lon: -92.7708283
    },
    {
        edo: 'Chihuahua',
        abr: 'CHI',
        zoom: 7,
        lat: 29.1547887,
        lon: -106.6109545
    },
    {
        edo: 'Ciudad de México',
        abr: 'DIF',
        zoom: 11,
        lat: 19.3790937,
        lon: -99.1696055
    },
    {
        edo: 'Coahuila',
        abr: 'COA',
        zoom: 8,
        lat: 28.0870541,
        lon: -101.7953379
    },
    {
        edo: 'Colima',
        abr: 'COL',
        zoom: 10,
        lat: 19.1504879,
        lon: -103.8414904
    },
    {
        edo: 'Durango',
        abr: 'DUR',
        zoom: 8,
        lat: 24.917948,
        lon: -104.9982553
    },
    {
        edo: 'Guanajuato',
        abr: 'GTO',
        zoom: 9,
        lat: 20.8117053,
        lon: -101.0404306
    },
    {
        edo: 'Guerrero',
        abr: 'GRO',
        zoom: 9,
        lat: 17.7152982,
        lon: -99.7837342
    },
    {
        edo: 'Hidalgo',
        abr: 'HGO',
        zoom: 10,
        lat: 20.6281288,
        lon: -98.9568781
    },
    {
        edo: 'Jalisco',
        abr: 'JAL',
        zoom: 9,
        lat: 20.2105707,
        lon: -104.2591369
    },
    {
        edo: 'Estado de México',
        abr: 'MEX',
        zoom: 9,
        lat: 19.4764715,
        lon: -99.8182284
    },
    {
        edo: 'Michoacán',
        abr: 'MIC',
        zoom: 9,
        lat: 19.1527587,
        lon: -101.2673728
    },
    {
        edo: 'Morelos',
        abr: 'MOR',
        zoom: 10,
        lat: 18.745103,
        lon: -99.0708769
    },
    {
        edo: 'Nayarit',
        abr: 'NAY',
        zoom: 9,
        lat: 21.8126331,
        lon: -104.7365239
    },
    {
        edo: 'Nuevo León',
        abr: 'NLE',
        zoom: 8,
        lat: 25.6305095,
        lon: -99.735888
    },
    {
        edo: 'Oaxaca',
        abr: 'OAX',
        zoom: 8,
        lat: 17.1107227,
        lon: -96.8738995
    },
    {
        edo: 'Puebla',
        abr: 'PUE',
        zoom: 9,
        lat: 18.5650943,
        lon: -98.280416
    },
    {
        edo: 'Querétaro',
        abr: 'QRO',
        zoom: 10,
        lat: 20.6387973,
        lon: -100.0024282
    },
    {
        edo: 'Quintana Roo',
        abr: 'ROO',
        zoom: 8,
        lat: 19.6372719,
        lon: -89.0197343
    },
    {
        edo: 'San Luis Potosí',
        abr: 'SLP',
        zoom: 8,
        lat: 22.3946942,
        lon: -100.3673764
    },
    {
        edo: 'Sinaloa',
        abr: 'SIN',
        zoom: 8,
        lat: 24.7261083,
        lon: -107.4790799
    },
    {
        edo: 'Sonora',
        abr: 'SON',
        zoom: 7,
        lat: 29.2076549,
        lon: -110.8251534
    },
    {
        edo: 'Tabasco',
        abr: 'TAB',
        zoom: 9,
        lat: 18.1761807,
        lon: -92.4968126
    },
    {
        edo: 'Tamaulipas',
        abr: 'TAM',
        zoom: 8,
        lat: 23.9019459,
        lon: -98.7578504
    },
    {
        edo: 'Tlaxcala',
        abr: 'TLX',
        zoom: 10,
        lat: 19.4240842,
        lon: -98.2446987
    },
    {
        edo: 'Veracruz',
        abr: 'VER',
        zoom: 8,
        lat: 18.8852716,
        lon: -96.2746579
    },
    {
        edo: 'Yucatán',
        abr: 'YUC',
        zoom: 9,
        lat: 20.5812066,
        lon: -88.9139487
    },
    {
        edo: 'Zacatecas',
        abr: 'ZAC',
        zoom: 8,
        lat: 23.3057932,
        lon: -102.895703
    }
]
