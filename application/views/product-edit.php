
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
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/select2/dist/css/select2.min.css">
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
  <form method="post" id="myForm" action="<?php echo base_url("product/{$product->id}/update");?>">
  <div class="row">
  <div class=" col-md-12 form-group">
    <h6>Edit Product</h6>
  </div>
 <div class="col-md-3 form-group">
     <label>Product Name</label>
     <input type="text" name="product_name" value="<?php echo $product->product_name ?? '';?>"  class="form-control form-control-sm text-capitalize" required>
 

 </div>

    <div class="col-md-3 form-group">
     <label>Warp Ends</label>
   <input type="text" name="warp_ends" value="<?php echo $product->warp_ends ?? '';?>" class="form-control form-control-sm">

 </div>


 <div class="col-md-3 form-group">
    <label>Warp Yarn</label>
   <select  name="warp_yarn"  class="form-control form-control-sm" required>
    <option value="">Select</option>
    <?php foreach($warp_yarn as $row){?>
    <option value="<?php echo $row->material_id;?>" <?php echo $product->warp_yarn == $row->material_id ? 'selected' : '';?>><?php echo $row->count;?></option>
    <?php }?>
   </select>
 </div>


 <div class="col-md-3 form-group">
    <label>Warp Yarn</label>
   <select  name="weft_yarn"  class="form-control form-control-sm" required>
    <option value="">Select</option>
    <?php foreach($weft_yarn as $row){?>
    <option value="<?php echo $row->material_id;?>" <?php echo $product->weft_yarn == $row->material_id ? 'selected' : '';?>><?php echo $row->count;?></option>
    <?php }?>
   </select>
 </div>

  <div class="col-md-3 form-group">
   <label>Reed</label>
   <input type="number" name="reed" value="<?php echo $product->reed ?? '';?>" class="form-control form-control-sm" />

 </div>



 <div class="col-md-3 form-group">
    <label>Pick</label>
   <input type="number" name="pick" value="<?php echo $product->pick ?? '';?>" class="form-control form-control-sm" />

 </div>

   <div class="col-md-3 form-group">
   <label>Size</label>
   <input type="text" name="size" value="<?php echo $product->size ?? '';?>" class="form-control form-control-sm" />

 </div>


  



  <div class="col-md-3 form-group">
   <label>Color Code</label>
   <input type="text" name="color_code" value="<?php echo $product->color_code ?? '';?>" class="form-control form-control-sm">

 </div>


  <div class="col-md-3 form-group">
   <label>Coolie</label>
   <input type="number" step="any" min="1" name="coolie" value="<?php echo $product->coolie ?? '';?>" class="form-control form-control-sm">

 </div>


 <div class="col-md-4 form-group">
   <label>Bobbin Colors</label>
   
   <select  name="bobbins[]" multiple  class="form-control form-control-sm select2">
    <option value="">Select</option>
    <?php foreach($bobins as $row){?>
    <option value="<?php echo $row->material_id;?>" <?php echo in_array($row->material_id, $select_bobins) ? 'selected' : '';?>><?php echo $row->material_colour;?></option>
    <?php }?>
   </select>

 </div>


 <div class="col-md-4 form-group">
   <label>Looms</label>
   <select  name="looms[]"  multiple class="form-control form-control-sm select2" required>
    <option value="">Select</option>
    <?php foreach($looms as $row){?>
    <option value="<?php echo $row->loom_id;?>" <?php echo in_array($row->loom_id, $select_looms) ? 'selected' : '';?>><?php echo $row->Loom_No;?></option>
    <?php }?>
   </select>
 </div>


 </div>
 <div class="row my-4">
 <div class="form-group col-md-6">



<button type="submit"  class="btn btn-primary">Submit</button>


</div>
</div>
</form>
</div>
</div>
</section>


<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

</script>


</body>
</html>



