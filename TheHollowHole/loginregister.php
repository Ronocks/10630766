<?php include 'includes/header.php'; ?>
<?php include 'server.php'; ?>

<div class="login">
<h2>Login</h2>
<form method="post" action="loginregister.php">
        <?php include'errors.php';?>
        <div class="input-group">
            <label >Username</label>
            <input type="text" name="username">
</div>
<div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
</div>
<div class="input-group">
           <button type="submit" class="btn" name="login_user">Login</button>
</div>
</form>

<h2>Register</h2>
<form method="post" action="loginregister.php">

        <?php include'errors.php';?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
</div>
<div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
</div>
<div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
</div>
<div class="input-group">
           <button type="submit" class="btn" name="reg_user">Register</button>
</div>

</form>
</div>
<?php include 'includes/footer.php'; ?>