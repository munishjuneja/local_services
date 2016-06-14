<?php
	session_start();
	include("php/config.php");
	if(!$con)
		echo "done";
	 if(isset($_POST['registerform']))
	{
		$contact=$_POST['contact'];
		$name= $_POST['name'];
		$email=$_POST['email'];
		$password1=$_POST['regpwd1'];
		$password2=$_POST['regpwd2'];
		$address=$_POST['address'];
		if($password2==$password1)
		{
			/*echo "hello";
			$stmt = $mysqli->prepare($con,"INSERT INTO login VALUES (?,?,?,?,?)");
			echo "hello";
			 $stmt->bind_param("sssss",'$contact','$name','$email','$password1','$address');
			 	echo "hello";
   			 // Execute the statement.
			 $stmt->execute();
					echo "hello"; 	
			 // Close the prepared statement.
			 $stmt->close();
			 	echo "hello";*/
 
			$query="insert into login values('$contact','$name','$email','$password1','$address')";
			mysqli_query($con,$query);
			header("location:login.php");
		}
		else
		{
			echo "password does not match";
		}
	}
	if(isset($_POST['loginform']))
	{
		$myemail = $_POST['email'];
		$mypassword = $_POST['password'];
		$myemail=mysqli_real_escape_string($con,$myemail);
		$mypassword=mysqli_real_escape_string($con,$mypassword);
		$query="select * from login where email = '$myemail' and password = '$mypassword'";
		$result= mysqli_query($con,$query);
		if(mysqli_num_rows($result) > 0)
		{
			echo "hello";
			
		}
		else
		{
			echo "incorrect email or password..!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Local-Services</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/jquery.min.js">
    </script>
    <script type="text/javascript">
    	
    </script>
    <script type="text/javascript">
            function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var div_top = $('#sticky-anchor').offset().top;
            if (window_top > div_top) {
                $('#sticky').addClass('stick');
                $('#sticky-anchor').height($('#sticky').outerHeight());
            } else {
                $('#sticky').removeClass('stick');
                $('#sticky-anchor').height(0);
            }
        }

        $(function() {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        });

        var dir = 1;
        var MIN_TOP = 200;
        var MAX_TOP = 350;

        function autoscroll() {
            var window_top = $(window).scrollTop() + dir;
            if (window_top >= MAX_TOP) {
                window_top = MAX_TOP;
                dir = -1;
            } else if (window_top <= MIN_TOP) {
                window_top = MIN_TOP;
                dir = 1;
            }
            $(window).scrollTop(window_top);
            window.setTimeout(autoscroll, 100);
        }


    </script>

    <script type="text/javascript">
  		$(function(){
  var menuwidth  = 240; // pixel value for sliding menu width
  var menuspeed  = 400; // milliseconds for sliding menu animation time
 
  var $bdy       = $('body');
  var $container = $('#pgcontainer');
  var $burger    = $('#hamburgermenu');
  var negwidth   = "-"+menuwidth+"px";
  var poswidth   = menuwidth+"px";
 
  $('.menubtn').on('click',function(e){
    if($bdy.hasClass('openmenu')) {
      jsAnimateMenu('close');
    } else {
      jsAnimateMenu('open');
    }
  });
 
  $('#overlay').on('click', function(e){
    if($bdy.hasClass('openmenu')) {
      $("#overlay").html("");
      jsAnimateMenu('close');
    }
  });
 
  $('a[href$="#"]').on('click', function(e){
    e.preventDefault();
  });

   function jsAnimateMenu(tog) {
    if(tog == 'open') {
      $bdy.addClass('openmenu');
 
      $container.animate({marginRight: negwidth, marginLeft: poswidth}, menuspeed);
      $burger.animate({width: poswidth}, menuspeed);
      $('#overlay').animate({left: poswidth}, menuspeed);
    }
 
    if(tog == 'close') {
      $bdy.removeClass('openmenu');
 
      $container.animate({marginRight: "0", marginLeft: "0"}, menuspeed);
      $burger.animate({width: "0"}, menuspeed);
      $('#overlay').animate({left: "0"}, menuspeed);
    }
  }
});

  		$(function(){
    		$("#hamburgermenu ul li a").hover(function(){

    			$("#overlay").css("background","white");
    			$("#overlay").css("opacity","0.8");
    			$("#overlay").css("z-index","1000000");
    			var x = $(this).html();
    			$("#overlay").html("<h1><a href='#'>"+x+"</a></h1>");

    		});
    	});

    	$(function(){
    		$("#hamburgermenu").mouseleave(function(){
    		  $("body").removeClass('openmenu');
		      $("#pgcontainer").animate({marginRight: "0", marginLeft: "0"}, 400);
		      $("#hamburgermenu").animate({width: "0"}, 400);
		      $('#overlay').animate({left: "0"}, 400);
		      $("#overlay").html("");

    		});
    	});

  </script>
  <style type="text/css">
  		header {

}
 
#navbar {				
  max-width: 1000px;
  margin: 0 auto;
}
 
