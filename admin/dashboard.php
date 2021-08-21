<?php  include "navbar.html"; ?>
<?php  include "sidebar.html"; ?>
<?php
session_start();
if(!isset($_SESSION['token'])){
    header('location: index.php');
}
?>
 <!-- Container-fluid starts-->
 <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Bigdeal Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                      <!-- blocks starts -->

                    
                      <!-- Total Sellers -->
                      <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget">

                                   <?php  include('checkuserinfo.php');
                                   $i = 0;
                                   foreach($results as $key => $value){
                                       $keys[$i] = $key;
                                       $values[$i]= $value;
                                       $i++; }
                                   ?> 
                                  
                                    <div class="media-body"><span class="m-0">Total Sellers</span>
                                        <h3 class="mb-0"> <span class="counter">
                                          <?php  echo $values[0]; ?>
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="box"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Buyers -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">Total Buyers</span>
                                        <h3 class="mb-0"> <span class="counter">
                                            
                                        <?php  echo $values[1]; ?>
                                            
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Users  -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">Total Users</span>
                                        <h3 class="mb-0"> <span class="counter">
                                        <?php  echo $values[2]; ?>
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="navigation"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Orders  -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-success card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">Total Orders</span>
                                        <h3 class="mb-0"> <span class="counter">
                                        <?php  echo $values[3]; ?>
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blocks ends -->


                    <!-- Products  -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget">

                                    <?php
                                    $data = array("Products"=>"9856", "Messages"=> "893", "Earnings"=> "6659", "NewVendors"=> "45631");
                                    ?>
                                    <div class="media-body"><span class="m-0">Products</span>
                                        <h3 class="mb-0">$ <span class="counter">
                                           <?php echo $data['Products']; ?>

                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="box"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Messages  -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">Messages</span>
                                        <h3 class="mb-0">$ <span class="counter">
                                            
                                        <?php echo $data['Messages']; ?>
                                            
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings  -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">Earnings</span>
                                        <h3 class="mb-0">$ <span class="counter">
                                        <?php echo $data['Earnings']; ?>
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="navigation"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vendors  -->
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-success card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">New Vendors</span>
                                        <h3 class="mb-0">$ <span class="counter">
                                        <?php echo $data['NewVendors']; ?>
                                        </span><small> This Month</small></h3>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blocks ends -->


                    <!-- order activity starts -->
                    <div class="col-xl-4 xl-100">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>Order Activity</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="order-timeline">

                                    <div class="media">
                                        <div class="timeline-line"></div>
                                        <div class="timeline-icon-primary">
                                            <i data-feather="map-pin"></i>
                                        </div>
                                        <div class="media-body">
                                        <?php $ordActivity=["Delivered"=> "58 mins ago", "Transit"=>"18 hours ago","Dispatched"=>"3 Days ago", "Received"=>"8 Days ago"]; ?>
                                            <span class="font-primary">Delivered</span>
                                            <p>
                                                <?php echo $ordActivity["Delivered"]; ?>
                                            </p>
                                        </div>
                                        <span class="pull-right text-muted">Today</span>
                                    </div>

                                    <div class="media">
                                    <div class="timeline-icon-secondary">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="font-secondary">In Transit</span>
                                            <p>
                                            <?php echo $ordActivity["Transit"]; ?>
                                            </p>
                                        </div>
                                        <span class="pull-right text-muted">Yesterday</span>
                                    </div>

                                    <div class="media">
                                        <div class="timeline-icon-warning">
                                            <i data-feather="box"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="font-warning">Dispatched</span>
                                            <p>
                                            <?php echo $ordActivity["Dispatched"]; ?>
                                            </p>
                                        </div>
                                        <span class="pull-right text-muted">12 Sep</span>
                                    </div>

                                    <div class="media">
                                        <div class="timeline-icon-success">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="font-success">Order Received</span>
                                            <p>
                                            <?php echo $ordActivity["Received"]; ?>
                                            </p>
                                        </div>
                                        <span class="pull-right text-muted">05 Sep</span>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head4">
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- order activity ends -->


                    <!-- revenue chart starts -->
                    <div class="col-xl-8 xl-100">
                        <div class="card btn-months">
                            <div class="card-header">
                                <h5>This Month Revenue</h5>
                             
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body" >
                            <!-- <canvas id="myChart"></canvas> -->
                           <div id="monthlyorders" style=" height: 500px;"></div> 
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head8">

                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- revenue chart ends  -->

                  
                    <div class="col-xl-12 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>Latest Orders</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive latest-order-table">
                                    <table class="table table-bordernone">
                                        <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Order Total</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="digits">$120.00</td>
                                            <td class="font-danger">Bank Transfers</td>
                                            <td class="digits">On Way</td>
                                        </tr>
                                   
                                        </tbody>
                                    </table>
                                    <a href="" class="btn btn-primary">View All Orders</a>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head1">
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                     



                    <!-- new cutomer ratio starts -->
                    <div class="col-xl-4 xl-50">
                        <div class="card customers-card">
                            <div class="card-header">
                                <h5>New Customers</h5>
                                <div class="chart-value-box pull-right">
                                    <div class="value-square-box-secondary"></div><span class="f-12 f-w-600">Customers</span>
                                </div>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>   
                                                 
                            <div class="card-body p-0">
                                <div class="apex-chart-container">
                                    <div id="customer"></div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head7">

                                    </code></pre>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                       <!-- new cutomer ratio ends -->

                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <?php include "footer.html"; ?>
    </div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- google bar chart  -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>



