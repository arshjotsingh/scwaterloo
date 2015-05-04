<!doctype html>
<html>
	<head>
		<title>Home | SC Waterloo</title>
		<?php include('scripts.php') ?>
	 
	</head>
	<body>
		<div class="container">
			<?php include('header.php') ?>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="page-header">Gallery</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-1.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-2.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-3.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-4.jpg" alt="image" class="img-responsive"></a></div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-4.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-3.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-2.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-5.jpg" alt="image" class="img-responsive"></a></div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-1.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/green2.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/gallery-4.jpg" alt="image" class="img-responsive"></a></div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a href="" class="thumbnail" data-toggle="modal" data-target="#myModal"><img src="images/green2.jpg" alt="image" class="img-responsive"></a></div>
			</div>


			<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  		<div class="modal-dialog">
			    	<div class="modal-content">
			        	<div class="modal-body">
			            	        <div class="well">
							            <div id="myCarousel" class="carousel slide">
							                <!-- Carousel items -->
							                <div class="carousel-inner">
							                    <div class="item active">
							                        <img src="images/gallery-1.jpg" style="width:100%" class="img-responsive" alt="image">
							                    </div>
							                    <div class="item">
							                        <img src="images/gallery-2.jpg" style="width:100%" class="img-responsive" alt="image">
							                    </div>
							                    <div class="item">
							                        <img src="images/gallery-3.jpg" style="width:100%" class="img-responsive" alt="image">
							                    </div>
							                    <div class="item">
							                        <img src="images/gallery-4.jpg" style="width:100%" class="img-responsive" alt="image">
							                    </div>
							                    <div class="item">
							                        <img src="images/gallery-5.jpg" style="width:100%" class="img-responsive" alt="image">
							                    </div>
							                </div>
							                <!--/carousel-inner-->
							                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	                							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	  											<span class="sr-only">Previous</span>
	  										</a>

							                <a class="right carousel-control" href="#myCarousel" data-slide="next">
							                	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											 	<span class="sr-only">Next</span>
							                </a>
							            </div>
							            <!--/myCarousel-->
							        </div>
							        <!--/well-->
			        	</div>
			    	</div>
			  	</div>
			</div>
			
		</div>

		<?php include('footer.php'); ?>