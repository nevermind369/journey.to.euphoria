<?php 
$con=mysqli_connect("localhost","root","","test1");
		if(mysqli_connect_errno($con))
			echo("we cant connect to database".mysqli_connect_errno());
		else {
			mysqli_set_charset($con,"utf8");
			$q="select *from product";
			$query=mysqli_query($con,$q);
			if($query) 
			{
		  
		echo("<table width='617' height='276' border='0' align='center'>") ; 
        echo("<tr>");
			echo("<td width='78' align='center'>نام محصول</td>");
			echo("<td width='68' align='center'>برند محصول</td>");
			
			echo("<td width='86' align='center'>قیمت محصول</td>");
				
			echo("<td width='184' height='38' align='center'>تصویر</td>");
			
				echo("<td width='179' align='center'>توضیحات</td>");
				echo("<td width='179' align='center'>ویرایش محصول</td>");
				echo("<td width='179' align='center'>حذف محصول</td>");
       echo("</tr>") ; 
                 while($row=mysqli_fetch_array($query))	
				 {
					 echo("<tr>");
					 echo("<td>".$row['p_name']."</td>");
					 echo("<td>".$row['p_brand']."</td>");
					 echo("<td>".$row['p_price']."</td>");
					  echo("<td><img width='100' height='120' src='upload/".$row['p_image']."'></td>");
					 echo("<td>".$row['p_description']."</td>");
					  echo("<td><a href='edit.php?page=edit&id=".$row['ID']."'>ویرایش</a></td>");
					  echo("<td><a href='delete.php?page=del&id=".$row['ID']."'>حذف</a></td>");
					 echo("</tr>");
				 }
				echo("</table>");
      
	}
			mysqli_close($con);
	}