<!DOCTYPE html>
<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://tutor.ewsdev.in/index.php/admin_login/user_login_process");
}
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Plaza Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">

<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>

            <div class="logo text-uppercase"><span>Hotel</span><strong class="text-primary">La Plaza</strong></div>
            <p>If you are an Admin, Please type your User Name and Password to Log In your Admin Panel. If you are mistakenly here, please <a href="<?php echo base_url(); ?>">click here</a> to visit main site.</p>
            <?php 
			$attributes = array('id' => 'login-form');
			echo form_open('admin_login/user_login_process', $attributes); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
              <div class="form-group">
                <label for="login-username" class="label-custom">User Name</label>
				<input id="login-username" type="text" name="username"/>
              </div>
              <div class="form-group">
                <label for="login-password" class="label-custom">Password</label>
				<input id="login-password" type="password" name="password" />
              </div>
				<input type="submit" value=" Login " name="submit" class="btn btn-primary" />
            <?php echo form_close(); ?>
			<a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small>
			<a href="<?php echo base_url() ?>index.php/admin_login/user_registration_show" class="signup">Signup</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="http://enablerswebsolutions.com" target="_blank" class="external">EWS</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/front.js"></script>

  </body>
</html>