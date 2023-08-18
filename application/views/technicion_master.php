<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Loom - Admin Dashboard  </title>


<!-- General CSS Files -->



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
                            <h4>Staff Master</h4>
                        </div>
                    </div>
                </div>

                    <div class="row">
 
                    <div class=" col-md-3 form-group">
                        <label>Name</label>
                        <input type="text" name="Name"  class="form-control form-control-sm text-capitalize" required>
                        <input type="hidden" name="id" value="" />

                    </div>




                    <div class="col-md-3 form-group">
  <label>Gender</label>
  <select name="Gender" class="form-control form-control-sm" required>
    <option value="">Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Third Gender</option>
  </select>
</div>

                 

                    <div class=" col-md-3 form-group">
                        <label>Age</label>
                        <input type="number" name="Age" class="form-control form-control-sm" required>
                    
                    </div>

                    
                    <div class="col-md-3 form-group">
                        <label>DOB</label>
                      <input type="date" name="DOB" class="form-control form-control-sm">

                    </div>

                       <div class="col-md-3 form-group">
                        <label>Mobile no</label>
                      <input type="number" name="Mobile_no" value="" class="form-control form-control-sm">

                    </div>


                    <div class="col-md-3 form-group">
  <label>Designation</label>
  <select name="Designation" class="form-control form-control-sm">
    <option value="">Select a designation</option>
    <option value="Technician">Technician</option>
    <option value="Loom Weaver">Loom Weaver</option>
  </select>
</div>



                  <div class="col-md-3 form-group">
                       <label>Address</label>
                      <input type="text" name="Address" value="" class="form-control form-control-sm">

                    </div>

                    <div class="col-md-3 form-group">
                       <label>Refer By</label>
                      <input type="text" name="Refer_By" value="" class="form-control form-control-sm">

                    </div>



                    <div class="col-md-3 form-group">
                       <label>Date of Join</label>
                      <input type="date" name="Join_Date" value="" class="form-control form-control-sm">

                    </div>

                    
                    <div class="col-md-3 form-group">
                       <label>Aadhar No</label>
                      <input type="number" name="Aadhar_No" value="" class="form-control form-control-sm">

                    </div>

                    <div class="col-md-3 form-group">
                       <label>Driving Licence No</label>
                      <input type="number" name="Driving_Licence" value="" class="form-control form-control-sm">

                    </div> 



                    <div class="col-md-3 form-group">
                       <label>Experience (in Years)</label>
                      <input type="number" name="Experience" value="" class="form-control form-control-sm">

                    </div> 

                    <div class="col-md-3 form-group">
                       <label>Blood Group</label>
                      <input type="text" name="Blood_Group" value="" class="form-control form-control-sm">

                    </div> 

                    <div class="col-md-3 form-group">
                      <label>Choose a Photo</label>
                      <input type="file" name="photo" id="image-upload" class="form-control form-control-sm">

                    </div>

                    <!-- <div class="form-group row mb-4">
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose a Photo</label>
                          <input type="file" name="photo" id="image-upload"  accept="image/*" />
                        </div>
                      </div>
                    </div> -->
                    </div>




