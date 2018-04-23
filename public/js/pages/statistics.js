
var boyColor = 'rgba(54, 162, 235, 0.2)';
var boyColorBorder = 'rgba(54, 162, 235, 1)';
var girlColor = 'rgba(255, 99, 132, 0.2)';
var girlColorBorder = 'rgba(255,99,132,1)';

var blue1 = '#b0cce1';
var blue2 = '#95bbd7';
var blue3 = '#679dc6';
var blue4 = '#3980b5';
var blue5 = '#0b62a4';
var blue6 = '#095791';

var pink1 = '#ffe6e6';
var pink2 = '#ffcccc';
var pink3 = '#ffb3b3';
var pink4 = '#ff9999';
var pink5 = '#ff8080';
var pink6 = '#ff6666';

// Existencias VS Promovidos Niños
var manExist1 = rnd(100, 120);
var manExist2 = rnd(100, 120);
var manExist3 = rnd(100, 120);
var manExist4 = rnd(90, 110);
var manExist5 = rnd(90, 110);
var manExist6 = rnd(80, 100);

// Existencias VS Promovidos Niñas
var womanExist1 = rnd(100, 120);
var womanExist2 = rnd(100, 120);
var womanExist3 = rnd(100, 120);
var womanExist4 = rnd(90, 110);
var womanExist5 = rnd(90, 110);
var womanExist6 = rnd(80, 100);

var cctoptions = [];

jQuery(document).ready(function(){

  showLoader("Generando estadísticas...");

  jQuery.getJSON("/js/cct15.json", function(json) {
    //console.log(json);
    cct15 = json;
    cct15.forEach(function(item,index){
      //console.log(item.clavecct);
      tmp = {id:item.clavecct, title:item.clavecct};
      cctoptions.push(tmp);
    });
    $select_cct = $('#select-cct').selectize({
        maxItems: 1,
        valueField: 'id',
        labelField: 'title',
        searchField: 'title',
        options: cctoptions,
        create: false
    });
    control_cct = $select_cct[0].selectize;
  });

  jQuery('#select-cct').on('change', function(){
    
    fTotalExistence();
    fTotalGroup();
    fSpecialKids();
    fTotalGender();
    fManExistencePromoted();
    fWomanExistencePromoted();

    fTotalMigration();
    fTotalMigrationCountry();

    fManAgeGroup();
    fWomanAgeGroup();
  
  });

});

/* =============================================================
============== I. EXISTENCIA Y PROMOVIDOS ======================
================================================================ */

function fTotalExistence(){

  // Existencias totales de niños y niñas
  var totalExistence = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(totalExistence, {
      type: 'bar',
      data: {
        labels: ["1o", "2o", "3o", "4o", "5o", "6o"],
        datasets: [
          {
            label: 'niños',
            data: [rnd(90, 120), rnd(90, 120), rnd(90, 110), rnd(90, 100), rnd(80, 90), rnd(70, 80)],
            backgroundColor: [
              boyColor, boyColor, boyColor, boyColor, boyColor, boyColor
            ],borderColor: [
              boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder
            ],
            borderWidth: 1
          },
          {
            label: 'niñas',
            data: [rnd(90, 120), rnd(90, 120), rnd(90, 110), rnd(90, 100), rnd(80, 90), rnd(70, 80)],
            backgroundColor: [
              girlColor,girlColor,girlColor,girlColor,girlColor,girlColor
            ],borderColor: [
              girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
                beginAtZero:true
            }
          }]
        }
      }
  });
}

  
function fTotalGroup() {

  // Grupos totales por grado
  //#b0cce1 - #95bbd7 - #679dc6 - #3980b5 - #0b62a4 - #095791
  var totalGroup = document.getElementById("myChart2").getContext('2d');
  var myPieChart = new Chart(totalGroup,{
      type: 'pie',
      data: {
        labels: ['1o', '2o', '3o', '4o', '5o', '6o'],
        datasets: [{
          label: "Total de grupos por grado",
          backgroundColor: [blue1, blue2, blue3, blue4, blue5, blue6],
          data: [rnd(3, 6), rnd(3, 6), rnd(3, 6), rnd(2, 5), rnd(2, 5), rnd(3, 4)] 
        }]
      },
      options: {
        title: {
          display: false,
          text: 'Total de grupos por grado'
        }
      }
  });
}
  

