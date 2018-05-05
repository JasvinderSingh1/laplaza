<?php include('header_front.php');?>
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			    <?php include('head_front_html.php');?>
		<!--//header-w3l-->
		</div>
		 </div><?php foreach ( $rooms as $room ): ?>
<div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title">Booking Form for <?php echo $room->r_name;?> (&euro;<?php echo $room->price;?>)</h2>
							</div>
									<div class="w3_mail_grids">
										<form action="<?php echo base_url() ?>book_now/buy" method="post">
											<div class="col-md-6 w3_agile_mail_grid">
													<input placeholder="Check-in Date" required="" type="text" id="datepicker" name="check_in_date" value="<?php echo $indate; ?>" style="pointer-events:none">
													
												<!--	<div class="form-group">
														<label for="rooms" class="col-sm-4 control-label">Rooms</label>
														<div class="col-sm-8"><select name="Rooms" id="selector1" class="form-control1" onChange="fun(this.value)">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
														</select></div>
													</div>-->
													<div class="form-group" style="margin-top:5px">
														<label for="adults" class="col-sm-4 control-label">Adults</label>
														<div class="col-sm-8"><select name="adults" id="" class="form-control1">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
															<option>6</option>
															<option>7</option>
															<option>8</option>
															<option>9</option>
															<option>10</option>
														</select></div>
													</div>
													<div class="form-group form-group3">
														<label for="children" class="col-sm-4 control-label">Children</label>
														<div class="col-sm-8"><select name="children" id="" class="form-control1">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
															<option>6</option>
															<option>7</option>
															<option>8</option>
															<option>9</option>
															<option>10</option>
														</select></div>
													</div>
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
												<input placeholder="Check-out Date" required="" type="text" id="datepicker1" name="check_out_date" value="<?php echo $outdate; ?>" style="pointer-events:none">
												<input placeholder="Your Name" required="" type="text" name="name">
												<input placeholder="Your Email" required="" type="email" name="email">
												<input placeholder="Your Phome Number" required="" type="text" name="phone">
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
											<div class="form-group">
													<div class="col-sm-4 custom-button"><span class="">Price</span></div>
													<div class="col-sm-8"><input type="text" name="price_room" id="ansval" value="<?php echo $room->price;?>" tabindex="-1"></div>
													
													<!--<div class="col-sm-4"><h3 class="head-top1">Price:</h3></div>
													<div class="col-sm-8"><h3 class="head-top1">&euro; <?php echo $room->price;?></h3></div>-->
											
											</div>
											</div>
											<div class="col-md-3 w3_agile_mail_grid custom-button">
												<a href="/bookings"><span class="">Change dates</span></a>
											</div>
											<div class="col-md-3 w3_agile_mail_grid">
												<input value="Pay now" type="submit">
											</div>
											<div class="clearfix"> </div>
											<input value="<?php echo $room->price;?>" id="hidden_price" type="hidden">
											<input type="hidden" name="id" value="<?php echo $room->id;?>">
											<input type="hidden" name="r_name" value="<?php echo $room->r_name;?>">
										</form>
							</div>
					   </div>
				  </div>
<?php endforeach; ?>

 <?php include('footer_front.php');?>