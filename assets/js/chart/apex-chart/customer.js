

3








































































var options = {
    series: [80],
    chart: {
    height: 450,
    type: 'radialBar',
    offsetY: -40
  },
  plotOptions: {
    radialBar: {
      startAngle: -135,
      endAngle: 135,
      dataLabels: {
        name: {
          fontSize: '16px',
          color: undefined,
          offsetY: 120
        },
        value: {
          offsetY: 80,
          fontSize: '22px',
          color: undefined,
          formatter: function (val) {
            return val + "%";
          }
        }
      }
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
        shade: 'dark',
        shadeIntensity: 0.15,
        inverseColors: false,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 50, 65, 91]
    },
  },
  stroke: {
    dashArray: 4
  },
  labels: ['Customer Ratio'],
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();


//   var options = {
//     chart: {
//         height: 350,
//         type: 'radial',
//     },
//     dataLabels: {
//         enabled: false
//     },
//     series: [],
//     title: {
//         text: 'Ajax Example',
//     },
//     noData: {
//       text: 'Loading...'
//     }
//   }
  
//   var chart = new ApexCharts(
//     document.querySelector("#chart2"),
//     options
//   );
  
//   chart.render();