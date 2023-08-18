
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
                      <label class="form-label">Loom No</label>
                      <input type="text" name="Loom_No" value="" id="Loom_No" class="form-control form-control-sm  text-capitalize" required="">
                      <input type="hidden" name="loom_id" value="" />

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
                      <label class="form-label">Custodian</label>
                      <select name="Custodian" id="Custodian" class="form-control form-control-sm">
    <option value="">Select Custodian</option>
    </select>

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
                    
                    <button type="button" id="update" name="update" class="btn btn-success" style="display: none;">Update</button>

                  <button type="button" name="submit" id="save" class="btn btn-primary">Save</button>

                   </div>
              </div>
                </form>

                
                <div class="table-responsive">
                <table id="myTable" class="table table-striped table-sm" style="width:100%;overflow-x:auto;">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Loom No</th>
        <th scope="col">Brand</th>
        <th scope="col">Godown</th>
        <th scope="col">Category</th>
        <th scope="col">Size</th>
        <th scope="col">Pannel Board-Brand</th>
        <th scope="col">Cost</th>
        <th scope="col">Custodian</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($looms as $key => $row) {
      ?>
      <tr>
        <th scope="row"><?php echo $key+1;?></th>
        <td><?php echo $row['Loom_No'];?></td>
        <td><?php echo $row['brand'];?></td>
        <td><?php echo $row['Godown'];?></td>
        <td><?php echo $row['Category'];?></td>
        <td><?php echo $row['Loom_Size'];?></td>
        <td><?php echo $row['Pannel_Board'];?></td>
        <td><?php echo $row['Cost'];?></td>
        <td><?php echo $row['Custodian'];?></td>
        <td><?php echo $row['Status'];?></td>
        <td><button type="button" name="edit" id="<?php echo $row['loom_id'];?>" class="btn btn-primary">Edit</button> 
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

const update = $("#update");
const save = $("#save");
const edit = $(`[name="edit"]`);


const mytable = $('#myTable').DataTable({
"autoWidth": true,
"responsive": true,
});


$("#save").click(function(){



if ($("#myForm")[0].checkValidity())



{

 

$.ajax({



                url:'<?php echo base_url();?>LoomController/create',



                type:'POST',



                data:$('#myForm').serialize(),



                success:function(result){

           swal({

title: "Details Submitted Successfully", 

confirmButtonText: "<a href='' class='confirm' style='color:#fff;text-decoration: none;'>OK</a>",

icon: "success",

allowOutsideClick: false,

allowEscapeKey: false,

closeOnConfirm: false }).then(function(t) {
       window.location="<?php echo base_url();?>LoomController/";
    })

      }



 });



   } 



else{  

$("#myForm")[0].reportValidity();



  }



});


update.click(function(e){
e.preventDefault();
if($("#myForm")[0].checkValidity()){
  update.attr('disabled', true);
  $.ajax({
    url:'<?php echo base_url();?>LoomController/update',
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


window.location.href='<?php echo base_url();?>LoomController/';   



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


edit.click(function(e){
e.preventDefault();
var material_id = $(this).attr("id");
$.ajax({
  url:`<?php echo base_url();?>LoomController/show/${material_id}`,
  method:'GET',
  success:function(result){
    $(`[name="Godown"]`).val(result.Godown);
    $(`[name="Loom_No"]`).val(result.Loom_No);
    $(`[name="brand"]`).val(result.brand);
    $(`[name="Category"]`).val(result.Category);
    $(`[name="Loom_Size"]`).val(result.Loom_Size);
    $(`[name="Pannel_Board"]`).val(result.Pannel_Board);
    $(`[name="Cost"]`).val(result.Cost);
    $(`[name="Custodian"]`).val(result.Custodian);
    $(`[name="Status"]`).val(result.Status);
    $(`[name="loom_id"]`).val(result.loom_id);
    $(`[name="Year_of_Purchase"]`).val(result.Year_of_Purchase);
    save.hide();
    update.show();
  },
  error:function(result){
    
  }
})

})
</script>


</body>
</html>



