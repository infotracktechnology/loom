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
  <form method="post" id="myForm" action="<?php echo base_url("material/{$material->material_id}/update");?>">
 
               <div class="row">
                   <div class="col-md-12">
                       <h4 class="text-dark">Edit Material</h4>
                   </div>
               </div>
           

               <div class="row">
               <div class="col-md-3 form-group">
                 <label class="form-label">Material Name</label>
                 <input type="text" name="material_name" value="<?php echo $material->material_name ?? '';?>" id="material_name" class="form-control form-control-sm  text-capitalize" required>
                

               </div>



               <div class="col-md-3 form-group" id="count">
                 <label class="form-label" >Count</label>
                 <input type="text" name="count"  value="<?php echo $material->count ?? '';?>" class="form-control form-control-sm" />
               </div>


               <div class="col-md-3 form-group" id="material_category">
                  <label class="form-label">Material Category</label>
                 <input type="text" name="material_category"  value="<?php echo $material->material_category ?? '';?>" class="form-control form-control-sm" >

               </div>



               <div class="col-md-3 form-group" id="material_colour">
                 <label class="form-label">Material Colour</label>
                 <input type="text" name="material_colour"  value="<?php echo $material->material_colour ?? '';?>" class="form-control form-control-sm" >

               </div>

               <div class="col-md-3 form-group" id="material_colour_code">
                 <label class="form-label">Material Colour Code</label>
                 <input type="text" name="material_colour_code" value="<?php echo $material->material_colour_code ?? '';?>" class="form-control form-control-sm" >

               </div>



               <div class="col-md-3 form-group" id="warp_ends">
                 <label class="form-label">Warp Ends</label>
                 <input type="text" name="warp_ends" value="<?php echo $material->warp_ends ?? '';?>" class="form-control form-control-sm ">

               </div>



               <div class="form-group col-md-3" id="bobbin_ends">
                 <label class="form-label">Bobbin Ends</label>
                 <input type="text" name="bobbin_ends" value="<?php echo $material->bobbin_ends ?? '';?>" class="form-control form-control-sm">

               </div>

               

               <div class="form-group col-md-3">

                 <label class="form-label">Measurement </label>

                  <select class="form-control form-control-sm" name="measurement" required>

                 <option value=''>--select--</option>
                 <option value="kg" <?php echo $material->measurement == 'kg' ? 'selected' : '';?>>kg</option>
                 <option value="Meter" <?php echo $material->measurement == 'Meter' ? 'selected' : '';?>>Meter</option>
                </select>

                

               </div>


               <div class="form-group col-md-3">
                 <label class="form-label">Opening Stock in(kg & Meter)</label>
                <input type="number"  name="opening_stock" value="<?php echo $material->opening_stock ?? '';?>" class="form-control form-control-sm numberk"  min="0" />
               </div>

               <div class="form-group col-md-3">
                <label class="form-label">Looms </label>
                <select class="form-control form-control-sm select2" name="loom[]" multiple required>
               <?php foreach($looms as $key => $row) { ?>
                <option value='<?php echo $row->loom_id;?>'><?php echo $row->Loom_No;?></option>
               <?php } ?>
                </select>
 
                </div>

               </div>
               <div class="row my-4">
               <div class="form-group col-md-6">
              
 
             <button type="submit"  class="btn btn-primary width-per-20">Submit</button>

             
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
$('#material_name').change(function(event) {
    var material_name = $(this).val().toUpperCase();
    $('#material_colour, #material_colour_code, #warp_ends, #bobbin_ends, #count, #material_category').hide();

    if (material_name === "WEFT YARN") {
        $('#count, #material_category').show();
        $(`input[name="material_colour"],input[name="material_colour_code"],input[name="warp_ends"],input[name="bobbin_ends"]`).val("");
    } else if (material_name === "WARP YARN") {
        $('#warp_ends').show();
        $('#count, #material_category').show();
        $(`input[name="material_colour"],input[name="material_colour_code"],input[name="bobbin_ends"]`).val("");
    } else if (material_name === "BOBBIN") {
        $('#material_colour, #material_colour_code, #bobbin_ends').show();
        $(`input[name="count"],input[name="material_category"],input[name="warp_ends"]`).val("");
    } else if (material_name === "WEFT COLOR") {
        $('#material_colour, #material_colour_code').show();
        $(`input[name="count"],input[name="material_category"],input[name="warp_ends"],input[name="bobbin_ends"]`).val("");
    } else {
        
        $('#material_colour, #material_colour_code, #count, #material_category, #warp_ends, #bobbin_ends').show();
    }
});

$('#material_name').trigger('change');

</script>


</body>
</html>



