<?php include 'includes/header.php'; ?>
<?php

	if(isset($_GET["reservationid"]))
	{
		$reservationid = $_GET["reservationid"];	
		$query = "SELECT * FROM reservation WHERE reservationid = '$reservationid' ";
		$result = mysqli_query($con, $query);
		
		if(mysqli_num_rows($result) > 0)
		{
			$reservation = mysqli_fetch_array($result);
			
			if(isset($_POST['update_res']))
			{
				$reservationid = $_POST['reservationid'];
                $username = $_POST["username"] ;
                $email = $_POST["email"];
                $rlocation = $_POST["rlocation"];
                $rtime = $_POST["rtime"];
                $rdate = $_POST["rdate"] ;
                $numofguests = $_POST["numofguests"];
                $windowseat = $_POST["windowseat"];
				
				$sql = "UPDATE reservation SET username = '$username', email ='$email', rlocation = '$rlocation', rtime = '$rtime', rdate ='$rdate', numofguests = '$numofguests', windowseat = '$windowseat' WHERE reservationid = '$reservationid'";
				$result = mysqli_query($con, $sql);
		
				header("Location: viewreservation.php");
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
					<input type="text" class="form-control"  name="reservationid" value="<?= $reservation['reservationid']; ?>" >
					</div>
				</div>	
	
                <div class="row mb-3">
					<label > Username  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="username" value="<?= $reservation['username']; ?>" >
					</div>
				</div>	

                <div class="row mb-3">
					<label > Email  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="email" value="<?= $reservation['email']; ?>" >
					</div>
				</div>	

                <div class="row mb-3">
					<label > Location  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="rlocation" value="<?= $reservation['rlocation']; ?>" >
					</div>
				</div>	

                <div class="row mb-3">
					<label > Time  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="rtime" value="<?= $reservation['rtime']; ?>" >
					</div>
				</div>	

                <div class="row mb-3">
					<label > Date  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="rdate" value="<?= $reservation['rdate']; ?>" >
					</div>
				</div>	

                <div class="row mb-3">
					<label > Number Of Guests  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="numofguests" value="<?= $reservation['numofguests']; ?>" >
					</div>
				</div>	

                <div class="row mb-3">
					<label > Window Seat  </label>
					<div class="col-sm-6">
					<input type="text" class="form-control"  name="windowseat" value="<?= $reservation['windowseat']; ?>" >
					</div>
				</div>	
				
		
				<div class="row mb-3">
					<div class="offset-sm-3 col-sm-3 d=grid">
						<button type="submit" name="update_res" class="btn btn-primary" >Submit </button>
					</div>
				<div>
	</form>

 </div>
 
<?php include 'includes/footer.php'; ?>
		