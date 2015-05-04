<!doctype html>
<html>
	<head>
		<title>Home | SC Waterloo</title>
		<?php include('scripts.php') ?>

		<script type="text/javascript" src="scripts.js"></script>

	</head>
	<body>
		<div class="container">

			<?php include('header.php') ?>

		<div class="row">
			<h2 class="page-header">Login</h2>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<form class="form" action="home.php">
					  <div class="form-group">
					    <label class="sr-only" for="inputName"></label>
					    <input type="text" class="form-control" id="inputName" placeholder="Enter Name">
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox"> Remember me
					    </label>
					  </div>
					  <button type="submit" onclick="return setCookie()" class="btn btn-default">Log in</button>
				</form>
			</div>
			<div class="col-lg-4"></div>
			<div class="col-lg-4"></div>
		</div>
	<?php include('footer.php'); ?>
	</body>

	