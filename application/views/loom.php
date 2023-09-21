
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
    <div class="row">

    <div class="col-10">
      <h5 class="col-red">Loom List</h5>
    </div>
    <div class="col-2 mb-2">
      <a href="<?php echo base_url("loom/create");?>" class="btn btn-primary text-white">Add Loom</a>
    </div>


    <div class="col-12">
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
        <td> <a href="<?php echo base_url("loom/{$row['loom_id']}/edit");?>" class="btn btn-primary text-white"><i class="fas fa-edit"></i></a></td>
      </tr>
      <?php } ?>
   
    </tbody>
  </table>


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
 const mytable = $('#myTable').DataTable({
    "autoWidth": true,
    "responsive": true,
  });
</script>


</body>
</html>



