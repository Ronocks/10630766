
<?php include 'includes/header.php'; ?>
<?php include 'server.php'; ?>
<div class="accman">
<h1>Account Managment</h1>
</div>
<div class="content">
<?php 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: loginregister.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginregister.php");
  }
?>

  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

      
    <div class="accman">
    <?php  if (isset($_SESSION['username'])) : ?>
        <div class= "icon">
        <img src="images/icon.png">
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    </div>
        <a href="viewaccounts.php"><button type="submit"> View Account Details </button></a>
        <br>
        <br>
        <a href="acc.php"><button type="submit"> Change Username </button></a>
        <br>
        <br>
        <a href="acce.php"><button type="submit"> Change Email </button></a>
        <br>
        <br>
      
        <a href="accountmanagment.php?logout='1'"> <button type="submit">logout </button></a>
    <?php endif ?>
    </div>
    </div>


<?php include 'includes/footer.php'; ?>