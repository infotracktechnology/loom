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
 
                    <div class=" col-md-3 form-group">
                        <label>Product Name</label>
                        <input type="text" name="product_name" onkeyup="" value="" class="form-control form-control-sm text-capitalize" required>
                        <input type="hidden" name="id" value="" />

                    </div>

                       <div class="col-md-3 form-group">
                        <label>Warp Ends</label>
                      <input type="text" name="warp_ends" value="" class="form-control form-control-sm">

                    </div>


                    <div class="col-md-3 form-group">
                       <label>Warp Yarn</label>
                      <input type="text" name="warp_yarn" value="" class="form-control form-control-sm">

                    </div>


                    <div class="col-md-3 form-group">
                      <label>Weft Yarn</label>
                      <input type="text" name="weft_yarn" value="" class="form-control form-control-sm" >

                    </div>
                     <div class="col-md-3 form-group">
                      <label>Reed</label>
                      <input type="number" name="reed" value="" class="form-control form-control-sm" />

                    </div>



                    <div class="col-md-3 form-group">
                       <label>Pick</label>
                      <input type="number" name="pick" value="" class="form-control form-control-sm" />

                    </div>

                      <div class="col-md-3 form-group">
                      <label>Size</label>
                      <input type="text" name="size" value="" class="form-control form-control-sm" />

                    </div>


                    <div class="col-md-3 form-group">
                      <label>Bobbin Ends</label>
                      <input type="text" name="bobbin_ends" value="" class="form-control form-control-sm" />

                    </div>

                     <div class="col-md-3 form-group">
                      <label>Bobbin Color</label>
                      <input type="text" name="bobbin_color" value="" class="form-control form-control-sm"  />

                    </div>


                   
                     <div class="col-md-3 form-group">
                      <label>Color Code</label>
                      <input type="text" name="color_code" value="" class="form-control form-control-sm">

                    </div>


                     <div class="col-md-3 form-group">
                      <label>Coolie</label>
                      <input type="text" name="coolie" value="" class="form-control form-control-sm">

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
        <th scope="col">Warp Ends</th>
        <th scope="col">Reed</th>
        <th scope="col">Pick</th>
        <th scope="col">Coolie</th>
        <th scope="col">Action</th>
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($products as $key => $row) {
      ?>
      <tr>
        <th scope="row"><?php echo $key+1;?></th>
        <td><?php echo $row['product_name'];?></td>
        <td><?php echo $row['warp_ends'];?></td>
        <td><?php echo $row['reed'];?></td>
        <td><?php echo $row['pick'];?></td>
        <td><?php echo $row['coolie'];?></td>
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
    "autoWidth": true,
    "responsive": true,
  });


  $("#save").click(function(){



  if ($("#myForm")[0].checkValidity())



    {

     

    $.ajax({



                    url:'<?php echo base_url();?>ProductController/create',



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
           window.location="<?php echo base_url();?>ProductController/";
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
        url:'<?php echo base_url();?>ProductController/update',
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


 window.location.href='<?php echo base_url();?>ProductController/';   



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
      url:`<?php echo base_url();?>ProductController/show/${material_id}`,
      method:'GET',
      success:function(result){
        $(`[name="product_name"]`).val(result.product_name);
        $(`[name="warp_ends"]`).val(result.warp_ends);
        $(`[name="reed"]`).val(result.reed);
        $(`[name="pick"]`).val(result.pick);
        $(`[name="coolie"]`).val(result.coolie);
        $(`[name="id"]`).val(result.id);
        $(`[name="warp_yarn"]`).val(result.warp_yarn);
        $(`[name="weft_yarn"]`).val(result.weft_yarn);
        $(`[name="size"]`).val(result.size);
        $(`[name="bobbin_ends"]`).val(result.bobbin_ends);
        $(`[name="bobbin_color"]`).val(result.bobbin_color);
        $(`[name="color_code"]`).val(result.color_code);
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

