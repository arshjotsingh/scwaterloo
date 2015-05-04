<div class="row">
	<div class="col-lg-10">
		<a href="home.php">
			<img src="images/logo-top.png" alt=""class="img-responsive">
		</a>
	</div>
	<div class="col-lg-2" style="text-align:right">
		<p style="margin-top:5em">
			<script> 
				var cookie = document.cookie;
				var name = cookie.split("name=");
				if(name=="") 
				{
					name = ",Guest";
				}
				document.write("Hi"+name);
			</script>
			&nbsp;&nbsp;
			<a href="" onclick="clearCookie()">Logout</a>
			<script>
				function clearCookie () {
					// body...
					var todayDate = new Date();
					todayDate.setTime(todayDate.getTime()-1)
					document.cookie = "name=; expires=" + todayDate.toGMTString();
				}
			</script>
		</p>
	</div>
</div>


	
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li class=""><a href="home.php">Home</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="team.php">Team</a></li>
					<li><a href="management.php">Management</a></li>
					<li><a href="fixtures-results.php">Schedule</a></li>
					<li><a href="standings.php">Standings</a></li>
					<li><a href="gallery.php">Gallery</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
			        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      	</ul>
		</div>
	</nav>