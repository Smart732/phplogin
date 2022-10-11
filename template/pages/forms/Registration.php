<?php
session_start();
if(!isset($_SESSION["email"])) return header("Location:index.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
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
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="h2 text-center hii">OPENMIND COMPUTECH TRAINING INSTITUTE</div>
        <form  method="post" onsubmit="return validateForm()" action="otpsend.php">
                <div class="mb-3">
                    <label for="fullname" class="form-label h5">Enter Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="birth" class="form-label h5">Date of birth</label><br>
                    <input type="date" id="birth" name="birth" class="form-inline mt-1">
                </div>
                <label for="gender" class="form-lable h5">Gender</label>
                <div class="form-check mt-2">

                    <input class="form-check-input" type="radio" value="Male" name="gender" id="gender">
                    <label class="form-check-label" for="flexCheckDefault">
                        Male
                    </label>
                        </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Female" name="gender" >
                    <label class="form-check-label" for="flexCheckChecked">
                        Female
                    </label>
                </div>
                    <div class="mb-3">
                    <label for="Coursecode" class="form-label mx-2 h5">Course code</label>
                    <input type="text" class="form-inline" id="Coursecode"
                        placeholder="Enter your Course code" name="Coursecode" ><label for="Coursename"
                        class="form-label mx-2 h5">Course
                        Name</label>
                    <input type="text" class="form-inline" id="Coursename" name="oursename" placeholder="Enter your Course Name">
                </div>

                    <div class="mb-3">
                        <label for="Emailid" class="form-label h5">Emailid</label>
                        <input type="text" class="form-control" id="Emailid" placeholder="email id" name="Email">
                    </div>
                                        <div class="mb-3">
                        <label for="mobile" class="form-label h5">mobile number</label>
                        <input type="text" class="form-inline" id="mobile" placeholder="mobile number" pattern="[0-9]{10}" maxlength="10" name="Mobile">
                    </div>
                    <div class="mb-3">
                        <label for="fhname" class="form-label h5">Father's/Husband's Name</label>
                        <input type="text" class="form-control" id="fhname" placeholder="Father's/Husband's Name" name="fhname">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label h5">Complete Correspondence Address</label><br>
                        <textarea rows="3" id="address" cols="70" name="address">
                        </textarea>
                    </div>
                            <div><label for="district" class="form-label h5">District</label>
                                <input type="text" id="district" name="District">
                                <label for="State" class="form-label h5">State</label>
                    <input type="text" id="State" name="State"><label for="Pin_code" class="form-label h5">Pin
                        code</label>
                    <input type="text" id="Pin_code" name="pin" pattern="[0-9]{6}" maxlength="6">


                            </div>
                            <div class="mb-2">
                                <label for="Qualifying" class="form-label h5">Qualifying</label><br>
                                <label for="10th" class="form-label h5">10th School/Collage Name</label>
                                <input type="text" id="10th" name="Collage">
                                <label for="university" class="form-label h5">10th Name of Board/University</label>
                                <input type="text" id="university" name="Board"><br>
                                <label for="pass" class="form-label h5">10th Year of Passing</label>
                                <input type="number" min="1900" max="2099" step="1" value="2020" id="pass"  name="Passing"/>
                                <label for="Percent" class="form-label h5">Percent</label>
                                <input type="text" id="Percent" placeholder="Percent" name="percent">
                            </div>
                           <input type="submit" name="submit" class="btn btn-primary btn-sm">
       </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function validateForm(){
    
    var name=document.getElementById("fullname").value;
    var Birth=document.getElementById("birth").value;
    var gender=document.getElementById("gender").value;
    var Emailid=document.getElementById("Emailid").value;
     var mobile=document.getElementById("mobile").value;
  var x=document.querySelector("input[name='gender']:checked");  
    var coursecode=document.getElementById("Coursecode").value;
    var coursename=document.getElementById("Coursename").value;
     var father=document.getElementById("fhname").value;
    var address=document.getElementById("address").value;
    var district=document.getElementById("district").value;
    var state=document.getElementById("State").value;
    var pincode=document.getElementById("Pin_code").value;
    var board=document.getElementById("10th").value;
     var school=document.getElementById("university").value;
    var passyear=document.getElementById("pass").value;
    var percent=document.getElementById("Percent").value;
   if( name=="" || Birth=="" || x.value=="" || coursecode=="" ||   coursename=="" || father=="" ||  address=="" ||  district=="" ||  state=="" ||  pincode=="" || board==""  || school=="" || passyear=="" || percent=="" || mobile=="" || Emailid==""){
    alert("all field required");
    return false;
   }else{
   return true;
    //window.location.replace("otpsend.php");
   }
}
</script>
</body>

</html>