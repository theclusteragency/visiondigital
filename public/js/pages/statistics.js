new Morris.Bar({
  element: 'existence-gender',
  data: [
    { y: '1o', a: 100, b: 90 },
    { y: '2o', a: 75,  b: 65 },
    { y: '3o', a: 50,  b: 40 },
    { y: '4o', a: 75,  b: 65 },
    { y: '5o', a: 50,  b: 40 },
    { y: '6o', a: 75,  b: 65 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Hombres', 'Mujeres'],
  barColors: ['#5dade2', '#dd969c'],
  stacked: false,
  hoverCallback: 'always'
});

/*new Morris.Donut({
  element: 'existence-total-group',
  data: [
    {label: "1o", value: 12},
    {label: "2o", value: 30},
    {label: "3o", value: 20},
    {label: "4o", value: 40},
    {label: "5o", value: 35},
    {label: "6o", value: 38}
  ],
  resize: true,
  //colors: ["#0291d9", "#3bc45b", "#eb2121"]
});*/

//#b0cce1 - #95bbd7 - #679dc6 - #3980b5 - #0b62a4 - #095791
var existenceTotalGroupData = [
  { label: '1<sup>o</sup>', data: 12, color: '#b0cce1' },
  { label: '2<sup>o</sup>', data: 30, color: '#95bbd7' },
  { label: '3<sup>o</sup>', data: 20, color: '#679dc6' },
  { label: '4<sup>o</sup>', data: 40, color: '#3980b5' },
  { label: '5<sup>o</sup>', data: 35, color: '#0b62a4' },
  { label: '6<sup>o</sup>', data: 38, color: '#095791' }
];

$.plot('#existence-total-group', existenceTotalGroupData, {
  series: {
    pie: {
      show       : true,
      radius     : 1,
      innerRadius: 0.7,
      label      : {
        show       : true,
        radius     : 1,
        formatter  : groupLabelFormatter,
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

function groupLabelFormatter(label, series) {
  console.log(series);
  return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
    + label
    + '<br>'
    + Math.round(series.data[0][1]) + '</div>'
}