<div class="col-md-12">
   <?php 
   if($this->session->flashdata('login_message')){
 ?>
   <div class="alert alert-success"  style="display:none;"> 
     <?php  echo $this->session->flashdata('login_message'); ?>
<?php    
} else if($this->session->flashdata('error')){
?>
 <div class = "alert alert-danger"  style="display:none;">
   <?php echo $this->session->flashdata('error'); ?>
 </div>
<?php } ?>
 </div>