<div class="row my-3">
<div class="col-md-12 form-group">
<h6>Bank Details</h6><hr style="border: 1px dashed #ccc;margin: 0px;">
</div>
                    <div class="col-md-3 form-group">
                       <label>Bank Name</label>
                      <input type="text" name="Bank_name" value="" class="form-control form-control-sm">
                      </div>
                    
                      <div class="col-md-3 form-group">
                       <label>Account No</label>
                      <input type="text" name="Acc_no" value="" class="form-control form-control-sm numberk">
                      </div>

                      <div class="col-md-3 form-group">
                       <label>IFSC Code</label>
                      <input type="text" name="Ifsc_code" value="" class="form-control form-control-sm">
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
        <th scope="col">Name</th>
        <th scope="col">Photo</th>
        <th scope="col">Gender</th>
        <th scope="col">Age</th>
        <th scope="col">DOB</th>
        <th scope="col">Mobile no</th>
        <th scope="col">Designation</th>
        <th scope="col">Address</th>
        <th scope="col">Date of Join</th>
        <th scope="col">Aadhar No</th>
        <th scope="col">Driving Licence No</th>
        <th scope="col">Action</th>
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($technicions as $key => $row) {
        $photo = 'uploads/'.$row->photo;
       if(file_exists($photo)){
        $photo = base_url().'uploads/'.$row->photo;
       }
       else{
        $photo = '#';
       }

      ?>
      <tr>
        <th scope="row"><?php echo $key+1;?></th>
        <td><?php echo $row->Name;?></td>
        <td><img src="<?php echo $photo;?>" width="50px" height="50px" onerror="this.style.display='none'"></td>
        <td><?php echo $row->Gender;?></td>
        <td><?php echo $row->Age;?></td>
        <td><?php echo $row->DOB;?></td>
        <td><?php echo $row->Mobile_no;?></td>
        <td><?php echo $row->Designation;?></td>
        <td><?php echo $row->Address;?></td>
        <td><?php echo $row->Join_Date;?></td>
        <td><?php echo $row->Aadhar_No;?></td>
        <td><?php echo $row->Driving_Licence;?></td>
        <td><button type="button" id="<?php echo $row->id;?>" name="edit" class="btn btn-primary">Edit</button></td>
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


  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
  <script src="<?php echo base_url();?>assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
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


$.uploadPreview({
  input_field: "#image-upload",   // Default: .image-upload
  preview_box: "#image-preview",  // Default: .image-preview
  label_field: "#image-label",    // Default: .image-label
  label_default: "Choose File",   // Default: Choose File
  label_selected: "Change File",  // Default: Change File
  no_label: false,                // Default: false
  success_callback: null,

});

$("#save").click(function(){
if ($("#myForm")[0].checkValidity())


{
 

$.ajax({



                url:'<?php echo base_url();?>TechnicianController/create',



                type:'POST',



                data:new FormData($("#myForm")[0]),

                contentType:false,
                processData:false,

                success:function(result){

           swal({

title: "Details Submitted Successfully", 

confirmButtonText: "<a href='' class='confirm' style='color:#fff;text-decoration: none;'>OK</a>",

icon: "success",

allowOutsideClick: false,

allowEscapeKey: false,

closeOnConfirm: false }).then(function(t) {
       window.location="<?php echo base_url();?>TechnicianController/";
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
    url:'<?php echo base_url();?>TechnicianController/update',
    method:'POST',
    data:new FormData($("#myForm")[0]),
    contentType:false,
    processData:false,
    success:function(result){
    swal({

title: "Details Submitted Successfully", 

confirmButtonText: "<a href='' class='confirm' style='color:#fff;text-decoration: none;'>OK</a>",

icon: "success",

allowOutsideClick: false,

allowEscapeKey: false,

closeOnConfirm: false }). then(function(result){


window.location.href='<?php echo base_url();?>TechnicianController/';   



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
  url:`<?php echo base_url();?>TechnicianController/show/${material_id}`,
  method:'GET',
  success:function(result){
    $(`[name="Name"]`).val(result.Name);
    $(`[name="Gender"]`).val(result.Gender);
    $(`[name="Age"]`).val(result.Age);
    $(`[name="DOB"]`).val(result.DOB);
    $(`[name="Mobile_no"]`).val(result.Mobile_no);
    $(`[name="Designation"]`).val(result.Designation);
    $(`[name="Address"]`).val(result.Address);
    $(`[name="Join_Date"]`).val(result.Join_Date);
    $(`[name="Aadhar_No"]`).val(result.Aadhar_No);
    $(`[name="Driving_Licence"]`).val(result.Driving_Licence);
    $(`[name="Blood_Group"]`).val(result.Blood_Group);
    $(`[name="Experience"]`).val(result.Experience);
    if(result.photo != ''){
      $(`#image-preview`).css("background-image", `url(<?php echo base_url();?>uploads/${result.photo})`);
      $(`#image-preview`).css("background-size", "cover");
      $(`#image-preview`).css("background-position", "center");
    }
    else{
      $(`#image-preview`).css("background-image", "none");
    }
    $(`[name="Refer_By"]`).val(result.Refer_By);
    $(`[name="id"]`).val(result.id);
    $(`[name="Bank_name"]`).val(result.Bank_name);
    $(`[name="Acc_no"]`).val(result.Acc_no);
    $(`[name="Ifsc_code"]`).val(result.Ifsc_code);
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

