jQuery(document).ready(function(){
    
    getEvent(handleEvent);

    $('#send-msg').on('click', function(){
        addComment(handleComment);
    });

    $('.add-user').on('click', function(){

      $('#modal-add-users').modal('show');

    });

    $('#btn-add-users').on('click', function(){

        showLoader('Agregando Usuarios');

        evt = getParameterByName('evento');

        var ev_op   = $("#operator").val();
        var ev_an   = $("#analyst").val();

        var usr = ev_op.concat(ev_an);

        var usuarios  = [];
        
        console.log(usr);
        //console.log(ev_an);

        usr.forEach(function(item,index){

            tmp = { 
                id_evento : evt,
                id_usuario: item
            };
            usuarios.push(tmp);
        });

        addUser(usuarios, function(){

            closeLoader();

        });

        $('#modal-add-users').modal('hide');

    });

    var id_user = parseInt( $('#id_user').html() );

});

function handleEvent(response){
    
    console.log(response);

    cat = 'bg-programado';
    stat = 'Programado';
    icon = 'fa-hourglass';

    switch ( response.evento.id_estatus ) {
        //Programado
        case 1:
            cat = 'bg-programado';
            stat = 'Programado';
            icon = 'fa-hourglass';
            break;
        //Iniciado
        case 2:
            cat = 'bg-iniciado';
            stat = 'Iniciado';
            icon = 'fa-hourglass-half';
            break;
        //Finalizado
        case 3:
            cat = 'bg-terminado';
            stat = 'Finalizado';
            icon = 'fa-hourglass-o';
            break;
    }

    var descripcion = response.evento.descripcion;
    var categoria = response.evento.categoria;
    var status = stat;
    var direccion = response.evento.direccion;
    var latitud = parseFloat(response.evento.latitud);
    var longitud = parseFloat(response.evento.longitud);
    var analistas = response.analistas;
    var operadores = response.operadores;
    var actividades = response.actividades;
    var comentarios = response.comentarios;
    var fotos = response.fotos;
    var avatar
    
    jQuery("#title").html(descripcion);
    jQuery("#category").html(categoria);
    jQuery("#status").html(status);
    jQuery("#icon-stat").html('<i class="fa '+icon+'" style="color: #fff"></i>')
    jQuery("#icon-stat").addClass(cat);
    jQuery('#street').html(direccion);
    
    

    // --- Analistas ---
    $('#ul-analysts').html('');
    analistas.forEach(function(item, index){

        avatar = ( item.url_avatar == '' || item.url_avatar == null ) ? 'images/no_user.png' : item.url_avatar;

        li = ''+
        '<li style="position:relative;">'+
          '<img src="' + avatar + '" alt="' + item.nombre + '" style="width:80px;height:80px">'+
          '<a class="users-list-name" href="#">' + item.nombre + '</a>'+
          '<i class="fa fa-times delete-user" data-userid="'+item.id_usuaro+'" style="position:absolute;top:5px;right:20px;color:red; cursor:pointer"></i>'+
        '</li>';

        $('#ul-analysts').append(li);

    });

    // --- Operadores ---
    $('#ul-operators').html('');
    operadores.forEach(function(item, index){

        avatar = ( item.url_avatar == '' || item.url_avatar == null ) ? 'images/no_user.png' : item.url_avatar;

        li = ''+
        '<li style="position:relative;">'+
          '<img src="' + avatar + '" alt="' + item.nombre + '" style="width:80px;height:80px">'+
          '<a class="users-list-name" href="#">' + item.nombre + '</a>'+
          '<i class="fa fa-times delete-user" data-userid="'+item.id_usuaro+'" style="position:absolute;top:5px;right:20px;color:red; cursor:pointer"></i>'+
        '</li>';

        $('#ul-operators').append(li);

        if( item.encargado == 1 ){
            $('#leader').html(item.nombre);
            $('#img-leader').prop('src', avatar);
        }

    });

    $('.delete-user').on('click', function(){

        showLoader('Eliminando Usuario');

        usr = $(this).data('userid');
        evt = getParameterByName('evento');

        deleteUser(evt, usr, function(response){
            console.log(response);
            closeLoader();
        });

        $(this).parent('li').remove();

    });

    // --- Actividades ---
    $('#tb-activities').html('');
    actividades.forEach(function(item, index){

        if (item.hecha == 1) {
            stat = 'Hecha';
            clase = 'fa fa-check';
        } else {
            stat = 'Pendiente';
            clase = 'fa fa-close';
        }

        tr = '<tr>'+
          //'<td><i class="' + clase + '" aria-hidden="true"> ' + stat + ' </td>'+
          //'<td>' + item.nombre + ' ' + item.apellido_paterno + '</td>'+
          '<td>'+item.descripcion+'</td>'+
          //'<td>'+item.valor+'</td>'+
        '</tr>';

        $('#tb-activities').append(tr);

    });

    // --- Comentarios ---
    $('#div-comments').html('');
    comentarios.forEach(function(item, index){

        avatar = ( item.url_avatar == '' || item.url_avatar == null ) ? 'images/no_user.png' : item.url_avatar;
        
        if(item.nombre == null && item.fecha_comentario == null && item.descripcion == null){
            comm = '<div class="direct-chat-msg">Sin Comentarios</div>';
        }else{

            comm = '<div class="direct-chat-msg">' +
              '<div class="direct-chat-info clearfix">' +
              '<span class="direct-chat-name pull-left">' + item.nombre + ' ' + item.apellido_paterno + '</span>' +
              '<span class="direct-chat-timestamp pull-right">' + item.fecha_comentario + '</span>' +
              '</div>' +
              '<img class="direct-chat-img" src="' + avatar + '" alt="message user image">' +
              '<div class="direct-chat-text">' + item.descripcion + '</div>' +
            '</div>';

        }

        $('#div-comments').append(comm);

    });
    $('#div-comments').height('600px');
    $('#div-comments').parent().height('600px');

    // --- Fotos ---
    $('#div-photos').html('');
    $('#carousel-indicators').html('');
    i = 1;
    fotos.forEach(function(item, index){

        active = (i == 1) ? 'active' : '';
        url_foto = (item.url_foto != null) ? item.url_foto : 'images/no_image.png';
        user = (item.usuario != null) ? item.usuario : '';
        console.log(url_foto);

        photo = '<div class="carousel-item ' + active + '">'+
            '<img src="' + url_foto + '" class="img-fluid" alt="slide-' + i + '" width="300">'+
            '<div class="carousel-caption">'+
              '<h3>' + user + '</h3>'+
            '</div>'+
        '</div>';

        indicator = '<li data-target="#carousel-example-generic-captions" data-slide-to="'+(i-1)+'" class="'+active+'"></li>';

        $('#carousel-indicators').append(indicator);
        $('#div-photos').append(photo);


        i++;

    });


    // --- Dirección ---
    /*initMap();
    function initMap() {
        var dir = {lat: latitud, lng: longitud};
        var map = new google.maps.Map(document.getElementById('map-address'), {
            zoom: 15,
            center: dir
        });
        var marker = new google.maps.Marker({
          position: dir,
          map: map
        });
    }*/

}

