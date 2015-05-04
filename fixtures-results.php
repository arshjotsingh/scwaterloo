<!doctype html>
<html>
<head>
	<title>Fixtures & Results | SC Waterloo</title>
	<?php include('scripts.php') ;
		
	
		
$fixtures = array(

				array(	"Date"=>"Sun Jan 07 2015",
				 		"Time"=>"19:45",
				 		"Location"=>"Loftus Cheek Ground",
				 		"Hometeam"=>"SC Toronto",
				 		"Score"=>"0-2",
				 		"Awayteam"=>"SC Waterloo",
				 		"Report"=>"Match Report"),
				
				array(	"Date"=>"Sat Jan 25 2015",
				 		"Time"=>"17:00",
				 		"Location"=>"Saints Stadium",
				 		"Hometeam"=>"SC London",
				 		"Score"=>"0-5",
				 		"Awayteam"=>"SC Waterloo",
				 		"Report"=>"Match Report"),

				array(	"Date"=>"Sat Feb 14 2015",
				 		"Time"=>"17:00",
				 		"Location"=>"Stadium of Light",
				 		"Hometeam"=>"Montreal SC",
				 		"Score"=>"2-2",
				 		"Awayteam"=>"SC Waterloo",
				 		"Report"=>"Match Report"),

				array(	"Date"=>"Sun Feb 22 2015",
				 		"Time"=>"17:00",
				 		"Location"=>"Waterloo Arena",
				 		"Hometeam"=>"SC Waterloo",
				 		"Score"=>"2-1",
				 		"Awayteam"=>"SC London",
				 		"Report"=>"Match Report"),

				array(	"Date"=>"Sun Mar 2 2015",
				 		"Time"=>"17:00",
				 		"Location"=>"Saints Stadium",
				 		"Hometeam"=>"SC London",
				 		"Score"=>"0-1",
				 		"Awayteam"=>"SC Waterloo",
				 		"Report"=>"Match Report"),

				array(	"Date"=>"Sat Mar 14 2015",
				 		"Time"=>"17:00",
				 		"Location"=>"Waterloo Arena",
				 		"Hometeam"=>"SC Waterloo",
				 		"Score"=>"4-0",
				 		"Awayteam"=>"SC Toronto",
				 		"Report"=>"Match Report"),

				array(	"Date"=>"Sun Apr 18 2015",
				 		"Time"=>"12:00",
				 		"Location"=>"Waterloo Arena",
				 		"Hometeam"=>"SC Waterloo",
				 		"Score"=>"TBP",
				 		"Awayteam"=>"SC York",
				 		"Report"=>"Match Report")
			);



		
	?>
</head>
<body>
	<div class="container">
		<?php include('header.php') ?>
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Fixtures And Results</h2>
			</div>
		</div>
			
			<div class="row">
				<div class="col-lg-12">
					<table class="table table-striped">
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Location</th>
							<th>Result</th>
							<th></th>
						</tr>
						<tr>
						<?php
						
							for ($row=0; $row < count($fixtures) ; $row++) { 

								echo "<tr>";

								foreach($fixtures[$row] as $key => $value) {
									
									if($key=="Score") {
										echo " ".$value." ";
									}
									else if($key == "Hometeam"){
										echo "<td>";
										echo $value;
									}
									else if($key == "Awayteam"){
										echo $value;
										echo "</td>";
									}
									else if($key == "Report") {
										echo "<td><a href=''>".$value."</a></td>";
									}
									else {
										echo "<td>";
								    	echo $value;
								    	echo "</td>";
									}
									
							}
						}
					 	?>
					 	<tr>
					 		<td colspan="5" style="text-align:right">** TBP - to be played</td>
					 	</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>