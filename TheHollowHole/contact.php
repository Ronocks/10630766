<?php include 'includes/header.php'; ?>
<div class ="reservation">
<h2> You can get in contact with us bellow<h2>
         <div class="container my-5">
            <form method="post" action="email.php">
            <div class="row mb-3">
		<label class="col-sm-3 col-form-label"> Name  </label>
		<div class="col-sm-6">
				<input type="text" name="name" class="form-control">
		</div>
</div>
<div class="row mb-3">
		<label class="col-sm-3 col-form-label"> Email  </label>
		<div class="col-sm-6">
				<input type="text" name="email" class="form-control">
		</div>
</div>
<div class="row mb-3">
		<label class="col-sm-3 col-form-label"> Subject  </label>
		<div class="col-sm-6">
				<input type="text" name="subject" class="form-control">
		</div>
</div>
<div class="row mb-3">
		<label class="col-sm-3 col-form-label"> Message  </label>
		<div class="col-sm-6">
				<input type="text" name="message" class="form-control">
		</div>
</div>
<br>
<div>
   <div class="btn btn-primary" >
      <button type="submit"> Submit </button>
</div>
</div>
</form>
</div>
<?php include 'includes/footer.php'; ?>