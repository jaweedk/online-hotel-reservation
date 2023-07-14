<?php
  $servername ="localhost";
  $username ="jaweed";
  $password ="jaweed@123";
  $db_name ="database1";
  $conn =new mysqli($servername,$username,$password,$db_name,3308);
  if($conn -> connect_error){
      die("connection failed".$conn ->connect_error);
   }
   echo "";

?>