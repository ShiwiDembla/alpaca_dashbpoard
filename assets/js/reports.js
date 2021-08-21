

var myLineChart = {
    labels: ["","10", "20", "30", "40", "50", "60", "70", "80"],
    datasets: [{
        fillColor: "transparent",
        strokeColor: "#00baf2",
        pointColor: "#00baf2",
        data: [20, 40, 20, 50, 20, 60, 10, 40, 20]
    }, {
        fillColor: "transparent",
        strokeColor: "#314da7",
        pointColor: "#314da7",
        data: [50, 10, 40, 30, 80, 30, 20, 90, 0]
    }]
}
var ctx = document.getElementById("myChart").getContext("2d");
var LineChartDemo = new Chart(ctx).Line(myLineChart, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee"
});

var myLineChart = {
    labels: ["","10", "20", "30", "40", "50", "60", "70", "80"],
    datasets: [{
        // fillColor: "transparent",
        strokeColor: "#00baf2",
        pointColor: "#00baf2",
        // fill: true,
        data: [20, 40, 20, 50, 20, 60, 10, 40, 20]
    }, {
        // fillColor: "transparent",
        fillOpacity: 0.3,
        strokeColor: "#314da7",
        pointColor: "#314da7",
        data: [50, 10, 40, 30, 80, 30, 20, 90, 0]
    }]
}
var ctx = document.getElementById("linechart").getContext("2d");
var LineChartDemo = new Chart(ctx).Line(myLineChart, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee"
});


// dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>

var myLineChart = {
    labels: ["","10", "20", "30", "40", "50", "60", "70", "80"],
    datasets: [{
        // fillColor: "transparent",
        strokeColor: "#00baf2",
        pointColor: "#00baf2",
        // fill: true,
        data: [20, 40, 20, 50, 20, 60, 10, 40, 20]
        // data: <?= $json ?>,
    }, {
        // fillColor: "transparent",
        fillOpacity: 0.3,
        strokeColor: "#314da7",
        pointColor: "#314da7",
        data: [50, 10, 40, 30, 80, 30, 20, 90, 0]
    }]
}
var ctx = document.getElementById("linechart").getContext("2d");
var LineChartDemo = new Chart(ctx).Line(myLineChart, {
    pointDotRadius: 2,
    pointDotStrokeWidth: 5,
    pointDotStrokeColor: "#ffffff",
    bezierCurve: false,
    scaleShowVerticalLines: false,
    scaleGridLineColor: "#eeeeee"
});


// var ctx = document.getElementById("myChart2");
// var myChart2 = new Chart(ctx, {
//     type: 'line',
//     data: {
//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//         datasets: [{
//             label: '# of Votes',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255,99,132,1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         },
//           {
//             label: '# of Players',
//             data: [1, 20, 1, 2, 5, 8],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255,99,132,1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }         
//                   ]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         }
//     }
// });