<?php
   const DBHost="localhost";
   const DBName="abm";
   const DBUser="root";
   const DBPassword="";

 $conn=mysqli_connect(DBHost,DBUser,DBPassword,DBName);
  if(!$conn){
  	 echo(mysqli_connect_error());
  }  



?>