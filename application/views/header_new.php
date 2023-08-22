<?php
$ci =& get_instance();
// print_r($this->header_data->menu_child('external_doc','LV'));die;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>X-Bridge | B2B</title>
  <link rel="icon" type="image/png" href="<?php echo base_url('asset/dist/img/rexbridge.JPG');?>" >
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!--   <script src="<?php echo base_url('assets/plugins/jquery.min.js')?>"></script>
 --><!--   <script src="<?php echo base_url('assets/plugins/moment.min.js')?>"></script>
 -->  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css')?>">
<!--   <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script> -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
   
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css')?>">
 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>"  type="text/css" />
  
  <link rel="stylesheet" href="<?php echo base_url('asset/ionicons.min.css')?>" type="text/css">
 
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/AdminLTE.css')?>">
 
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/skins/_all-skins.min.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/morris/morris.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables/dataTables.bootstrap.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables/dataTables.checkboxes.css')?>">  

 <!--  <script src="<?php echo base_url('asset/plugins/datatables/dataTables.checkboxes.min.js')?>"></script> -->
<!--   <script src="<?php echo base_url('asset/plugins/datatables/datatables.min.js')?>"></script> 
 --> 
<!--   <script type="text/javascript" src="<?php echo base_url('asset/date_time.js');?>"></script>
 --> 
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/select2/select2.min.css')?>">
 
<!--   <script src="<?php echo base_url('asset/angularjs/angular.min.js')?>"></script> 
 -->
<!--   <script  type="text/javascript" src="<?php echo base_url('asset/modernizr-custom.js')?>"></script> -->
<!--   <script  type="text/javascript" src="<?php echo base_url('asset/polyfiller.js')?>"></script>
 -->
<link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-multiselect.css')?>"   type="text/css">
<!-- <script type="text/javascript" src="<?php echo base_url('asset/bootstrap-multiselect.js')?>" ></script> -->

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet"> -->

<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/summernote.css');?>">

<!--<link rel="stylesheet" href="<?php echo base_url('asset/plugins/summernote/summernote.css')?>">-->

<script src="<?php echo base_url('assets/plugins/sweetalert/sweetalert.js');?>"></script>
  <style type="text/css">
 
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("<?php echo base_url('assets/loading2.gif') ?>") center no-repeat #fff;
    /*background:   #fff;*/
}
</style>
<style type="text/css">
  #highlight {
    background-color: #f8f9c7;
  }

  #highlight2 {
    background-color: #9df9a6;
  }

  #highlight3 {
    background-color: #DD4B39;
  }

  #highlight4 {
    background-color: #FFFF00;
  }

  #highlight5{
    background-color: #B0B0B0;
  }
  @keyframes blink { 50% { background-color:#fff ; }  }

#modal::-webkit-scrollbar {
  display: none;
}
 /*.main-sidebar {
    width: 250px;
  }

  .main-header .logo
  {
    width:250px;
  }

  .main-header .navbar
  {
    margin-left:250px;
  }

  .content-wrapper, .right-side, .main-footer
  {
    margin-left:250px;
  }*/
@media print {
   a[href]:after {
      display: none;
      visibility: hidden;
   }
}
@media (min-width: 768px){
.modal-xl {
    width: 90%;!important
    max-width: 1200px;
}}

body { width: 100%; height: 100%; }
.btn-group-fab {
  position: fixed;
  width: 50px;
  height: auto;
  right: 20px; bottom: 20px;
}
.btn-group-fab div {
  position: relative; width: 100%;
  height: auto;
}
.btn-group-fab .btn {
  position: absolute;
  bottom: 0;
  border-radius: 50%;
  display: block;
  margin-bottom: 4px;
  width: 40px; height: 40px;
  margin: 4px auto;
}
.btn-group-fab .btn-main {
  width: 50px; height: 50px;
  right: 50%; margin-right: -25px;
  z-index: 9;
}
.btn-group-fab .btn-sub {
  bottom: 0; z-index: 8;
  right: 50%;
  margin-right: -20px;
  -webkit-transition: all 2s;
  transition: all 0.5s;
}
.btn-group-fab.active .btn-sub:nth-child(2) {
  bottom: 60px;
}
.btn-group-fab.active .btn-sub:nth-child(3) {
  bottom: 110px;
}
.btn-group-fab.active .btn-sub:nth-child(4) {
  bottom: 160px;
}
.btn-group-fab .btn-sub:nth-child(5) {
  bottom: 210px;
}
</style>

<style type="text/css">
  
.pill_button {
  background-color: #222d32;
  border: none;
  color: white;
  font-weight: bold;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  border-radius: 16px;
  font-family: sans-serif;
}

/*.pill_button:hover {
  background-color: #f1f1f1;
}*/

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    display: flow-root;
}

