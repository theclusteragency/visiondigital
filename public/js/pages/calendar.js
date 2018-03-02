//[calendar Javascript]

//Project:	Maximum Admin - Responsive Admin Template
//Version:	1.1.0
//Last change:	11/09/2017
//Primary use:   Used only for the event calendar

jQuery(document).ready(function(){
    
    showLoader("Cargando Eventos...")
    getEvents(handleEvents);

    jQuery('#address').on('blur', function(){

        var addr = jQuery(this).val(); 

        geocodificacion(addr, function(resp){

            console.log("Respuesta Callback:");
            console.log(resp);

            jQuery('#lat').val(resp.lat);
            jQuery('#lon').val(resp.lng);

            addMarker({lat: resp.lat, lng: resp.lng}, map);

            var pt = new google.maps.LatLng(resp.lat, resp.lng);
            map.setCenter(pt);
            map.setZoom(15);

        });

    });

    jQuery('#btn-cancel-event').on('click', function(){
        clearAddForm();
    });

});


function handleEvents(response) {
    
    response.forEach(function(item,index){

        var cat = 'bg-info';

        switch ( item.id_estatus ) {
            //Programado
            case 1:
                cat = 'bg-programado';
                break;
            //Iniciado
            case 2:
                cat = 'bg-iniciado';
                break;
            //Finalizado
            case 3:
                cat = 'bg-terminado';
                break;
        }

        tmp = {
            title:item.descripcion, 
            start:item.fecha_evento,
            end:item.fecha_evento, 
            className:cat,
            url:'evento?evento='+item.id_evento
        };
        events.push(tmp);
    });

    
    !function($) {
        "use strict";

        var CalendarApp = function() {
            this.$body = $("body")
            this.$calendar = $('#calendar'),
            this.$event = ('#external-events div.external-event'),
            this.$categoryForm = $('#add-new-events form'),
            this.$extEvents = $('#external-events'),
            this.$modal = $('#my-event'),
            this.$saveCategoryBtn = $('.save-category'),
            this.$calendarObj = null
        };
        /* on drop */
        CalendarApp.prototype.onDrop = function (eventObj, date) { 
            var $this = this;
                // retrieve the dropped element's stored Event Object
                var originalEventObject = eventObj.data('eventObject');
                var $categoryClass = eventObj.attr('data-class');
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                // assign it the date that was reported
                copiedEventObject.start = date;
                if ($categoryClass)
                    copiedEventObject['className'] = [$categoryClass];
                // render the event on the calendar
                $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    eventObj.remove();
                }
        },
        /* on click on event */
        CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
            var $this = this;
            var form = $("<form></form>");
        },
        /* on select */
        CalendarApp.prototype.onSelect = function (start, end, allDay) {
            
            var $this = this;
            $this.$modal.modal({
                backdrop: 'static'
            });
            
            var clickDate = start.format("YYYY-MM-DD");

            $("#event-date").val(clickDate);

            var form = jQuery("#frm-create");

            //initMap();

            $('#create-event').unbind().click(function () {
                console.log('Crear Evento');
                createEvent(handleCreateEvent);

                function handleCreateEvent(response) {
                    
                    console.log(response);

                    if( response.code == 1 ){

                        alert(response.message);

                    }else{

                        var tit = $("#title").val();
                        var beginning = $("#event-date").val();
                        console.log("Title: " + tit);
                        console.log("Begin: " + beginning);
                        var ending = beginning;
                        var status = $('#status').val();

                        console.log("Status: " + status);

                        var statusClass = '';

                        switch ( status ) {
                            //Programado
                            case 1:
                                statusClass = 'bg-programado';
                                break;
                            //Iniciado
                            case 2:
                                statusClass = 'bg-iniciado';
                                break;
                            //Finalizado
                            case 3:
                                statusClass = 'bg-terminado';
                                break;
                        }

                        $this.$calendarObj.fullCalendar('renderEvent', {
                            title: tit,
                            start:beginning,
                            end: beginning,
                            allDay: false,
                            className: statusClass
                        }, true);  
                        $this.$modal.modal('hide');

                        clearAddForm();

                    }

                    return false;
                }

            });
            $this.$calendarObj.fullCalendar('unselect');
        },
        CalendarApp.prototype.enableDrag = function() {
            //init events
            $(this.$event).each(function () {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true,      // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                });
            });
        }
        /* Initializing */
        CalendarApp.prototype.init = function() {
            this.enableDrag();
            /*  Initialize the calendar  */
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var form = '';
            var today = new Date($.now());

            
            var defaultEvents = events;

            var $this = this;
            $this.$calendarObj = $this.$calendar.fullCalendar({
                slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
                minTime: '08:00:00',
                maxTime: '19:00:00',  
                defaultView: 'month',
                locale: 'es',
                handleWindowResize: true,   
                 
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month'
                },
                events: defaultEvents,
                editable: true,
                droppable: false, // this allows things to be dropped onto the calendar !!!
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                drop: function(date) { $this.onDrop($(this), date); },
                select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
                eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); }

            });

            //on new event
            this.$saveCategoryBtn.on('click', function(){
                var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
                var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
                if (categoryName !== null && categoryName.length != 0) {
                    $this.$extEvents.append('<div class="dot-outline external-event text-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="fa fa-hand-o-right"></i>' + categoryName + '</div>')
                    $this.enableDrag();
                }

            });
        },

       //init CalendarApp
        $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
        
    }(window.jQuery),// End of use strict

    //initializing CalendarApp
    function($) {
        "use strict";
        $.CalendarApp.init()
        
    }(window.jQuery);// End of use strict


}