function fSpecialKids() {

  /*labels: ['Leng. Indi', 'Extran', 'Discapac.', 'DSC', 'DSCom', 'DSA', 'TDAH', 'Sobresali.', 'Otras condic.'],*/
  //#b0cce1 - #95bbd7 - #679dc6 - #3980b5 - #0b62a4 - #095791
  var totalSpecialKids = document.getElementById("special-kids").getContext('2d');
  var myChart = new Chart(totalSpecialKids, {
      type: 'bar',
      data: {
        labels: ['Leng. Indi', 'Extran', 'Discapac.', 'DSC', 'DSCom', 'DSA', 'TDAH', 'Sobresali.', 'Otras condic.'],
        datasets: [
          {
            label: '1o',
            data: [rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 3), rnd(1, 3), rnd(1, 5), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue1,blue1,blue1,blue1,blue1,blue1,blue1,blue1,blue1]
          },
          {
            label: '2o',
            data: [rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 3), rnd(1, 3), rnd(1, 5), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue2,blue2,blue2,blue2,blue2,blue2,blue2,blue2,blue2]
          },
          {
            label: '3o',
            data: [rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 3), rnd(1, 3), rnd(1, 5), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue3,blue3,blue3,blue3,blue3,blue3,blue3,blue3,blue3]
          },
          {
            label: '4o',
            data: [rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 3), rnd(1, 3), rnd(1, 5), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue4,blue4,blue4,blue4,blue4,blue4,blue4,blue4,blue4]
          },
          {
            label: '5o',
            data: [rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 3), rnd(1, 3), rnd(1, 5), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue5,blue5,blue5,blue5,blue5,blue5,blue5,blue5,blue5]
          },
          {
            label: '6o',
            data: [rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 5), rnd(1, 3), rnd(1, 3), rnd(1, 5), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue6,blue6,blue6,blue6,blue6,blue6,blue6,blue6,blue6]
          }
        ]
      },
      options: {
        scales:{
          xAxes: [{
            stacked: true
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }
  });
}

function fTotalGender() {
  // Total por Genero
  var totalGender = document.getElementById("total-gender").getContext('2d');
  var myPieChart = new Chart(totalGender,{
      type: 'pie',
      data: {
        labels: ['Niños', 'Niñas'],
        datasets: [{
          label: "Total de grupos por grado",
          backgroundColor: [boyColor, girlColor],
          data: [rnd(250, 350), rnd(250, 300)] 
        }]
      },
      options: {
        title: {
          display: false,
          text: 'Total de grupos por grado'
        }
      }
  });
}
  
