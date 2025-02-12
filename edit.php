<?php
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","test1");
		if(mysqli_connect_errno($con))
			echo("we cant connect to database".mysqli_connect_errno());
		else {
			mysqli_set_charset($con,"utf8");
			$q="select *from product where ID=$id";
			$query=mysqli_query($con,$q);
			if($query) 
			{
		echo("<form name='form1' method='post' >")  ;
		echo("<table width='617' height='276' border='0' align='center'>") ; 
        echo("<tr>");
			echo("<td width='78' align='center'>نام محصول</td>");
			echo("<td width='68' align='center'>برند محصول</td>");
			
			echo("<td width='86' align='center'>قیمت محصول</td>");
				
			echo("<td width='184' height='38' align='center'>تصویر</td>");
			
				echo("<td width='179' align='center'>توضیحات</td>");
				
       echo("</tr>") ; 

          
                 while($row=mysqli_fetch_array($query))	
				 {
					 $filename=$row['p_image'];
					 echo("<tr>");
					 
					 echo("<td><input name='name' type='text' id='textfield' value='".$row['p_name']."'></td>");
					 echo("<td><input name='brand' type='text' id='textfield' value='".$row['p_brand']."'</td>");
					 echo("<td><input name='price' type='text' id='textfield' value='".$row['p_price']."'</td>");
					  echo("<td><img width='100' height='120' src='upload/".$row['p_image']."'></td>");
					 echo("<td><input name='description' type='text' id='textfield' value='".$row['p_description']."'</td>");
					 
					 echo("</tr>");
				 }
				echo("<td height='69' colspan='6' align='center'><input type='submit' name='submit' id='submit' value='ویرایش'></td>");
				echo("</table>");
      			echo("</form>");
				}
			
			if(isset($_POST["submit"]))
	{
	
		$name=$_POST["name"];
		$price=$_POST["price"];
		$decsription=$_POST["description"];
		$brand=$_POST["brand"];
     
			mysqli_set_charset($con,"utf8");
			$q="update product set p_name='".$name."',p_brand='".$brand."',p_price='".$price."',p_description='".$decsription."' where ID='".$id."'";
			$query=mysqli_query($con,$q);
			if($query) 
			echo("ویرایش  با موفقیت انجام شد");
		

	}	
			
			mysqli_close($con);
	}