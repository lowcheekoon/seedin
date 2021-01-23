
<div class="row">
	<div class="col-12">
		<!-- Material form login -->
		<div class="card">

			<h5 class="card-header info-color white-text text-center py-4">
				<strong>Admin Panel - Sign in</strong>
			</h5>

			<!--Card content-->
			<div class="card-body px-lg-5 pt-0">

				<!-- Form -->
				<form class="text-center" style="color: #757575;" action="<?= $redirect ?>" method="POST">
					<input type="hidden" name="_method" value="POST">

					<!-- Email -->
					<div class="md-form">
						<input type="text" name="username" class="form-control" placeholder="Login Username">
						<label for="username">Username</label>
						<?= form_error("username", "<p class='ErrorMsg'>","</p>") ?>
					</div>

					<!-- Password -->
					<div class="md-form">
						<input type="password" name="password" class="form-control" placeholder="Login Password">
						<label for="password">Password</label>
						<?= form_error("password", "<p class='ErrorMsg'>","</p>") ?>
					</div>

					<!-- Sign in button -->
					<button class="btn btn-info btn-block my-4 waves-effect waves-light" type="submit">Sign in</button>
					<input type="hidden" name="PostRequest" value="1">
				</form>
				<!-- Form -->

			</div>

		</div>
		<!-- Material form login -->
	</div>
</div>
