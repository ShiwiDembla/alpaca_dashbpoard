<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Alpaca</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable
          var data = google.visualization.arrayToDataTable([
            <?php include('phpdata.php');?>
        
          ['Year', 'Sales', 'Expenses'],
          // ['2004',  1000,      400],
          // ['2005',  1170,      460],
          // ['2006',  660,       1120],
          // ['2007',  1030,      540]
          <?php 
          $i=0;
        foreach ($data as $key=> $value){
          $i++;
            echo '['.$i . ',' .$key . ','. $value . '],';
        }
        ?>
        ]);
        var options = {
          legend: 'none',
          // hAxis: { minValue: 0, maxValue: 9 },
          curveType: 'linear',
          pointSize: 7,
          dataOpacity: 0.3
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    </script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(draw);

      function draw() {

        var data = google.visualization.arrayToDataTable
          var data = google.visualization.arrayToDataTable([
            <?php include('phpdata.php');?>
        
          ['Year', 'Sales', 'Expenses'],
          // ['2004',  1000,      400],
          // ['2005',  1170,      460],
          // ['2006',  660,       1120],
          // ['2007',  1030,      540]
          <?php 
          $i=0;
        foreach ($data as $key=> $value){
          $i++;
            echo '['.$i . ',' .$key . ','. $value . '],';
        }
        ?>
        ]);


        var options = {
          legend: 'none',
          // hAxis: { minValue: 0, maxValue: 9 },
          curveType: 'function',
          pointSize: 7,
          dataOpacity: 0.3
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart'));
        chart.draw(data, options);
    }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(draw2);

      function draw2() {

        var data = google.visualization.arrayToDataTable
          var data = google.visualization.arrayToDataTable([
            <?php include('phpdata.php');?>
        
          ['Year', 'Sales', 'Expenses'],
          // ['2004',  1000,      400],
          // ['2005',  1170,      460],
          // ['2006',  660,       1120],
          // ['2007',  1030,      540]
          <?php 
          $i=0;
        foreach ($data as $key=> $value){
          $i++;
            echo '['.$i . ',' .$key . ','. $value . '],';
        }
        ?>
        ]);


        var options = {
          legend: 'none',
          // hAxis: { minValue: 0, maxValue: 9 },
          curveType: 'linear',
          pointSize: 7,
          dataOpacity: 0.3
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart3'));
        chart.draw(data, options);
    }
    </script>

</head>
<body>

<?php  include "navbar.html"; ?>


<?php  include "sidebar.html"; ?> 

<!-- Container-fluid starts-->
<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Reports
                                    <small>Bigdeal Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Reports</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
   
    <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Expenses</h5>
                            </div>
                            <div class="card-body expense-chart">
                                <div class="chart-overflow" >
                              
                                <!-- chart  -->
                                <div id="chart3" style="height: 400px;"></div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-6" >
                        <div class="card" style="height: auto;">
                            <div class="card-header">
                                <h5>Sales Summary</h5>
                            </div>
                            <div class="card-body sell-graph">
                                
                            <!-- chart  -->
                            <div id="chart" style="height: 400px;"></div>
                           

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Transfer Report</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <table>
                                        
                                    </table>
                                </div>
                                <!-- <div id="basicScenario" class="report-table"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Sales / Purchase Return</h5>
                            </div>
                            <div class="card-body sell-graph">
                                <!-- chart  -->
                            <div id="chart_div" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            </div>

<?php  include "footer.html"; ?>


</div>

</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>


<!-- Chartist js-->
<script src="../assets/js/chart/chartist/chartist.js"></script>

<!-- Chartjs -->
<script src="../assets/js/chart/chartjs/chart.min.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- Jsgrid js-->
<!-- <script src="../assets/js/jsgrid/jsgrid.min.js"></script>
<script src="../assets/js/jsgrid/griddata-reports.js"></script>
<script src="../assets/js/jsgrid/jsgrid-reports.js"></script> -->

<!-- Google chart js-->
<script src="../assets/js/chart/google/google-chart-loader.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>

<!--Report chart-->
<script src="../assets/js/admin-reports.js"></script>

<script src="../assets/js/reports.js"></script>
<!-- <script src="../assets/js/linechart.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"> </script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>
</html>