.menubtn {
  position: relative; 
  z-index: 101;
  font-size: 0em;
  line-height: 0em;
  top: 2px;
  padding: 15px;
  color: white;
}
.menubtn:hover, .openmenu .menubtn {

}

/** toggle menu **/
body.openmenu {
/*  position: fixed;
  overflow: hidden;*/
}
 
#pgcontainer {
  padding: 45px 0;
  margin: 0;
}
 
#overlay {
  position: absolute;
  z-index: 99;
  bottom: 0;
  right: 0;
  margin-top:110px; 
  left: 0;
  width: 80%;
  background: transparent;
  border:1px;
}
 
.openmenu #overlay {
  top: 0;
}
.hamb{
	background: transparent;
	padding-top: 0px;
	margin: 0;
}
#hamburgermenu {
  background: #3F51B5;
  position: absolute;
  top: 110px;
  left: 0;
  font-size: 12px;
  z-index: 100000;
  overflow: auto;
  -webkit-box-shadow: 3px 0 7px rgba(0,0,0,0.55);
  -moz-box-shadow: 3px 0 7px rgba(0,0,0,0.55);
  box-shadow: 3px 0 7px rgba(0,0,0,0.55);
}
#hamburgermenu ul {
  z-index: 101;
  overflow-y: auto;
  overflow-x: hidden;
}
#hamburgermenu ul li {
  display: block;
}
#hamburgermenu ul li a {
  display: block;
  min-width: 130px;
  padding: 18px 8px;
  color: #cdcdcd;
  font-size: 1.45em;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
}
#hamburgermenu li a:hover {
  color: black;
  background: #fff;
}

  </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <div id="navbar">
     
      <!-- use captain icon for toggle menu -->
      <div id="hamburgermenu">
        <ul>
          <li><a href="#">service1</a></li>
          <li><a href="#">service2</a></li>
          <li><a href="#">service3</a></li>
          <li><a href="#">service4</a></li>
          <li><a href="#">service5</a></li>
          <li><a href="#">service6</a></li>
          <li><a href="#">service7</a></li>	
           <li><a href="#">service8</a></li>
          <li><a href="#">service9</a></li>
        
        </ul>
      </div>
    </div>
    <div id="overlay"></div>
  <div id="content">
  <!-- filler content -->
  </div>
    <!-- Navigation -->
    <div id="navbar-top" class="navbar-top">
	    <div class="navbar-login" >
            <a class = "login" href="#">Support</a><span class="vertical-line">|</span>
            <a class = "login" href="#">Contact Us</a><span class="vertical-line">|</span>
            <div class="nav_bar_account">
            	<a class = "login" href="#">Account</a>
            	<div class="nav_bar_dropdown_hidden">
            		<div class="dropdown_header">
		        		<div class="user_login_icon">
		        			<img src="images/profile_icon.png">
		        		</div><!-- user_login_icon class -->
		        		<div class="dropdown_login_btn"><button data-toggle="modal" data-target="#loginForm">Log In</button></div><!-- dropdown_login_btn class -->
		        		<p>New ? <a href="#register" data-toggle="modal" data-target="#signupForm">register here</a></p>
	        		</div>
	        	</div><!-- nav_bar_dropdown_hidden class -->
            </div>
	    </div>
	</div>

	<div class="modal fade" id="signupForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span>
					</button>
					<h4 class="modal-title">Sign Up</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="" method="post">
						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Contact No:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="contact" placeholder="contact no">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="name" placeholder="Full Name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Email:</label>
							<div class="col-md-5">
								<input type="email" name="email" placeholder="example@exp.com" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Password:</label>
							<div class="col-md-5">
								<input type="password" name="regpwd1" placeholder="password" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Confirm Password:</label>
							<div class="col-md-5">
								<input type="password" name="regpwd2" placeholder="repeat password" class="form-control input-sm">
							</div>
						</div>
						

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Address:</label>
							<div class="col-md-5">
								<textarea class="form-control input-sm" name="address" placeholder="Enter Address" ></textarea>
								 
							</div>
						</div>

						

						
						<div class="form-group">
							<div class="col-md-2 col-md-offset-8">
								<input type="submit" class="btn btn-success" name="registerform" value="Sign Up">
							</div>
						</div>

					</form>
				</div>
				<div class="modal-footer"></div>
			</div>

			
		</div>
	</div>
		<!-- PopUp Login Form -->
		 <div class="modal fade" id="loginForm">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times</span>
						</button>
						<h4 class="modal-title">Log In</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" action=" " method="post" onsubmit="showMessage()">
							<div class="form-group">
								<label class="col-md-4 col-md-offset-1">Email:</label>
								<div class="col-md-5">
									<input type="text" class="form-control input-sm" name="email" placeholder="Email/Name" autofocus/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 col-md-offset-1">Password:</label>
								<div class="col-md-5">
									<input type="password" class="form-control input-sm" name="password" placeholder="password" autofocus/>
									<br>
									<a href="">Forgot your password?</a>
								</div>
								
								
							</div>
								<div class="form-group center">
										
										<div class="col-md-2 col-md-offset-6">
											<input type="submit" class="btn btn-success" name="loginform" value="Log In" >
										</div>

								</div>
						</form>
					</div>
					<div class="modal-footer"></div>
				</div>
				
			</div>
		</div>


	<div id="sticky-anchor"></div>
    <div id="sticky">
            <div style="margin-top:-14px;" class="col-xs-6 col-xs-6 col-xs-offset-3">
                <form class="navbar-form" role="search">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control"  style=" padding:0;
                        height:30px" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button  style="height:30px"  class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" style="top:-4px;"></i></button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>



