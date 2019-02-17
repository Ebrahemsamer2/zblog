
<?php $page_title = "Admin Login | Zblog"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/functions.php"; ?>


<?php 
	
	if($_SERVER["REQUEST_METHOD"] === 'POST') {

		if(isset($_POST['login'])) {

			$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
			$password = $_POST['password'];

			$admin_found = is_admin($email);

			if(! empty($admin_found)) {
				
				// check password
				if( password_verify($password, $admin_found['password']) ) {
					if(! session_id()) {
						session_start();
					}
					redirect('index.php');
				}else {
					if(! session_id()) {
						session_start();
					}
					$_SESSION['error'] = "Wrong Password, If You can not remmember Your password click 
					<a href='' class='forgot-password' > Forgot my Password</a>";
				}

			}else {
				// show error wrong email
				if(! session_id()) {
					session_start();
				}
				$_SESSION['error'] = "Wrong Email, You can not access";
			}

		}

	}

?>


<div class="login">
	
	<div class="login-form">
		<?php 
			if(! session_id()) {
				session_start();
			}
			if(isset($_SESSION['error'])) {
				echo "<div class='alert alert-default'>";
				echo $_SESSION['error'];
				echo "</div>";
			}
		?>
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