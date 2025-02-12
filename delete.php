<?php
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","test1");
		if(mysqli_connect_errno($con))
			echo("we cant connect to database".mysqli_connect_errno());
		else {
			mysqli_set_charset($con,"utf8");
			$q="delete from product where ID=$id";
			$query=mysqli_query($con,$q);
			if($query) 
			 echo("حذف با موفقیت انجام شد");
		}