<div id="navbar-bottom" style="width:100%;">


   <div id="inline-div" style="width:100%;">
    <div style="float:left; width:10%;">
    	<a href="#" class="menubtn"> 
    	   	<button type="button" class="btn btn-md hamb" aria-label="Left Align">
  				<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true">
  	
  				</span>
			</button></a>
    	<!-- <button><a href="#" class="menubtn">ham</a></button> -->
    </div>
       <ul id="inline-ul" align="left" style="width:90%;">
           <li> <a href="#"> first</a></li>
           <li> <a href="#"> second</a></li>
           <li> <a href="#"> third</a></li>
           <li> <a href="#"> fourth</a></li>
           <li> <a href="#"> fifth</a></li>
           <li> <a href="#"> sixth</a></li>
           <li> <a href="#"> seventh</a></li>
           <li> <a href="#"> eighth</a></li>
       </ul>
    </div> 

</div>

    


    <!-- <div class="main-container"> -->
	    <!-- Header -->
	    <header>
	        <div class="container offers">
	            <div class="row" style="object-fit: cover;">
	                <div class="col-lg-12" >
	                	<div id="my-slider" class="carousel slide" data-ride="carousel">
						<!-- indicator dot nav  -->
						<ol class="carousel-indicators">
							<li data-target="#my-slider" data-slide-to="0" class="active"></li>
							<li data-target="#my-slider" data-slide-to="1"></li>
						</ol>
						
						<!-- wrapper for slides  -->
						<div class="carousel-inner carousel" role="listbox">
							<div class="item active">
								<img class="offer-images" src="images/slide1.jpg" alt="Auto" height="100px" width="1200px" />
								<div class="carousel-caption">
									<h3> Images </h3>
								</div>
							</div>
							<div class="item ">
								<img class="offer-images" src="images/slide2.jpg" alt="Auto" height="100px" width="1200px" />
								<div class="carousel-caption">
									<h3> imagination </h3>
								</div>
							</div>
						</div>
						
						<!-- controls or next/prev buttons  -->
						<a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
							<span class="sr-only">Next</span>
						</a>
						
						</div>
	                    <!-- <img class="img-responsive" src="images/slide1.jpg" alt="offers" style="object-fit: cover; height:500px; " > -->
	                    <!-- <div class="intro-text">
	                        <span class="name">Start Bootstrap</span>
	                        <hr class="star-light">
	                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
	                    </div> -->
	                </div>
	            </div>
	        </div>
	    </header>

	    <!-- Portfolio Grid Section -->
	    <section id="portfolio">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Services</h2>
	                    <hr class="star-primary">
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/game.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- Professionals Grid Section -->
	    <section id="portfolio">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Our Professionals</h2>
	                    <hr class="star-primary">
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/game.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	                <div class="col-sm-3 portfolio-item">
	                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
	                        <div class="caption">
	                            <div class="caption-content">
	                                <i class="fa fa-search-plus fa-3x"></i>
	                            </div>
	                        </div>
	                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </section>

	    <!-- About Section -->
	    <div class="container">
	    <section class="success" id="about">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>About</h2>
	                    <hr class="star-light">
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-4 col-lg-offset-2">
	                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
	                </div>
	                <div class="col-lg-4">
	                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
	                </div>
	                <!-- <div class="col-lg-8 col-lg-offset-2 text-center">
	                    <a href="#" class="btn btn-lg btn-outline">
	                        <i class="fa fa-download"></i> Download Theme
	                    </a>
	                </div> -->
	            </div>
	        </div>
	    </section>
	    </div>

	    

	    <!-- Footer -->
	    <div class="container">
	    <footer class="text-center">
	        <div class="footer-above">
	            <div class="container">
	                <div class="row">
	                    <div class="footer-col col-md-4">
	                        <h3>Location</h3>
	                        <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
	                    </div>
	                    <div class="footer-col col-md-4">
	                        <h3>Around the Web</h3>
	                        <ul class="list-inline">
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
	                            </li>
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
	                            </li>
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
	                            </li>
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
	                            </li>
	                            <li>
	                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="footer-col col-md-4">
	                        <h3>About Freelancer</h3>
	                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="footer-below">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-12">
	                        Copyright &copy; Local-Services 2016
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    </div>
    <!-- </div> -->
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
