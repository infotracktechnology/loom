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
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>

<body>
  <div class="loader"></div>

  <div id="app" ng-app="myApp" ng-controller="myCtrl">
    <div class="main-wrapper main-wrapper-1">
    <?php include_once 'sidebar.php';?>
      <div class="main-content">
 <section class="section">
 <form method="post" name="myForm"  action="" enctype="multipart/form-data">
  <div class="section-body">
     <div class="card card-primary">
     <div class="card-header">
      <h4>Production Entry</h4>
      <div class="card-header-action">
      <a class="btn btn-primary" href="#">Go Back</a>
      </div>
      
     </div>
     
  <div class="card-body">
 
     <div class="row">

        <div class="col-md-2 form-group">
        <label>Production No</label>
        <input type="text" class="form-control form-control-sm" value="<?php echo 1; ?>" ng-model="production_no" readonly>
        </div>

        <div class="col-md-4 form-group">
        <label>Production Date</label>
        <input type="date" class="form-control form-control-sm" ng-model="production_date"  value="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d'); ?>" required>
        </div>


        <div class="col-md-4 form-group">
        <label>Loom Weaver</label>
        <select name="loom_weaver" ng-model="loom_weaver" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom Weaver</option>
        <option ng-repeat="loom_weaver in loom_weavers" value="{{loom_weaver.id}}">{{loom_weaver.Name}}</option>
        </select>
        </div>
 
     </div>
  
   
</div>
</div>

<div class="card card-primary">
                  <div class="card-header">
                    <h4>Loom Details</h4>
                    <div class="card-header-action">
                      <a data-collapse="#loom_details" class="btn text-white btn-info" href="#"><i
                          class="fas fa-plus"></i></a>
                    </div>
                  </div>
                  <div class="collapse" id="loom_details">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-2 form-group">
        <label>Loom</label>
        <select name="loom" id="loom" ng-on-change="getLoom($event);" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom</option>
        <option ng-repeat="loom in looms" value="{{loom.loom_id}}">{{loom.Loom_No}}</option>
        </select>
        </div>

        <div class="col-md-2 form-group">
        <label> Start Time</label>
  <input type="time" name="start_time" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> End Time</label>
  <input type="time" name="end_time"  class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Product</label>
  <input type="text" name="product" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Warp Yarn</label>
  <input type="text" name="warp_yarn" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Weft Yarn</label>
  <input type="text" name="weft_yarn" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Dhothi</label>
  <input type="text" name="dhothi" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Wastage</label>
  <input type="text" name="wastage" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Size</label>
  <input type="text" name="size" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Pick</label>
  <input type="text" name="pick" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Coolie</label>
  <input type="text" name="coolie" class="form-control form-control-sm" required>
</div>

<div class="col-md-2 form-group">
  <label> Total</label>
  <input type="text" name="total" class="form-control form-control-sm" required>
</div>

<div class="col-md-6 form-group">
 <button class="btn btn-primary">Update</button>
</div>

<div class="col-12">
  <h6>History</h6>
                <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-sm table-primary" style="width:100%;overflow-x:auto;">
    
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Loom</th>
        <th scope="col">Warp Yarn</th>
        <th scope="col">Weft Yarn</th>
        <th scope="col">Dhothi</th>
        <th scope="col">Total</th>
      </tr>
      </thead>

    
  </table>


                </div>
  </div>
                    </div>
                    </div>
</div>
</div>

<div class="card card-primary">
                  <div class="card-header">
                    <h4>Job Status</h4>
                    <div class="card-header-action">
                      <a data-collapse="#job_status" class="btn text-white btn-info" href="#"><i
                          class="fas fa-plus"></i></a>
                    </div>
                  </div>
                  <div class="collapse" id="job_status">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 form-group">
        <label>Job Status</label>
        <select name="status" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Status</option>
        <option value="Lunch">Lunch</option>
        <option value="Completed">Completed</option>
        <option value="Help To Others">Help To Others</option>
        <option value="On Hold">On Hold</option>
        <option value="Breakdown">Breakdown</option>
        <option value="Idel">Idel</option>
        </select>
        </div>

        <div class="col-md-6 form-group">
  <label> Start Time</label>
  <input type="time" name="start_time" class="form-control form-control-sm" required>
</div>

<div class="col-md-6 form-group">
  <label> End Time</label>
  <input type="time" name="end_time" class="form-control form-control-sm" required>
</div>

<div class="col-md-6 form-group">
  <label> Comments</label>
  <input type="text" name="comments"  class="form-control form-control-sm" required>
</div>
<div class="col-md-6 form-group">
 <button class="btn btn-primary">Update</button>
</div>


<div class="col-12">
  <h6>History</h6>
                <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-sm table-primary" style="width:100%;overflow-x:auto;">
    
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Sratus</th>
        <th scope="col">Start Time</th>
        <th scope="col">End Time</th>
        <th scope="col">Comments</th>
        
      </tr>
      </thead>

    
  </table>


                </div>
  </div>

                    </div>
                    </div>
</div>
</div>

</div>
 </form>
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
  
const app = angular.module('myApp', []);
const baseUrl = '<?php echo base_url();?>';
app.controller('myCtrl', function($scope, $http) {

  $scope.looms = angular.fromJson(<?php echo json_encode($looms);?>);
  $scope.loom_weavers = angular.fromJson(<?php echo json_encode($loom_weavers);?>);
  $scope.data = {};
  const form_data = new FormData($('#myForm')[0]);
  
  $scope.getLoom = function(e){
    var loom_id = e.target.value;
    $http.get(baseUrl+'api/loom/'+loom_id).then(function(response){
      $scope.data = response.data;
    })
  }

  $scope.getDhothi = function(e){
    var dhothi = e.target.value;
    $scope.data.warp_yarn = (dhothi * $scope.data.size).toFixed(2);
    $scope.data.weft_yarn = ((1000 / $scope.data.grm)*($scope.data.size)).toFixed(2);
    $scope.data.total = (dhothi*$scope.data.coolie).toFixed(2);
  }

})




</script>
</body>
</html>

<!-- / Content -->

