<?php

	session_start();
	function connect()
	{
		$con=mysqli_connect('localhost','root','','project');
		return $con;
	}
	function add_student()
	{
		
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$contact=$_POST['contact'];
		$gender=$_POST['gender'];
		$dept=$_POST['dept'];
		$year=$_POST['year'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	
		$con=connect();
		
		$sql="insert into clgdb(name,fname,contact,gender,dept,year,email,password) values('$name','$fname','$contact','$gender','$dept','$year','$email','$password')";
		
		$rs=mysqli_query($con,$sql);
		
		if($rs==true)
		{
			echo 'added successfully...';
		}
		else
		{
			echo 'insertion failed...';
		}
	}
	
	
	function add_faculty(){
		
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$gender=$_POST['gender'];
		$dept=$_POST['dept'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	
		$con=connect();
		
		$sql="insert into facreg(name,contact,gender,dept,email,password) values('$name','$contact','$gender','$dept','$email','$password')";
		
		$rs=mysqli_query($con,$sql);
		
		if($rs==true)
		{
			echo 'added successfully...';
		}
		else
		{
			echo 'insertion failed...';
		}
	}
	
	
	function login($data)
	{
		$con=connect();
		$sql="select * from clgdb where email='{$data['email']}' and password='{$data['password']}'";
		
		$rs=mysqli_query($con,$sql);
		
		if
			(mysqli_num_rows($rs)>0)
			{
				header("location:history.php");
					$_SESSION['user']=$data['email'];
			}
			else
			{
				echo "not success";
			}
	}
	function delete_student($rollNo)
	{
		$sql="delete from clgdb where email=$email";
		$con=connect();
		$rs=mysqli_query($con,$sql);
		
		return $rs;
	}
	
	function show_student($email,$password)
	{
		$con=connect();
	
		$sql="select * from clgdb where 'email'=$email and 'password'=$password";
		
		$rs=mysqli_query($con,$sql);
		
		return $rs;		
	}
	
	function update_student($email,$password)
	{
		$sql="update clgdb set email='$email' where ";
		$con=connect();
		$rs=mysqli_query($con,$sql);
		
		if($rs==true)
		{
			header('location:show.php');
		}
		else
		{
			echo 'failed';
		}
	}
	
	function selectuser()
	{
		$query="select * from clgdb where email='{$_SESSION['user']}'";
		$result=mysqli_query(connect(),$query);
		if($result==true)
		{
		
			$row=mysqli_fetch_assoc($result);
	   		echo "welcome ".$row['name'];
		}
}
?>