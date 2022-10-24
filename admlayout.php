<?php
// $ssecs = false;


include 'db.php';

if (isset($_POST['updatedd'])) {

   
            $rvacancies= $_POST['uvacancies'] ;
            $rjob = $_POST['ujob'] ;
            
            $rrequired = $_POST['urequired'] ;


       
            
              
                // Sql query to be executed
                $sql = "UPDATE `company` SET `cvacancies` = '$rvacancies' , `cjob` = '$rjob' , `crequired` = '$rrequired' ";


                $result = mysqli_query($con, $sql);
                if($result){

               echo"Updated succe3ss fully";
               session_start() ;
    
            
               $_SESSION['upte' ] = true ;
               header("location: adminlogin.php" ) ;


                  
                  
                  
              }
              else{
                  echo "We could not update the record successfully";
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

            /* text-shadow: 1px 1px 12px orange; */
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link rel="stylesheet" href=""> -->
</head>
<body>


<?php
include('db.php');
if(isset($_GET['id']) && $_GET['id']>0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="company"){
        $sql="select id, cname,cstate,cusername,  caddress, cdescription, cvacancies,cpin, cjob, clocation, crequired, cemail from company where id='$id'";
    }
        else{
        header('location:home.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
       echo'
       
       <div class="bbjcont">
    <div class="ljcont">

 





<h2>Details Of Company</h2>
<p></p>

<div class="container">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name of Company</label>
      </div>
      <div class="col-75">
        <div type="text" >'.$row['cname'].'
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Address of company</label>
      </div>
      <div class="col-75">
        <div type="text"   >'.$row['caddress'].' 
       
      
      </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-25">
          <label for="lname1">Vacancies in campanay</label>
        </div>
        <div class="col-75">
        <div type="text"   >'.$row['cvacancies'].' 
      </div>
     
      </div>
    </div>




 
     

    <div class="row">
        <div class="col-25">
          <label for="lname4">Google Map link of website</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['clocation'].'
        </div>
      </div>
    </div>


    <div class="row">
        <div class="col-25">
          <label for="lname5"> website link</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['cemail'].'
        </div>
      </div>
    </div>


    <div class="row">
        <div class="col-25">
          <label for="lname6"> Username</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['cusername'].'
        </div>
      </div>
    </div>

    

    

    <div class="row">
        <div class="col-25">
          <label for="lname7"> States</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['cstate'].'
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="lname4">pincode</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['cpin'].'
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-25">
          <label for="subject1">Qualification Required For Employee</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['crequired'].'
        </div>
      </div>
      </div>

      
    


      <div class="row">
        <div class="col-25">
          <label for="subject2">Job available in Company</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['cjob'].'
        </div>
      </div>
      </div>



    <div class="row">
        <div class="col-25">
          <label for="subject">description of Company</label>
        </div>
        <div class="col-75">
        <div type="text"  >'.$row['cdescription'].'
        </div>
      </div>
      </div>


    
    
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uppte">
   update
  </button>
  <div class="we1"><a class="aw2" href="./home.php">
        <i class="fa fa-close"> close</i>
    </a></div>
      
  ' ;

    }
}
include 'update.php';
  ?>
  
  </div>
  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>