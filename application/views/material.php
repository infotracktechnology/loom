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
  <div class="row">
    <div class="col-md-12">
     <div class="card card-primary">
  <div class="card-body">
     <form method="post" id="myForm" action="">

                    <div class="row">
                    <div class="col-md-3 form-group">
                      <label class="form-label">Material Name</label>
                      <input type="text" name="material_name" value="" id="material_name" class="form-control form-control-sm  text-capitalize" required>
                      <input type="hidden" name="material_id" >

                    </div>



                    <div class="col-md-3 form-group" id="count">
                      <label class="form-label" >Count</label>
                      <input type="text" name="count"  value="" class="form-control form-control-sm " />
                    </div>


                    <div class="col-md-3 form-group" id="material_category">
                       <label class="form-label">Material Category</label>
                      <input type="text" name="material_category"  value="" class="form-control form-control-sm" >

                    </div>



                    <div class="col-md-3 form-group" id="material_colour">
                      <label class="form-label">Material Colour</label>
                      <input type="text" name="material_colour"  value="" class="form-control form-control-sm" >

                    </div>

                    <div class="col-md-3 form-group" id="material_colour_code">
                      <label class="form-label">Material Colour Code</label>
                      <input type="text" name="material_colour_code" value="" class="form-control form-control-sm" >

                    </div>



                    <div class="col-md-3 form-group" id="warp_ends">
                      <label class="form-label">Warp Ends</label>
                      <input type="text" name="warp_ends" value="" class="form-control form-control-sm ">

                    </div>



                    <div class="form-group col-md-3" id="bobbin_ends">
                      <label class="form-label">Bobbin Ends</label>
                      <input type="text" name="bobbin_ends" value="" class="form-control form-control-sm">

                    </div>

                    

                    <div class="form-group col-md-3">

                      <label class="form-label">Measurement </label>

                       <select class="form-control form-control-sm" name="measurement" required>

                      <option value=''>--select--</option>
                      <option value="kg">kg</option>
                      <option value="Meter">Meter</option>
                     </select>

                     

                    </div>


                    <div class="form-group col-md-3">
                      <label class="form-label">Opening Stock in(kg & Meter)</label>
                     <input type="number" name="opening_stock" value="" class="form-control form-control-sm numberk"  min="0" />
                    </div>

                    </div>
                    <div class="row my-4">
                    <div class="form-group col-md-6">
                   

                     

                  <button type="button" id="update" name="update" class="btn btn-success width-per-20" style="display:none;">Update</button>


                  

                  <button type="button" name="submit" id="save" class="btn btn-primary width-per-20">Save</button>

                  
                </div>
              </div>
                </form>

                <div class="table-responsive">
                <table id="myTable" class="table table-striped table-sm" style="width:100%;overflow-x:auto;">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Material Name</th>
        <th scope="col">Count</th>
        <th scope="col">Material Category</th>
        <th scope="col">Measurement</th>
        <th scope="col">Opening Stock in(kg & Meter)</th>
        <th scope="col">Action</th>
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($materials as $key => $row) {
      ?>
      <tr>
        <th scope="row"><?php echo $key+1;?></th>
        <td><?php echo $row['material_name'];?></td>
        <td><?php echo $row['material_name'];?></td>
        <td><?php echo $row['material_category'];?></td>
        <td><?php echo $row['measurement'];?></td>
        <td><?php echo $row['opening_stock'];?></td>
        <td><button type="button" name="edit" id="<?php echo $row['material_id'];?>" class="btn btn-primary">Edit</button> 
        </td>
      </tr>
      <?php } ?>
   
    </tbody>
  </table>


                </div>
  </div>
</div>
    </div>
  </div>
</div>
</div>


  

  

  


<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/bundles/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>


  <!-- Page JS -->
  
  <script type="text/javascript">

    const update = $("#update");
    const save = $("#save");
    const edit = $(`[name="edit"]`);

    
    const mytable = $('#myTable').DataTable({
    "autoWidth": true,
    "responsive": true,
  });



 save.click(function(e){

  if ($("#myForm")[0].checkValidity())
    {
  
      save.attr('disabled', true);
     

    $.ajax({

            url:'<?php echo base_url();?>MaterialController/create',


            type:'POST',



            data:$('#myForm').serialize(),



            success:function(result){


            swal({

  title: "Details Submitted Successfully", 

 

  confirmButtonText: "<a href='' class='confirm' style='color:#fff;text-decoration: none;'>OK</a>",

    icon: "success",

   allowOutsideClick: false,

  allowEscapeKey: false,

  closeOnConfirm: false }). then(function(result){


   window.location.href='<?php echo base_url();?>MaterialController/';   



      }); 

          }



     });

    

       } 



    else{  

$("#myForm")[0].reportValidity();

      }

});

