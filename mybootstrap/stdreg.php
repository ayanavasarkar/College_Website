<html>
<head>
<title>Registration</title>
<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<style type="text/css">
.error {color:#f00;display:block}
</style>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('#form1').validate(
			{
				rules:{
						name:"required",
						fname:"required",
						contact:{
									required:true,
									minlength:10,
									maxlenghth:10
						},
						gender:"required",
						dept:"required",
						year:"required",
						email:"required",
						password:{
									required:true,
										minlength: 6,
										maxlength: 10
							}
				},
				
				messages:{
							name:"name cant b empty",
							fname:"cant empty",
							contact:{
										required:"not given",
										minlenghth:"10",
										maxlength:"10"
							},
							gender:"required",
							dept:"required",
							year:"req",
							email:"req",
							
							password:{
										required: "password empty",
										minlength: "minimum length must be 6",
										maxlength: "maximum length must be 10"
							}
						}	
			}
		);
    });
	</script>
    </head>
<body>
<?php
	//include_once("header.php");
?>
<h1><center><marquee>
  STUDENT REGISTRATION
</marquee></center></h1>
<center>
  <hr>
  <form name="form1" method="post" action="" id="form1">
    <table width="200" border="1">
      <tr>
        <th scope="row">Name</th>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th scope="row">Father's Name</th>
        <td><input type="text" name="fname"></td>
      </tr>
      <tr>
        <th scope="row">Contact</th>
        <td><input type="text" name="contact"></td>
      </tr>
      <tr>
        <th scope="row">Gender</th>
        <td><p>
          <label>
            <input type="radio" name="gender" value="male">
            Male</label>
          <br>
          <label>
            <input type="radio" name="gender" value="female">
            Female</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <th scope="row">Depertment</th>
        <td><select name="dept">
          <option value="cst">CST</option>
          <option value="etc">ETC</option>
          <option value="ce">CE</option>
          <option value="me">ME</option>
          <option value="ee">EE</option>
        </select>
        </td>
      </tr>
      <tr>
        <th scope="row">Year</th>
        <td><select name="year">
          <option value="1st">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
        </select>
        </td>
      </tr>
      <tr>
        <th height="23" scope="row">Email</th>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <th height="23" scope="row">Password</th>
        <td><input type="password" name="password"></td>
      </tr>
	  <tr>
	  <input name="submit" type="submit" id="Submit" value="submit">
	  </tr>
	  </table>
  </form>

</center>
<?php
	if(isset($_POST['submit']))
	{
		include_once('functions.php');
		
		add_student($_POST);
		//header('location:history.php');
	}
?>
<?php
	include_once("footer.php");
?>
</body>
</html>
