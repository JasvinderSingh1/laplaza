<?php include('header.php');?>
<section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">Add new room</h1>
          </header>
          <div class="row">
	<!--<div class="errors">
	<?php echo validation_errors();  ?>
	</div>-->
	
			<div class="col-lg-12">
              <div class="card">
                
                <div class="card-block">
					<!--<?php echo form_open('admin_login/user_login_process'); ?> -->
					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<?php if($msg != '') {
					echo "<div class='alert alert-success custom-alert' role='alert'><strong>Well Done!</strong>&nbsp;";
							echo $msg; 
							echo "</div><div class='line'></div>";
					} ?>
					<?php
					if(validation_errors() != false) {
					echo "<div class='alert alert-danger custom-alert' role='alert'>";?><strong>Warning!</strong>&nbsp;<?php 
					echo validation_errors();
					echo "</div><div class='line'></div>";
					} ?>

					
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Name</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="r_name" id="name"/>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Room No</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="room_no" id="name"/>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Price</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="price" id="name"/>
                      </div>
                    </div>
					<div class="line"></div>
					<div class="form-group row">
                      <label class="col-sm-2 form-control-label">Featured</label>
                      <div class="col-sm-10 select">
                        <select name="featured" class="form-control">
                          <option value="no">no</option>
                          <option value ="yes">yes</option>
                        </select>
                      </div>
                      
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Description</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="r_description" id="name"/>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Image</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="r_image" id="name" /><span class="help-block-none">Please select a image of 500x300 to use as a featured image.</span>
                      </div>
                    </div>
					<div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Gallery</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" class="form-control" name="userFiles[]" multiple/><span class="help-block-none">Please select multiple Images using clt+ for gallery</span>
                      </div>
                    </div>
					<div class="line"></div>
					<div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <?php echo form_submit('submit','Add Room', "class='btn btn-primary'");?>
                      </div>
                    </div>
				</form>
                </div>
              </div>
            </div>
			</div>
		</div>
<section>
<?php include('footer.php');?>