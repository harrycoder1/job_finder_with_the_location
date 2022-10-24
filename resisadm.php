<?php
// $ssecs = false;


include 'db.php';

 if(isset($_POST['sub'])){

        $rname = $_POST['rname'] ;
        $raddress = $_POST['raddress'] ;
        $rdescription = $_POST['rdescription'] ;
        $rvacancies= $_POST['rvacancies'] ;
        $rjob = $_POST['rjob'] ;
        $rlocation = $_POST['rlocation'] ;
        $rrequired = $_POST['rrequired'] ;
        $rusername = $_POST['rowner'] ;
        $rpassword = $_POST['rpassword'] ;
        $rstate = $_POST['rstate'] ;
        $rpin = $_POST['rpin'] ;
        $rcpassword =$_POST['rcpassword'];
        $remail = $_POST['remail'];
        

        // echo"your name is ".$username ;


          // CHECK EXITED WHERE EXIT NAME WHERE EXIT :
          $exitsql = "SELECT * FROM `company`WHERE `cusername` = '$rusername' " ;
          $result = mysqli_query($con , $exitsql) ;
          $numExitrow = mysqli_num_rows($result) ;

        if($numExitrow >0){
          // $exists = true ;
          $showError = true ;
          $ss = "This Username are Already Existed !" ;
          echo"This username already exist";
        }

        else{
            // $exists = false ; 

            if($rpassword == $rcpassword ) {
                $hash = password_hash($rpassword , PASSWORD_DEFAULT) ;
// photo import start her code ----

        $sql = "INSERT INTO `company` ( `cname`,`cusername`, `cpassword`,`cemail`, `caddress`,`cdescription`,`cvacancies`,`cjob`,`clocation`,`crequired`,`cstate`,`cpin`) VALUES ( '$rname','$rusername', '$hash','$remail','$raddress','$rdescription','$rvacancies','$rjob','$rlocation','$rrequired','$rstate','$rpin')" ;
        
        
        $result = mysqli_query($con , $sql) ;
        if($result){
            $showAlert = true ;
            $ss ="You are Sign In success fully!";
            echo"Dat are saved success fully harish";
        } 
            }
            else{
                $showError = true ;
                $ss = "Password doesn't match";
                echo"password doesn't match";
            }
        }
}



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #413333;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
    box-shadow: 2px 2px 12px green;
    text-shadow: 2px 2px 12px yellow;
}

.container {
    border-radius: 21px;
    background-color: #f2f2f2;
    padding: 20px;
    box-shadow: 2px 2px 23px black;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.re3{
    font-size: 37p;
    font-size: 24px;
    background-color: #724476;
    color: white;
    padding: 7px;
    border-radius: 9px;
  
}
.re3:hover{
    box-shadow: 2px 2px 23px black;
    cursor: pointer;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.aw2{
    text-shadow: 1px 1px 12px orange; */
    text-decoration: none;
    border-radius: 29px;
    border: 2px solid black;
    padding: 13px;
    background-color: gray;
    color: white;
    font-size: 18px;
    text-decoration: none;
            
        }
        .aw2:hover{
            box-shadow: 2px 2px 23px red;
        
        }
</style>
<link rel="stylesheet" href="">
</head>
<body>

<h2>Resistor companny in Online</h2>
<p></p>

<div class="container">
  <form action="resisadm.php" method ="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name of Company</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="rname" placeholder="Your company name ..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Address of company</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="raddress" placeholder="Your address are..">
      </div>
    </div>
    
    <div class="row">
        <div class="col-25">
          <label for="lname1">Vacancies in campanay</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname1" name="rvacancies" placeholder="vacancies.">
      </div>
    </div>




 
     

    <div class="row">
        <div class="col-25">
          <label for="lname4">Google Map link of website</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname4" name="rlocation" placeholder="Google map link">
      </div>
    </div>


    <div class="row">
        <div class="col-25">
          <label for="lname5">Enter your website link</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname5" name="remail" placeholder="Website link">
      </div>
    </div>


    <div class="row">
        <div class="col-25">
          <label for="lname6">Set your Username</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname6" name="rowner" placeholder="username">
      </div>
    </div>

    <div class="row">
        <div class="col-25">
          <label for="lname7">Set your password</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname7" name="rpassword" placeholder="password">
      </div>
    </div>

    <div class="row">
        <div class="col-25">
          <label for="lname7">Confirm password</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname7" name="rcpassword" placeholder="Confirm password">
      </div>
    </div>

    <div class="row">
        <div class="col-25">
          <label for="lname7">Enter your States</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname7" name="rstate" placeholder="states">
      </div>
    </div>

    <div class="row">
        <div class="col-25">
          <label for="lname7">Enter your pincode</label>
        </div>
    <div class="col-75">
        <input type="text" id="lname7" name="rpin" placeholder="pincode">
      </div>
    </div>

    <div class="row">
        <div class="col-25">
          <label for="subject1">Qualification Required For Employee</label>
        </div>
        <div class="col-75">
          <textarea id="subject1" name="rrequired" placeholder="Qualification Required..." style="height:150px"></textarea>
        </div>
      </div>

      
    


      <div class="row">
        <div class="col-25">
          <label for="subject2">Job available in Company</label>
        </div>
        <div class="col-75">
          <textarea id="subject2" name="rjob" placeholder="job available in company..." style="height:150px"></textarea>
        </div>
      </div>



    <div class="row">
        <div class="col-25">
          <label for="subject">description of Company</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="rdescription" placeholder="description are..." style="height:150px"></textarea>
        </div>
      </div>


    
    
    
      <button class="row re3" type="submit" name ="sub">Submit</button>
      <divclass="we1"><a class="aw2" href="./home.php">
    <i class="fa fa-close"> close</i>
</a></div>
    </div>
  </form>
  
  </div>
  
</div>

</body>