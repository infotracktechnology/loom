
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Loom - Admin Dashboard  </title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/img/favicon.ico' />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    <?php include_once 'sidebar.php';?>
      <div class="main-content">

 <section class="section">
  <div class="section-body">
     <div class="card card-primary">
  <div class="card-body">
  <form method="post" id="myForm" action="<?php echo base_url("loom/store");?>" enctype="multipart/form-data">

<div class="row">
<div class="col-12">
      <h5 class="col-red">Add Loom</h5>
    </div>

<div class="col-md-3 form-group">
  <label class="form-label">Loom No</label>
  <input type="text" name="Loom_No" value="" id="Loom_No" class="form-control form-control-sm  text-capitalize" required="">
</div>


<div class="col-md-3 form-group">
  <label class="form-label">Brand</label>
  <input type="text" name="brand"  class="form-control form-control-sm  text-capitalize" required="">

</div>



<div class="col-md-3 form-group">
  <label class="form-label">Godown</label>
  <input type="text" name="Godown" value="" id="Godown" class="form-control form-control-sm ">
   

</div>



<div class="col-md-3 form-group">
<label class="form-label">Category</label>
<select name="Category" id="Category" class="form-control form-control-sm">
<option value="">Select a category</option>
<option value="Auto">Auto</option>
<option value="Semi auto">Semi auto</option>
<option value="Manual">Manual</option>

</select>
</div>

<div class="col-md-3 form-group">
   <label class="form-label">Size</label>
  <input type="text" name="Loom_Size" value="" id="Loom_Size" class="form-control form-control-sm ">

</div>

<div class="col-md-3 form-group">
  <label class="form-label">Pannel Board-Brand</label>
  <input type="text" name="Pannel_Board" value="" id="Pannel_Board" class="form-control form-control-sm ">

</div>



<div class="col-md-3 form-group">
  <label class="form-label">Year of Purchase</label>
  <input type="number" name="Year_of_Purchase" value=""  class="form-control form-control-sm ">

</div>


<div class="col-md-3 form-group">
  <label class="form-label">Cost</label>
  <input type="number" name="Cost" value="" id="Cost" class="form-control form-control-sm ">

</div>



<div class="col-md-3 form-group">
<label class="form-label">Status</label>
<select name="Status" id="Status" class="form-control form-control-sm">
<option value="">Select status</option>
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</div>


</div>
<div class="row my-4">
<div class="form-group col-md-6">
 
<button type="submit" class="btn btn-primary">Submit</button>

</div>
</div>
</form>
</div>
</div>
</section>

   <!-- build:js <?php echo base_url();?>assets/vendor/js/core.js -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/bundles/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

</script>


</body>
</html>



