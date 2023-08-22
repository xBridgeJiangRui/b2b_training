<footer class="main-footer">
    <div class="pull-right hidden-xs">
      Policy:&nbsp;<a href="https://b2b.xbridge.my/admin_files/Privacy%20Policy%20(ENGLISH).pdf" target="_blank">(EN)</a> <a href="https://b2b.xbridge.my/admin_files/Privacy%20Policy%20(BM).pdf" target="_blank">(BM)</a>&nbsp;<b>+6017-745-1185/+6017-715-9340</b>  &nbsp<img src="<?php echo base_url('asset/dist/img/rexbridge.JPG');?>" class="img-circle" alt="User Image" style="height: 32px">
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.xbridge.my">Rexbridge Sdn. Bhd.</a></strong> All rights
    reserved.
</footer>

<div class="modal alertmodal fade" id="alertmodal" role="dialog" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog  modal-sm alertmodal-dialog">
    <div class="modal-header" style="padding: 10px;background-color:white; ">
                <button type="button" class="close"  aria-label="Close">
                  <span aria-hidden="true">&nbsp;</span></button>
                  <h4 class="modal-title"></h4>
              </div>
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <p class="icons"></p><br>
          <p class="msg"></p>                    
        </center>
        
      </div>
      <div class="modal-footer button">
      </div>
    </div>
  </div>
</div> 

<div id="medium-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body table-responsive modal-control-size">
        
      </div>

      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<div id="static-medium-modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body table-responsive modal-control-size">
        
      </div>

      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<div id="xlarge-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body table-responsive modal-control-size">
        
      </div>

      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<div id="large-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body table-responsive modal-control-size">
        
      </div>

      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<div id="large-modal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>

      <div class="modal-body table-responsive modal-control-size">
        
      </div>

      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>


<!-- small modal -->
<div id="small-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body table-responsive" id="1233">
        <form id="small-modal-form">
         <div id="small-modal-fields"></div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success saveadd" onclick=""></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
alertmodal = function(data){

  $("#alertmodal").modal();
  $('#alertmodal .button').html('<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>');
  $('#alertmodal .icons').html('<i class="fa fa-exclamation-circle fa-5x" style="color:red;"></i>');
  $('#alertmodal .msg').html(data);
  $('#alertmodal .modal-title').html('Information');
};

confirmation_modal = function(data){
  $("#alertmodal").modal();
  $('#alertmodal .button').html('<button type="button" class="btn btn-danger pull-right btn-gap" data-dismiss="modal" style="float:left">No</button><button type="button" class="btn btn-success pull-right btn-gap" id="confirmation_yes" style="margin-right:5px;">Yes</button>');
  $('#alertmodal .icons').html('<i class="fa fa-question fa-5x"></i>');
  $('#alertmodal .msg').html(data);
  $('#alertmodal .modal-title').html('Confirmation');
  };

informationalertmodal = function(button,icons,msg,title){
    var modal = $("#alertmodal").modal();
    modal.find('.button').html(button);
    modal.find('.icons').html(icons);
    modal.find('.msg').html(msg);
    modal.find('.modal-title').html(title);
    $('.btn').button('loading');
  }//function information alert modal standarized method

</script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('asset/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>

<!-- Bootstrap 3.3.6 -->
<!-- closing this because this cause multiple input error -->
 <script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script> 

<!-- Slimscroll -->
<script src="<?php echo base_url('asset/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/dist/js/app.min.js')?>"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/dist/js/demo.js')?>"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url('asset/plugins/daterangepicker/daterangepicker.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('asset/plugins/datepicker/datepicker3.css');?>">
<script src="<?php echo base_url('asset/plugins/datepicker/bootstrap-datepicker.js');?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url('asset/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables/buttons.flash.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables/jszip.min.js')?>"></script>
<!--  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js" > </script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js" > </script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js" > </script>
 <script src=" https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js" > </script>
 <script src=" https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" > </script>
 -->
<script src="<?php echo base_url('asset/plugins/select2/select2.full.min.js')?>"></script>
<!--<script src="<?php echo base_url('asset/plugins/summernote/summernote.js')?>"></script>-->
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/summernote.js');?>"></script>
