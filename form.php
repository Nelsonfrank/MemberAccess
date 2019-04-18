<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">New WebApp</h1>
    <div class="container-fluid bg-light py-3">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Sign-up</h3>
                    <!-- <div class="alert alert-danger">
                        <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                    </div> -->
                    <form action="form.php" method="POST">
                        <div class="form-group has-error">
                            <input class="form-control input-lg" placeholder="Firstname" name="firstname" type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Middlename" name="middlename" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Lastname" name="lastname" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Title" name="title" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Gender" name="gender" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Email Address" name="email" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Phone number" name="phoneno" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Occupation" name="occupation" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="House Number" name="houseno" value=""
                                type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Password" name="password" value="" type="password">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control input-lg" placeholder="Confirm Password" name="password" value="" type="password">
                        </div>
                        <div class="checkbox">
                            <label class="small">
                                <input name="terms" type="checkbox">I have read and agree to the <a href="#">terms of
                                    service</a>
                            </label>
                        </div>
                      <a href="index.php"> <input class="btn btn-lg btn-primary btn-block" value="Sign Me Up" type="submit" name="submit"></a> 
                    </form>
                </div>
            </div>
        </div>
    </div>
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
 $password =$_POST['password'];

$conn=new mysqli("localhost","root","code1909->22","Company");

if($conn->connect_error){
 echo "error" . $conn->connect_error;
}


 $sql = "INSERT INTO Member (FirstName, MiddleName, LastName, Title, Gender, Email, PhoneNo, Occupation, HouseNo, password) VALUES  ('$firstname', '$middlename', '$lastname', '$title', '$gender', '$email', '$phoneno', '$occupation', '$houseno', '$password' )";

//  mysqli_query($conn,$sql);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 echo '<br/>';
echo "your information are successfully inserted in Database 😁 ";


?>
</body>
</html>
