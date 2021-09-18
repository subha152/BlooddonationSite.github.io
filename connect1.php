<?php 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phnumber=$_POST['number'];
 $message=$_POST['message'];
 $servername="localhost";
 $username="id17189883_registration";
 $password="IW\v7NoW-gMd2YNS";
 $dbname="id17189883_reg";
 $con=mysqli_connect($servername,$username,$password,$dbname);
 if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	else
	{
		$sql = "INSERT INTO `registration`(`name`, `email`, `phnumber`, `message`) VALUES('$name','$email','$phnumber','$message');";
		if(mysqli_query($con,$sql))
		{
			echo "Registration Done Successfully...";
		}
		else
		{
			echo "Something went Wrong...";
		}
	}
	mysqli_close($con);

 ?>