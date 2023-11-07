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
    <div class="card-header row">

         <div class="col-10">
            <h4> Production List</h4>
         </div>
        
         <div class="col-2 float-right">
               <a  href="<?php echo base_url("production_entry/0");?>" class="btn text-white btn-primary">Add Production</a>
        </div>
   
    </div>
  <div class="card-body">
  <div class="col-12">
                <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered table-sm">
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Production No</th>
        <th scope="col">Production Date</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
      </thead>

    <tbody>
      <?php
      foreach($production as $key => $row) {
      ?>
      <tr>
       <td><?php echo $key+1; ?></td>
       <td><?php echo $row['production_no']; ?></td>
       <td><?php echo $row['date']; ?></td>
       <td><?php echo $row['status']; ?></td>
       <td><a href="<?php echo base_url("production_entry/$row[id]");?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a></td>
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

  

  

  

  <!-- Core JS -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

