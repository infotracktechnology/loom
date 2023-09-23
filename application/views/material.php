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
    <div class="col-md-12">
     <div class="card card-primary">
  <div class="card-body">
    <div class="row">

    <div class="col-10">
      <h5 class="text-dark">Material List</h5>
    </div>
    <div class="col-2 mb-2">
      <a href="<?php echo base_url("material/create");?>" class="btn btn-primary text-white">Add Material</a>
    </div>

    <div class="col-12">

  

                <div class="table-responsive">
                <table id="myTable" class="table table-striped table-sm" style="width:100%;overflow-x:auto;">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Material Name</th>
        <th scope="col">Count</th>
        <th scope="col">Material Category</th>
        <th scope="col">Material Color</th>
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
        <td><?php echo $row['count'];?></td>
        <td><?php echo $row['material_category'];?></td>
        <td><?php echo $row['material_colour'];?></td>
        <td><?php echo $row['measurement'];?></td>
        <td><?php echo $row['opening_stock'];?></td>
        <td><a href="<?php echo base_url("material/{$row['material_id']}/edit");?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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


</section>
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


<script type="text/javascript">

const mytable = $('#myTable').DataTable({
    "autoWidth": true,
    "responsive": true,
  });





</script>

</body>
</html>

<!-- / Content -->

