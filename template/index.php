<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Login Admin</title>
</head>

<body>
    <?php
session_start();
//  if(isset($_SESSION["email"])){
//     echo "set";
//  }else{
//     echo "not set";
//  }
// if(!isset($_SESSION["email"])) 
// {
//     echo "seesion true";
//  header("Location:index.php");
// }
// else{
//     echo"session false";
//      header("Location:index.php");
   
// }

?>
    <div class="content">
        <!--Image & Title-->
        <img src="singhaniay.png" alt="">
        <div class="text">Singhaniya Developer</div>
        <form action="dashboard.php" method="post">
            <!--Email & password input place-->
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" required name="Email">
                <label>Email Id</label>
            </div>

            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="Password">
                <label>Password</label>
            </div>
            <input type="submit" name="submit">
            <!--login & outer button-->
        </form>
    </div>
</body>

</html>