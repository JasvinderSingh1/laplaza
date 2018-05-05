<?php include('header_front.php');?>
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">

			    <?php include('head_front_html.php');?>

			
		<!--//header-w3l-->
	
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
	        
						<!-- breadcrumb
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a><i>/</i></li>
				
				<li>Single</li>
			</ul>
		</div>
	</div> -->
<!-- //breadcrumb -->
			<!--/content-inner-section-->
								<?php foreach ( $rooms as $room ): ?>
		<?php $gallery = array();
	$gallery[1] = $room->gallery1;
	$gallery[2] = $room->gallery2;
	$gallery[3] = $room->gallery3;
	$gallery[4] = $room->gallery4;
	$gallery[5] = $room->gallery5;
	$gallery[6] = $room->gallery6;
	$gallery[7] = $room->gallery7;
	$gallery[8] = $room->gallery8;
	$gallery[9] = $room->gallery9;
	?>	
				<div class="w3_content_agilleinfo_inner">
						<div class="container">
				            <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title"><?php echo $room->r_name;?></h2>
						
							</div>
							   <div class="latest-news-agile-info">
								   <div class="col-md-8 latest-news-agile-left-content">
								
 


						
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <?php for($i=1;$i<=9;$i++) { 
			if($gallery[$i] != ''){ ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <?php } }?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $room->gallery0;?>" style="width:100%;">
      </div>

		<?php for($i=1;$i<=9;$i++) { 
			if($gallery[$i] != ''){ ?>
      <div class="item">
        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $gallery[$i];?>" style="width:100%;">
      </div>
		<?php } }?>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



											<div class="single video_agile_player">
											       
										            <div class="video-grid-single-page-agileits">
														<div data-video="f2Z65fobH2I" id="video"> <img src="images/3.jpg" alt="" class="img-responsive" /> </div>
													</div>
													 <h4>&euro; <?php echo $room->price;?></h4>
													 
										    </div>
										<div class="response">
											<h4>Description</h4>
											<p><?php echo $room->description;?></p>
										</div>
										<div class="agileinf-button">    <a class="read" href="/bookings">
											Check Availability
										</a>
										</div>

								   </div>
								   	<?php endforeach; ?>
								   <div class="col-md-4 latest-news-agile-right-content">
								   
										<div class="w3l-blog-list">
											<h4 class="side-t-w3l-agile">Archives List</h4>
											<ul>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Aug (15)</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Oct (20)</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>November (8)</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>December (25)</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>August (9)</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>July (15)</a></li>
												<li><a href="#"><i class="fa fa-long-arrow-right"> </i>Mar (25)</a></li>
											</ul>
										 </div>
											<div class="agile-info-recent">
											<h4 class="side-t-w3l-agile">Latest News</h4>
											<div class="w3ls-recent-grids">
												<div class="w3l-recent-grid">
													<div class="wom">
														<a href="single.html"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
													</div>
													<div class="wom-right">
														<h5><a href="single.html">Lorem Integer rutrum</a></h5>
														<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
															Ut tellus dolor, dapibus eget.</p>
															<ul class="w3l-sider-list">
																<li><i class="fa fa-clock-o" aria-hidden="true"></i>On Jan 12, 2016</li>
																<li><i class="fa fa-eye" aria-hidden="true"></i> 2602</li>
															</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="w3l-recent-grid">
													<div class="wom">
														<a href="single.html"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
													</div>
													<div class="wom-right">
															<h5><a href="single.html">Lorem Integer rutrum</a></h5>
														<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
															Ut tellus dolor, dapibus eget.</p>
															<ul class="w3l-sider-list">
																<li><i class="fa fa-clock-o" aria-hidden="true"></i>On Mar 3, 2016</li>
																<li><i class="fa fa-eye" aria-hidden="true"></i> 2742</li>
															</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="w3l-recent-grid">
													<div class="wom">
														<a href="single.html"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
													</div>
													<div class="wom-right">
															<h5><a href="single.html">Lorem Integer rutrum</a></h5>
														    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
															Ut tellus dolor, dapibus eget.</p>
															<ul class="w3l-sider-list">
																<li><i class="fa fa-clock-o" aria-hidden="true"></i>On Oct 13, 2016</li>
																<li><i class="fa fa-eye" aria-hidden="true"></i> 2802</li>
															</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										
							       </div>
								   <div class="clearfix"></div>
							   </div>
					
						</div>
				</div>
			<!--//content-inner-section-->
 <?php include('footer_front.php');?>