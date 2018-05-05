<?php include('header.php');?>
<section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">Edit room</h1>
          </header>
          <div class="row">
			<div class="col-lg-12">
              <div class="card">
                <div class="card-block">
					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<?php echo $msg; ?>
					<?php
					echo "<div class='error_msg'>";
					if (isset($error_message)) {
					echo $error_message;
					}
					echo validation_errors();
					echo "</div>";
					?>
					<?php foreach( $rooms as $show ): ?>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Name</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="r_name" id="name" value="<?php echo $show->r_name; ?>"/>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Roon No</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="room_no" id="name" value="<?php echo $show->room_no; ?>"/>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Price (&euro;)</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="price" id="name" value="<?php echo $show->price; ?>"/>
                      </div>
                    </div>
					<div class="line"></div>
					<div class="form-group row">
                      <label class="col-sm-2 form-control-label">Featured</label>
                      <div class="col-sm-10 select">
                        <select name="featured" class="form-control">
							<option value ="<?php echo $show->featured; ?>"><?php echo $show->featured; ?></option>
                          <?php if($show->featured == 'yes') {?><option value ="no">no</option> <?php }
						   else if($show->featured == 'no') { ?><option value ="yes">yes</option> <?php } ?>
                          <!--<option value="<?php if($show->featured = 'yes') {echo "no";} else if($show->featured = 'no') { echo "yes"; } ?>"><?php if($show->featured = 'yes') {echo "no";} else if($show->featured = 'no') { echo "yes"; } ?></option>-->
                        </select>
                      </div>
					 </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Description</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="r_description" id="name" value="<?php echo $show->description; ?>"/>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Image</label>
                      <div class="col-sm-10">
					    <div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $show->image; ?>" class="img-gallery"/>
						</div>
                        <input class="form-control" type="file" name="r_image" id="name" />
						<input type="hidden" name="r_image1" value="<?php echo $show->image; ?>" /><span class="help-block-none">Please select a image of 500x300 to use as a featured image.</span>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Gallery</label>
					  <div class="row">
					  <?php if(!empty($show->gallery0)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery0; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery1)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery1; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery2)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery2; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery3)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery3; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery4)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery4; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery5)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery5; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery6)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery6; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery7)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery7; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery8)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery8; ?>" class="img-gallery"/>
						</div>
						<?php } if(!empty($show->gallery9)){ ?>
						<div class="col-lg-3">
						<img src="<?php echo base_url(); ?>uploads/files/<?php echo $show->gallery9; ?>" class="img-gallery"/>
						</div>
						<?php } ?>
					  </div>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" class="form-control" name="userFiles[]" multiple/>
						<input type="hidden" name="gallery00" value="<?php echo $show->gallery0; ?>" />
						<input type="hidden" name="gallery11" value="<?php echo $show->gallery1; ?>" />
						<input type="hidden" name="gallery22" value="<?php echo $show->gallery2; ?>" />
						<input type="hidden" name="gallery33" value="<?php echo $show->gallery3; ?>" />
						<input type="hidden" name="gallery44" value="<?php echo $show->gallery4; ?>" />
						<input type="hidden" name="gallery55" value="<?php echo $show->gallery5; ?>" />
						<input type="hidden" name="gallery66" value="<?php echo $show->gallery6; ?>" />
						<input type="hidden" name="gallery77" value="<?php echo $show->gallery7; ?>" />
						<input type="hidden" name="gallery88" value="<?php echo $show->gallery8; ?>" />
						<input type="hidden" name="gallery99" value="<?php echo $show->gallery9; ?>" />
						<span class="help-block-none">Select multiple Images using clt+ for gallery.<br>Select Images of same size for better performance of the site!</span>
                      </div>
                    </div>
					<div class="line"></div>
					<div class="form-group row">
                      <div class="col-sm-4">
                        <?php echo form_submit('submit','Update Room', "class='btn btn-primary'");?>
                      </div>
                    </div>
					<?php endforeach; ?>
				</form>
                </div>
              </div>
            </div>
			</div>
		</div>
<section>
<?php include('footer.php');?>