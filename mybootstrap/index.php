<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>MCQ</title>

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
          <a class="navbar-brand" href="#">M<span style="color:#1CC609">C</span>Q</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="#contact">Contact</a></li>
			            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cst.php">CSE</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cst.php">CSE</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
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
              <img src="images/4.jpg" alt="Two">
              <div class="carousel-caption">
				<h3>Two</h3>                
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
                    <form class="form-horizontal" role="form">
                    	<h3>Registration Form</h3><hr/>
                    	<div class="form-group">
                        	<label for="" class="col-sm-2">Name</label>
                            <div class="col-sm-4">
	                            <input type="text" name="name" class="form-control" data-validation="required" data-validation-error-msg="Please enter your name"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label for="" class="col-sm-2">Address</label>
                            <div class="col-sm-4">
                            	(<span id="pres-max-length">100</span> characters left)<br/>
	                            <textarea cols="30" rows="5" name="address" id="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label for="" class="col-sm-2">Birth Date</label>
                            <div class="col-sm-4">
	                            <div class='input-group date' id='datetimepicker1' data-date-format="DD-MM-YYYY">
                                    <input type='text' name="dob" id="dob" class="form-control"  data-validation="birthdate" data-validation-format="dd-mm-yyyy"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-xs-offset-2">
	                            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button> 
                            </div>
                        </div>
                        
                    </form>
                    
                </div>    
                <div class="col-md-3" id="form-error">
                </div>            
              </div>
        
            </div> <!-- /container -->
        
         <div id="footer">
           <div class="container">
                <p class="text-muted">Place sticky footer content here.</p>
           </div>
 </div>


   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/form-validator/jquery.form-validator.min.js"></script>
   <script type="text/javascript" src="js/moment.js"></script>
   <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.ru.js"></script>
   


</body>  