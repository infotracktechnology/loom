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

                <div class="title">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Supplier Master</h4>
                        </div>
                    </div>
                </div>

                    <div class="row">
 
                    <div class=" col-md-3 form-group">
                        <label>Supplier Name</label>
                        <input type="text" name="Supplier_Name" onkeyup="" value="" class="form-control form-control-sm text-capitalize" required>
                        <input type="hidden" name="id" value="" />

                    </div>

                       <div class="col-md-3 form-group">
                        <label>Mobile no</label>
                      <input type="text" name="Mobile_no" value="" class="form-control form-control-sm">

                    </div>


                    <div class="col-md-3 form-group">
                       <label>Address</label>
                      <input type="text" name="Address" value="" class="form-control form-control-sm">

                    </div>


                    <div class="col-md-3 form-group">
                       <label>Contact Person</label>
                      <input type="text" name="Contact_Person" value="" class="form-control form-control-sm">

                    </div>

                    
                    <div class="col-md-3 form-group">
                       <label>Contact Person Mobile No</label>
                      <input type="text" name="Contact_Mobile" value="" class="form-control form-control-sm">

                    </div>

                    <div class="col-md-3 form-group">
                       <label>GST No</label>
                      <input type="text" name="GST_No" value="" class="form-control form-control-sm">

                    </div>
                    
                    <div class="col-md-3 form-group">
                       <label>State</label>
                      <select name="State" class="form-control form-control-sm" required>
                        <option value="">Select State</option>
                        <option value="Tamilnadu">Tamilnadu</option>
                        <option value="Others">Others</option>
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
        <th scope="col">Supplier Name</th>
        <th scope="col">Mobile no</th>
        <th scope="col">Address</th>
        <th scope="col">Contact Person</th>
        <th scope="col">GST No</th>
        <th scope="col">State</th>
        <th scope="col">Action</th>
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($suppliers as $key => $row) {
      ?>
      <tr>
        <th scope="row"><?php echo $key+1;?></th>
        <td><?php echo $row['Supplier_Name'];?></td>
        <td><?php echo $row['Mobile_no'];?></td>
        <td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Contact_Person'];?></td>
        <td><?php echo $row['GST_No'];?></td>
        <td><?php echo $row['State'];?></td>
        <td><button type="button" name="edit" id="<?php echo $row['id'];?>" class="btn btn-primary">Edit</button> 
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
</div>
</div>
</div>

  

  

  

  <!-- Core JS -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

const update = $("#update");
const save = $("#save");
const edit = $(`[name="edit"]`);


const mytable = $('#myTable').DataTable({

});


$("#save").click(function(){



if ($("#myForm")[0].checkValidity())
{

 

$.ajax({



                url:'<?php echo base_url();?>SupplierController/create',



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
       window.location="<?php echo base_url();?>SupplierController/";
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
    url:'<?php echo base_url();?>SupplierController/update',
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


window.location.href='<?php echo base_url();?>SupplierController/';   



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
  url:`<?php echo base_url();?>SupplierController/show/${material_id}`,
  method:'GET',
  success:function(result){
    $(`[name="Supplier_Name"]`).val(result.Supplier_Name);
    $(`[name="Mobile_no"]`).val(result.Mobile_no);
    $(`[name="Address"]`).val(result.Address);
    $(`[name="Contact_Person"]`).val(result.Contact_Person);
    $(`[name="Contact_Mobile"]`).val(result.Contact_Mobile);
    $(`[name="id"]`).val(result.id);
    $(`[name="State"]`).val(result.State);
    $(`[name="GST_No"]`).val(result.GST_No);
  
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

<!-- / Content -->

