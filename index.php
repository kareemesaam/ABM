 <?php
    include"DBConnection.php";

    $selectQuery="SELECT * FROM `info`";
    $excuteQuery=mysqli_query($conn,$selectQuery);
    while ($raws = mysqli_fetch_assoc($excuteQuery)){
    	$result[]=$raws;

    }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ABM</title>
</head>
<body>
   <table border="2" width="300" style="text-align: center;">
	   	<tr>
	   	  <td>Id</td>
	   	  <td>Name</td>
	   	  <td>Age</td>
	   	</tr>  
	   	  <?php
	   	      foreach ($result as $res) {
	   	      	echo"
                   <tr>
                     <td>{$res['id']}</td> 
                     <td>{$res['name']}</td> 
                     <td>{$res['age']}</td> 


                   </tr>
	   	      	";
   	      }
   	  ?>
   </table>
   
   <br>
   <button><a href="module.php" >Show Module</a></button>	
 
</body>
</html>