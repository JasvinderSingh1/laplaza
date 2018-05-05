<?php include('header.php');?>
<section class="charts">
        <div class="container-fluid">
		  <header> 
            <a href="add_room" class="btn btn-primary">Add New Room</a>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-block">
					<?php if(!empty($allrooms)) { ?>
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Room No</th>
                        <th>Room Name</th>
						<th>Price (&euro;)</th>
                        <th>Featured</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					  <?php foreach ( $allrooms as $room ): ?>
                      <tr>
                        <th scope="row"><?php echo $room->room_no; ?></th>
						<td><?php echo $room->r_name; ?></td>
						<td><?php echo $room->price; ?></td>
                        <td><?php echo $room->featured; ?></td>
                        <td>
							<a class="btn btn-primary btn-cstm" href="<?php echo base_url(); ?>edit_room/index/<?php echo $room->id;?>">Edit</a>
							<a class="btn btn-secondary btn-cstm" href="<?php echo base_url(); ?>delete_room/index/<?php echo $room->id;?>" onclick="show_confirm()">Delete</a>
						</td>
                      </tr>
					  <?php endforeach; ?>
                    </tbody>
                  </table>
				  <?php } 
				  else {
					  echo "No rooms added!"; }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php include('footer.php');?>