function fManExistencePromoted() {
  var manExistencePromoted = document.getElementById("man-existence-promoted").getContext('2d');
  var myChart = new Chart(manExistencePromoted, {
      type: 'radar',
      data: {
        labels: ['1o', '2o', '3o', '4o', '5o', '6o'],
        datasets: [
          {
            label: "Existencia",
            fill: true,
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(179,181,198,1)",
            data: [manExist1, manExist2, manExist3, manExist4, manExist5, manExist6]
          }, {
            label: "Promovidos",
            fill: true,
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            data: [Math.floor(manExist1), Math.floor(manExist2), Math.floor(manExist3*0.90), Math.floor(manExist4*0.88), Math.floor(manExist5*0.87), Math.floor(manExist6*0.86)]
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: ''
        }
      }
  });
}

function fWomanExistencePromoted() {
  var womanExistencePromoted = document.getElementById("woman-existence-promoted").getContext('2d');
  var myChart = new Chart(womanExistencePromoted, {
      type: 'radar',
      data: {
        labels: ['1o', '2o', '3o', '4o', '5o', '6o'],
        datasets: [
          {
            label: "Existencia",
            fill: true,
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(179,181,198,1)",
            data: [womanExist1, womanExist2, womanExist3, womanExist4, womanExist5, womanExist6]
          }, {
            label: "Promovidos",
            fill: true,
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            data: [Math.floor(womanExist1), Math.floor(womanExist2), Math.floor(womanExist3*0.90), Math.floor(womanExist4*0.88), Math.floor(womanExist5*0.87), Math.floor(womanExist6*0.86)]
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: ''
        }
      }
  });
}


/* =============================================================
=====II. MIGRACIÓN (ALUMNOS QUE PROVIENEN DE OTRA ESCUELA)======
================================================================ */

function fTotalMigration() {
  // Existencias totales de niños y niñas
  /*'#3980b5', '#0b62a4', '#095791'*/
  /*#b0cce1 - #95bbd7 - #679dc6 - #3980b5 - #0b62a4 - #095791*/
  var totalMigration = document.getElementById("total-migration").getContext('2d');
  var myChart = new Chart(totalMigration, {
      type: 'bar',
      data: {
        labels: ["1o", "2o", "3o", "4o", "5o", "6o"],
        datasets: [
          {
            label: 'Misma Entidad',
            data: [rnd(5, 15), rnd(5, 15), rnd(5, 15), rnd(5, 15), rnd(3, 10), rnd(3, 10)],
            backgroundColor: [blue1,blue1,blue1,blue1,blue1,blue1],
            borderWidth: 1
          },
          {
            label: 'Otra Entidad',
            data: [rnd(3, 8), rnd(3, 8), rnd(3, 8), rnd(3, 8), rnd(2, 6), rnd(2, 6)],
            backgroundColor: [blue3,blue3,blue3,blue3,blue3,blue3],
            borderWidth: 1
          },
          {
            label: 'Otro País',
            data: [rnd(1, 4), rnd(1, 4), rnd(1, 4), rnd(1, 4), rnd(1, 3), rnd(1, 3)],
            backgroundColor: [blue6,blue6,blue6,blue6,blue6,blue6],
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
                beginAtZero:true
            }
          }]
        }
      }
  });
}

  
function fTotalMigrationCountry() {
  // Total de migraciones por país
  var totalMigrationCountry = document.getElementById("total-migration-country").getContext('2d');
  var myChart = new Chart(totalMigrationCountry, {
      type: 'bar',
      data: {
        labels: ['USA', 'Canadá', 'Centro Ame.', 'Sudame.', 'África', 'Asía', 'Europa', 'Oceanía'],
        datasets: [
          {
            label: 'niños',
            data: [rnd(1, 5), rnd(1, 4), rnd(1, 4), rnd(1, 4), rnd(1, 3), rnd(1, 3), rnd(1, 2), rnd(1, 2)],
            backgroundColor: [
              boyColor,boyColor,boyColor,boyColor,boyColor,boyColor,boyColor,boyColor
            ],borderColor: [
              boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder,boyColorBorder
            ],
            borderWidth: 1
          },
          {
            label: 'niñas',
            data: [rnd(1, 5), rnd(1, 4), rnd(1, 4), rnd(1, 4), rnd(1, 3), rnd(1, 3), rnd(1, 2), rnd(1, 2)],
            backgroundColor: [girlColor,girlColor,girlColor,girlColor,girlColor,girlColor,girlColor,girlColor],
            borderColor: [girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder,girlColorBorder],
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
                beginAtZero:true
            }
          }]
        }
      }
  });
}


/* =============================================================
===================== V. ALUMNOS Y GRUPOS ======================
================================================================ */

