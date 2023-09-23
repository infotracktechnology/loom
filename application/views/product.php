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
     <form method="post" id="myForm" action="">

 
                    <div class="row">
                        <div class="col-md-10 form-group">
                            <h6 class="text-dark">Product Master</h6>
                        </div>

                        <div class="col-md-2 form-group">
                          <a href="<?php echo base_url("product/create");?>" class="btn btn-primary">Add Product</a>
                        </div>
               
      
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
        <td><a href="<?php echo base_url("product/{$row['id']}/edit");?>" class="btn btn-primary text-white">Edit</a>
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

  

  

  

  <!-- Core JS -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/js/page/index.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  
  <script type="text/javascript">
const table = $('#myTable').DataTable();
</script>

</body>
</html>

<!-- / Content -->

