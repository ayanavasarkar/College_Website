<html>
<title>Registration</title>
<body>
<?php
	include_once("header.php");
?>
<h1><center>
  FACULTY REGISTRATION
</center></h1>
<center>
  <hr>
  <form name="form1" method="post" action="">
    <table width="200" border="1">
      <tr>
        <th scope="row">Name</th>
        <td><input type="text" name="name"></td>
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
        </select>        </td>
      </tr>
      <tr>
        <th height="23" scope="row">        Email</th>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <th height="23" scope="row">Password</th>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <th height="23" scope="row">&nbsp;</th>
        <td><div align="right">
          <input type="submit" name="submit" value="submit">
        </div></td>
      </tr>
    </table>
  </form>
</center>
<?php
	if(isset($_POST['submit']))
	{
		include_once('functions.php');
		
		add_faculty();
	}

?>
<?php
	include_once("footer.php");
?>
</body>
</html>
