<?php
  $conn=new mysqli("localhost","root","code1909->22","Company");

  if($conn->connect_error){
   echo "error" . $conn->connect_error;
  }

?>