<?php 
 if(count($_POST) > 0 ){
 	 $connection=mysqli_connect('localhost','root','','abm');
 	 $name=$_POST['name'];
 	 $age=$_POST['age'];

 	 $query="INSERT INTO `info` (`name`,`age`) VALUES ('$name','$age')";
 	 $excutequery=mysqli_query($connection,$query);
 	 
 	 if( $connection->affected_rows > 0){
 	 	 echo '<p class="success">Client Added successfly</p>';


 	 }else{
 	 	echo '<p class="error"> Client Not Added</p>';
 	 	}
 	 }

?>