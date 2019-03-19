<?php include "inc/header.php"; ?>

<div class="registeration">
<a class="navbar-brand logo" href=""><span>ZB</span><span>log</span></a>
<div class="container">
	<div class="row">
		
		<div class="col-md">
			<div class="signup">
				<h2>Sign up</h2>
				<form method="POST" action="signin.php">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" required autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" required autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" required class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="confirmpassword" placeholder="Confirm Password" required class="form-control">
						<input type="submit" value="Sign-up" name="singup" class="btn btn-default">
					</div>
				</form>
			</div>
		</div>

		<div class="col-md">
			<div class="signin">
				<h2>Sign in</h2>
				<form method="POST" action="signin.php">
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" required autocomplete="off" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" required class="form-control">
						<input type="submit" value="Sign-in" name="singin" class="btn btn-default">
					</div>
				</form>
			</div>
		</div>

	</div>

</div>
</div>