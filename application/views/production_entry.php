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

  <div class="section-body">
     <div class="card card-primary">
     <div class="card-header">
      <h4>Production Entry</h4>
     </div>
  <div class="card-body">
  <form method="post" name="myForm"  action="" enctype="multipart/form-data">
     <div class="row">

        <div class="col-md-2 form-group">
        <label>Production No</label>
        <input type="text" class="form-control form-control-sm" value="<?php echo 1; ?>" name="production_no" readonly>
        </div>

        <div class="col-md-4 form-group">
        <label>Production Date</label>
        <input type="date" class="form-control form-control-sm" name="production_date"  value="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d'); ?>" required>
        </div>


        <div class="col-md-4 form-group">
        <label>Loom Weaver</label>
        <select name="loom_weaver" id="loom_weaver" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom Weaver</option>
        <option ng-repeat="loom_weaver in loom_weavers" value="{{loom_weaver.id}}">{{loom_weaver.Name}}</option>
        </select>
        </div>
 
     </div>
     </form> 
   
</div>
</div>

<div class="card card-primary">
                  <div class="card-header">
                    <h4>Loom Details</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn text-white btn-info" href="#"><i
                          class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse" id="mycard-collapse">
                    <div class="card-body">
                     
                    </div>
</div>
</div>

<div class="card card-primary">
                  <div class="card-header">
                    <h4>Job Status</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn text-white btn-info" href="#"><i
                          class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse" id="mycard-collapse">
                    <div class="card-body">
                     
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
  
const app = angular.module('myApp', []);
const baseUrl = '<?php echo base_url();?>';
app.controller('myCtrl', function($scope, $http) {

  $scope.looms = angular.fromJson(<?php echo json_encode($looms);?>);
  $scope.loom_weavers = angular.fromJson(<?php echo json_encode($loom_weavers);?>);
  $scope.data = [];
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

