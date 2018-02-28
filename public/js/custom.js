var estados = [];
var roles = [];
var eventsRecors;
var weeklyTakenPics = [ 
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0],
  ["", 0]
];
var users;
var totalEvents = 0;
var finishedEvents = 0;
var apikey = "TKfZC1SXnKauJiYxkJMB98wyPONtFoA22IAc2qyq";
var dbinstance = "https://1e4fm5yxil.execute-api.us-west-2.amazonaws.com/digital/";

$(document).ready(function(){   
  getStates(fillStatesArray);
  getRoles(fillRolesArray);

  
  // Cancela actualizar usuario
  $("#cancelUpdateUserBtn").click(function(){
    $("#updateUserForm").addClass("hide");
    $("#usersSection").removeClass("hide");
  });


  // Cancela agregar usuario
  $("#cancelUserBtn").click(function(){
    $("#userForm").addClass("hide");
    $("#usersSection").removeClass("hide");
  });
  
  // Botón de agregar usuario
  $("#addUserBtn").click(function(){
    $("#userForm").removeClass("hide");
    $("#usersSection").addClass("hide");
  });

  // Botón de agregar categoría
  $("#addCategoryBtn").click(function(){
    $("#categoryForm").removeClass("hide");
    $(this).addClass("hide");
  });

  // Botón de agregar actividad
  $("#addActivityBtn").click(function(){
    $("#activityForm").removeClass("hide");
    $(this).addClass("hide");
  });

});

// Regresa el listado de estados
function getStates(callback) {
  $.ajax({
     url: dbinstance+'estados',
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

// Regresa el listado de eventos
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
      totalEvents = response.responseJSON.data.length;
      callback(response.responseJSON.data);
     }
  });
}

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
      callback(response.responseJSON.data);
     }
  });
}

// Regresa el listado de roles
function getRoles(callback) {
  $.ajax({
     url: dbinstance+'obtener_roles',
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

// Regresa el listado de categorías
function getCategories(callback) {
  $.ajax({
     url: dbinstance+'obtener_categorias',
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

// Regresa el listado de actividades
function getActivities(callback) {
  $.ajax({
     url: dbinstance+'obtener_actividad',
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

// Regresa las estadísticas por día
function dailyInfo(callback, date) {
  $.ajax({
    url: dbinstance+'datos_generales_por_fecha',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { 
      "fecha": date
      }),
    success: function( data, textStatus, jQxhr ){
      date = date.split('-');
      var day = date[2];
      var month = "";
      switch(date[1]) {
        case "1":
          month = "Ene";
          break;
        case "2":
          month = "Feb";
          break;
        case "3":
          month = "Mar";
          break;
        case "4":
          month = "Abr";
          break;
        case "5":
          month = "May";
          break;
        case "6":
          month = "Jun";
          break;
        case "7":
          month = "Jul";
          break;
        case "8":
          month = "Ago";
          break;
        case "9":
          month = "Sep";
          break;
        case "10":
          month = "Oct";
          break;
        case "11":
          month = "Nov";
          break;
        case "12":
          month = "Dic";
          break;
      }
      var formatDay = day +" de "+month;
      callback(data.data[0], formatDay);
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  }); 
}

function drawPicsChart() {
  var day = new Date();
  day.setDate(day.getDate() - 0);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPics, day);

  var day = new Date();
  day.setDate(day.getDate() - 1);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus1, day);

  var day = new Date();
  day.setDate(day.getDate() - 2);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus2, day);

  var day = new Date();
  day.setDate(day.getDate() - 3);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus3, day);

  var day = new Date();
  day.setDate(day.getDate() - 4);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus4, day);

  var day = new Date();
  day.setDate(day.getDate() - 5);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus5, day);

  var day = new Date();
  day.setDate(day.getDate() - 6);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus6, day);

  var day = new Date();
  day.setDate(day.getDate() - 7);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus7, day);

  var day = new Date();
  day.setDate(day.getDate() - 8);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus8, day);

  var day = new Date();
  day.setDate(day.getDate() - 9);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus9, day);

  var day = new Date();
  day.setDate(day.getDate() - 10);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus10, day);

  var day = new Date();
  day.setDate(day.getDate() - 11);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus11, day);

  var day = new Date();
  day.setDate(day.getDate() - 12);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus12, day);

  var day = new Date();
  day.setDate(day.getDate() - 13);
  day = day.getFullYear()+"-"+(day.getMonth()+1)+"-"+day.getDate();
  dailyInfo(setCurrentPicsMinus13, day);


}