function fManAgeGroup() {
  var manAgeGroup = document.getElementById("man-age-group");
  new Chart(manAgeGroup, {
      type: 'horizontalBar',
      data: {
        labels: ['Menos de 6 años', '6 años', '7 años', '8 años', '9 años', '10 años', '11 años', '12 años', '13 años', '14 años', '15 años +'],
        datasets: [
          {
            label: '1o',
            data: [rnd(5, 10), rnd(40, 50), rnd(40, 50), rnd(5, 10), 0, 0, 0, 0, 0, 0, 0],
            backgroundColor: [blue1, blue1, blue1, blue1, blue1, blue1, blue1, blue1, blue1, blue1, blue1]
          },
          {
            label: '2o',
            data: [0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(5, 10), 0, 0, 0, 0, 0, 0],
            backgroundColor: [blue2, blue2, blue2, blue2, blue2, blue2, blue2, blue2, blue2, blue2, blue2]
          },
          {
            label: '3o',
            data: [0, 0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(1, 3), 0, 0, 0, 0, 0],
            backgroundColor: [blue3, blue3, blue3, blue3, blue3, blue3, blue3, blue3, blue3, blue3, blue3]
          },
          {
            label: '4o',
            data: [0, 0, 0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(1, 3), 0, 0, 0, 0],
            backgroundColor: [blue4, blue4, blue4, blue4, blue4, blue4, blue4, blue4, blue4, blue4, blue4]
          },
          {
            label: '5o',
            data: [0, 0, 0, 0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(10, 20), 0, 0, 0],
            backgroundColor: [blue5, blue5, blue5, blue5, blue5, blue5, blue5, blue5, blue5, blue5, blue5]
          },
          {
            label: '6o',
            data: [0, 0, 0, 0, 0, rnd(1, 5), rnd(30, 40), rnd(30, 40), rnd(1, 3), rnd(1, 3), 0],
            backgroundColor: [blue6, blue6, blue6, blue6, blue6, blue6, blue6, blue6, blue6, blue6, blue6]
          }
        ]
      },
      options: {
        scales:{
          xAxes: [{
            stacked: true
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }
  });
}

function fWomanAgeGroup() {
  var womanAgeGroup = document.getElementById("woman-age-group");
  new Chart(womanAgeGroup, {
      type: 'horizontalBar',
      data: {
        labels: ['Menos de 6 años', '6 años', '7 años', '8 años', '9 años', '10 años', '11 años', '12 años', '13 años', '14 años', '15 años +'],
        datasets: [
          {
            label: '1o',
            data: [rnd(5, 10), rnd(40, 50), rnd(40, 50), rnd(5, 10), 0, 0, 0, 0, 0, 0, 0],
            backgroundColor: [pink1, pink1, pink1, pink1, pink1, pink1, pink1, pink1, pink1, pink1, pink1]
          },
          {
            label: '2o',
            data: [0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(5, 10), 0, 0, 0, 0, 0, 0],
            backgroundColor: [pink2, pink2, pink2, pink2, pink2, pink2, pink2, pink2, pink2, pink2, pink2]
          },
          {
            label: '3o',
            data: [0, 0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(1, 3), 0, 0, 0, 0, 0],
            backgroundColor: [pink3, pink3, pink3, pink3, pink3, pink3, pink3, pink3, pink3, pink3, pink3]
          },
          {
            label: '4o',
            data: [0, 0, 0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(1, 3), 0, 0, 0, 0],
            backgroundColor: [pink4, pink4, pink4, pink4, pink4, pink4, pink4, pink4, pink4, pink4, pink4]
          },
          {
            label: '5o',
            data: [0, 0, 0, 0, rnd(1, 5), rnd(40, 50), rnd(40, 50), rnd(10, 20), 0, 0, 0],
            backgroundColor: [pink5, pink5, pink5, pink5, pink5, pink5, pink5, pink5, pink5, pink5, pink5]
          },
          {
            label: '6o',
            data: [0, 0, 0, 0, 0, rnd(1, 5), rnd(30, 40), rnd(30, 40), rnd(1, 3), rnd(1, 3), 0],
            backgroundColor: [pink6, pink6, pink6, pink6, pink6, pink6, pink6, pink6, pink6, pink6, pink6]
          }
        ]
      },
      options: {
        scales:{
          xAxes: [{
            stacked: true
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }
  });
}


function rnd(min, max) {
  return Math.floor(Math.random() * (max - min) ) + min;
}


