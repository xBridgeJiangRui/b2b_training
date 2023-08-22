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
<body class="hold-transition skin-blue sidebar-mini  sidebar-collapse"  >
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <?php if(isset($_SESSION['module_code'])) { ?>
    <a href=" <?php  if(in_array('DASH',$_SESSION['module_code']))
                    {
                        echo site_url('dashboard');
                    }
                    else
                    {
                        echo site_url('panda_home');
                    } 
      ?>" class="logo">
     
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">B2B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-xs"><b style="font-size: 12px">B2B</b></span>

    </a> 
    <?php } ?>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <?php // echo var_dump($_SESSION) ?>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <?php  
          $user_guid = $_SESSION['user_guid'];

          /*$notifications = "SELECT * FROM notifications WHERE user_guid = '$user_guid' GROUP BY message ORDER BY created_at  DESC limit 100";*/

          $notifications = $this->db->query("SELECT 
  *,
  MIN(STATUS) AS check_status_color ,
  
IF(TIMEDIFF(NOW(),MAX(created_at))<'00:01:00','Just Now', #Sec
IF(TIMEDIFF(NOW(),MAX(created_at))<'01:00:00',
  CONCAT((CAST(DATE_FORMAT(TIMEDIFF(NOW(),MAX(created_at)),'%i') AS UNSIGNED)),' Minute Ago'),  #Min
IF(TIMEDIFF(NOW(),MAX(created_at))<'24:00:00',
  CONCAT(DATE_FORMAT(TIMEDIFF(NOW(),MAX(created_at)),'%H'),' Hour Ago'),  #Hour
IF(TIMEDIFF(NOW(),MAX(created_at))<'48:00:00',
  CONCAT(DATEDIFF(NOW(),MAX(created_at)),' Day Ago'), #Day
IF(TIMEDIFF(NOW(),MAX(created_at))>'48:00:00',
  CONCAT(DATEDIFF(NOW(),MAX(created_at)),' Days Ago'),  #Day
'Long time ago'))))) AS created_at,
MAX(created_at) AS created_at_count
FROM
  notifications 
WHERE user_guid = '$user_guid' 
GROUP BY message 
ORDER BY created_at_count DESC ,status ASC
LIMIT 5 ");

          //echo $this->db->last_query();die;

          //print_r($notifications->result());

          $new_notifications = $this->db->query("SELECT * FROM notifications WHERE user_guid = '$user_guid' AND status ='0' GROUP BY message limit 100 ")->num_rows();
          
           ?>

          <li id="notifications_button" class="dropdown notifications-menu">
            <?php if(isset($_SESSION['module_code'])) { ?>
            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

              <i class="fa fa-bell-o"></i>
              <?php if ($new_notifications != 0) { ?>
                <span id="notifications_new_count" class="label label-warning"><?php echo $new_notifications ?></span>
              <?php } ?>
              

            </a>
            <?php } ?>
            <ul class="dropdown-menu" >
              <!-- <li class="header">You have <?php echo $notifications->num_rows(); ?> notifications</li> -->
              <li class="header">Notifications <div class="tooltip9"><i class="fa fa-question-circle"></i>
      <span class="tooltiptext">From time to time we will update our notifications library to notify you about any matters, stay tuned!</span>
    </div></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="notifications_menu">

                  <input type="hidden" id="notifications_loading">

                  <?php if ($notifications->num_rows() == '0') {
                    echo '<li style="text-align: center;">You dont have any notifications.</li>';
                  } else {  ?>

                  <?php foreach ($notifications->result() as $key ) { ?>
                    <li>
                    <a href="<?php echo $key->link; ?>" title="<?php echo $key->message; ?> - <?php echo $key->created_at_count; ?>">
                      <i

                      <?php if ($key->check_status_color == '0'): ?>
                        style="color: #f39c12;"
                      <?php endif ?>

                       class="fa fa-<?php echo $key->icon; ?>"></i> <?php echo $key->message; ?><br><small class="pull-right"> <?php echo $key->created_at ?></small>
                    </a>

                  </li>
                  <?php } ?>
                  <?php } ?>
                  
                </ul>
              </li>
              <li class="footer"><!-- <a href="#">View all</a> --></li>
            </ul>
          </li>
          <li>
            <?php if(isset($_SESSION['module_code'])) { ?>
            <a  href=" <?php  if(in_array('DASH',$_SESSION['module_code']))
                    {
                        echo site_url('dashboard');
                    }
                    else
                    {
                        echo site_url('panda_home');
                    } 
      ?>" ><i class="fa fa-home"> </i> Home</a>
      <?php } ?>
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
              <?php if(isset($_SESSION['customer_guid'])) 
                  { 
              ?>
               
               <?php $name = $this->db->query("SELECT acc_name from acc where acc_guid = '".$_SESSION['customer_guid']."'")->row('acc_name')  ; ?>
               
               <?php 
                    } 
                ?>
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

                  <?php if(isset($name) == '1') 
                    {
                      echo $name;
                    }
                    else
                    {
                      echo '';
                    } 
                  ?>

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



    <?php if(isset($_SESSION['show_side_menu']) == '1') { ?>
      <?php 
        if(in_array('PPANEL',$_SESSION['module_code']))
        {
      ?>
         <li <?php if (preg_match("/general/i", $this->uri->segment(1)) ||  preg_match("/panda_grda/i",$this->uri->segment(1)) || preg_match("/panda_prdncn/i", $this->uri->segment(1)) || preg_match("/panda_pdncn/i", $this->uri->segment(1)) || preg_match("/panda_pci/i", $this->uri->segment(1)) ||  preg_match("/panda_di/i",$this->uri->segment(1))    )   
        echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <?php 
            if(in_array('VPO',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_po_2')?>" ><i class="fa fa-circle-o"></i>Purchase Order (PO)</a></li>
            <?php } ?>
            
            <?php 
            if(in_array('VGR',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_gr') ?>"><i class="fa fa-circle-o">
             </i>Goods Received Note (GRN)</a></li>
             <?php } ?>

            <?php 
            if(in_array('VRB',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_return_collection')?>"><i class="fa fa-circle-o"></i>Stock Return Batch Document(RB)</a></li> 
            <?php } ?>

            <?php 
            if(in_array('VPRDN',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_prdncn')?>"><i class="fa fa-circle-o"></i>Purchase Return DN/CN (PRDN/CN)</a></li>
            <?php } ?>
            <!-- dbnotemain type = S  union cnnotemain type = 'S' -->

          </ul>
        </li>
        <?php } ?>
        <?php if(!in_array('VTDPPANEL',$_SESSION['module_code']))
        {
        ?>        
        <li <?php if (  preg_match("/panda_pdncn/i", $this->uri->segment(1)) || preg_match("/panda_pci/i", $this->uri->segment(1)) ||  preg_match("/panda_di/i",$this->uri->segment(1))    )   
        echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-download"></i>
            <span>To Download</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">   

            <?php 

            if(in_array('VTGR',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_gr_download')?>"><i class="fa fa-circle-o"></i>Goods Received Note (GRN)</a></li>
            <?php } ?>

            <?php 

            if(in_array('VGRDA',$_SESSION['module_code']) && $_SESSION['customer_guid'] != '13EE932D98EB11EAB05B000D3AA2838A')
              {
            ?>
            <li ><a href="<?php echo site_url('panda_grda')?>"><i class="fa fa-circle-o"></i>Goods Received Diff Advice (GRDA)</a></li>
            <?php } ?>

 <?php 
            if(in_array('VTPRDN',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_prdncn')?>"><i class="fa fa-circle-o"></i>Purchase Return DN/CN (PRDN/CN)</a></li>
            <?php } ?>

            <?php 

            if(in_array('VPDNCN',$_SESSION['module_code']))
              {
            ?>
            <li ><a href="<?php echo site_url('panda_pdncn')?>"><i class="fa fa-circle-o"></i>Purchase DN/CN (PDN/CN)</a></li>
             <?php } ?>

            <?php 

            if(in_array('VPCI',$_SESSION['module_code']) && $_SESSION['customer_guid'] != 'D361F8521E1211EAAD7CC8CBB8CC0C93')
              {
            ?>
            <li ><a href="<?php echo site_url('panda_pci')?>"><i class="fa fa-circle-o"></i>Promotion Claim Tax Invoice (PCI)</a></li>
            <!-- promo_taxinv -->
            <?php } ?>

            <?php 

            if(in_array('VDI',$_SESSION['module_code']) && $_SESSION['customer_guid'] != 'D361F8521E1211EAAD7CC8CBB8CC0C93')
              {
            ?>
            <li ><a href="<?php echo site_url('panda_di')?>"><i class="fa fa-circle-o"></i>Display Incentive Tax Invoice (DI)</a></li>
            <!-- `discheme_taxinv` -->
            <?php } ?>
          </ul>
        </li>
      <?php } ?>
          <?php if(in_array('OD',$_SESSION['module_code']))
          {
            if($this->session->userdata('other_doc') != '' && $this->session->userdata('other_doc') != null)
          {
          ?>
        <li <?php if (  preg_match("/panda_pdncn/i", $this->uri->segment(1)) || preg_match("/panda_pci/i", $this->uri->segment(1)) ||  preg_match("/panda_di/i",$this->uri->segment(1))    )   
        echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
            <span>Accounting Documents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>


          <ul class="treeview-menu">   
            <?php foreach($this->session->userdata('other_doc') as $row)
            {
            ?>
                <li ><a href="<?php echo site_url('panda_other_doc').'?code='.$row->code?>"><i class="fa fa-circle-o"></i><?php echo $row->description;?></a></li>
            <?php
            }
            ?>
<!--             <li ><a href="<?php echo site_url('panda_other_doc').'?code=SCM'?>"><i class="fa fa-circle-o"></i>Sales CrMemo</a></li>
            <li ><a href="<?php echo site_url('panda_other_doc').'?code=SCM'?>"><i class="fa fa-circle-o"></i>Purchase Debit Memo</a></li> -->

          </ul>

        </li>
          <?php
          }
        }
          ?>        

      <?php 
        if(in_array('VJR',$_SESSION['module_code']) && $_SESSION['customer_guid'] != '13EE932D98EB11EAB05B000D3AA2838A')
        {
        ?>
          <!-- <span id="jasper_menu"></span> -->
        <?php
        }
      ?>

 <?php  if(in_array('CS',$_SESSION['module_code'])){;?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list-alt"></i>
            <span>Consignment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
<?php  if(in_array('CSST',$_SESSION['module_code'])){;?>            
<!--             <li class="treeview">
              <a href="<?php echo site_url('Consignment_report')?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment Sales Report</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li> -->            
<!--             <li class="treeview">
              <a href="<?php echo site_url('Consignment_report/consignment_location')?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment Sales Statement</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li> -->
             <li class="treeview">
              <a href="<?php echo site_url('Consignment_report/consignment_sales_statement_by_supcode?status=&loc=HQ&period_code='.date("Y-m",strtotime("-1 month")))?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment Sales Statement</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>            
<?php };?> 
            
            <li class="treeview">
              <a href="<?php echo site_url('Consignment_report/consignment_report_mul_loc?link=consignment_sales_report')?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment Sales Report</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo site_url('Consignment_report/consignment_report_mul_loc?link=consignment_sales_report_summary')?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment Sales Report Summary</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>
          </ul>
        </li> 
        <?php };?> 
<?php $menu = $this->header_data->menu_child('external_doc','LV');
if($menu->num_rows() > 0)
{
  $show_menu_child = 1;
}
else
{
  $show_menu_child = 0;
}
?>
<?php if(in_array('VEXD',$_SESSION['module_code']) && $show_menu_child == 1)
{
;?>
    <li <?php if (preg_match("/External/i", $this->uri->segment(1))){echo 'class="treeview active"'; } ?>>
          <a href="#">
            <i class="glyphicon glyphicon-open-file"></i>
            <span>External Doc</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $menu = $this->header_data->menu_child('external_doc','LV');
            foreach($menu->result() as $row)
            {
            ?>
                  <li ><a href="<?php echo site_url($row->link).'?parameter='.$row->doc_type?>" ><i class="fa fa-circle-o"></i>
                    <span><?php print_r($row->link_description);?></span>
                    <span class="pull-right-container">
                    </span>
                  </a></li>
            <?php 
              }
            ?>

            <?php
              if (in_array('IAVA', $_SESSION['module_code'])) {
              ?>
                <li class="treeview">
                  <a href="<?php echo site_url('External_doc/misc_log') ?>">
                    <i class="fa fa-circle-o"></i>
                    <span>Miscellaneous Document Log</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>
              <?php
              }
              ?>

          </ul>
    </li>
<?php
}
?>

      <?php 
        if(in_array('VPS',$_SESSION['module_code']) || in_array('VMS',$_SESSION['module_code']) || in_array('VSUP',$_SESSION['module_code']) || in_array('VUL',$_SESSION['module_code']) || in_array('VFMS',$_SESSION['module_code']) || in_array('VTS',$_SESSION['module_code']) )
        /*Please change VPS to make sure is system admin*/
        {
          ?>

     <li <?php if (preg_match("/Profile_setup/i", $this->uri->segment(1)) ||  preg_match("/Acc_master_setup/i",$this->uri->segment(1)) || preg_match("/Module_setup/i", $this->uri->segment(1)) || preg_match("/Supplier_setup/i", $this->uri->segment(1)) || preg_match("/User_log/i", $this->uri->segment(1)))   
        echo 'class="treeview active"'; ?> >
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Super Admin Setup</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <?php 
        if(in_array('VPS',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Profile_setup')?>">
              <i class="fa fa-newspaper-o"></i>
              <span>Profile Setup</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>


        <?php 
        if(in_array('VPS',$_SESSION['module_code']))
        /*Please change VPS to make sure is system admin*/
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Acc_master_setup')?>">
              <i class="fa fa-university"></i>
              <span>Account Master Setup</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>
        
        <?php 
        if(in_array('VMS',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Module_setup')?>">
              <i class="fa fa-users"></i>
              <span>Module Setup</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo site_url('Module_setup_new')?>">
              <i class="fa fa-users"></i>
              <span>Module Setup New</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>

        <?php 
        if(in_array('VSUP',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Supplier_setup')?>?customer_guid=<?php echo $_SESSION['customer_guid'] ?>">
              <i class="fa fa-truck"></i>
              <span>Supplier Setup</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>

        <?php 
        if(in_array('VFMS',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
              <a href="<?php echo site_url('CusAdmin_controller/faq_manual_guide_setup')?>">
                <i class="fa fa-book"></i>
                <span>FAQ and Manual Guide Setup</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
          <?php
        }
        ?>
        <?php 
        if(in_array('VTS',$_SESSION['module_code']))
        {
          ?>
        <li class="treeview">
              <a href="<?php echo site_url('Ticket/ticket_setup')?>">
                <i class="fa fa-ticket"></i>
                <span>Ticket Setup</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <?php
        }
        ?>
     
        <?php 
        if(in_array('VSUP',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Supplier_setup_new')?>?customer_guid=<?php echo $_SESSION['customer_guid'] ?>">
              <i class="fa fa-truck"></i>
              <span>Supplier Setup New</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo site_url('Query_outstanding/reminder')?>">
              <i class="fa fa-truck"></i>
              <span>Reminder Setting</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>          
          <?php
        }
        ?>        

        <?php 
        if(in_array('VSUP',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Troubleshoot_po')?>?customer_guid=<?php echo $_SESSION['customer_guid'] ?>">
              <i class="fa fa-truck"></i>
              <span>Troubleshoot PO</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>

        <?php 
        if(in_array('VSUP',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('Troubleshoot_po/troubleshoot_report')?>">
              <i class="fa fa-truck"></i>
              <span>Troubleshoot Report</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>   
        
        <?php 
        if(in_array('VUL',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('User_log')?>">
              <i class="fa fa-user-secret"></i>
              <span>User Log</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>

        <?php 
        if(in_array('VSUP',$_SESSION['module_code']))
        {
          ?>
          <li class="treeview">
            <a href="<?php echo site_url('amend_doc/amend_sites')?>">
              <i class="fa fa-file"></i>
              <span>Amend Document</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          <?php
        }
        ?>   

      </ul>
    </li>
        <?php
        }
        ?>
         <?php 
        if(in_array('VREP',$_SESSION['module_code']))
        {
          ?>  

          <li <?php if (preg_match("/Report_controller/i", $this->uri->segment(1))  ||  preg_match("/Report_controller/i",$this->uri->segment(1))  )   
        echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

<?php $find_title = $this->db->query("SELECT * FROM lite_b2b.`set_report_query` WHERE report_type = 'excel' AND active = '1' ORDER BY seq"); ?>
<?php  foreach ($find_title->result() as $row) {  ?>
          <li class="treeview">
            <a href="<?php echo site_url('Report_controller/gen_rep?report_id='.$row->report_id);  ?>">
              <i class="fa fa-file-excel-o"></i>
              <span><?php echo $row->report_name ?></span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
<?php } ?>
<!-- nothing below for this section -->
        </ul>
      </li>

 <?php } ?>  

              <?php  if(in_array('CUSADMIN',$_SESSION['module_code']))
        { ?>

          <li <?php if (preg_match("/CusAdmin_controller/i", $this->uri->segment(2))   )   
          echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-feed"></i>
            <span>Admin Panel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="<?php echo site_url('CusAdmin_controller/annoucement')?>">
                <i class="fa fa-bullhorn"></i>
                <span>Annoucement</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo site_url('CusAdmin_controller/supplier_checklist')?>">
                <i class="fa fa-list-ol"></i>
                <span>Supplier Checklist</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo site_url('CusAdmin_controller/cusadmin_settings')?>">
                <i class="fa fa-cogs"></i>
                <span>Retailer General Settings</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo site_url('Consignment_report/consignment_e_inv_export?period_code='.date("Y-m",strtotime("-1 month")))?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment E-inv Export</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>
                        
<!--              <li class="treeview">
              <a href="<?php echo site_url('Consignment_report/consignment_sales_statement_by_supcode?status=&loc=HQ&period_code='.date("Y-m",strtotime("-1 month")))?>">
                <i class="fa fa-circle-o"></i>
                <span>Consignment Sales Statement New</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li> -->

            <li class="treeview">
              <a href="<?php echo site_url('Panda_other_doc/upload_acc_excel')?>">
                <i class="fa fa-circle-o"></i>
                <span>Upload Accounting Doc</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>              
            
          </ul>
        </li>

      <?php } ?>

        <?php 
        if(in_array('TBEMAIL',$_SESSION['module_code']))
        {
          ?>

          <li <?php if (preg_match("/Email_controller/i", $this->uri->segment(1)) && preg_match("/Export_controller/i", $this->uri->segment(2)) ||  preg_match("/Export_controller/i",$this->uri->segment(1)) || preg_match("/Email_controller/i", $this->uri->segment(1)) || preg_match("/Email_controller/i", $this->uri->segment(1)) || preg_match("/Email_controller/i", $this->uri->segment(1))|| preg_match("/Report_controller/i", $this->uri->segment(1)) )   
        echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Troubleshooter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="treeview">
            <a href="<?php echo site_url('Restreport')?>">
              <i class="fa fa-cogs"></i>
              <span>Troubleshoot Document</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
           
          <li class="treeview">
            <a href="<?php echo site_url('Email_controller/subscription')?>">
              <i class="fa fa-cogs"></i>
              <span>Email Subscription</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>

          <li class="treeview">
            <a href="<?php echo site_url('Email_controller_new/subscription')?>">
              <i class="fa fa-cogs"></i>
              <span>Email Subscription New</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>          

           <li class="treeview">
            <a href="<?php echo site_url('Report_jasper_controller/subscription')?>">   
              <i class="fa fa-newspaper-o"></i>   
              <span>Report Subscription</span>    
              <span class="pull-right-container">   
                <!-- <i class="fa fa-angle-left pull-right"></i> -->    
              </span>   
            </a>    
          </li>   
          

          <li class="treeview">
            <a href="<?php echo site_url('Report_controller/main')?>">
              <i class="fa fa-line-chart"></i>
              <span>Report Setup</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>
          
          <li class="treeview">
            <a href="<?php echo site_url('Email_controller/setup')?>">
              <i class="fa fa-newspaper-o"></i>
              <span>Troubleshoot Email</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>

          <li class="treeview">
            <a href="<?php echo site_url('Export_controller/main')?>">
              <i class="fa fa-file-excel-o"></i>
              <span>Troubleshoot Excel</span>
              <span class="pull-right-container">
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </span>
            </a>
          </li>

          <li class="treeview">            
            <a href="<?php echo site_url('fax/setup')?>">   
              <i class="fa fa-newspaper-o"></i>   
              <span>Troubleshoot Fax</span>   
              <span class="pull-right-container">   
                <!-- <i class="fa fa-angle-left pull-right"></i> -->    
              </span>   
            </a>    
          </li>

        <?php  if(in_array('VJRS',$_SESSION['module_code']))
        { 
          ?>
          <li class="treeview">
            <a href="<?php echo base_url('index.php/Report_jasper_controller/setting')?>">
              <i class="fa fa-cogs"></i>
              <span>Jasper Report(Setting)</span>
            </a>
          </li>

          <li class="treeview">
            <a href="<?php echo base_url('index.php/Report_jasper_controller/subscription')?>">
              <i class="fa fa-cogs"></i>
              <span>Jasper Report(User)</span>
            </a>
          </li>
          <?php
        }
        ?>

      </li>
    </ul>

      

      <?php } ?>
      <!-- invoice details -->
        <?php  if(in_array('VIB',$_SESSION['module_code']) && $_SESSION['customer_guid'] != '599348EDCB2F11EA9A81000C29C6CEB2')
        { 
          ?>        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-inbox"></i>
            <span>B2B Monthly Billing Invoices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php  if(in_array('VIBDBR',$_SESSION['module_code']))
            {
            ?>
            <li class="treeview">
              <a href="<?php echo site_url('b2b_billing_invoice_controller/invoices_break')?>">
                <i class="fa fa-circle-o"></i>
                <span>Invoices By Retailer</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <?php
            }
            ?>
            <?php if ($_SESSION['user_group_name'] != "CUSTOMER_ADMIN" && $_SESSION['user_group_name'] != "CUSTOMER_ADMIN_NO_HIDE" && $_SESSION['user_group_name'] != "CUSTOMER_CLERK" && $_SESSION['user_group_name'] != "CUSTOMER_ADMIN_FINANCE")
        { ?>
            <li class="treeview">
              <a href="<?php echo site_url('b2b_billing_invoice_controller/invoices')?>">
                <i class="fa fa-circle-o"></i>
                <span>Invoices</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
          <?php } ?>
            <li class="treeview">
              <a href="<?php echo site_url('b2b_billing_invoice_controller/invoices_detail?type=invoices_detail')?>">
                <i class="fa fa-circle-o"></i>
                <span>Invoice Break Down</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <?php  if(in_array('VACCDOC',$_SESSION['module_code']))
            {
            ?>
            <li class="treeview">
              <a href="<?php echo site_url('b2b_billing_invoice_controller/official_receipt')?>">
                <i class="fa fa-circle-o"></i>
                <span>Official Receipt</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <?php
            }
            ?>
            <?php  if(in_array('VACCSTAT',$_SESSION['module_code']))
            {
            ?>
            <li class="treeview">
              <a href="<?php echo site_url('b2b_billing_invoice_controller/statement')?>">
                <i class="fa fa-circle-o"></i>
                <span>Account Statement</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <?php
            }
            ?> 
            <li class="treeview">
              <a href="<?php echo site_url('b2b_billing_invoice_controller/remittance')?>">
                <i class="fa fa-circle-o"></i>
                <span>Remittance</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>                        
          </ul>
        </li>
        <?php 
        }
        ?>        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-question-circle"></i>
            <span>FAQ & Manual Guide</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="<?php echo site_url('faq')?>">
                <i class="fa fa-circle-o"></i>
                <span>Frequently Asked Questions(FAQ)</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo site_url('manual_guide')?>">
                <i class="fa fa-circle-o"></i>
                <span>Manual Guide Info</span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>

          </ul>
        </li>

<?php if(in_array('VTH',$_SESSION['module_code']))  
{
?>
            <li class="treeview">
              <a href="<?php echo site_url('Ticket')?>">
                <i class="fa fa-comments-o" aria-hidden="true">

                  <?php if ($_SESSION['user_group_name'] == "SUPER_ADMIN") { ?>
                    <?php $ticket_new_count = $this->db->query("SELECT * FROM ticket WHERE ticket_status = 'New'")->num_rows(); ?>
                      <?php if ($ticket_new_count != '0') { ?>
                        <span class="label label-danger" style="padding: 3px;right: 0;position: absolute;"><?php echo $ticket_new_count ?></span>
                      <?php } ?>
                  <?php } ?>
                </i>
                <span>Helpdesk</span>
   
              </a>
            </li> 
<?php
}
?>            


            <li class="treeview">
            <a href="#">
              <i class="fa fa-bullhorn"></i>
              <span>Email Report Setup</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview">
                <a href="<?php echo site_url('Email_report/email_report')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Email Report</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>

              <li class="treeview">
                <a href="<?php echo site_url('Email_report/email_reset_list')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Email Reset List</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>

              </ul>
            </li>

            <li class="treeview">
            <a href="#">
              <i class="fa fa-address-card-o" aria-hidden="true"></i>
              <span>Online Form Setup</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview">
                <a href="<?php echo site_url('Registration_new/register_admin')?>">
                <i class="fa fa-circle-o"></i>

                  <?php if ($_SESSION['user_group_name'] == "SUPER_ADMIN") { ?>
                    <?php $register_new_count = $this->db->query("SELECT * FROM register_new a WHERE a.form_status IN ('New')")->num_rows(); ?>
                      <?php if ($register_new_count != '0') { ?>
                        <span class="label label-danger" style="padding: 3px;right: 0;position: absolute;"><?php echo $register_new_count ?></span>
                      <?php } ?>
                  <?php } ?>
                </i>
                <span>Online Registration Application</span>
                </a>
              </li>

              <li class="treeview">
                <a href="<?php echo site_url('Registration_new/register_vendor')?>">
                <i class="fa fa-circle-o"></i>

                  <?php if ($_SESSION['user_group_name'] == "SUPER_ADMIN") { ?>
                    <?php $register_new_count = $this->db->query("SELECT * FROM register_add_user_main a WHERE a.form_status IN ('New')")->num_rows(); ?>
                      <?php if ($register_new_count != '0') { ?>
                        <span class="label label-danger" style="padding: 3px;right: 0;position: absolute;"><?php echo $register_new_count ?></span>
                      <?php } ?>
                  <?php } ?>
                </i>
                <span>User Account Creation Form</span>
                </a>
              </li>

              <li class="treeview">
               <a href="<?php echo site_url('Training_user/training_admin')?>">
                <i class="fa fa-circle-o"></i>

                  <?php if ($_SESSION['user_group_name'] == "SUPER_ADMIN") { ?>
                    <?php $register_new_count = $this->db->query("SELECT * FROM training_user_main a WHERE a.form_status IN ('New')")->num_rows(); ?>
                      <?php if ($register_new_count != '0') { ?>
                        <span class="label label-danger" style="padding: 3px;right: 0;position: absolute;"><?php echo $register_new_count ?></span>
                      <?php } ?>
                  <?php } ?>
                </i>
                <span>Online Training Application</span>
                </a>
              </li> 

              <li class="treeview">
                <a href="<?php echo site_url('Registration_new/one_off_admin') ?>">
                  <i class="fa fa-circle-o"></i>
                  <span>ONE OFF Application</span>
                </a>
              </li>

              
              <li class="treeview">
                <a href="<?php echo site_url('Registration_upload_doc') ?>">
                  <i class="fa fa-circle-o">
                  <?php if ($_SESSION['user_group_name'] == "SUPER_ADMIN") { ?>
                    <?php $upload_term_count = $this->db->query("SELECT * FROM lite_b2b.reg_upload_doc WHERE `status` = 'Pending'")->num_rows(); ?>
                    <?php if ($upload_term_count != '0') { ?>
                      <span class="label label-danger" style="padding: 3px;right: 0;position: absolute;"><?php echo $upload_term_count ?></span>
                    <?php } ?>
                  <?php } ?>
                  </i>
                  <span>Upload Term Sheet</span>
                </a>
              </li>

              </ul>
            </li>

            <li class="treeview">
            <a href="#">
              <i class="fa fa-file-archive-o"></i>
              <span>Propose PO Setup</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview">
                <a href="<?php echo site_url('Propose_po/propose_po_details')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Propose PO</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>

              <li class="treeview">
                <a href="<?php echo site_url('Propose_po/propose_record')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Propose PO Record</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>

              <li class="treeview">
                <a href="<?php echo site_url('Propose_po/propose_approval')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Propose PO Approval</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>

              <li class="treeview">
                <a href="<?php echo site_url('Propose_po/propose_po_settings')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Propose PO Settings</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>

              </ul>
            </li>

           <?php if((in_array('VFMS',$_SESSION['module_code']) ) && (($_SESSION['customer_guid']) == '8D5B38E931FA11E79E7E33210BD612D3' OR ($_SESSION['customer_guid']) == '13EE932D98EB11EAB05B000D3AA2838A'))
          {
          ?>
           <li class="treeview">
                    <a href="#">
                      <i class="fa fa-cloud-upload"></i>
                      <span>Policy/Procedures</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                
                <li class="treeview">
                        <a href="<?php echo site_url('Sign_upload_doc/upload_docs_user')?>">
                          <i class="fa fa-circle-o"></i>
                          <span>Upload Document</span>
                          <span class="pull-right-container">
                          </span>
                        </a>
                      </li>

                       <?php if(in_array('IAVA',$_SESSION['module_code']))  
                      {
                      ?>
                      <li class="treeview">
                        <a href="<?php echo site_url('Sign_upload_doc')?>">
                          <i class="fa fa-circle-o"></i>
                          <span>Documents Listing</span>
                          <span class="pull-right-container">
                          </span>
                        </a>
                      </li>
                      <?php
                      }
                      ?>

                      </ul>
                    </li>
          <?php
          }
          ?>  

          <?php if((in_array('VFMS',$_SESSION['module_code']) ) && (($_SESSION['customer_guid']) == '8D5B38E931FA11E79E7E33210BD612D3' OR ($_SESSION['customer_guid']) == '13EE932D98EB11EAB05B000D3AA2838A'))
          {
          ?>
            <li class="treeview">
              <a href="#">
                 <i class="fa fa-file-text-o"></i>
                 <span>Reset/Hide Documents</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
              <ul class="treeview-menu">
                  
              <li class="treeview">
                <a href="<?php echo site_url('amend_doc/amend_sites')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Hide Document</span>
                  <span class="pull-right-container">
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                  </span>
                </a>
              </li>

              <?php if(in_array('IAVA',$_SESSION['module_code']))  
              {
              ?>
              <li class="treeview">
                <a href="<?php echo site_url('amend_doc/amend_doc_list')?>">
                  <i class="fa fa-circle-o"></i>
                  <span>Hide Document Lists</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>
              <?php
              }
              ?>
              </ul>
            </li>
          <?php
          }
          ?>  

          <?php if ((in_array('VEL', $_SESSION['module_code'])) || (in_array('IAVA', $_SESSION['module_code']))) {
      ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>EDI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="<?php echo site_url('Edi') ?>">
                <i class="fa fa-circle-o"></i>
                <span>EDI LOG</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo site_url('Edi_setup') ?>">
                <i class="fa fa-circle-o"></i>
                <span>EDI Setup</span>
                <span class="pull-right-container">
                  <!-- <i class="fa fa-angle-left pull-right"></i> -->
                </span>
              </a>
            </li>
            <!-- <li class="treeview">
              <a href="<?php echo site_url('Edi_itemmaster') ?>">
                <i class="fa fa-circle-o"></i>
                <span>EDI Itemmaster</span>
                <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
        </li> -->
          </ul>
        </li>
      <?php
            }
      ?>

      </ul>
      <?php } 
      else
      {
        ?>
        <?php if ($_SESSION['user_group_name'] != "CUSTOMER_ADMIN" && $_SESSION['user_group_name'] != "CUSTOMER_ADMIN_NO_HIDE" && $_SESSION['user_group_name'] != "CUSTOMER_CLERK" && $_SESSION['user_group_name'] != "CUSTOMER_ADMIN_FINANCE") { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-inbox"></i>
              <span>B2B Monthly Billing Invoices</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li class="treeview">
                <a id="statement" style="cursor: pointer;">
                  <i class="fa fa-circle-o"></i>
                  <span>Account Statement</span>
                  <span class="pull-right-container">
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                  </span>
                </a>
              </li>
            </ul>
          </li>
        <?php
        }
      } ?>

      

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
   