function handleComment(response){
    console.log(response)
}


// Regresa el listado de Eventos
function getEvent(callback) {
    
    var id_evento = getParameterByName('evento');

    var raw = {
        "id_evento": id_evento
    }


    $.ajax({
        url: dbinstance+'obtener_evento_general',
        headers:{"x-api-key":apikey},
        dataType: 'json',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        error: function(err) {
            console.log('Error en ajax');
            console.log(err);
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
function addComment(callback) {
    
    var comentario = $('#message').val();
    var id_evento = getParameterByName('evento');
    var id_usuario = parseInt( $('#id_user').html() );;
    var fecha_comentario = new Date();

    var raw = {
        "comentario": comentario,
        "id_evento": id_evento,
        "id_usuario": id_usuario,
        "fecha_comentario": fecha_comentario
    }


    $.ajax({
        url: dbinstance+'agrega_comentario',
        headers:{"x-api-key":apikey},
        dataType: 'json',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        error: function(err) {
            console.log('Error en ajax');
            console.log(err);
        },
        dataType: 'json',
        success: function(response) {
            getEvent(handleEvent);
        },
        complete: function(response){
            callback(response.responseJSON.data);
        }
    });
}


var users = [];
var operators = [];
var analysts = [];

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

            //jQuery('#leader').append("<option value='"+item.id_usuario+"'>"+item.nombre+' '+item.apellido_paterno+"</option>");

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
    control_operators = $select_operators[0].selectize;

    $select_analysts = $('#analyst').selectize({
        maxItems: null,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: analysts,
        create: false
    });
    control_analysts = $select_analysts[0].selectize;

}

// Agregar Usuarios al Evento
function addUser(usuarios, callback) {
    
    var raw = {
      "general": usuarios
    }


    $.ajax({
        url: dbinstance+'agregar_varios_usuarios_a_evento',
        headers:{"x-api-key":apikey},
        dataType: 'json',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        error: function(err) {
            console.log('Error en ajax');
            console.log(err);
        },
        dataType: 'json',
        success: function(response) {
            getEvent(handleEvent);
        },
        complete: function(response){
            callback(response.responseJSON.data);
        }
    });
}

// Borrar Usuarios del Evento
function deleteUser(evento, usuario, callback) {
    
    var raw = {
      "id_evento":evento,
      "id_usuario":usuario
    }


    $.ajax({
        url: dbinstance+'eliminar_usuario_evento',
        headers:{"x-api-key":apikey},
        dataType: 'json',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        error: function(err) {
            console.log('Error en ajax');
            console.log(err);
        },
        dataType: 'json',
        success: function(response) {
            getEvent(handleEvent);
        },
        complete: function(response){
            callback(response.responseJSON.data);
        }
    });
}

/**
 * @param String name
 * @return String
 */
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
