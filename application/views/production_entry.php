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
        <input type="text" class="form-control form-control-sm" value="<?php echo 1; ?>" name="production_no" id="production_no" readonly>
        </div>

        <div class="col-md-3 form-group">
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

        <div class="col-md-3 form-group">
        <label>Loom Weaver</label>
        <select name="loom_weaver" id="loom_weaver" class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom Weaver</option>
        <option ng-repeat="loom_weaver in loom_weavers" value="{{loom_weaver.id}}">{{loom_weaver.Name}}</option>
        </select>
        </div>


        <div class="col-md-2 form-group">
        <label>Loom</label>
        <select name="loom" id="loom" ng-on-change="getLoom($event)"; class="form-control form-control-sm" required>
        <option value="" selected disabled>Select Loom</option>
        <option ng-repeat="loom in looms" value="{{loom.loom_id}}">{{loom.Loom_No}}</option>
        </select>
        </div>

        <div class="col-md-2 form-group">
        <label>Product</label>
        <input type="text" class="form-control form-control-sm" name="product" ng-value="data.product_name">
        </div>

        <div class="col-md-2 form-group">
        <label>Warp Yarn</label>
        <input type="text" class="form-control form-control-sm" name="warp_yarn" ng-value="data.warp_yarn">
        </div>
     

     <div class="col-md-2 form-group">
        <label>Weft Yarn</label>
        <input type="text" class="form-control form-control-sm" name="weft_yarn" ng-value="data.weft_yarn">
        </div>
    


     <div class="col-md-2 form-group">
        <label>Dhothi</label>
        <input type="number" class="form-control form-control-sm" name="dhothi" ng-on-input="getDhothi($event);">
        </div>
    



     <div class="col-md-1 form-group">
        <label>Wastage</label>
        <input type="text" class="form-control form-control-sm" name="wastage">
        </div>
    

    

     <div class="col-md-1 form-group">
        <label>Size</label>
        <input type="text" class="form-control form-control-sm" name="size"  ng-value="data.size">
        </div>

        <div class="col-md-2 form-group">
        <label>Grms</label>
        <input type="number" class="form-control form-control-sm" name="grm"  ng-value="data.grm">
        </div>
  


     <div class="col-md-1 form-group">
        <label>Pick</label>
        <input type="number" class="form-control form-control-sm" name="pick"  ng-value="data.pick">
        </div>

        <div class="col-md-1 form-group">
        <label>Coolie</label>
        <input type="number" class="form-control form-control-sm" name="coolie"  ng-value="data.coolie">
        </div>

        <div class="col-md-2 form-group">
        <label>Total</label>
        <input type="number" class="form-control form-control-sm" name="total"  ng-value="data.total">
        </div>
     </div>
     
        


        

        <div class="row">

      
  
        <!-- <div class="col-md-2 form-group">
        <button type="submit" class="btn btn-primary" >Submit</button>
        </div> -->
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
  
const app = angular.module('myApp', []);
const baseUrl = '<?php echo base_url();?>';
app.controller('myCtrl', function($scope, $http) {

  $scope.looms = angular.fromJson(<?php echo json_encode($looms);?>);
  $scope.loom_weavers = angular.fromJson(<?php echo json_encode($loom_weavers);?>);
  $scope.data = {};
  $scope.getLoom = function(e){
    var loom_id = e.target.value;
    $http.get(baseUrl+'api/loom/'+loom_id).then(function(response){
      $scope.data = response.data;
    })
  }
  $scope.getDhothi = function(e){
    var dhothi = e.target.value;
    $scope.data.warp_yarn = (dhothi * $scope.data.size).toFixed(2);
    $scope.data.weft_yarn = ((dhothi * $scope.data.grm)/1000).toFixed(2);
    $scope.data.total = (dhothi*$scope.data.coolie).toFixed(2);
  }
})




</script>
</body>
</html>

<!-- / Content -->

