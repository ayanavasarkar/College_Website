<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

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
							email:"required",
							password:{
										required:true,
										minlength: 6,
										maxlength: 10
							}
				},
				
			
			
				messages:{
							email:"email required",
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
include_once('functions.php');
?>
<h2>Login</h2>
<hr/>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" cellpadding="7" align="center">
    <tr>
      <td width="150" height="56">Email ID</td>
      <td width="316"><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td height="50">Password</td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td height="64">&nbsp;</td>
      <td><input type="submit" name="btnLogin" id="btnLogin" value="Submit" /> </td>
    </tr>
    <tr>
      <td height="64">&nbsp;</td>
      <td><a href="log.php">REGISTER</a></td>
    </tr>
  </table>
  <input name="option" type="hidden" value="login" />
</form>
<?php
	
	
	if(isset($_POST['btnLogin']))
	{
		
	login($_POST);
		
	}
?>


<?php
include_once("footer.php");
?>
<p>&nbsp;</p>
</body>
</html>