// Regresa las estadísticas generales
function generalInfo(callback) {
  $.ajax({
     url: dbinstance+'datos_generales',
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

// Regresa las estadísticas generales
function generalActivityInfo(callback) {
  $.ajax({
     url: dbinstance+'reportes_general',
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

// Llena el arreglo de estados
var fillStatesArray = function (data) {
  $.each(data, function(index) {
    estados[index] = [data[index].id_estado, data[index].descripcion];
  });
  getUsers(printUsersList);
}

// LLena el arreglo de roles
var fillRolesArray = function (data) {
  $.each(data, function(index) {
    roles[index] = [data[index].id_rol, data[index].descripcion];
  });
}

var setCurrentPics = function(data, date) {
  weeklyTakenPics[13][1] = data.FOTOS;
  weeklyTakenPics[13][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus1 = function(data, date) {
  weeklyTakenPics[12][1] = data.FOTOS;
  weeklyTakenPics[12][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus2 = function(data, date) {
  weeklyTakenPics[11][1] = data.FOTOS;
  weeklyTakenPics[11][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus3 = function(data, date) {
  weeklyTakenPics[10][1] = data.FOTOS;
  weeklyTakenPics[10][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus4 = function(data, date) {
  weeklyTakenPics[9][1] = data.FOTOS;
  weeklyTakenPics[9][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus5 = function(data, date) {
  weeklyTakenPics[8][1] = data.FOTOS;
  weeklyTakenPics[8][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus6 = function(data, date) {
  weeklyTakenPics[7][1] = data.FOTOS;
  weeklyTakenPics[7][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus7 = function(data, date) {
   weeklyTakenPics[6][1] = data.FOTOS;
  weeklyTakenPics[6][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus8 = function(data, date) {
   weeklyTakenPics[5][1] = data.FOTOS;
  weeklyTakenPics[5][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus9 = function(data, date) {
   weeklyTakenPics[4][1] = data.FOTOS;
  weeklyTakenPics[4][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus10 = function(data, date) {
   weeklyTakenPics[3][1] = data.FOTOS;
  weeklyTakenPics[3][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus11 = function(data, date) {
   weeklyTakenPics[2][1] = data.FOTOS;
  weeklyTakenPics[2][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus12 = function(data, date) {
   weeklyTakenPics[1][1] = data.FOTOS;
  weeklyTakenPics[1][0] = date;
  firePicsChart();
}

var setCurrentPicsMinus13 = function(data, date) {
   weeklyTakenPics[0][1] = data.FOTOS;
  weeklyTakenPics[0][0] = date;
  firePicsChart();
}

function firePicsChart() {

  var bar_data = { // fecha, cantidad
    data : [
      [weeklyTakenPics[0][0], weeklyTakenPics[0][1] ], 
      [weeklyTakenPics[1][0], weeklyTakenPics[1][1]], 
      [weeklyTakenPics[2][0], weeklyTakenPics[2][1]], 
      [weeklyTakenPics[3][0], weeklyTakenPics[3][1]], 
      [weeklyTakenPics[4][0], weeklyTakenPics[4][1]], 
      [weeklyTakenPics[5][0], weeklyTakenPics[5][1]], 
      [weeklyTakenPics[6][0], weeklyTakenPics[6][1]],
      [weeklyTakenPics[7][0], weeklyTakenPics[7][1]], 
      [weeklyTakenPics[8][0], weeklyTakenPics[8][1]], 
      [weeklyTakenPics[9][0], weeklyTakenPics[9][1]], 
      [weeklyTakenPics[10][0], weeklyTakenPics[10][1]], 
      [weeklyTakenPics[11][0], weeklyTakenPics[11][1]], 
      [weeklyTakenPics[12][0], weeklyTakenPics[12][1]], 
      [weeklyTakenPics[13][0], weeklyTakenPics[13][1]]
    ],
    color: '#7460EE', borderWidth:'0.1'
  }

  $.plot('#takenPicsChart', [bar_data], {
    grid  : {
      borderWidth: 1,
      borderColor: '#f3f3f3',
      tickColor  : '#f3f3f3'
    },
    series: {
      bars: {
        show    : true,
        barWidth: 0.4,
    lineWidth: 0,
    fillColor: '#49c2c7',
        align   : 'center',
      }
    },
    xaxis : {
      color: "#ffffff",
      mode      : 'categories',
      tickLength: 0
    }
  });

}

var setOperationPies = function(data) {
  var admins = data[0].ADMIN;
  var analistas = data[0].ANALISTAS;
  var operadores = data[0].OPERADORES;

  var programados = data[0].EVENTOS_PROGRAMADOS;
  var iniciados = data[0].EVENTOS_INICIADOS;
  var finalizados = data[0].EVENTOS_FINALIZADOS;
  Highcharts.chart('graph2', {
      chart: {
          type: 'pie',
          options3d: {
              enabled: true,
              alpha: 45,
              beta: 0
          }
      },
      title: {
          text: 'Porcentaje de usuarios por rol'
      },
      credits: {
        enabled: false
      },
      tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
      },
      plotOptions: {
          pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              depth: 35,
              dataLabels: {
                  enabled: true,
                  format: '{point.name}'
              }
          }
      },
      series: [{
          type: 'pie',
          name: 'Porcentaje',
          colors: ["#800000", "#D2691E", "#DAA520"],
          data: [
              {
                  name: 'Administradores',
                  y: admins,
                  sliced: true,
                  selected: true
              },
              ['Operadores', operadores],
              ['Analistas', analistas]
          ]
      }]
  });



    Highcharts.chart('graph3', {
      chart: {
          type: 'pie',
          options3d: {
              enabled: true,
              alpha: 45
          }
      },
      title: {
          text: 'Status de eventos'
      },
      credits: {
        enabled: false
      },
      
      plotOptions: {
          pie: {
              innerSize: 100,
              depth: 45
          }
      },
      series: [{
          name: 'No. de Eventos',
          colors: ["#3bc45b", "#0291d9", "#eb2121"],
          data: [
              ['Programados', programados],
              ['Iniciados', iniciados],
              ['Finalizados', finalizados]
          ]
      }]
  });
}



var setReportTotals = function(data) {
  var admins = data[0].ADMIN;
  var analistas = data[0].ANALISTAS;
  var operadores = data[0].OPERADORES;

  var programados = data[0].EVENTOS_PROGRAMADOS;
  var iniciados = data[0].EVENTOS_INICIADOS;
  var finalizados = data[0].EVENTOS_FINALIZADOS;
  var totalEventos = programados + iniciados + finalizados;

  $("#totalAdmins").text(admins);
  $("#totalOperadores").text(operadores);
  $("#totalAnalistas").text(analistas);
  $("#totalEventos").text(totalEventos);

  var donut = new Morris.Donut({
    element: 'eventsStatusChart',
    resize: true,
    colors: ["#0291d9", "#3bc45b", "#eb2121"],
    data: [
      {label: "Iniciados", value: iniciados},
      {label: "Programados", value: programados},
      {label: "Finalizados", value: finalizados}
    ],
    hideHover: 'auto'
  });


  var donutData = [
    { label: 'Administradores', data: admins, color: '#0e4f9e' },
    { label: 'Operadores', data: operadores, color: '#009fe3' },
    { label: 'Analistas', data: analistas, color: '#ff6b00' }
  ];

  $.plot('#registeredUsersChart', donutData, {
    series: {
      pie: {
        show       : true,
        radius     : 1,
        innerRadius: 0.7,
        label      : {
        show       : true,
        radius     : 1,
        formatter  : usersLabelFormatter,
        threshold  : 0.01,
      background : {opacity: 0.5,color: '#000'}
          }
        }
      },
      legend: {
        show: true
      },
  grid: {
      hoverable: true,
      clickable: true
    }
  });
  closeLoader();
}


// Grafica total de niños
var setActivitiesReport = function(data) {
  
  console.log('Reporte Actividades: ');
  console.log(data);

  /*var admins = data[0].ADMIN;
  var analistas = data[0].ANALISTAS;
  var operadores = data[0].OPERADORES;

  var programados = data[0].EVENTOS_PROGRAMADOS;
  var iniciados = data[0].EVENTOS_INICIADOS;
  var finalizados = data[0].EVENTOS_FINALIZADOS;
  var totalEventos = programados + iniciados + finalizados;

  $("#totalAdmins").text(admins);
  $("#totalOperadores").text(operadores);
  $("#totalAnalistas").text(analistas);
  $("#totalEventos").text(totalEventos);*/

  var totalNinos = data.total_ninos;
  var totalNinas = data.total_ninas;
  var discapacidadSi = data.alumnos_con_discapacidad.si;
  var discapacidadNo = data.alumnos_con_discapacidad.no;

  var donutNinos = new Morris.Donut({
    element: 'totalChildrenChart',
    resize: true,
    colors: ["#5DADE2", "#DD969C"],
    data: [
      {label: "Niños", value: totalNinos},
      {label: "Niñas", value: totalNinas}
    ],
    hideHover: 'auto'
  });

  var donutDiscapacidad = new Morris.Donut({
    element: 'specialChildrenChart',
    resize: true,
    colors: ["#58D68D", "#E81746"],
    data: [
      {label: "Si", value: discapacidadSi},
      {label: "N0", value: discapacidadNo}
    ],
    hideHover: 'auto'
  });


  /*var donutData = [
    { label: 'Administradores', data: 5, color: '#0e4f9e' },
    { label: 'Operadores', data: operadores, color: '#009fe3' },
    { label: 'Analistas', data: analistas, color: '#ff6b00' }
  ];

  $.plot('#registeredUsersChart', donutData, {
    series: {
      pie: {
        show       : true,
        radius     : 1,
        innerRadius: 0.7,
        label      : {
        show       : true,
        radius     : 1,
        formatter  : usersLabelFormatter,
        threshold  : 0.01,
      background : {opacity: 0.5,color: '#000'}
          }
        }
      },
      legend: {
        show: true
      },
  grid: {
      hoverable: true,
      clickable: true
    }
  });*/
  closeLoader();
}




function usersLabelFormatter(label, series) {
  return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
    + label
    + '<br>'
    + Math.round(series.percent) + '%</div>'
}

var printUsersList = function (data) {
  users = data;
  setTotalsUsers(data);
  // Armar arreglo de estados
  fillStatesCombo();
  fillRolesCombo();
  var statusLabel ="";
  var statusChecked = "";
  var checkTooltip = "";
  

  $.each(data, function(index, user) {
    var rol = "";
    if(user.id_rol==1) {
      rol = "ADMIN";
    }
    else {
      if(user.id_rol==2) {
        rol = "OPERADOR";
      }
      else {
        if(user.id_rol==3) {
          rol = "ANALISTA";
        }
      }
    }
    if(user.es_activo) {
      statusLabel = '<span class="label bg-olive">Activo</span>';
      statusChecked ="";
      checkTooltip = 'data-toggle="tooltip" data-original-title="Suspender usuario"';
    }
    else {
      statusLabel = '<span class="label bg-maroon">Inactivo</span>';
      statusChecked = "checked";
      checkTooltip = 'data-toggle="tooltip" data-original-title="Habilitar usuario"';
    }
    var currentState = estados[user.id_estado-1];
    var newRow = 
    '<tr>' + 
      '<td>'+user.nombre+' '+user.apellido_paterno+' '+user.apellido_materno+'</td>' + 
      '<td>'+user.correo+'</td>' +
      '<td class="text-center">'+statusLabel+'</td>' +
      '<td>'+user.telefono+'</td>' + 
      '<td>'+currentState[1]+'</td>' + 
      '<td>'+user.edad+' años</td>' + 
      '<td>'+user.nick+'</td>' + 
      '<td>'+rol+'</td>' + 
      '<td>'+user.descripcion_rol+'</td>' + 
      '<td class="text-center">' + 
      '<button data-toggle="tooltip" data-original-title="Editar" onclick="editUser('+user.id_usuario+')" class="btn btn-xs btn-success user-action-btn margin-r5"><i class="fa fa-edit"></i></button> ' + 
      '<input type="checkbox" data-userid="'+user.id_usuario+'" id="suspender'+user.id_usuario+'" class="filled-in suspend-user" '+statusChecked+' /><label '+checkTooltip+' class="d-inline suspend-lbl" for="suspender'+user.id_usuario+'"></label>'+
      '</td>' + 
    '</tr>'; 
    $("#usersList tbody").append(newRow);
  });

  $('#usersList').DataTable({
    "processing": "Procesando petición...",
    "paging":   true,
    "ordering": true,
    "info":     true,
    "order": [[ 0, "asc" ]],
    "language": {
      "search":     "Buscar:",
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "La búsqueda no ha tenido resultados...",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros en el sistema...",
      "infoFiltered": "(Filtrado de _MAX_ registros)",
      "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
      }
    }
  });
  closeLoader();
  $('[data-toggle="tooltip"]').tooltip();
  $('.suspend-user').change(function() {
    var userId = $(this).data("userid");
    toggleSuspendUser(userId);
  });
}


var printCategoriesList = function(data) {
  setTotalCategories(data.length);
  $.each(data, function(index){
    var newRow = 
      '<tr> '  + 
        '<td>'+data[index].descripcion+'</td>' + 
        '<td> ' + 
          '<button onclick="deleteCategory('+data[index].id_categoria+')" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Eliminar</button>' + 
        '</td>' + 
      '</tr>'; 
    
    $("#categoriesList tbody").append(newRow);
  });
  $('#categoriesList').DataTable({
    "processing": "Procesando petición...",
    "paging":   true,
    "ordering": true,
    "info":     true,
    "order": [[ 0, "asc" ]],
    "language": {
      "search":     "Buscar:",
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "La búsqueda no ha tenido resultados...",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros en el sistema...",
      "infoFiltered": "(Filtrado de _MAX_ registros)",
      "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
      }
    }
  });
  closeLoader();
}

var printActivitiesList = function(data) {
  setTotalActivities(data.length);
  $.each(data, function(index){
    var newRow = 
      '<tr> '  + 
        '<td>'+data[index].descripcion+'</td>' + 
        '<td> ' + 
          '<button onclick="deleteActivity('+data[index].id_actividad+')" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Eliminar</button>' + 
        '</td>' + 
      '</tr>'; 
    
    $("#activitiesList tbody").append(newRow);
  });
  $('#activitiesList').DataTable({
    "processing": "Procesando petición...",
    "paging":   true,
    "ordering": true,
    "info":     true,
    "order": [[ 0, "asc" ]],
    "language": {
      "search":     "Buscar:",
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "La búsqueda no ha tenido resultados...",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros en el sistema...",
      "infoFiltered": "(Filtrado de _MAX_ registros)",
      "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
      }
    }
  });
  closeLoader();
}

function setTotalsUsers(data) {
  var totalAdmins = 0;
  var totalOperadores = 0;
  var totalAnalistas = 0;
  for(var i=0; i<data.length; i++) {
    var currentRole = data[i].id_rol;
    switch(currentRole) {
      case 1:
        totalAdmins++;
        break;
      case 2:
        totalOperadores++;
        break;
      case 3:
        totalAnalistas++;
        break;
      default: 
        break;
    }
  }
  $("#totalAdministradores").text(totalAdmins);
  $("#totalOperadores").text(totalOperadores);
  $("#totalAnalistas").text(totalAnalistas);
}

function setTotalCategories(total) {
  $("#totalCategories").text(total);
}

function setTotalActivities(total) {
  $("#totalActivities").text(total);
}

function login() {
  var email = $("#userEmail").val();
  var pass = $("#userPassword").val();
  if(email=="rafagana@gmail.com" && pass=="rafa321") {
    window.location.href = 'mapa.html';
  }
  else {
    modalEmptyFields("Error", "Credenciales Incorrectas.")
  }
}

function updateUser() {
  showLoader("Actualizando...");
  var name = $("#editUserName").val();
  var lastName = $("#editUserLastName").val();
  var sLastName = $("#editUserSLastName").val();
  var email = $("#editUserEmail").val();
  var telephone = $("#editUserTelephone").val();
  var state = $("#editState").val();
  var age = $("#editUserAge").val();
  var nickname = $("#editUserNickname").val();
  var idRol = $("#editUserRol").val();
  var status = $("#editUserStatus").val();
  var urlAvatar = $("#editUserPhoto").val();
  var description = $("#editUserDescription").val();
  var token = null;
  if( name == "" || lastName == "" || sLastName == "" || email == "" || telephone =="" || age == "" || nickname == "" || description == "" ) {
    modalEmptyFields("Cuidado", "Verifica que todos los campos estén llenos y que las contraseñas coincidan.");
    return false;u
  }
  $.ajax({
    url: dbinstance+'actualiza_usuario',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { 
      "nombre": name,
      "apellido_paterno": lastName,
      "apellido_materno": sLastName,
      "correo": email,
      "edad": age,
      "nick": nickname,
      "id_rol": idRol,
      "id_estado": state,
      "telefono": telephone,
      "url_avatar": urlAvatar,
      "token":"234n23kj4njbjk23b",
      "descripcion_rol": description,
      "es_activo": status,
      "latitud": null,
      "longitud": null
      }),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  }); 
}

function createUser() {
  var name = $("#userName").val();
  var lastName = $("#userLastName").val();
  var sLastName = $("#userSLastName").val();
  var email = $("#userEmail").val();
  var telephone = $("#userTelephone").val();
  var state = $("#state").val();
  var age = $("#userAge").val();
  var nickname = $("#userNickname").val();
  var password = $("#userPassword").val();
  var confirmPassword = $("#userConfirmPassword").val();
  var idRol = $("#userRol").val();
  var description = $("#userDescription").val();
  var urlAvatar = "";
  var token = null;
  if( name == "" || lastName == "" || sLastName == "" || description == "" || email == "" || telephone =="" || age == "" || nickname == "" || password == "" || password!=confirmPassword ) {
    modalEmptyFields("Cuidado", "Verifica que todos los campos estén llenos y que las contraseñas coincida.");
    return false;
  }
  showLoader("Agregando usuario...");
  $.ajax({
    url: dbinstance+'crear_usuario',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { 
      "nombre": name,
      "apellido_paterno": lastName,
      "apellido_materno": sLastName,
      "correo": email,
      "telefono": telephone,
      "id_estado": state,
      "edad": age,
      "nick": nickname,
      "password": password,
      "id_rol": idRol,
      "url_avatar": urlAvatar,
      "token":"abctoken",
      "descripcion_rol": description,
      "latitud": null,
      "longitud": null

      }),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  }); 
}

function createCategory() {
  var category = $("#categoryField").val();
  if(category == "") {

    modalEmptyFields("Error", "Ingresa una categoría.");
    return false;
  }
  showLoader("Agregando categoría...");
  $.ajax({
    url: dbinstance+'agrega_categoria',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { "categoria": category } ),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  });
}

function createActivity() {
  var activity = $("#activityField").val();
  if(activity == "") {
    modalEmptyFields("Error", "Ingresa una actividad.");
    return false;
  }
  showLoader("Agregando actividad...");
  $.ajax({
    url: dbinstance+'agregar_actividad',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { "actividad": activity } ),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  });
}

function fillStatesCombo() {
  for(var i=0; i<=estados.length-1; i++) {
    $("#state").append("<option value="+estados[i][0]+">"+estados[i][1]+"</option>");
  }
}

function fillRolesCombo() {
  for(var i=0; i<=roles.length-1; i++) {
    $("#userRol").append("<option value="+roles[i][0]+">"+roles[i][1]+"</option>");
  }
}

function deleteCategory(categoryId) {
  showLoader("Eliminando...");
  $.ajax({
    url: dbinstance+'elimina_categoria',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { "id": categoryId } ),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){

    }
  });
}

function deleteActivity(activityId) {
  showLoader("Eliminando...");
  $.ajax({
    url: dbinstance+'eliminar_actividad',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { "id": activityId } ),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  });
}

function toggleSuspendUser(userId) {
  showLoader("Procesando...");
  var userToUpdate = [];
  for(var i=0; i<users.length; i++) {
    if( userId==users[i].id_usuario ) {
      userToUpdate = users[i];
    }
  }
  var isActive = userToUpdate.es_activo;
  if(isActive) {
    isActive = 0;
  }
  else {
    isActive = 1;
  }
  $.ajax({
    url: dbinstance+'actualiza_usuario',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
     data: JSON.stringify( { 
      "nombre": userToUpdate.nombre,
      "apellido_paterno": userToUpdate.apellido_paterno,
      "apellido_materno": userToUpdate.apellido_materno,
      "correo": userToUpdate.correo,
      "edad": userToUpdate.edad,
       "nick": userToUpdate.nick,
       "id_rol": userToUpdate.id_rol,
       "id_estado": userToUpdate.id_estado,
      "telefono": userToUpdate.telefono,
      "url_avatar": userToUpdate.url_avatar,
      "token":"abctoken",
      "descripcion_rol": userToUpdate.descripcion_rol,
      "es_activo": isActive,
      "latitud": "982384",
      "longitud": "93459"
      }),
    success: function( data, textStatus, jQxhr ){
        location.reload();
    },
    error: function( jqXhr, textStatus, errorThrown ){
        
    }
  }); 
}

function editUser(userId) {

  // Motrar formulario de edición
  $("#updateUserForm").removeClass("hide");
  $("#usersSection").addClass("hide");

  var userToEdit = [];
  for(var i=0; i<users.length; i++) {
    if( userId==users[i].id_usuario ) {
      userToEdit = users[i];
    }
  }
  
  // Cargar información de usuario en el formulario de edición con los datos de userToEdit
  $("#editUserName").val( userToEdit.nombre );
  $("#editUserLastName").val( userToEdit.apellido_paterno );
  $("#editUserSLastName").val( userToEdit.apellido_materno );
  $("#editUserEmail").val( userToEdit.correo );
  $("#editUserTelephone").val( userToEdit.telefono );
  $("#editUserAge").val( userToEdit.edad );
  $("#editUserPhoto").val( userToEdit.url_avatar );
  $("#editUserNickname").val( userToEdit.nick );
  $("#editUserStatus").val(userToEdit.es_activo);
  $("#editUserDescription").val( userToEdit.descripcion_rol );

  // LLenar el select de estados con el estado seleccionado
  for(var i=0; i<estados.length; i++) {
    if( userToEdit.id_estado == estados[i][0] ) {
      $("#editState").append("<option selected value='"+estados[i][0]+"'>"+estados[i][1]+"</option>");
    }
    else {
      $("#editState").append("<option value='"+estados[i][0]+"'>"+estados[i][1]+"</option>");  
    }
  }

  // Llenar el select de roles
  for(var i=0; i<roles.length; i++) {
    if( userToEdit.id_rol == roles[i][0] ) {
      $("#editUserRol").append("<option value='"+roles[i][0]+"' selected>"+roles[i][1]+"</option>");
    }
    else {
      $("#editUserRol").append("<option value='"+roles[i][0]+"'>"+roles[i][1]+"</option>");
    }
  }
}

var activityRecords = function (data) {
  for(var i=0; i<data.length; i++) {
    var descripcion = data[i].descripcion;
    var newRow = "<tr>"+
        "<td>"+descripcion+"</td>"+
    "</tr>";
    $("#activityRecords tbody").append( newRow );
  }
}

var categoryRecords = function(data) {
  for(var i=0; i<data.length; i++) {
    var status = data[i].es_activo;
    var descripcion = data[i].descripcion;
    var newRow = "<tr>"+
        "<td>"+descripcion+"</td>"+
    "</tr>";
    if(status) {
      $("#categoryRecords tbody").append( newRow );    
    }
  }
  
}

var printRecords = function(data) {
  for(var i=0; i<data.length; i++) {
    var currentState = estados[data[i].id_estado-1];
    var currentRol = data[i].rol;
    var status = data[i].es_activo;
    if(status) {
      status = '<span class="label bg-olive">Activo</span>';
    }
    else {
      status = '<span class="label bg-maroon">Inactivo</span>';
    }
    switch(currentRol) {
      case "ADMIN":
        var newRow = "<tr>"+
          "<td>"+data[i].nombre+" "+data[i].apellido_paterno+" "+data[i].apellido_materno+"</td>"+
          "<td>"+data[i].correo+"</td>"+
          "<td>"+data[i].telefono+"</td>"+
          "<td>"+currentState[1]+"</td>"+
          "<td>"+data[i].edad+"</td>"+
        "</tr>";
        $("#adminRecords tbody").append( newRow );
        break;
      case "OPERADOR":
        var newRow = "<tr>"+
          "<td>"+data[i].nombre+" "+data[i].apellido_paterno+" "+data[i].apellido_materno+"</td>"+
          "<td>"+data[i].correo+"</td>"+
          "<td class='text-center'>"+status+"</td>"+
          "<td>"+data[i].telefono+"</td>"+
          "<td>"+currentState[1]+"</td>"+
          "<td>"+data[i].edad+"</td>"+
        "</tr>";
        $("#operadorRecords tbody").append( newRow );
        break;
      case "ANALISTA":
        var newRow = "<tr>"+
          "<td>"+data[i].nombre+" "+data[i].apellido_paterno+" "+data[i].apellido_materno+"</td>"+
          "<td>"+data[i].correo+"</td>"+
          "<td class='text-center'>"+status+"</td>"+
          "<td>"+data[i].telefono+"</td>"+
          "<td>"+currentState[1]+"</td>"+
          "<td>"+data[i].edad+"</td>"+
        "</tr>";
        $("#analistaRecords tbody").append( newRow );
        break;
      default:
        break;
    }
  }
}

function showLoader(text) {
  $("#loaderText").text(text);
  $("#modal").removeClass("hide");
}

function closeLoader() {
  $("#loaderText").text("");
  $("#modal").addClass("hide");
}

function modalEmptyFields(caption, text) {
  $('#emptyFieldsCaption').text(caption);
  $('#emptyFieldsText').text(text);
  $('#modalEmptyFields').modal();
}

function dataTableRecords() {
  $('.records').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      { extend: 'excel', text: 'Exportar a excel' },
      { extend: 'pdf', text: 'Generar pdf' },
      { extend: 'print', text: 'Imprimir' }
    ],
    "order": [[ 0, "asc" ]],
    "language": {
      "search":     "Buscar:",
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "La búsqueda no ha tenido resultados...",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros en el sistema...",
      "infoFiltered": "(Filtrado de _MAX_ registros)",
      "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
      }
    }
  });
  eventsRecors = $('.events-table').DataTable( {
    dom: 'Bfrtip',
    buttons: [
      { extend: 'excel', text: 'Exportar a excel' },
      { extend: 'pdf', text: 'Generar pdf' },
      { extend: 'print', text: 'Imprimir' }
    ],
    "order": [[ 7, "desc" ]],
    "language": {
      "search":     "Buscar:",
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "La búsqueda no ha tenido resultados...",
      "info": "Página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros en el sistema...",
      "infoFiltered": "(Filtrado de _MAX_ registros)",
      "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
      }
    }
  });
}

var eventRecords = function(data) { // 51
  // Llamar al detalle de cada evento
  for(var i=0; i<data.length; i++) {
    getSingleEvent(data[i].id_evento);
  }
  setTimeout(function(){ dataTableRecords(); closeLoader(); }, 3000);
}

function getSingleEvent(eventId) {

  $.ajax({
    url: dbinstance+'obtener_evento_general',
    headers:{"x-api-key":apikey},
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify( { "id_evento": eventId } ),
    success: function( data, textStatus, jQxhr ){
      printEventRow(data);
    },
    error: function( jqXhr, textStatus, errorThrown ){

    }
  });
}

var printEventRow = function(data) {
  var eventoId = data.data.evento.id_evento;
  var categoria = data.data.evento.categoria;
  var descripcion = data.data.evento.descripcion; 
  var direccion = data.data.evento.direccion;
  var estatus = data.data.evento.estatus;
  switch(estatus) {
    case "Programado":
      estatus = '<span class="label" style="background-color: #3bc45b;">Programado</span>';
      break;
    case "Iniciado":
      estatus = '<span class="label" style="background-color: #0291d9;">Iniciado</span>';
      break;
    case "Finalizado":
      estatus = '<span class="label" style="background-color: #eb2121;">Finalizado</span>';
      break;
    default:
      break;
  }
  var fecha = data.data.evento.fecha_evento;
  fecha = new Date(fecha);
  var fechaRow = fecha.getDate()+"-"+fecha.getMonth()+"-"+fecha.getFullYear();
  var fechaOrdenamiento = fecha.getFullYear()+"-"+fecha.getMonth()+"-"+fecha.getDate();
  var analistas = "";
  var arrAnalistas = data.data.analistas;
  var operadores = "";
  var arrOperadores = data.data.operadores;
  var encargado = "";
  for(var i=0; i<arrAnalistas.length; i++) {
    analistas += arrAnalistas[i].nombre+"<br>";
  }
  for(var i=0; i<arrOperadores.length; i++) {
    operadores += arrOperadores[i].nombre+"<br>";
    if(arrOperadores[i].encargado) {
      encargado = arrOperadores[i].nombre;
    }
  }
  var newRow = "<tr>"+
    "<td><a class='table-link' href='evento?evento="+eventoId+"'>"+descripcion+"</a></td>"+
    "<td>"+categoria+"</td>"+
    "<td>"+encargado+"</td>"+
    "<td>"+operadores+"</td>"+
    "<td>"+analistas+"</td>"+
    "<td>"+direccion+"</td>"+
    "<td>"+fechaRow+"</td>"+
    "<th class='hide'>"+fechaOrdenamiento+"</th>"+
    "<td class='text-center'>"+estatus+"</td>"+
  "</tr>";
  $("#eventRecords").append( newRow );
}

function setOperationGraphs() {

  Highcharts.setOptions({
    lang: {
      downloadPNG: "Descargar PNG",
      downloadJPEG: "Descargar JPG",
      downloadPDF: "Generar PDF",
      downloadSVG: "Descargar SVG",
      printChart: "Imprimir"
    }
  });

    var chart = new Highcharts.Chart({
      chart: {
          renderTo: 'graph1',
          type: 'column',
          options3d: {
              enabled: true,
              alpha: 10,
              beta: -8,
              depth: 48,
              viewDistance: 25
          }
      },
      credits: {
        enabled: false
      },
      title: {
          text: 'Fotografías Capturadas'
      },
       yAxis: {
          min: 0,
          title: {
              text: 'Fotografías'
          }
      },
      subtitle: {
          text: 'FOM'
      },
      plotOptions: {
          column: {
              depth: 25
          }
      },
      xAxis: {
          categories: [
            weeklyTakenPics[0][0],
            weeklyTakenPics[1][0],
            weeklyTakenPics[2][0],
            weeklyTakenPics[3][0],
            weeklyTakenPics[4][0],
            weeklyTakenPics[5][0],
            weeklyTakenPics[6][0],
            weeklyTakenPics[7][0],
            weeklyTakenPics[8][0],
            weeklyTakenPics[9][0],
            weeklyTakenPics[10][0],
            weeklyTakenPics[11][0],
            weeklyTakenPics[12][0],
            weeklyTakenPics[13][0] 
          ],
          crosshair: true
      },
      series: [{
          name: 'Cantidad',
          data: [
            weeklyTakenPics[0][1],
            weeklyTakenPics[1][1],
            weeklyTakenPics[2][1],
            weeklyTakenPics[3][1],
            weeklyTakenPics[4][1],
            weeklyTakenPics[5][1],
            weeklyTakenPics[6][1],
            weeklyTakenPics[7][1],
            weeklyTakenPics[8][1],
            weeklyTakenPics[9][1],
            weeklyTakenPics[10][1],
            weeklyTakenPics[11][1],
            weeklyTakenPics[12][1],
            weeklyTakenPics[13][1]
          ]
      }]
  });

    

}