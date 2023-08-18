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
 <section class="section" x-data="app">
  <div class="section-body">
  <div class="row">
    <div class="col-md-12">
     <div class="card card-primary">
  <div class="card-body">
     <form method="post" id="myForm" action="">

     <div class="title">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Spare Master</h4>
                        </div>
                    </div>
                </div>

                    <div class="row">
 
                    <div class="col-md-3 form-group">
                        <label>Name</label>
                        <input type="text" name="product_name" onkeyup="" value="" class="form-control form-control-sm text-capitalize" required>
                        <input type="hidden" name="id" value="" />

                    </div>


                    

                    <div class="col-md-3 form-group">
                      <label>HSN No</label>
                      <input type="number" name="hsn" value="" class="form-control form-control-sm" />

                    </div>


                       <div class="col-md-3 form-group">
                        <label>Brand</label>
                      <input type="text" name="brand" value="" class="form-control form-control-sm">

                    </div>


                    <div class="col-md-3 form-group">
                         <label>Category</label>
                        <input type="text" name="Category" value="" class="form-control form-control-sm" />

                    </div>



                    <div class="col-md-3 form-group">
                       <label>Modal</label>
                      <input type="text" name="modal" value="" class="form-control form-control-sm">

                    </div>


                    



                    <div class="col-md-3 form-group">
                       <label>Location</label>
                      <input type="text" name="location" value="" class="form-control form-control-sm" />

                    </div>

                    <div class="col-md-3 form-group">
  <label>UOM</label>
  <select name="uom" class="form-control form-control-sm">
  <option value="">Select</option>
  <option value="number">Number</option>
    <option value="meter">Meter</option>
    <option value="kg">Kilogram (kg)</option>
  </select>
</div>

                        <div class="col-md-3 form-group">
                         <label>Opening Stock</label>
                        <input type="text" name="opening_stock" value="" class="form-control form-control-sm" />

                    </div>
 

                   


                    <div class="col-md-3 form-group">
  <label>Tax</label>
  <select name="Tax" class="form-control form-control-sm">
  <option value="">Select</option>
  <option value="0">0</option>
    <option value="5">5</option>
    <option value="12">12</option>
    <option value="18">18</option>
    <option value="28">28</option>
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
        <th scope="col">Product Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Modal</th>
        <th scope="col">HSN No</th>
        <th scope="col">Location</th>
        <th scope="col">UOM</th>
        <th scope="col">Opening Stock</th>
        <th scope="col">Category</th>
        <th scope="col">Tax %</th>
        <th scope="col">Action</th>
       
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($spares as $key => $row) {
      ?>
      <tr>
        <th scope="row"><?php echo $key+1;?></th>
        <td><?php echo $row['product_name'];?></td>
        <td><?php echo $row['brand'];?></td>
        <td><?php echo $row['modal'];?></td>
        <td><?php echo $row['hsn'];?></td>
        <td><?php echo $row['location'];?></td>
        <td><?php echo $row['uom'];?></td>
        <td><?php echo $row['opening_stock'];?></td>
        <td><?php echo $row['Category'];?></td>
        <td><?php echo $row['Tax'];?></td>
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



                url:'<?php echo base_url();?>SparePartController/create',



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
       window.location="<?php echo base_url();?>SparePartController/";
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
    url:'<?php echo base_url();?>SparePartController/update',
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


window.location.href='<?php echo base_url();?>SparePartController/';   



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
  url:`<?php echo base_url();?>SparePartController/show/${material_id}`,
  method:'GET',
  success:function(result){
    $(`[name="product_name"]`).val(result.product_name);
    $(`[name="brand"]`).val(result.brand);
    $(`[name="modal"]`).val(result.modal);
    $(`[name="hsn"]`).val(result.hsn);
    $(`[name="location"]`).val(result.location);
    $(`[name="uom"]`).val(result.uom);
    $(`[name="id"]`).val(result.id);
    $(`[name="opening_stock"]`).val(result.opening_stock);
    $(`[name="Category"]`).val(result.Category);
    $(`[name="Tax"]`).val(result.Tax);
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



