<?php include_once('header.php') ?>
<div class="content">
	<div class="left">
		<ul>
			<li><a href="user_home.php">Home</a></li>
		</ul>
	</div>
  <div class="right">
    <form id="form1" name="form1" method="post" action="">
      <div align="center">
        <h3>Update Password        </h3>
      </div>
      <table width="500" border="0" cellpadding="10">
        <tr>
          <td width="163">Old Password </td>
          <td width="391"><input name="oldpass" type="password" id="oldpass" /></td>
        </tr>
        <tr>
          <td>New Password </td>
          <td><input name="newpass" type="password" id="newpass" /></td>
        </tr>
        <tr>
          <td>Confirm Password </td>
          <td><input name="confpass" type="password" id="confpass" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btnChange" type="submit" id="btnChange" value="Change My Password" /></td>
        </tr>
      </table>
    </form>
	<?php
		if(isset($_POST['btnChange']))
		{
			$changed=change_password($_SESSION['logUserEmail'],$_POST['oldpass'],$_POST['newpass']);
			
			if($changed)
			{
				echo 'password changed successfully...';
			}
		}
	?>
  </div>
</div>
<?php include_once('footer.php') ?>
