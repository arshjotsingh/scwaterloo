<!doctype html>
<html>
<head>
	<title>Team | SC Waterloo</title>
	<?php include('scripts.php') ?>
  
	<style>
		
		.col-sm-3 img {
			width: 90%;
		}
		.carousel-control.left, .carousel-control.right {
	    	background-image: none
		}
		
	</style>
</head>
<body>
	<div class="container">
		<?php include('header.php') ?>
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img src="images/team-squad2.jpg" class="img-responsive" alt="">
            </div>
        </div>

		<div class="row">
		<div class="col-lg-12">
         <h1>Players</h1>

        <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-lg-2"><a href="news.php" class="thumbnail"><img src="images/player1.jpg" alt="Image" class="img-responsive"><p class="text-center">Adis Hasecic</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player2.jpg" alt="Image" class="img-responsive"><p class="text-center">Dado Hadrovic</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player3.jpg" alt="Image" class="img-responsive"><p class="text-center">Dale Cudmore</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player4.jpg" alt="Image" class="img-responsive"><p class="text-center">Drazen Vukovic</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player5.jpg" alt="Image" class="img-responsive"><p class="text-center">Haris Fazlagic</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player5.jpg" alt="Image" class="img-responsive"><p class="text-center">Imad Hukara</p></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player7.jpg" alt="Image" class="img-responsive"><p class="text-center">Jake Inglis</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player8.jpg" alt="Image" class="img-responsive"><p class="text-center">Mirza Colic</p></a>
                            </div>
                        	<div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player9.jpg" alt="Image" class="img-responsive"><p class="text-center">Mohammad Ali Heydarpour</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player10.jpg" alt="Image" class="img-responsive"><p class="text-center">Nemanja Simeunovic</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player11.jpg" alt="Image" class="img-responsive"><p class="text-center">Shawn Brown</p></a>
                            </div>
                            <div class="col-lg-2"><a href="#x" class="thumbnail"><img src="images/player12.jpg" alt="Image" class="img-responsive"><p class="text-center">Vladimir Zelenbaba</p></a>
                            </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">
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
    <?php include('footer.php'); ?>
</body>