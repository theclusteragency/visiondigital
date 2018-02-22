jQuery(document).ready(function(){
    
    getUsers(handleUsers);
    
    $('#send-chat').on('click', function(){

        var current_user = parseInt( $('#id_user').html() );
        var other_user = parseInt( $('#chat-id-user').html() );
        var msg = $('#message').val();

        if( msg == '' ){
            return;
        }

        addChat(current_user, other_user, msg, function(response){

            getChat(current_user, other_user, handleGetChat);
            $('#message').val('');
        });

    });
    

});


function handleUsers(response){

    var current_user = parseInt( $('#id_user').html() );

    var idInterval = null;

    response.forEach(function(item,index){

        //No muestra al usuario logueado
        if( item.id_usuario == current_user ){
            return;
        }
        
        fullname = item.nombre + ' ' + item.apellido_paterno;
        avatar = ( item.url_avatar == '' || item.url_avatar == null ) ? 'images/no_user.png' : item.url_avatar;

        var li = ''+
        '<li class="li-user">'+
            '<img class="contacts-list-img" src="'+avatar+'" alt="User Image">'+
            '<div class="contacts-list-info">'+
                '<span class="contacts-list-name">' + fullname + '</span>'+
                '<span class="contacts-list-user-id" style="display: none;">' + item.id_usuario + '</span>'+
                '<span class="contacts-list-email">'+item.correo+'</span>'+
            '</div>'+
        '</li>';

        $('#contacts-list').append(li);

    });

    $('.li-user').on('click', function(){

        var current_user = parseInt( $('#id_user').html() );
        var contacts_list_name = $(this).find('.contacts-list-name').html();
        var contacts_list_user_id = $(this).find('.contacts-list-user-id').html();


        $('#chat-name').html( contacts_list_name );
        $('#chat-id-user').html( contacts_list_user_id );

        clearInterval(idInterval);

        idInterval = setInterval(function(){

            console.log("CU: " + current_user + " /  OU: " + contacts_list_user_id);

            getChat(parseInt(current_user), parseInt(contacts_list_user_id), handleGetChat);

        }, 2000);

        

    });

}

function handleGetChat(response){


    var current_user = parseInt( $('#id_user').html() );

    var msg = '';

    //limpiar chat
    $('#chat-msg-content').html('');

    //Si no tiene mensajes
    if(response.data == null ){

        msg = ''+
        '<div class="direct-chat-msg">'+
          '<div class="direct-chat-text" style="width:400px; height: 50px">'+
            'Sin mensajes con este usuario'+
          '</div>'+
        '</div>';
        
        $('#chat-msg-content').append(msg);
        return;

    }

    //Agrega cada mensaje
    response.data.forEach(function(item, index){

        avatar = ( item.url_avatar == '' || item.url_avatar == null ) ? 'images/no_user.png' : item.url_avatar;

        if( item.id_usuario == current_user ){

            msg = ''+
            '<!-- Message to the right -->'+
            '<div class="direct-chat-msg right">'+
              '<div class="direct-chat-info clearfix">'+
                '<span class="direct-chat-name pull-right">' + item.nombre + ' ' + item.apellido_paterno + '</span>'+
                '<span class="direct-chat-timestamp pull-left">15 Nov, 2017</span>'+
              '</div>'+
              '<img class="direct-chat-img" src="'+avatar+'" alt="' + item.nombre + '">'+
              '<div class="direct-chat-text" style="width:400px; float:right;">'+
                item.mensaje+
              '</div>'+
            '</div>'+
            '<!-- /.direct-chat-msg -->';

        } else {

            msg = ''+
            '<!-- Message. Default to the left -->'+
            '<div class="direct-chat-msg">'+
              '<div class="direct-chat-info clearfix">'+
                '<span class="direct-chat-name pull-left">' + item.nombre + ' ' + item.apellido_paterno + '</span>'+
                '<span class="direct-chat-timestamp pull-right">15 Nov, 2017</span>'+
              '</div>'+
              '<img class="direct-chat-img" src="'+avatar+'" alt="' + item.nombre + '">'+
              '<div class="direct-chat-text" style="width:400px;">'+
                item.mensaje+
              '</div>'+
            '</div>'+
            '<!-- /.direct-chat-msg -->';

        }

        $('#chat-msg-content').append(msg);

    });


}

// Obtener Chat
function getChat(usr1, usr2, callback) {

    var raw = {
        "usuario1": usr1,
        "usuario2": usr2
    }

    $.ajax({
        url: 'https://i0mqxn71n1.execute-api.us-west-2.amazonaws.com/dev/obtener_mensajes',
        headers:{"x-api-key":"R0m3FHbz7pMHbVJRDJ0N6YyxDKOCuWu8fQP2AaOc"},
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        success: function( data, textStatus, jQxhr ){
            //location.reload();
        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log('Error al obtener conversación');
        },
        complete: function(response){
            callback(response.responseJSON);
        }
    }); 

}

// Agregar mensaje al Chat
function addChat(usr1, usr2, msg, callback) {

    var raw = {
        "usuario1": usr1,
        "usuario2": usr2,
        "usuario_emisor":usr1,
        "mensaje":msg
    }

    $.ajax({
        url: 'https://i0mqxn71n1.execute-api.us-west-2.amazonaws.com/dev/agregar_mensaje',
        headers:{"x-api-key":"R0m3FHbz7pMHbVJRDJ0N6YyxDKOCuWu8fQP2AaOc"},
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify(raw),
        success: function( data, textStatus, jQxhr ){
            //location.reload();
        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log('Error al obtener conversación');
        },
        complete: function(response){
            callback(response.responseJSON);
        }
    }); 

}

//Filtrar contactos
function searchContacts() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('filter-contacts');
    filter = input.value.toUpperCase();
    ul = document.getElementById("contacts-list");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByClassName("contacts-list-name")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}