
// $basic= new \Vonage\Client\Credentials\Basic("0333b830","fzi4iX608eS6sESF");
// $client= new \Vonage\Client($basic);
// $response=$client->sms()->send(new \Vonage\SMS\Message\SMS("917667538852","singhaniya","hello singhaniya"));
// $message=$response->current();
// if($message->getStatus()==0){
//     echo "send message";
// }else{
// echo $message->getStatus();
// }

<?php
$salert=false;
$serror=false;
include'conn.php';
if(isset($_POST["submit"]))
{
  if($_POST["roles"]=='admin')
  {
    $conn=mysqli_connect("localhost","root","","user1744");
    if($conn)
    {
      $username=$_POST["Username"];
      $password=$_POST["Password"];
      $cPassword=$_POST["cPassword"];
      if($password==$cPassword)
      {
      $command="INSERT INTO `admin`( `username`, `password`, `date`) VALUES ('$username','$password',current_timestamp())";
      $run_comm=mysqli_query($conn,$command);
    if($run_comm)
      {
        $salert=true;
      
      }
      }
    else{
      $serror= "your Passwords does not match";
    }
      
  

  }
 }
      else if($_POST["roles"]=='staff'){
    $conn=mysqli_connect("localhost","root","","user1744");
    if($conn)
    {
      $username=$_POST["Username"];
      $password=$_POST["Password"];
      $cPassword=$_POST["cPassword"];
      if($password==$cPassword)
      {
      $command="INSERT INTO `staff`( `username`, `password`, `date`) VALUES ('$username','$password',current_timestamp())";
      $run_comm=mysqli_query($conn,$command);
    if($run_comm)
      {
        $salert=true;
      
      }
      }
    else{
      $serror= "your Passwords does not match";
    }
      
  
  }
}

else if($_POST["roles"]=='student'){
  $conn=mysqli_connect("localhost","root","","user1744");
  if($conn)
  {
    $username=$_POST["Username"];
    $password=$_POST["Password"];
    $cPassword=$_POST["cPassword"];
    if($password==$cPassword)
    {
    $command="INSERT INTO `users`( `username`, `password`, `date`) VALUES ('$username','$password',current_timestamp())";
    $run_comm=mysqli_query($conn,$command);
  if($run_comm)
    {
      $salert=true;
    
    }
    }
  else{
    $serror= "your Passwords does not match";
  }
    

}
}



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="happy.php">Happy Pie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="signup.php">Signup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
           </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
           
          </div>
        </div>
</nav>
<?php
      if($salert)
{
             echo'<div class="alert alert-success" role="alert">
        Sucess! your Account is Create. Now you can Login your Account.
      </div>
   ';
}

if($serror)
{
             echo'<div class="alert alert-danger" role="alert">
        Error!'.$serror.'
      </div>
   ';
}


?>
      <div class="container">
        <h1 class="text-center">Signup to our website</h1>
        
        <form action="signup.php"method="POST">
            <div class="form-group">
               Select your role for Signup
          <select name="roles">
              <option value="admin">Admin</option>
              <option value="staff">staff</option>
              <option value="student">student</option>
              
          </select>
         <br><br>
              <label for="Username">Username</label>
              <input type="text" class="form-control" id="Username" name="Username" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="Password"name="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="cpassword"> Confirm Password</label>
                <input type="password" class="form-control" id="cPassword"name="cPassword" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted">Make sure to type same password.</small>
              </div>

            
            
            <button type="submit" class="btn btn-primary"name="submit">Signup</button>
          </form>
      </div>
      
</body>
</html>