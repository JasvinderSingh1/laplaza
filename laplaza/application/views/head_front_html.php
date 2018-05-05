<div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<h1><a  href="/"><span>La</span>Plaza <p class="s-log">Hotel</p></a>
										 
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				 <ul class="nav navbar-nav">
											<li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>">Home</a></li>
												<li <?php if($this->uri->segment(1)=="about"){echo 'class="active"';}?> ><a href="#">About</a></li>
												<li <?php if($this->uri->segment(1)=="gallery"){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
												 <!--<li class="dropdown">
													<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Pages <b class="caret"></b></a>
													 <ul class="dropdown-menu">
														<li><a href="#">Font Icons</a></li>
													
														<li><a href="#">Short Codes</a></li>
													</ul>
												</li>-->

												<li <?php if($this->uri->segment(1)=="contact"){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>contact">Contact</a></li>
												<li <?php if($this->uri->segment(1)=="bookings"){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>bookings">Book Now</a></li>

											
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>
									<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<!--<form action="#" method="post">
															<input name="Search" type="search" placeholder="Booking Search Working...">
														</form>-->
														<form action="<?php echo base_url() ?>bookings" method="post" enctype="multipart/form-data">
															<div class="col-md-5">
																<input placeholder="Check-in Date" required="" type="text" id="datepicker3" name="in_date">
															</div>
															<div class="col-md-5">
																<input placeholder="Check-out Date" required="" type="text" id="datepicker" name="out_date">
															</div>
															<div class="col-md-2">
																<?php echo form_submit('submit','search', "class='btn btn-primary'");?>
															</div>
														</form>
													</div>
												</div>
					
							</div> 