var users = [];
var operators = [];
var analysts = [];
var leaders = [];
var districts = [];
var supervisors = [];
var directors = [];
var categories;
var status = [];
var activities = [];
var events = [];

var $select_activities;
var $select_operators;
var $select_analysts;
var control_activities;
var control_operators;
var control_analysts;

getUsers(handleUsers);

function handleUsers(response){
    
    response.forEach(function(item,index){
        fullname = item.nombre + ' ' + item.apellido_paterno;

        if (item.id_rol == 2){
            tmp = {id:item.id_usuario, title:fullname};
            operators.push(tmp);

            jQuery('#leader').append("<option value='"+item.id_usuario+"'>"+item.nombre+' '+item.apellido_paterno+"</option>");

        } else if ( item.id_rol == 3 ) {
            
            tmp = {id:item.id_usuario, title:fullname};
            analysts.push(tmp);

        }

    });

    $select_operators = $('#operator').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: operators,
        create: false
    });
    //control_operators = $select_operators[0].selectize;

    $select_analysts = $('#analyst').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: analysts,
        create: false
    });
    //control_analysts = $select_analysts[0].selectize;

}

getDistricts(handleDistricts);

function handleDistricts(response) {
    
    districts = response;

    $select_districts = $('#districts').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: districts,
        create: false
    });
    control_districts = $select_districts[0].selectize;
}

getSupervisors(handleSupervisors);

function handleSupervisors(response) {

    supervisors = response;

    $select_supervisors = $('#supervisors').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: supervisors,
        create: false
    });
    control_supervisors = $select_supervisors[0].selectize;
}

getDirector(handleDirector);

function handleDirector(response) {

    directors = response;

    $select_directors = $('#directors').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: directors,
        create: false
    });
    control_directors = $select_directors[0].selectize;
}

getCategories(handleCategories);

function handleCategories(response) {
    
    categories = response;
    fillSelect('#categories', categories);

}

getActivities(handleActivities);

function handleActivities(response) {
    
    response.forEach(function(item,index){
        tmp = {id:item.id_actividad, title:item.descripcion};
        activities.push(tmp);
    });

    $select_activities = $('#activities').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: activities,
        create: false
    });

    control_activities = $select_activities[0].selectize;

}

getStatus(handleStatus);

function handleStatus(response) {
    status = response;
}

// Regresa el listado de Estatus
function getStatus(callback) {
  $.ajax({
     url: dbinstance+'obtener_estatus',
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
      callback(response.responseJSON.data);
     }
  });
}

// Regresa el listado de Eventos
function getDistricts(callback) {
  $.ajax({
     url: dbinstance+'obtener_distritos',
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
      callback(response.responseJSON.data);
     }
  });
}

// Regresa el listado de Eventos
function getSupervisors(callback) {
  $.ajax({
     url: dbinstance+'supervisores',
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
      callback(response.responseJSON.data);
     }
  });
}

// Regresa el listado de Eventos
function getDirector(callback) {
  $.ajax({
     url: dbinstance+'direccion_general',
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
      callback(response.responseJSON.data);
     }
  });
}

