<?php include "inc/header.php"; ?>
<?php include "inc/navbar.php"; ?>
<?php include "inc/functions.php"; ?>

<?php include "inc/connect.php"; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<?php include "inc/sidebar.php"; ?>
		</div>
		<div class="col-sm">
			
			<div class="categories">

				<?php 
					if( ! session_id() ) {
						session_start();
					}
					if( isset($_SESSION['success']) && ! empty($_SESSION['success'])) {
						echo "<div class='alert alert-success'>";
						echo $_SESSION['success'];
						echo "</div>";
						$_SESSION['success'] = "";
					}
					if( isset($_SESSION['error']) && ! empty($_SESSION['error'])) {
						echo "<div class='alert alert-danger'>";
						echo $_SESSION['error'];
						echo "</div>";
						$_SESSION['error'] = "";
					}
				?>

				<h4>Categories</h4>
				<form action="categories.php" method="POST">
					<div class="row">
						<div class="col-sm-10">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Category Name" autocomplete="off" required>
							</div>
						</div>
						<div class="col-sm">
							<input value="Add Category" type="submit" name="addcategory" class="btn btn-primary">
						</div>
					</div>


				</form>
				<div class="table-responsive">
					<table class="table table-hover table-striped table-dark">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">datetime</th>
					      <th scope="col">Category</th>
					      <th scope="col">Created_by</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>

					  	<?php
					  	$number = 0;
					  	foreach(get_categories() as $category) { $number++; ?>

					    <tr>
					      <th scope="row"><?php echo $number; ?></th>
					      <td><?php echo $category['datetime']; ?></td>
					      <td class="cat_name">
					      	<?php 
					      		echo $category['name'];
					      	?>
					      	
					      </td>
					      <td>
					      	<?php 
					      		echo $category['creater_name'];
					      	?>
					      </td>
					      <td class="action-links">
					      	<a class="btn btn-primary btn-sm" href="post.php?id=<?php echo $post['id']; ?>">Edit</a>
					      	<form onsubmit="return confirm('Are You Sure?');" action="deletepost.php" method="POST">
					      		<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
					      		<input class="btn btn-danger btn-sm" type="submit" value="Delete" name="deletepost">
					      	</form>
					      </td>
					    </tr>
						<?php } ?>
					  </tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include "inc/footer.php"; ?>