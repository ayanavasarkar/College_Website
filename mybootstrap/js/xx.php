<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<style type="text/css">
.error {color:#f00;display:block}
</style>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('#xx').validate(
			{
				rules:{
					name:"required",
					address:"required",
					email:{
					required: true,
					email: true
					},
					username: {
				required: true,
				minlength: 5
			},
			pass: {
				required: true,
				minlength: 5
			},
			confpass: {
				required: true,
				minlength: 5,
				equalTo: "#pass"
			}

				},
				messages:{
					name:"name can not be blank.",
					address:"address should be given",
					email:{
					required: "please enter email id",
					email: "please enter valid email id"
					},
						username: {
					required: "Please enter a username",
				minlength: "Your username must consist of at least 5 characters"

					},
					pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confpass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			}
					
				}	
			}
		);
    });
</script>

</head>


<body>

<h1>Registration Form</h1><hr/>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" cellpadding="7">
    <tr>
      <td width="227">Name</td>
      <td width="239"><input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="user" id="user" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pass" id="pass" /></td>
    </tr>
	   <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="confpass" id="confpass" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>