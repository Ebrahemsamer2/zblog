
<?php $page_title = "Admin Login | Zblog"; ?>
<?php include "inc/header.php"; ?>

<div class="login">
	
	<div class="login-form">
		<h6>Hello Admin</h6>
		<form action="login.php" method="POST">
			
			<div class="form-group">
				<input type="email" name="email" placeholder="Email" required autocomplete="off" class="form-control">
				<i class="fa fa-envelope"></i>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password" required autocomplete="off" class="form-control">
				<i class="fa fa-unlock-alt"></i>
			</div>
			<input type="submit" name="login" value="Login" class="btn btn-default form-control">
		</form>

	</div>
</div>

<!-- #1B1D32 , #1E2137 , #24273E , ( i : #6C7573 , btn : #FC445F ) -->