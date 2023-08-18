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
 <form method="post" id="myForm" action="">
  <div class="section-body">
  <div class="row">
    <div class="col-md-12">
     <div class="card card-primary">
  <div class="card-body">

                    <div class="row">
 <div class="col-md-3 form-group">
  <label class="form-label">Godown</label>
  <select name="Godown" id="Godown" class="form-control form-control-sm" required>
    <option value="">Select a Godown</option>
    <?php foreach($looms as $loom):?>
    <option value="<?php echo $loom->Godown;?>"><?php echo $loom->Godown;?></option>
    <?php endforeach;?>

  </select>
</div>


                    <div class="col-md-3 form-group" id="Loom_Name">
                      <label class="form-label">Loom Name</label>
        
                      <select name="Loom_Name" id="Loom_Name" class="form-control form-control-sm" required>
                        <option value="">Select a Loom</option>
                        <?php foreach($looms as $loom):?>
    <option value="<?php echo $loom->loom_id;?>"><?php echo $loom->Loom_Name;?></option>
    <?php endforeach;?>
                      </select>

                    </div>
                    </div>
                    </div>
                    </div>
                 
 
             
 

 
<div class="card card-primary">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12 mb-3">
        <!-- <button class="btn btn-primary" id="addBtn">Add Row</button> -->
        <button class="btn btn-primary" type="button" id="addBtn1" data-toggle="modal" data-target="#myModal">Add</button>
      </div>
    </div>
    <table id="myTable" class="table table-striped table-sm" style="width:100%;overflow-x:auto;">
    
      <thead>
        <tr>
          <th scope="col">Service Type</th>
          <th scope="col">Spare Part</th>
          <th scope="col">Service cost</th>
          <th scope="col">File</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
     
      </tbody>
    </table>

    <div class="col-sm-12 text-center mt-4">
            <button type="button" class="btn btn-primary me-sm-3 me-1" id="save">Submit</button>
            
          </div>
  </div>
</div>

  </div>

  

  </div>
</div>
</form>
</section>
</div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form id="form2" onsubmit="return false;">
            <div class="form-group">
              <label for="Type">Type:</label>
              <input type="text" class="form-control form-control-sm" name="Type" id="Type" placeholder="Service Type" required>
            </div>
            <div class="form-group">
              <label for="SparePart">Spare Part:</label>
              <input type="text" class="form-control form-control-sm" name="SparePart" id="SparePart" placeholder="Spare Part">
            </div>
            <div class="form-group">
            <label for="Servicecost">Amount:</label>
            <input type="number" class="form-control form-control-sm numberk" name="Servicecost" id="Servicecost" placeholder="Service cost" min="0">
           </div>
            <div class="form-group">
              <label for="file"> Attach File:</label>
              <input type="file" class="form-control form-control-sm" name="file" id="file" accept="image/*">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
             
          </form>
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

 
<script>
  const mytable = $('#myTable').DataTable({
    "autoWidth": true,
    "responsive": true,
  });

  const data = [];

  $('#form2').submit(function(e) {
    e.preventDefault();
    var fileInput = $('#file')[0];
    var file = fileInput.files[0];
    var formData = new FormData($('#form2')[0]);
    var fileUrl = file ? URL.createObjectURL(file) : null;
    formData.append('url', fileUrl);
    const obj = {};
    formData.forEach((value, key) => obj[key] = value);
    data.push(obj);
    this.reset();

    mytable.row.add([
      obj.Type,
      obj.SparePart,
      obj.Servicecost,
      fileUrl ? '<a href="'+fileUrl+'" target="_blank" class="btn btn-icon  btn-primary"> <i class="far fa-eye"></i></a>' : '-',
      '<button type="button" class="btn btn-icon   btn-danger delete"> <i class="far fa-trash-alt"></i></button>',
    ]).draw();
    $('#myModal').modal('hide');
  });

  $(document).on('click', '.delete', function() {
    data.splice($(this).closest('tr').index(), 1);
    mytable.row($(this).closest('tr')).remove().draw();
    console.log(data);
  });

  $('#save').click(function(e) {
    if ($("#myForm")[0].checkValidity()){
    const formdata = new FormData($('#myForm')[0]);
    data.forEach((item, key) => {
      formdata.append(`type[${key}]`, item.Type);
      formdata.append(`sparepart[${key}]`, item.SparePart);
      formdata.append(`servicecost[${key}]`, item.Servicecost);
      formdata.append(`servicefile[${key}]`, item.file);
    });

    $.ajax({
        url: '<?php echo base_url();?>ServiceLoomController/create',
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        success: function(data) {
          
        },
        error: function(data) {
          
        }
      })
      
  }
  else{
    $("#myForm")[0].reportValidity();
  }
});



</script>




</body>
</html>
