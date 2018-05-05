    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url(); ?>assets/img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Hotel La Plaza</h2><a href="<?php echo base_url(); ?>" target="_blank" class=" btn-cstm"><span class="text-uppercase">Visit Site</span></a>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li <?php if($this->uri->segment(1)=="admin_login"){echo 'class="active"';}?> ><a href="<?php echo base_url();?>admin"> <i class="icon-home"></i><span>Home</span></a></li>
            <li <?php if($this->uri->segment(1)=="rooms"){echo 'class="active"';}?> ><a href="<?php echo base_url();?>index.php/rooms"><i class="icon-form"></i><span>Rooms</span></a></li>
            <li <?php if($this->uri->segment(1)=="bookings"){echo 'class="active"';}?> > <a href="#"><i class="icon-presentation"></i><span>Bookings</span></a></li>
            <li <?php if($this->uri->segment(1)=="customers"){echo 'class="active"';}?> > <a href="#"> <i class="icon-grid"> </i><span>Customers</span></a></li>
            <li <?php if($this->uri->segment(1)=="settings"){echo 'class="active"';}?> > <a href="#"> <i class="icon-interface-windows"></i><span>Settings</span></a></li>
            <!--<li> <a href="<?php echo base_url(); ?>index.php/admin_login/logout"> <i class="icon-mail"></i><span>Logout</span></a></li>-->
          </ul>
        </div>
        <!--<div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li> <a href="#">Page 1</a></li>
                <li> <a href="#">Page 2</a></li>
                <li> <a href="#">Page 3</a></li>
                <li> <a href="#">Page 4</a></li>
              </ul>
            </li>
            <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
            <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
            <li> <a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
          </ul>
        </div>-->
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><span> </span><strong class="text-primary">Dashboard</strong></div></a></div>
              
                </li>
                <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/admin_login/logout" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>