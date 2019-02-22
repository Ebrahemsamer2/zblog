<?php $page_title = "Settings | ZBlog"; ?>
<?php include "inc/header.php"; ?>
<?php include "inc/functions.php"; ?>
<?php include "inc/navbar.php"; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			<?php include "inc/sidebar.php"; ?>
		</div>
		<div class="col-sm">
			<div class="settings">
				
				<div class="general-settings">
					
					<h4>General Settings</h4>
					<form action="settings.php" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-2">
								<label>Site Name : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Site Name" required autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>Site Tagline : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="tagline" class="form-control" placeholder="Site Tagline" required autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>Site Logo : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="file" name="logo" class="form-control">
									<input style="float: right;" type="submit" name="save-general" class="btn btn-info" value="Save Changes">
								</div>
							</div>
						</div>
					</form>
				</div>
				<hr>
				<h4>Posts Settings</h4>
					<form action="settings.php" method="POST">
						<div class="row">
							<div class="col-sm-2">
								<label>Home Posts Number : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input  min="2" max="20" type="number" name="hpn" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>Posts Order : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<select class="form-control" name="posts_order">
										<option value="newest">Newest</option>
										<option value="oldest">Oldest</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>Recent Posts Number : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input  min="2" max="10" type="number" name="rpn" class="form-control">	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label>Related Posts Number : </label>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input min="1" max="3" type="number" name="relatedpn" class="form-control">	
									<input style="float: right;" class="btn btn-info" type="submit" name="save-posts" value="Save Changes">
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include "inc/footer.php"; ?>