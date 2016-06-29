<?php

	include_once 'classes/userClass.php';
	include_once 'classes/servicesClass.php';
	$obj =new user();
	if(isset($_POST['loginform']))
	{
		$obj->email = $_POST['email'];
		$obj->password = $_POST['password'];
		$obj->login();
	}
	if(isset($_POST['registerform']))
	{
		
		$obj->contact=$_POST['contact'];
		$obj->name= $_POST['name'];
		$obj->email=$_POST['email'];
		$obj->password1=$_POST['regpwd1'];
		$obj->password2=$_POST['regpwd2'];
		$obj->address=$_POST['address'];
		if($obj->password2==$obj->password1)
		{
			$obj->register();
		}
		else
		{
			$obj->msg = "*password does not match";
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<?php 
	$msg="";
	if (isset($_POST['finalsubmit'])) {
 		$msg = "Your order have been placed successfully";
 	}
 ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Local-Services</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/jquery.min.js">
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
 
  $('.overlay').on('click', function(e){
    if($bdy.hasClass('openmenu')) {
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
      $('.overlay').animate({left: poswidth}, menuspeed);
    }
 
    if(tog == 'close') {
      $bdy.removeClass('openmenu');
 
      $container.animate({marginRight: "0", marginLeft: "0"}, menuspeed);
      $burger.animate({width: "0"}, menuspeed);
      $('.overlay').animate({left: "0"}, menuspeed);
    }
  }
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
 
.overlay {
  position: fixed;
  z-index: 99;
  /*background-color: rgba(0,0,0,0.5);*/
  bottom: 0;
  right: 0;
  left: 0;
}
 
.openmenu .overlay {
  top: 0;
}
.hamb{
	background: transparent;
	padding-top: 0px;
	margin: 0;
}
#hamburgermenu {
  height: 100%;
  width: 0;
  background: black;
  position: fixed;
  top: 0;
  left: 0;
  font-size: 12px;
  z-index: 100000;
  overflow: auto;
  -webkit-box-shadow: 3px 0 7px rgba(0,0,0,0.55);
  -moz-box-shadow: 3px 0 7px rgba(0,0,0,0.55);
  box-shadow: 3px 0 7px rgba(0,0,0,0.55);
}
#hamburgermenu ul {
  margin-top: 45px;
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
  color: #fff;
  background: #2c2c2c;
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
        	<?php 
                $getServices = new Service;
                $res=$getServices->allServices();
                while($result=mysqli_fetch_array($res)) {
            ?>
          		<li><a href="subCategoriesView.php?id=<?php echo $result['id'];?>"><?php echo $result['name']; ?></a></li>
          	<?php
		    }
		    ?>        
        </ul>
      </div>
    </div>
    <div class="overlay"></div>
  <div id="content">
  <!-- filler content -->
  </div>
    <!-- Navigation -->
    <div id="navbar-top" class="navbar-top">
	    <div class="navbar-login" >
            <a class = "login" href="#">Support</a><span class="vertical-line">|</span>
            <a class = "login" href="#contact_us">Contact Us</a><span class="vertical-line">|</span>
            <div class="nav_bar_account">
            	<a class = "login" href="#"><?php if(isset($_SESSION['user'])){ echo $_SESSION['user_name'];} else echo "Account"; ?></a>
            	<div class="nav_bar_dropdown_hidden">
            		<div class="arrow-up"></div>
            		<div class="dropdown_header">
		        		<div class="user_login_icon">
		        			<img src="images/profile_icon.png">
		        		</div><!-- user_login_icon class -->
		        		<div class="dropdown_login_btn"><?php if(!isset($_SESSION['user'])) {echo "<button data-toggle=\"modal\" data-target=\"#loginForm\">Log In</button>";}
		        			else { echo "<a href=\"logout.php\"><button>Log out</button></a>";} ?>
		        			
		        		</div><!-- dropdown_login_btn class   -->
		        		<?php if(!isset($_SESSION['user'])) echo "<p>New ? <a href=\"#register\" data-toggle=\"modal\" data-target=\"#signupForm\">register here</a></p>"; ?>
	        		</div>
	        		<div class="navbar_dropdown_options">
	        			<!-- <ul>
	        				<hr>
	        				<li><a href="">one</a></li>
	        				<hr>
	        				<li><a href="">two</a></li>
	        			</ul> -->
	        		</div><!-- navbar_dropdown_options class -->
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
                <form class="navbar-form "  role="search">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control"  style=" padding:0;
                        height:30px" placeholder="<?php echo "\t";?>Search" name="srch-term" id="srch-term">
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
       
    </div> 

</div>
<!-- alert section -->
<?php if ($msg!=""){ ?>
		<div style="margin-top:20px;">
			<div class='alert alert-info'>
		  				<strong><?php echo $msg ?></strong>
			</div>
		</div>

<?php
	}
?>
<!-- alert section end -->
<!-- login failure warning section -->
<?php if ($obj->msg!=""){ ?>
		<div style="margin-top:0px;">
			<div class='alert alert-danger' style="text-align:center;">
		  				<strong><?php echo $obj->msg ?></strong>
			</div>
		</div>

<?php
	}
?>

<!-- login failure warning section end -->
    


    <!-- <div class="main-container"> -->
	    <!-- Header -->
	    <header>
	        <div class="container offers">
	        	<div class="row">
	        	<div class="col-lg-12">
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
	            </div>
	        </div>
	    </header>

	    <!-- Portfolio Grid Section -->
	    <br><br><br><br>
	    <section id="portfolio">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>Services</h2>
	                  
	                </div>
	            </div>
	            <br><br>
	            <div class="row">
		            	<?php 
		                    $getServices = new Service;
		                    $res=$getServices->allServices();
		                    while($result=mysqli_fetch_array($res)){

		                ?>
		              	<div class="col-sm-3 portfolio-item">
		                    <a href="subCategoriesView.php?id=<?php echo $result['id'];?>" class="portfolio-link" data-toggle="modal">
		                        <div class="caption" >  
		                           <div class="caption-content">

		                                <b style="background-color:#333;"> <?php echo $result['name']; ?></b>
		                           </div>
		                        </div>
		                       	<img src="<?php echo $result['imageurl'];?>" class="img-responsive" alt="">
		                       	
		                    </a>
		                </div>
		                <?php
		        		}
		        	?>
		        </div>
	        </div>
	    </section>

<br><br>
	    <!-- About Section -->
	    <div class="container">
	    <section class="success" id="about">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <h2>About</h2>
	                    
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-10 col-lg-offset-1">
	                    <p style="text-align:justify">Town Seva is incorporated with the goal to make your lives as comfortable as possible. We are Tri-city’s leading home care and maintenance service provider. Our aim is to help residents with excellent quality home care services. 
We at Town Seva make it our commitment to bring professionalism, good service and trust to the home repair service and maintenance business. We take immense pride in sending some of the most professional handymen to your homes to fix things that aren't working. 


</p>
	               
	                    <p>At Town Seva we have a specialist solution for every trouble. We offer a unique range of home maintenance services like Electrical, Carpentry, White wash, Civil work, Driver Services, Pest control, A/C repair,  and Plumbing services on one platform!  To find a solution for your home care problems, you can visit our services section.
</p>
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
	                        <p>Mohali,Punjab</p>
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
	                        <h3 id="contact_us">Contact</h3>
	                        <p>Phone:xxxxxxxx</p>
	                        <p>email:xxxxxx@xxx</p>
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
