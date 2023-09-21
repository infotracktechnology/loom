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
  <script src="https://unpkg.com/alpinejs@3.13.0/dist/cdn.js" defer></script>
</head>

<body>
  <div class="loader"></div>

  <div id="app" x-data="app">
    <div class="main-wrapper main-wrapper-1">
    <?php include_once 'sidebar.php';?>
      <div class="main-content">
 <section class="section">
  <div class="section-body">
     <div class="card card-primary">
    <div class="card-header row">

         <div class="col-10">
            <h4> Production Entry</h4>
         </div>
   
    </div>
  <div class="card-body">
     <form method="post" id="myForm"  action="">
     <div class="row">

        <div class="col-md-2 form-group">
        <label>Production No</label>
        <input type="text" class="form-control form-control-sm" name="production_no" id="production_no" readonly>
        </div>

        <div class="col-md-2 form-group">
        <label>Production Date</label>
        <input type="date" class="form-control form-control-sm" name="production_date" id="production_date" value="<?php echo date('Y-m-d');?>" required>
        </div>

        <div class="col-md-2 form-group">
        <label>Start Time</label>
        <input type="time" class="form-control form-control-sm" name="start_time"   value="<?php echo date('H:i');?>">
        </div>

        <div class="col-md-2 form-group">
        <label>End Time</label>
        <input type="time" class="form-control form-control-sm" name="end_time"   value="<?php echo date('H:i');?>">
        </div>

        <div class="col-md-2 form-group">
        <label>Loom</label>
        <select name="loom" id="loom" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom</option>
        <template x-for="loom in looms">
        <option :value="loom.loom_id" x-text="loom.Loom_No"></option>
        </template>
        </select>
        </div>

        <div class="col-md-2 form-group">
        <label>Loom Weaver</label>
        <select name="loom_weaver" id="loom_weaver" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom Weaver</option>
        <template x-for="loom_weaver in loom_weavers">
        <option :value="loom_weaver.id" x-text="loom_weaver.Name"></option>
        </template>
        </select>
        </div>

        <div class="col-md-3 form-group">
        <label>Product</label>
        <input type="text" class="form-control form-control-sm" name="product"  readonly>
        </div>
        

        <div class="col-md-12">
          <h6 class="col-red"> Material Details</h6>
          <hr  class="bg-dark"/>
        </div>
        </div>

        <template x-for="(item,i) in materials">
        <div class="row">

        </div>
        </template>

        <div class="row">
  
        <div class="col-md-2 form-group">
        <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
        </div>
     

     </form> 
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

<script>

document.addEventListener('alpine:init', () => {
        Alpine.data('app', () => ({
          looms : JSON.parse(`<?php echo json_encode($looms);?>`),
          loom_weavers : JSON.parse(`<?php echo json_encode($loom_weavers);?>`),
          materials:[],
          init(){
            
          }
        }))
    })
</script>
</body>
</html>

<!-- / Content -->

