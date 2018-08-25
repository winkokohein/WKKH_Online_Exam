<div class="container-fluid">
	<?php include('partials/header.php'); ?>
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card">
				<div class="card-body">
					<form class="horizontal" action="login.php" method="post">
						<div class="form-group row">
						  <label for="name" class="col-sm-4 col-form-label">Username</label>
						  <div class="col-sm-8">
						    <input type="text" class="form-control" id="name" name="name" required="">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="password" class="col-sm-4 col-form-label">Password</label>
						  <div class="col-sm-8">
						    <input type="password" class="form-control" id="password" name="password" required="">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="login" class="col-sm-4 col-form-label"></label>
						  <div class="col-sm-8">
						    <button type="submit"  class="btn btn-primary mb-2" id="login" name="login">Login</button>
						  </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>