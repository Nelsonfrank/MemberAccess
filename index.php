
<?php
// echo " How are you?!";
// // $db = mysql_connect("localhost", "root", "");
// // mysql_select_db("Company", $db);
// $firstname=$_POST['firstname'];


$conn=new mysqli("localhost","root","","Company");

if($conn->connect_error){
 echo "error" . $conn->connect_error;
}
echo "okay";

// $sql = "INSERT INTO Member VALUES 
// ('$firstname', '$middlename', '$lastname', '$title', '$email', '$phoneno', '$occupation', '$houseno', )";

// $result = mysql_query($conn,$sql);

// echo "Information successful added to database!😁";


?>