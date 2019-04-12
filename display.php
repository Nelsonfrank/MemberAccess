<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <title>Office Member</title>
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company Member</h5>
      <!-- <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav> -->
      <a class="btn btn-outline-primary" href="index.html">Sign out</a>
    </div>
    
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3 class="display-4">Member List</h3>
    </div> 


    
    <?php

$conn=new mysqli("localhost","root","code1909->22","Company");

  if($conn->connect_error){
   echo "error" . $conn->connect_error;
  }


$sql = "select FirstName, LastName, Email from Member";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo '<div class="container">
          <div class="row border rounded-sm">
                <div class="col-6">'.$row["FirstName"].'</div>
                <div class="col-3">'.$row["Email"].'</div>
                <div class="col-3">
                <button type="submit" class="btn btn-success btn-sm float-right col-3 " style="margin-right:10px;" id="btnLogin">Update</button>
                <button type="submit" class="btn btn-success btn-sm float-right col-3" style="margin-left: 4px;" id="btnLogin">Delete</button>
          </div> 
      </div>
</div>
    
    ';
}


?>
   </div>


      <footer >
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy;2019</small>
          </div>
        </div>
      </footer>
    </div>
    
  </body>
</html>
