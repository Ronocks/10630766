<?php include 'includes/header.php'; ?>

<div class="content">

<?php
$username = "";
$email = "";
$rlocation = "";
$rtime = "";
$rdate = "";
$numofguests = "";
$windowseat = "";


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	
		$username = $_POST["username"];
		$email = $_POST["email"];
		$rlocation = $_POST["rlocation"];
		$rtime = $_POST["rtime"];
        $rdate = $_POST["rdate"] ;
		$numofguests = $_POST["numofguests"];
        $windowseat = $_POST["windowseat"];
		
		
			
		$sql = "INSERT INTO reservation(username, email, rlocation, rtime, rdate, numofguests, windowseat) VALUES('$username', '$email', '$rlocation', '$rtime', '$rdate', '$numofguests', '$windowseat')";
		$result = $con->query($sql);
				
		$username = "";
        $email = "";
        $rlocation = "";
        $rtime = "";
        $rdate = "";
        $numofguests = "";
        $windowseat = "";
				
				header("Location: viewbookings.php");
				exit;
	}

?>

<div class="reservation">
<div class="container my-5">
 <h2>Make Reservation</h2>


 <form method="post">
<div class="con">
 <div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Name  </label>
				<div class="col-sm-6">
						<input type="text" class="form-control" name="username" value="<?php echo $username; ?> ">
				</div>
		</div>
		<div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Email  </label>
				<div class="col-sm-6">
						<input type="text" class="form-control" name="email" value="<?php echo $email; ?> ">
				</div>
		</div>
		
		<div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Location  </label>
				<div class="col-sm-6">
                <select name="rlocation" multiple size="4">
                 <option value="Dublin" selected >Dublin</option>
                 <option value="Waterford">Waterford</option>
                <option value="Wexford">Wexford</option>
                <option value="Galway">Galway</option>
                </select>
               
</div> 
				</div>
	
        
		<div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Time  </label>
				<div class="col-sm-6">
                <select name="rtime" multiple size="1">
                 <option value="14:00-15:00" selected >14:00-15:00</option>
                 <option value="15:00-16:00" selected >15:00-16:00</option>
                 <option value="16:00-17:00" selected >16:00-17:00</option>
                 <option value="17:00-18:00" selected >17:00-18:00</option>
                 <option value="18:00-19:00" selected >18:00-19:00</option>
                 <option value="19:00-20:00" selected >19:00-20:00</option>
                 <option value="20:00-21:00" selected >20:00-21:00</option>
                 <option value="21:00-22:00" selected >21:00-22:00</option>
                </select>
				</div>
		</div>
        <div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Date  </label>
				<div class="col-sm-6">
						<input type="date" class="form-control" name="rdate" value="<?php echo $rdate; ?> ">
                       
				</div>
		</div>
        <div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Number Of Guests  </label>
				<div class="col-sm-6">
                <input type="text" class="form-control" name="numofguests" value="<?php echo $numofguests; ?> ">
				</div>
		</div>
        <div class="row mb-3">
				<label class="col-sm-3 col-form-label"> Window Seat  </label>
				<div class="col-sm-6">
                <label for="yes">Yes</label>
                        <input type="radio"  id="yes" name="windowseat" value="Yes">
                        <label for="no">No</label>
                        <input type="radio"  id="no" name="windowseat" value="No">
</div>
			
		</div>

		
		<div class="row mb-3">
				<div class="offset-sm-3 col-sm-3 d=grid">
						<button type="submit" class="btn btn-primary">Reserve </button>
				</div>
		</div>
</div>
 </form>
</div>
</div>
<br>


<?php include 'includes/footer.php'; ?>