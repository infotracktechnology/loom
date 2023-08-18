<!DOCTYPE html>

<html lang="en">





<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>

  <meta charset="UTF-8">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <title>Loom - Admin Dashboard</title>

  <!-- General CSS Files -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.min.css">

  <!-- Template CSS -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">

  <!-- Custom style CSS -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/img/favicon.ico' />

</head>



<body>

  <div class="loader"></div>

  <div id="app">

    <div class="main-wrapper main-wrapper-1">

   <?php include('sidebar.php');?>

      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">New Booking</h5>
                          <h2 class="mb-3 font-18">258</h2>
                          <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url();?>assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Customers</h5>
                          <h2 class="mb-3 font-18">1,287</h2>
                          <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url();?>assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">New Project</h5>
                          <h2 class="mb-3 font-18">128</h2>
                          <p class="mb-0"><span class="col-green">18%</span>
                            Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url();?>assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Revenue</h5>
                          <h2 class="mb-3 font-18">$48,697</h2>
                          <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url();?>assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Revenue chart</h4>
      
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div id="chart1"></div>
                      
                    </div>

                  
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart4" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="chart3" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart2" class="chartsh"></div>
                </div>
              </div>
            </div>
          </div>

        </section>




 
         
      </div>

      <?php include_once 'footer.php';?>

    </div>

  </div>

  <!-- General JS Scripts -->

  <script src="<?php echo base_url();?>assets/js/app.min.js"></script>

  <!-- JS Libraies -->

  <script src="<?php echo base_url();?>assets/bundles/apexcharts/apexcharts.min.js"></script>

  <!-- Page Specific JS File -->

  <script src="<?php echo base_url();?>assets/js/page/index.js"></script>

  <!-- Template JS File -->

  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>

  <!-- Custom JS File -->

  <script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>





<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>