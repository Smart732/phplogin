<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- add fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
  <link rel="shortcut icon" href="singhaniay.png"/>
  <style>
    
    
        .hii {
            font-size: 5em;
            font-family: serif;
            color: transparent;
            text-align: center;
            animation: effect 2s linear infinite;
        }

        @keyframes effect {
            0% {
                background: linear-gradient(#080f63, #29a929);
                -webkit-background-clip: text;
            }

            100% {
                background: linear-gradient(#3CE7D7, #000FFF);
                -webkit-background-clip: text;
            }
        }
        .exam{
          display: flex;
          width: 100vw;
          
        }
        .exam div{
          width:20vw;
          padding:3px;
        }
    </style>
</head>
<body>
    <?php

$eamil=$_GET["email"];
    ?>
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="#"><img src="singhaniay.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-letiant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name"><?php  echo $eamil ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item"  href='logout.php?id=20'>
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
     
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <!-- <a class="nav-link" href="index.html"> -->
               <a class="nav-link" href="#">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="student.php" aria-expanded="false" aria-controls="ui-basic">
              <!-- <i class="mdi mdi-circle-outline menu-icon"></i> -->
              <i class="fa-solid fa-user menu-icon"></i>
              <span class="menu-title">Add Student</span>
              <!-- <i class="menu-arrow"></i> -->
            </a>
            
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="pages/forms/basic_elements.html"> -->
               <a class="nav-link" href="#">
              <!-- <i class="mdi mdi-view-headline menu-icon"></i> -->
              <i class="fa-solid fa-biohazard menu-icon"></i>
              <span class="menu-title">Add attendence</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <!-- <i class="mdi mdi-chart-pie menu-icon"></i> -->
              <i class="fa-solid fa-square-poll-vertical menu-icon"></i>
              <span class="menu-title">Add Result</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <!-- <i class="mdi mdi-grid-large menu-icon"></i> -->
              <i class="fa-solid fa-certificate menu-icon"></i>
              <span class="menu-title">Certificate Apply</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">
              <!-- <i class="mdi mdi-grid-large menu-icon"></i> -->
              <i class="fa-solid fa-certificate menu-icon"></i>
              <span class="menu-title">Certificate Essu</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <!-- <i class="mdi mdi-grid-large menu-icon"></i> -->
              <i class="fa-solid fa-certificate menu-icon"></i>
              <span class="menu-title">Certificate Recive</span>
            </a>
          </li>
        </ul>
     </nav> 
      <!-- registain page -->
      <div class="container">
        <div class="h2 text-center hii">OPENMIND COMPUTECH TRAINING INSTITUTE</div>
        <form  method="post" action="pages/forms/otpsend.php" onsubmit="return validateForm()" > 
        <!-- action="otpsend.php" -->
        <div class="mb-3">
                    <label for="fullname" class="form-label h5">Enter id</label>
                    <input type="text" class="form-control" name="enterid" id="enterid" placeholder="Enterid">
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label h5">Enter Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your full name">
                </div>
                <div class="mb-3" >
                    <label for="birth" class="form-label h5">Date of birth</label><br>
                    <input type="date" id="birth" name="birth" class="form-inline mt-1">
                </div>
                <label for="gender" class="form-label h5 ">Gender</label>
                <div class="form-check mt-2  ">
                    <input class="form-check-input m-2" type="radio" value="Male" name="gender" id="gender">
                    <label class="form-check-label " for="flexCheckDefault"> Male</label>
                </div>
                <div class="form-check mt-2 ">
                    <input class="form-check-input m-2" type="radio" value="Female" name="gender" >
                    <label class="form-check-label" for="flexCheckChecked">Female</label>
                </div>
                    <div class="mb-3">
                    <label for="Coursecode" class="form-label mx-2 h5">Course code</label>
                   
                  <select class="form-select" aria-label="Default select example" id="Coursecode" name="Coursecode">
                  <option selected>Open this select Course Code</option>
                  <?php
                  include "conn.php";
                  $query="SELECT * FROM `courses`";
                  if($row=mysqli_query($conn,$query)){
                    if(mysqli_affected_rows($conn)>0){
                      while($data=mysqli_fetch_row($row)){
                        ?>
                    <option value=<?php echo $data[0]; ?>><?php echo $data[1]; ?></option>
                    <?php
                      }
                    }

                  }
                  ?>
                  </select>
                    <label for="Coursename" class="form-label mx-2 h5">Course Name</label>
                        <select class="form-select" aria-label="Default select example" id="Coursename" name="oursename">
                        <option selected>Open this select Course Name</option>
                        <?php
                        $query="SELECT * FROM `courses`";
                        if($row=mysqli_query($conn,$query)){
                          if(mysqli_affected_rows($conn)>0){
                            while($data=mysqli_fetch_row($row)){
                              ?>
                          <option value=<?php echo $data[0]; ?>><?php echo $data[2]; ?></option>
                          <?php
                            }
                          }
                        }
                        ?>
                      </select>
                    
                </div>

                    <div class="mb-3">
                        <label for="Emailid" class="form-label h5">Emailid</label>
                        <input type="text" class="form-control" id="Emailid" placeholder="email id" name="Email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label h5">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Mobile number" name="Mobile">
                    </div>
                    <div class="mb-3">
                        <label for="fhname" class="form-label h5">Father's/Husband's Name</label>
                        <input type="text" class="form-control" id="fhname" placeholder="Father's/Husband's Name" name="fhname">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label h5">Complete Correspondence Address</label><br>
                        <textarea rows="3" id="address" cols="70" name="address" id="address">
                        </textarea>
                    </div>
                            <div><label for="district" class="form-label h5">District</label>
                                <input type="text" id="district" name="district">
                                <label for="State" class="form-label h5">State</label>
                    <input type="text" id="State" name="State"><label for="Pin_code" class="form-label h5">Pin
                        code</label>
                    <input type="text" id="Pin_code" name="pin" pattern="[0-9]{6}" maxlength="6">


                   </div>
                          <div class="exam" style="width:100%">
                            <div>Exam</div>
                            <div>Board/University Name</div>
                            <div>School name</div>
                            <div>Passing year</div>
                            <div>Paercent</div>
                            <div>Remark</div>
                          </div>
                          <div class="exam" style="width:100%">
                          <div>10th</div>
                          <div>
                          <input type="hidden"  name="10th" value="10th" >
                          </div>
                          <div><input type="text" placeholder="enter" name="tenboard" id="tenboard"></div>
                          <div><input type="text" placeholder="enter" name="tenschool" id="tenschool"></div>
                          <div><input type="text" placeholder="enter" name="tenpass" id="tenpass"></div>
                          <div><input type="text" placeholder="enter" name="tenparcen" id="tenparcent"></div>
                          <div><input type="text" placeholder="enter" name="tenremark" id="tenremark"></div>
                        </div>
                        <div class="exam" style="width:100%">
                        <div  >12th</div>
                        <div>
                          <input type="hidden"  name="12th" value="12th" >
                          </div>
                          <div><input type="text" placeholder="enter" name="interboard" id="interboard"></div>
                          <div><input type="text" placeholder="enter" name="interschool" id="interschool"></div>
                          <div><input type="text" placeholder="enter" name="interpass" id="interpass"></div>
                          <div><input type="text" placeholder="enter" name="interper" id="interper"></div>
                          <div><input type="text" placeholder="enter" name="interremark" id="interemark"></div>
                        </div>
                           <input type="submit" name="submit" class="btn btn-primary btn-sm">
       </form>
    </div>
    
    <script>
function validateForm(){
  let enterid=document.getElementById("enterid").value;
   let name=document.getElementById("fullname").value;
let Birth=document.getElementById("birth").value;
let Emailid=document.getElementById("Emailid").value;
let mobile=document.getElementById("mobile").value;
let x=document.querySelector("input[name='gender']:checked");  
let coursecode=document.getElementById("Coursecode").value;
let coursename=document.getElementById("Coursename").value;
let father=document.getElementById("fhname").value;
let address=document.getElementById("address").value;
let district=document.getElementById("district").value;
let state=document.getElementById("State").value;
let Pin_code=document.getElementById("Pin_code").value;
let tenboard=document.getElementById("tenboard").value;
  let tenschool=document.getElementById("tenschool").value;
  let tenpass=document.getElementById("tenpass").value;
  let tenparcent=document.getElementById("tenparcent").value;
let interboard=document.getElementById("interboard").value;
  let interschool=document.getElementById("interschool").value;
  let interpass=document.getElementById("interpass").value;
  let interper=document.getElementById("interper").value;
if(enterid=="" || name=="" || Birth=="" || Emailid=="" || mobile==""  || coursecode=="" || coursename=="" || father=="" ||address=="" ||district =="" || state=="" || Pin_code=="" ||tenboard=="" ||tenschool=="" ||tenpass=="" ||tenparcent=="" ){
  alert("all fileld required");
   return false;
}else{
  alert("success");
  return true;
}
  
   
}
// || interboard=="" || interschool=="" || interpass=="" || interper=="" 
   
    //window.location.replace("otpsend.php");
   
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>v
<!-- plugins:js -->
<script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>
</html>