</script>

<script type="text/javascript">

  $('#material_name').change(function(event) {
    var material_name = $(this).val().toUpperCase();
    if(material_name == "WEFT YARN")
    {
      $('#material_colour').hide();
      $('#material_colour_code').hide();
      $('#warp_ends').hide();
      $('#bobbin_ends').hide();
      $(`input[name="material_colour"]`).val("");
      $(`input[name="material_colour_code"]`).val("");
      $(`input[name="warp_ends"]`).val("");
      $(`input[name="bobbin_ends"]`).val("");
      $('#count').show();
      $('#material_category').show();
    }
    else if (material_name == "WARP YARN")
    {
      $('#material_colour').hide();
      $('#material_colour_code').hide();
      $('#warp_ends').show();
      $('#bobbin_ends').hide();
      $(`input[name="material_colour"]`).val("");
      $(`input[name="material_colour_code"]`).val("");
      $(`input[name="bobbin_ends"]`).val("");
      $('#count').show();
      $('#material_category').show();
    }
    else if(material_name == "BOBBIN")
    {
      $('#material_colour').show();
      $('#material_colour_code').show();
      $('#warp_ends').hide();
      $('#bobbin_ends').show();
      $(`input[name="count"]`).val("");
      $(`input[name="material_category"]`).val("");
      $(`input[name="warp_ends"]`).val("");
      $('#count').hide();
      $('#material_category').hide();
    }

    else if(material_name == "WEFT COLOR")
    {
      $('#material_colour').show();
      $('#material_colour_code').show();
      $('#warp_ends').hide();
      $('#bobbin_ends').hide();
      $(`input[name="count"]`).val("");
      $(`input[name="material_category"]`).val("");
      $(`input[name="warp_ends"]`).val("");
      $(`input[name="bobbin_ends"]`).val("");
      $('#count').hide();
      $('#material_category').hide();
    }

    else
    {
      $('#material_colour').show();
      $('#material_colour_code').show();
      $('#count').show();
      $('#material_category').show();
      $('#warp_ends').show();
      $('#bobbin_ends').show();

    }
  });

  edit.click(function(e){
    e.preventDefault();
    var material_id = $(this).attr("id");
    $.ajax({
      url:`<?php echo base_url();?>MaterialController/show/${material_id}`,
      method:'GET',
      success:function(result){
        $(`[name="material_name"]`).val(result.material_name).change();
        $(`[name="material_category"]`).val(result.material_category);
        $(`[name="measurement"]`).val(result.measurement);
        $(`[name="opening_stock"]`).val(result.opening_stock);
        $(`[name="warp_ends"]`).val(result.warp_ends);
        $(`[name="bobbin_ends"]`).val(result.bobbin_ends);
        $(`[name="material_colour"]`).val(result.material_colour);
        $(`[name="material_colour_code"]`).val(result.material_colour_code);
        $(`[name="material_id"]`).val(result.material_id);
        $(`[name="count"]`).val(result.count);
        save.hide();
        update.show();
      },
      error:function(result){
        
      }
    })
    
  })

  update.click(function(e){
    e.preventDefault();
    if($("#myForm")[0].checkValidity()){
      update.attr('disabled', true);
      $.ajax({
        url:'<?php echo base_url();?>MaterialController/update',
        method:'POST',
        data:$('#myForm').serialize(),
        success:function(result){
          swal({

title: "Details Submitted Successfully", 



confirmButtonText: "<a href='' class='confirm' style='color:#fff;text-decoration: none;'>OK</a>",

  icon: "success",

 allowOutsideClick: false,

allowEscapeKey: false,

closeOnConfirm: false }). then(function(result){


 window.location.href='<?php echo base_url();?>MaterialController/';   



    }); 
        },
        error:function(result){
          
        }
      })
    }
    else
    {
      $("#myForm")[0].reportValidity();
    }
  })

 

</script>

</body>
</html>

<!-- / Content -->

