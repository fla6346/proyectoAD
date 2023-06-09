<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>47Admin - Bootstrap Admin Skin</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="assets/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/vendor/animo/animate+animo.css">
   <link rel="stylesheet" href="assets/vendor/csspinner/csspinner.min.css">
   <!-- App CSS-->
   <link rel="stylesheet" href="assets/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="vendor/fastclick/fastclick.js" type="application/javascript"></script>
</head>

<body>
   <!-- START wrapper-->
   <div style="height: 100%; padding: 50px 0; background-color: #2c3037" class="row row-table">
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <!-- START panel-->
         <div data-toggle="play-animation" data-play="fadeInUp" data-offset="0" class="panel panel-default panel-flat">
            <p class="text-center mb-lg">
               <br>
               <a href="#">
                  <img src="img/logo.jpg" alt="Image" class="block-center img-rounded">
               </a>
            </p>
            <p class="text-center mb-lg">
               <strong>REGISTRATE</strong>
            </p>
            <div class="panel-body">
               <form role="form" action="insert.php" method="post">
                  <div class="form-group has-feedback">
                     <label for="signupInputEmail1" class="text" >login</label>
                     <input id="signupInputEmail1" type="text" placeholder="Enter login" name="login" class="form-control">
                     <span class="fa fa-envelope form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <label for="signupInputPassword1" class="text-muted" >Password</label>
                     <input id="signupInputPassword1" type="password" placeholder="Password" name="contrasenia" class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <label for="signupInputRePassword1" class="text-muted" >Retype Password</label>
                     <input id="signupInputRePassword1" type="password" name="contrasenia1" placeholder="Retype Password" class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                 
                  <button type="submit" class="btn btn-block btn-primary">Register</button>
               </form>
            </div>
         </div>
         <!-- END panel-->
      </div>
   </div>
     <!-- Main vendor Scripts-->
     <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Animo-->
   <script src="vendor/animo/animo.min.js"></script>
   <!-- Custom script for pages-->
   <script src="app/js/pages.js"></script>
   <!-- END Scripts-->
   <script src="app/js/app.js"></script>
</body>

</html>