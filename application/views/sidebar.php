    



      <div class="navbar-bg"></div>



      <nav class="navbar navbar-expand-lg main-navbar bg-green sticky">



        <div class="form-inline mr-auto">



          <ul class="navbar-nav mr-3">



            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg



                  collapse-btn"> <i data-feather="align-justify"></i></a></li>



            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">



                <i data-feather="maximize"></i>



              </a></li>



            <li>



              <form class="form-inline mr-auto">



                <div class="search-element">



                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">



                  <button class="btn" type="submit">



                    <i class="fas fa-search"></i>



                  </button>



                </div>



              </form>



            </li>



          </ul>



        </div>



        <ul class="navbar-nav navbar-right">



          



     



           <li class="dropdown"><a href="#" data-toggle="dropdown"



              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo base_url();?>assets/img/user.png"



                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>



            <div class="dropdown-menu dropdown-menu-right pullDown">



            <div class="dropdown-title"><?php echo  $_SESSION['name'];?></div>

            <a href="#" class="dropdown-item has-icon"> <i class="far

										fa-user"></i> Profile

              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>

                Activities

              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>

                Settings

              </a>



              <div class="dropdown-divider"></div>



              <a href="<?php echo base_url();?>AuthController/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>



                Logout



              </a>



            </div>



          </li>



        



        </ul>



      </nav>



      <div class="main-sidebar sidebar-style-2">



        <aside id="sidebar-wrapper">



          <div class="sidebar-brand">



            <a href="dashboard.php"> <img alt="image" src="<?php echo base_url();?>assets/img/logo.png" class="header-logo" /> <span



                class="logo-name">Loom</span>



            </a>



          </div>



         <ul class="sidebar-menu">



            <li class="menu-header">Main</li>

 



            <li class="dropdown">



              <a href="<?php echo base_url();?>AuthController/main_dashboard" class="nav-link"><i data-feather="bar-chart-2"></i><span>Dashboard</span></a>



            </li>



            <li class="dropdown">



              <a href="#" class="menu-toggle nav-link has-dropdown"><i



                  data-feather="cpu"></i><span>Master</span></a>



              <ul class="dropdown-menu">



                 <li><a class="nav-link" href="<?php echo base_url();?>MaterialController/">Material </a></li>

                 <li><a class="nav-link" href="<?php echo base_url();?>ProductController/">Product </a></li>

                 <li><a class="nav-link" href="<?php echo base_url();?>LoomController/">Loom </a></li>

                 <li><a class="nav-link" href="<?php echo base_url();?>SparePartController/">Spare Part </a></li>

                 <li><a class="nav-link" href="<?php echo base_url();?>TechnicianController/">Staff </a></li>

                 <li><a class="nav-link" href="<?php echo base_url();?>SupplierController/">Supplier</a></li>                 

              </ul>

            </li>





            <li class="dropdown">



              <a href="#" class="menu-toggle nav-link has-dropdown"><i



                  data-feather="shopping-cart"></i><span>Purchase</span></a>



              <ul class="dropdown-menu">



                <li><a class="nav-link" href="<?php echo base_url();?>PurchaseSpareController/">Spare </a></li>

  

                 

                 

              </ul>

            </li>











            <li class="dropdown">



<a href="#" class="menu-toggle nav-link has-dropdown"><i



    data-feather="box"></i><span>Service</span></a>



<ul class="dropdown-menu">



  <li><a class="nav-link" href="<?php echo base_url();?>ServiceLoomController/">Loom </a></li>



   

   

   

</ul>

</li>



<li class="dropdown">
 
<a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layers"></i><span>Production</span></a>
 
<ul class="dropdown-menu">
 

</ul>

</li>











            

          <li class="dropdown">



              <a href="http://www.infotrackin.com/its/" target="_blank" class="nav-link"><i data-feather="headphones"></i><span>Support </span></a>



            </li>



 



          </ul>



        </aside>



      </div>