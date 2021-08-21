<?php
session_start();
if (isset($_SESSION['token'])){
header("location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap"> -->
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Alpaca</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">

</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-0 card-left">
                    <div class="card bg-primary">
                        <div class="svg-icon">

                        </div>

                        <div class="single-item">
                            <div>
                                <div>
                                    <h3>Welcome to Alpaca</h3>
                                  </div>
                            </div>
                
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user me-2"></span>Login</a>
                                </li>
                            </ul>


                            <!-- form starts -->
                            <div >
                                <div  id="top-profile"  aria-labelledby="top-profile-tab">
                                    <form class="form-horizontal auth-form">
                                        <div class="form-group">
                                            <input  name="email" type="email" class="form-control" placeholder="email" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input  name="password" type="password" class="form-control" placeholder="Password" id="password" required>
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <div class="form-check">
                                                  <input class="form-check-input custom-control-input" type="checkbox" value="" id="customControlAutosizing">
                                                  <label class="form-check-label" for="customControlAutosizing">Remember me</label>
                                                </div>
                                                <a href="javascript:void(0)" class="btn btn-default forgot-pass">lost your password</a>
                                            </div>
                                        </div>
                                        <div class="form-button">
                                        <input type="button" class="btn btn-primary" value="login" id="login">
                                         <div id="error"></div>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                            <!-- form ends  -->


                        </div>
                    </div>
                </div>
            </div>
            <a href="dashboard.php" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
        </div>
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

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>
<script src="../assets/js/slick.js"></script>

<!-- Jsgrid js-->
<script src="../assets/js/jsgrid/jsgrid.min.js"></script>
<script src="../assets/js/jsgrid/griddata-invoice.js"></script>
<script src="../assets/js/jsgrid/jsgrid-invoice.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
<!-- <script>
    $('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script> -->


<script>

$(document).ready(function(){
 $('#login').click(function(){
  var email = $('#email').val();
  var password = $('#password').val();
  if($.trim(email).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"login.php",
    method:"POST",
    data:{email:email, password:password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {

     window.location.replace("dashboard.php");

    //   $("body").load("dashboard.php").hide().fadeIn(1500);

      // console.log(data);
      $_SESSION['token']=data;
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      // $("#box").effect("shake", options, 800);
      $('#login').val("Login");
      $('#error').html("<span class='text-danger'>Invalid Email or Password</span>");
     }
    }
   });
  }
  else
  {
    $('#error').html("<span class='text-warning'>Please enter Email and Password</span>");
  }
 });
});
</script>
</body>

</html>
