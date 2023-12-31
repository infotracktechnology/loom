<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Loom - Admin Dashboard </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/img/favicon.ico' />
</head>
<style type="text/css">
  body
  {
    background-image: url('<?php echo base_url();?>/assets/img/users/login.avif');
    background-size:     cover;                
    background-repeat:   no-repeat;
  }
</style>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form action="<?php echo base_url();?>AuthController/dashboard" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        <?php 

          if ($this->session->flashdata("msg")!="") {
                       
                      ?>  
                    <center ><span style="font-size: 15px;font-family: verdana;color:red ; ">
             <?php
                        $msg = $this->session->flashdata("msg");
                        
                          echo $msg;
                            ?>
          </span></center>
                    <?php }?>

                  <div class="form-group">
                    <label for="email">Username</label>
                    <input  type="text" class="form-control form-control-sm" name="username" placeholder="Username" required=""  autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                     
                    </div>
                    <input id="password" type="password"name="password" placeholder="Password" required="" class="form-control form-control-sm" >
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
             
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </section>
       <center><a class="txt2" href="http://www.infotrackin.com/" target="_blank">
              ©<?php echo date('Y'); ?> All Rights Reserved By <b style="color: #27a9e0">Infotrack Technology Solution</b>
              <i class="fa fa-mail-forward" aria-hidden="true" style="color: #f05a40"></i>
            </a></center>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>