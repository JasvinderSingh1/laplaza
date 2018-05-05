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
					           <h2 class="w3l-inner-h-title">Booking Confirmed</h2>
								
							</div>
									<div class="w3_mail_grids">
										<div>
    <h2 style="font-family: 'quicksandbold'; font-size:16px; color:#313131; padding-bottom:8px;">Dear Guest</h2>
    <span style="color: #646464;">Your payment was successful, thank you for booking.</span><br/>
    <span style="color: #646464;">Item Number : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $item_number; ?></strong>
  	</span><br/>
	<span style="color: #646464;">TXN ID : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $txn_id; ?></strong>
  	</span><br/>
	<span style="color: #646464;">Amount Paid : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09">$<?php echo $payment_amt.' '.$currency_code; ?></strong>
  	</span><br/>
	<span style="color: #646464;">Payment Status : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $status; ?></strong>
  	</span><br/>
</div>

							</div>
					   </div>
				  </div>

	 <?php include('footer_front.php');?>