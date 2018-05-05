<?php include('header_front.php');?>
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">

			    <?php include('head_front_html.php');?>

			
		<!--//header-w3l-->
	
		</div>
		 </div>
		 <div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="/">Home</a> <i>/</i></li>
				
				<li>Contact</li>
			</ul>
		</div>
	</div>
	
		 <div class="w3_content_agilleinfo_inner">
					    <div class="container">
						<?php echo $msg; ?>
						<?php
					if(validation_errors() != false) { 
						echo "<div class='alert alert-danger' role='alert'>";
						echo validation_errors();
						echo "</div>";
						}
					
					?>
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title">Contact</h2>
								
							</div>
									<div class="w3_mail_grids">
										<form action="<?php echo base_url(); ?>contact/send_mail" method="post">
											<div class="col-md-6 w3_agile_mail_grid">
													<input placeholder="Your Name" required="" type="text" name="your_name">
													<input placeholder="Your Email" required="" type="email" name="your_email">
													<input placeholder="Your Phone Number" required="" type="text" name="your_phone">

												
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
												<input value="Submit" type="submit">
											</div>
											<div class="clearfix"> </div>
										</form>
							</div>
					   </div>
							<div class=" map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2743.795559572511!2d11.871696115807254!3d46.55173086823853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47783f06dd6a0e71%3A0x7104d955c6ddbeec!2sHotel+La+Plaza!5e0!3m2!1sen!2sin!4v1507181901181"></iframe>
							</div>
				  </div>
				  <div class="w3l_contact-bottom">
		<div class="container">
			
			<div class="w3ls_con_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Location</h4>
							<p>Str. Col Alt, 26, 39033 Corvara In Badia BZ, Italy</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Email</h4>
							<a href="mailto:info@example.com">info@laplaza.com</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Call Us</h4>
							<p>(+000) 003 003 0052</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	 <?php include('footer_front.php');?>