<?php include('header_front.php');?>
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
		<div class="header-w3-agileits" id="home">
			 <?php include('head_front_html.php');?>
		<!--//header-w3l-->
		</div>
	</div>
				<div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title">Search Rooms</h2>
							</div>
							<div class="w3_mail_grids">
								<form action="<?php echo base_url() ?>bookings" method="post" enctype="multipart/form-data">
									<div class="col-md-5 w3_agile_mail_grid">
											<input placeholder="Check-in Date" required="" type="text" id="datepicker2" name="in_date" value="<?php echo $indate; ?>">
											</div>
									<div class="col-md-5 w3_agile_mail_grid">
										<input placeholder="Check-out Date" required="" type="text" id="datepicker1" name="out_date" value="<?php echo $outdate; ?>">
									</div>
									<!--<div class="col-md-6 w3_agile_mail_grid">
									</div>-->
									<!--<div class="col-md-2 w3_agile_mail_grid">
										<select name="selector-room" id="selector-room" class="form-control1">
											<option>Regular</option>
											<option>Delux</option>
											<option>Super Delux</option>
										</select>
									</div>-->
									<div class="col-md-2 w3_agile_mail_grid">
										<?php echo form_submit('submit','search', "class='btn btn-primary custom-search'");?>
									</div>
									<div class="clearfix"> </div>
								</form>
							</div>
							<?php
								if(!empty($allrooms)) { ?>
							<div class="priceing-table-main">
								<?php
									$i = 1;
								foreach ($allrooms as $room)
								{ ?>
								<div class="col-md-4 price-grid" style="margin-bottom:50px;">

									<div class="price-block agile">
										<div class="price-gd-top pric-clr<?php echo $i ?>">
											<h4><?php echo $room->r_name; ?></h4>
											<h3><span>$</span><?php echo $room->price; ?></h3>
											<h5>1 Night</h5>
										</div>
										<div class="price-gd-bottom">
											<div class="price-list">
								
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
												</ul>
												<h6 class="bed"><i class="fa fa-bed" aria-hidden="true"></i></h6>
											</div>
											<div class="price-selet pric-sclr1">		    			   
												<a href="<?php echo base_url() ?>book_now/index/<?php echo $room->id; ?>/<?php echo $indate; ?>/<?php echo $outdate; ?>" data-toggle="modal" data-target="">Book Now</a>
											</div>
										</div>
						
									</div>
									
								</div> 
								<?php $i = $i + 1; } ?> 	
								<div class="clearfix"> </div>
						</div>
						<?php } else { ?>
						<div class="grid_3 grid_5">
							<div class="but_list">
								<div class="alert alert-warning" role="alert">
									<strong></strong>No rooms available for selected Dates or No Dates selected!
								</div>
							</div>
						</div>
						<?php } ?>


					</div>
				</div>
 <?php include('footer_front.php');?>