// Crear Evento
function createEvent(callback) {
    
    var date    =$("#event-date").val();
    
    var desc    = $("#title").val();
    var address = 'Ciudad de México'; //$("#address").val();
    var lat     = 19.3928993; //parseFloat( $("#lat").val() );
    var lon     = -99.0629697; //parseFloat( $("#lon").val() );
    var cat     = 1; //$("#categories").val();
    var stat    = $("#status").val();
    var ev_op   = ["4", "6"]; //$("#operator").val();
    var ev_an   = ["3", "5"]; //$("#analyst").val();
    var ev_act  = $("#activities").val();

    var operadores  = [];
    var analistas   = [];
    var actividades = [];


    if( desc == "" || address == "" || lat == "" || lon == "" || cat == "" || stat == "" || ev_op == "" || ev_an == "" || ev_act == "" ) {
        alert("Todos los campos son requeridos");
        return false;
    }

    var id_leader = jQuery("#leader").val();

    // Operadores
    /*ev_op.forEach(function(item,index){
        
        //si el lider esta repetido en la lista de operadores, lo omite
        if(item == id_leader){
            return;
        }

        tmp = { 
            id_operador : item,
            encargado: 0
        };
        operadores.push(tmp);
    });

    //Agrega el lider al array de operadores
    operadores.push({id_operador: id_leader, encargado: 1});*/
    operadores.push({id_operador: 4, encargado: 1});

    // Analistas
    /*ev_an.forEach(function(item,index){
        tmp = {
            id_analista : item,
            encargado: 0
        };
        analistas.push(tmp);
    });*/
    analistas.push({id_analista: 3, encargado: 0})

    ev_act.forEach(function(item,index){
        tmp = { id_actividad : item };
        actividades.push(tmp);
    });

    var raw = {
        "descripcion": desc,
        "direccion": address,
        "latitud": lat,
        "longitud": lon,
        "fecha_evento": date,
        "id_categoria": cat,
        "id_estatus": stat,
        "actividad": actividades,
        "operadores": operadores,
        "analistas":analistas
    }

    console.log("RAW");
    console.log(raw);

    
    $.ajax({
        url: dbinstance+'agregar_evento',
        headers:{"x-api-key":apikey},
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        success: function( data, textStatus, jQxhr ){
            //location.reload();
        },
        error: function( jqXhr, textStatus, errorThrown ){
            alert('Error');
        },
        complete: function(response){
            callback(response.responseJSON);
        }
    }); 

}

function fillSelect(select, items){
    items.forEach(function(item,index){
        jQuery(select).append("<option value='"+item.id_categoria+"'>"+item.descripcion+"</option>")
    });
}

function clearAddForm(){
    $("#title").val("");
    $("#address").val("");
    $("#lat").val("19.432608");
    $("#lon").val("-99.133208");
    $('#categories option[value="13"]').attr("selected", "selected");
    $('#status option[value="2"]').attr("selected", "selected");
    
    control_districts.clear();
    control_supervisors.clear();
    control_directors.clear();

    control_activities.clear();
    //control_operators.clear();
    //control_analysts.clear();
}


/*======================= Google Maps ================================*/

/*var map;
var markers = [];

function geocodificacion(address, callback){

    console.log("Geodificacion");

    url_valid = encodeURI(address);

    console.log("Direccion URL:");
    console.log(url_valid);

    $.ajax({
        url: 'https://maps.googleapis.com/maps/api/geocode/json?address='+url_valid+'&key=AIzaSyAEjp3kq9YA0EF8nGjKPcDPlYQbpeT5Ljk',
        type: 'GET',
        data: {
            format: 'json'
        },
        error: function() {

        },
        dataType: 'json',
        success: function(response) {
            lat = response.results[0].geometry.location.lat;
            lng = response.results[0].geometry.location.lng;
            
            callback( response.results[0].geometry.location );
        },
        complete: function(response){
            //callback(response.responseJSON.data);
            
        }
    });

}

function initMap() {
    
    var myLatLng = {lat: 21.645941, lng: -101.447754};

    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 4
    });

    // This event listener calls addMarker() when the map is clicked.
    google.maps.event.addListener(map, 'click', function(event) {
    
      deleteMarkers();
      addMarker(event.latLng, map);

      console.log(event.latLng.lat());
      jQuery('#lat').val( event.latLng.lat() );
      jQuery('#lon').val( event.latLng.lng() );

    });
    
}

// Adds a marker to the map.
function addMarker(location, map) {
    // Add the marker at the clicked location, and add the next-available label
    // from the array of alphabetical characters.
    var marker = new google.maps.Marker({
      position: location,
      map: map
    });

    markers.push(marker);

}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    setMapOnAll(null);
    markers = [];
}*/

function showLoader(text) {
  $("#loaderText").text(text);
  $("#modal").removeClass("hide");
}

function closeLoader() {
  $("#loaderText").text("");
  $("#modal").addClass("hide");
}