<!--counter js-->
<script src="../assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../assets/js/counter/jquery.counterup.min.js"></script>
<script src="../assets/js/counter/counter-custom.js"></script>

<!-- map js -->
<!-- customer and revenue charts -->
<!-- <script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script> -->
<!-- <script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/js/chart/chartist/chartist.js"></script> -->


<!-- customer chart  -->
<!-- <script src="../assets/js/chart/apex-chart/customer.js"></script> -->

<!--apex chart js-->
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>


<!--dashboard custom js-->
<script src="../assets/js/dashboard/default.js"></script>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<?php 
// customer ratio

 $series = 50;?>
<script>
var options = {
          series: [<?php echo $series?>],
          chart: {
          height: 350,
          type: 'radialBar',
          offsetY: -10
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
                offsetY: 76,
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
              shadeIntensity: 0.4,
              inverseColors: true,
              opacityFrom: 0.8,
              opacityTo: 1,
              stops: [0, 50, 65, 91]
          },
        },
        stroke: {
          dashArray: 4
        },
        labels: ['Median Ratio'],
        };

        var chart = new ApexCharts(document.querySelector("#customer"), options);
        chart.render();
      
        google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        <?php include('phpdata.php');?>
        var data = google.visualization.arrayToDataTable([
          ['Days', 'Orders'],
        //   [1, 1000],
        //   [3,0],
        //   [2, 660],
        //   [5, 1030],
        //   [7,45]
        <?php 
        foreach ($data as $key=> $value){
            echo '['. $key . ','. $value . '],';
        }
        ?>
        ]);
        
        var options = {
          chart: {
            title: 'Total Orders',
            subtitle: 'Orders: Date',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('monthlyorders'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
      
</script>


<!-- <?php $data = [18, 12, 6, 9, 12];?> -->
    <!-- <script>
    // setup 
    const data = {
      labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
    //   borderColor: 'dark',
      datasets: [{
        label: 'Monthly Revenue',
        data: [18, 12, 6, 9, 12],
        // data: x,
        borderColor: '#46d5f1',
        hoverBorderColor: '#666666',
        backgroundColor: '#0057D9',
        borderWidth: 1,
        borderRadius:20,
        borderSkipped:false,
        barPercentage:0.3
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    </script>
 -->


<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!--right sidebar js-->
<!-- <script src="../assets/js/chat-menu.js"></script> -->

</body>
</html>
