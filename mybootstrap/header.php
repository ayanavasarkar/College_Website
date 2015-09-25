<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>COLLEGE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
    
   <script type="text/javascript">
		$(function () {
			$('#datetimepicker1').datetimepicker({pickTime:false});
			
			var error=$('#form-error');
			
			$.validate({
				modules:'date',
				validateOnBlur : false, // disable validation when input looses focus
				errorMessagePosition : 'top', // Instead of 'element' which is default
				scrollToTopOnError : false // Set this property to true if you have a long form	
			});
			
			$('#address').restrictLength( $('#pres-max-length') );
		});
   </script>

  </head>
  <body>
     <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">COLLEGE</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php">Home</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="login.php">LOGIN</a></li>
			<li><a href="admin.php">Admissions</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="achievements.php">Achievements</a></li>
                <li><a href="fee.php">Fee Structure</a></li>
                <li><a href="placements.php">Placements</a></li>
				<li><a href="events.php">Events</a></li>
				
				
				</ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cst.php">Computer Science & Technology</a></li>
                <li><a href="ce.php">Civil Engineering</a></li>
                <li><a href="mech.php">Mechanical Engineering</a></li>
				<li><a href="ee.php">Electrical Engineering</a></li>
				<li><a href="etc.php">Electronics & Communication Engineering</a></li>

              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="library.php">Library</a></li>
                <li><a href="">Hostel</a></li>
                <li><a href="">Transport</a></li>
				

              </ul>
            </li>
          </ul>         
        </div><!--/.nav-collapse -->
      </div>
    </div>		
    <div class="container">
      <!-- Main component for a primary marketing message or call to action --> 
      
      <hr/>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="homepic/clg.jpg" alt="One">
              <div class="carousel-caption">
				<h3>One</h3>                
              </div>
            </div>
            <div class="item">
              <img src="homepic/clg1.jpg" alt="Two">
              <div class="carousel-caption">
				<h3>Two</h3>                
              </div>
            </div>
			<div class="item">
              <img src="homepic/clg2.jpg" alt="Three">
              <div class="carousel-caption">
				<h3>Three</h3>                
              </div>
            </div>
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        
 		<hr/>
             
              <div class="row">              
              	<div class="col-md-1"></div>
                <div class="col-md-8">
                	<div class="form-error">
                    </div>