</style>

<style>

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  border-radius: 50px;
  z-index: 1000000;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 1000000;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn_chat {
  background-color: #4CAF50;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn_chat:hover, .open-button:hover {
  opacity: 1;
}
</style>

    <style type="text/css">

        .tooltip9 {
  position: relative;
  display: inline-block;
}


.tooltip9 .tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1000000;
}

.tooltip9:hover .tooltiptext {
  visibility: visible;
}

    </style>

<!-- // asda -->
<script src="<?php echo base_url('asset/modernizr.js')?>"></script>
<script src="<?php echo base_url('asset/jquery.min.js')?>"></script>
<script type="text/javascript">
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });

</script>

</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse"  >
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
     
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">B2B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-xs"><b style="font-size: 12px">B2B</b></span>

    </a> 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <?php // echo var_dump($_SESSION) ?>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li id="notifications_button" class="dropdown notifications-menu">
          
            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

              <i class="fa fa-bell-o"></i>
              
            </a>
            <ul class="dropdown-menu" >
              <li class="header">Notifications <div class="tooltip9"><i class="fa fa-question-circle"></i>
              <span class="tooltiptext">From time to time we will update our notifications library to notify you about any matters, stay tuned!</span>
          </div></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="notifications_menu">

                  <input type="hidden" id="notifications_loading">
                  
                </ul>
              </li>
              <li class="footer"></li>
            </ul>
          </li>
          <li>
            <a  ><i class="fa fa-home"> </i> Home</a>
          </li>
          <li style="cursor: pointer;">
            <a data-toggle="modal" data-target="#contactus"><i class="fa fa-phone"> </i> Contact</a>
          </li>
          <li class="dropdown user user-menu" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('asset/dist/img/rexbridge.JPG');?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Profile</span>
            </a>
            <ul class="dropdown-menu" style="padding: 0px 0 0 0;">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('asset/dist/img/rexbridge.JPG');?>" class="img-circle" alt="User Image">

                <p> Username : <?php echo $_SESSION['userid'] ?>
                 <!--  Customer name or simple desc
                  <small>addresss</small> -->
                  <br>
                  
                </p>
                <br>
                
              </li>

              <li class="user-body" style="background-color: #3c8dbc;border-top: none;">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="<?php echo site_url('login_c/customer')?>" class="btn btn-default btn-flat"><i class="fa fa-location-arrow"></i> Customer : 

                </a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('login_c/password')?>" class="btn btn-default btn-flat"><i class="fa fa-key"></i>Change Password </a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login_c/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li> 
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <ul class="sidebar-menu" >
        <li>
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="modal fade" id="contactus" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Information</h4>
        </div>
        <div class="modal-body">
          <p><b>Office Hour Support (excluding Public Holiday)</b><br>
          Monday to Friday 9:00am to 5:30pm<br>
<!--           Saturday 9:30am to 1:00pm<br> -->
          </p>

          <p><b>Registration</b><br>
          Call : +6017-715-9340/+6017-215-3088<br>
          Whatsapp1 : <a href="https://api.whatsapp.com/send?phone=60177159340">+6017-715-9340 <i class="fa fa-whatsapp" aria-hidden="true"></i></a><br>
          Whatsapp2 : <a href="https://api.whatsapp.com/send?phone=60172153088">+6017-215-3088 <i class="fa fa-whatsapp" aria-hidden="true"></i></a><br>
          Email : register@xbridge.my
          </p>

          <p><b>Helpdesk</b><br>
          Call : +6017-745-1185/+6017-669-5988<br>
          Whatsapp1 : <a href="https://api.whatsapp.com/send?phone=60177451185">+6017-745-1185 <i class="fa fa-whatsapp" aria-hidden="true"></i></a><br>
          Whatsapp2 : <a href="https://api.whatsapp.com/send?phone=60176695988">+6017-669-5988 <i class="fa fa-whatsapp" aria-hidden="true"></i></a><br>
          Email : support@xbridge.my
          </p>

          <p><b>Billing & Payment</b><br>
          Call : +6017-704-3288<br>
          Whatsapp : <a href="https://api.whatsapp.com/send?phone=60177043288">+6017-704-3288 <i class="fa fa-whatsapp" aria-hidden="true"></i></a><br>
          Email : billing@xbridge.my
          </p>

        </div>
        
      </div>
      
    </div>
  </div>


<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#example-post').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true
        });
    });
</script> -->
  
<div class="se-pre-con"></div>
   
