<?php include('header.php');?>
<section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display"></h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
<?php
echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
echo "<br/>";
echo "<br/>";
echo "Welcome to Admin Page";
echo "<br/>";
echo "<br/>";
echo "Your Username is " . $username;
echo "<br/>";
echo "Your Email is " . $email;
echo "<br/>";
?>

</div></div></div>
</section>
<?php include('footer.php');?>

