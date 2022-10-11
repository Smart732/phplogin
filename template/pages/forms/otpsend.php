<?php
session_start();
include 'conn.php';
  if(isset($_POST["submit"])){
    $enterid=$_POST["enterid"];
    $fname=$_POST["fullname"];
    $birth=$_POST["birth"];
    $Email=$_POST["Email"];
    $Coursecode=$_POST["Coursecode"];
    $Coursename=$_POST["oursename"];
    $mobile=$_POST["Mobile"];
    $gender=$_POST["gender"];
    $father=$_POST["fhname"];
    $address=$_POST["address"];
    $pin=$_POST["pin"];
    $District=$_POST["district"];
    $State=$_POST["State"];
    $password=12345;
   $tenboard=$_POST["tenboard"];
    $tenschool=$_POST["tenschool"];
    $tenpass=$_POST["tenpass"];
    $tenparcen=$_POST["tenparcen"];
    $interboard=$_POST["interboard"];
    $interschool=$_POST["interschool"];
    $interpass=$_POST["interpass"];
    $interper=$_POST["interper"];
    $tenth=$_POST["10th"];
    $interth=$_POST["12th"];
    $interremark=$_POST["interremark"];
    $tenremark=$_POST["tenremark"];
    $role="student";
    $query2="INSERT INTO `exam`(`studentid`, `School`, `Passing`, `Paercent`, `University`, `exam`, `remark`) VALUES ('$enterid','$tenschool','$tenpass','$tenparcen','$tenboard','$tenth','$tenremark')";
    $query3="INSERT INTO `exam`(`studentid`, `School`, `Passing`, `Paercent`, `University`, `exam`, `remark`) VALUES ('$enterid','$interschool','$interpass','$interper','$interboard','$interth','$interremark')";
$query4="INSERT INTO `adminrole`(`name`, `email`, `password`, `role`) VALUES ('$fname','$Email','$password','$role')";

     $query="INSERT INTO `student_record`(`studentid`,`fullname`, `birth`, `gender`, `Email`, `mobile`, `Coursecode`, `Coursename`, `fathername`, `address`, `district`, `State`, `Pin_code`, `password`) VALUES 
     ('$enterid','$fname','$birth', '$gender','$Email','$mobile',  '$Coursecode', '$Coursename',  '$father', '$address',  '$District', '$State','$pin', '$password')";
    if(mysqli_query($conn, $query)){
                                        if(mysqli_query($conn,$query2)){
                                          echo "insert exam 10th";
if(mysqli_query($conn, $query4)){
  echo "role";
}
                                          // mysqli_query($conn,$query3)
                                          if($interboard=="" ||$interschool=="" ||$interpass=="" ||$interper==""){
                                          echo "";
                                     }else{
                                                if(mysqli_query($conn,$query3)){
                                                  echo "insert exam 12th";
                                                }else{
                                                  echo "inter data".mysqli_error($conn);
                                                }
                                              }

                                          }else{
                                              echo "fail".mysqli_error($conn);
                                            }
                                   }else{
                                      echo("Failed. \nError description: " . mysqli_error($conn));
                                    } 
     }
?>