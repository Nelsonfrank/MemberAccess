
<?php
// echo " How are you?!";
// // $db = mysql_connect("localhost", "root", "");
// // mysql_select_db("Company", $db);
//
 $firstname=$_POST['firstname'];
 $middlename = $_POST['middlename'];
 $lastname = $_POST['lastname'];
 $title =$_POST['title'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $phoneno = $_POST['phoneno'];
 $occupation =$_POST['occupation'];
 $houseno = $_POST['houseno'];

$conn=new mysqli("localhost","root","","company");

if($conn->connect_error){
 echo "error" . $conn->connect_error;
}


 $sql = "INSERT INTO member01 (firstname, middlename, lastname, title, gender, emailaddr, phoneno, occupation, houseno) VALUES  ('$firstname', '$middlename', '$lastname', '$title', '$gender', '$email', '$phoneno', '$occupation', '$houseno' )";

 mysqli_query($conn,$sql);




?>