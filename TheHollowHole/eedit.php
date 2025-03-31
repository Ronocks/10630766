<?php include 'includes/header.php'; ?>
<?php

	if(isset($_GET["Id"]))
	{
		$Id = $_GET["Id"];	
		$query = "SELECT * FROM users WHERE Id = '$Id' ";
		$result = mysqli_query($con, $query);
		
		if(mysqli_num_rows($result) > 0)
		{
			$user = mysqli_fetch_array($result);
			
			if(isset($_POST['update_user']))
			{
                $Id = $_POST["Id"] ;
                $email = $_POST["email"] ;

			
				$sql = "UPDATE users SET email = '$email'  WHERE Id = '$Id'";
				$result = mysqli_query($con, $sql);
		
				header("Location: loginregister.php");
				exit;
			}
			
		}
		
	}
?>

	<div class="container my-5">
	<h2>Add Student</h2>

  
	<form method="post">
	
				<div class="row mb-3">
					<label > ID  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="Id" value="<?= $user['Id']; ?>" >
					</div>
				</div>	
	
                <div class="row mb-3">
					<label > New Email  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="email" value="<?= $user['email']; ?>" >
					</div>
				</div>	

 
                <div class="row mb-3">
					<div class="offset-sm-3 col-sm-3 d=grid">
						<button type="submit" name="update_user" class="btn btn-primary" >Submit </button>
					</div>
				<div>
	</form>

 </div>
 
<?php include 'includes/footer.php'; ?>