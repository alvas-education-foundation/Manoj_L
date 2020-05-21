<?php
include('admin/includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Alvas School</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<!-- header -->
<div class="banner-top">		
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <h1><a class="navbar-brand" href="index.php">Alva'S</a></h1>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
                            <li class="menu__item"><a href="admin/index.php">Admin Login</a></li>
						</ul> 
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
					
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
						
								</div>	
							</div>
						</div>
					</li>
					
				</ul>
			</div>
			
		</div>
			</div>
    </div>
	<!-- //banner --> 
<!--//Header-->
<br><br>
<!-- /about -->
 	<div class="w3ls-banner">
		  <div class="container" >
				   <div class="ab-w3l-spa">
                            <br><br><br><h3 class="title-w3-agileits title-black-wthree" id="about">About</h3> 
						   <p class="about-para-w3ls" >"Knowledge is like a garden; if it is not cultivated it cannot be harvested .The academic ethos is not only challenging and demanding but also supportive and friendly. We aim to develop enquiring minds and encourage self-motivation. Our school is a place where people work hard achieve and become friends. The extensive schedule of curriculum adopted is an amalgamation of academics, co-curricular, sports and extracurricular activities.

Our school team is ready, willing and dedicated to provide quality education with high expectations for learning in a safe and fun filled environment."</p>
						  
										
											<img src="images/about.jpg" width="800" height="400" >
										
                                    
		          </div>
              
		 
    </div>
</div>
 	<!-- //about -->


<!-- /contact -->
			<div class="copy">
		        <p>Alvas School. | Design @ 2016-20 CSE Dept </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>

</body>
</html>


