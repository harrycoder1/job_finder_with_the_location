<?php

session_start() ;
    


 include('db.php');
 $upalt = false ;
$pg = false ;
if (isset($_POST['logn'])) {
    // echo"hi login";
  
    $username = $_POST['lcusername'];
    $password = $_POST['lcpassword'];
     
    
  
//   $sql = "SELECT * FROM `company` WHERE `cusername`= '$username' " ;
  $sql="select id,cname, cpassword,'company' from company where `cusername`='$username' ";
  
  $result = mysqli_query($con , $sql) ;
  $num = mysqli_num_rows($result) ;
  if($num == 1){
      while($row = mysqli_fetch_assoc($result)) {
          if(password_verify($password , $row['cpassword'])){
        //     $llgn = true ;
        //    echo"Congratulation you are login succssfully";
        //   $login = true ;
  
        //   session_start() ;
        
        //   $_SESSION['loggedin'] = true ;
        //   $_SESSION['uname' ] = $username ;
         
        // echo '<a class = "jjdf" '. "href='admlayout.php?id=".$row['id']."&t=".$row['company']."'>".'<div class="jjbox">Continue</div>
        // </a>';
$pg = true ;

$ug =' 
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <div class="alert alert-success" role="alert">
<h4 class="alert-heading">Congratulation '.$username.'!</h4>
<p>Your login success fully as a Admin</p>
<p>Please click continue for Go to Admin section '. '<a class = "jjdf" '. "href='admlayout.php?id=".$row['id']."&t=".$row['company']."'>".'<div class="jjbox">Continue</div>
</a>'.'</p>

</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
// $liks ='admlayout.php?id="'.$row['id']."&t=".$row['company'] ;
//   session_start() ;
    
//   $_SESSION['loggedin'] = true ;
//   $_SESSION['lik' ] = $liks ;
    # code...
  }
  else{
   $ug = '  
   <div class="alert alert-warning alert-dismissible fade show" role="alert">Invalid username or password 
  <strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;
$pg = true ;
 
}



        echo "<br/>";

      }
  
   
  }
  } 
  
  
  if(isset($_SESSION['upte']) && $_SESSION['upte']==true){
  $upalt = true ;
  }
  
  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0px;
    margin: 0px;
        }
.contm{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    /* background-color: honeydew; */

}
/* for imageback */

.contm::before {
            content: '';
            background: url('./partial/imgs/img2.jpeg') 
                no-repeat center center/cover;
            position: absolute;
            opacity: 0.3;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }


.hjgd{
    font-size: 29px;
    text-decoration: none;
    border-2px border: solid;
    background-color: #246318;
    color: white;
    color: white;
    border: 2px solid;
    color: white;
    border-radius: 7px;
    padding: 6px;
    cursor: pointer;
}

.hjd{
    
margin-top: 39px

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
        .ip1{
            max-width: 400px;
    min-width: 300px;
    text-align: center;
    padding: 12px;
    border-radius: 22px;
    border: 3px solid gray;
    margin-top: 12px;
        }
        .bi2{
            font-size: 23px;
    padding: 3px 23px 3px 23px;
    margin-top: 20px;
    border-radius: 13px;
    color: white;
    background-color: green;
    box-shadow: 2px 2px 12px black;
        }
        .we1{
            margin-top: 41px;
        }
        .oli{
            
    font-family: 'Palette Mosaic', cursive;
    color: white;
    text-shadow: 2px 2px 8px black;
    font-size: 47px;

        }
    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Concert+One&family=Courgette&family=Fugaz+One&family=Lobster&family=Pacifico&family=Palette+Mosaic&family=Permanent+Marker&family=Righteous&family=Sansita+Swashed:wght@300&family=Staatliches&display=swap" rel="stylesheet">
 
</head>
<body>
    <?php
if($pg == true){
    echo $ug;
}
if($upalt == true){
    echo ' 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Success!</h4>
    <p>Your Data updated successfully in Your Account .</p>
    <p>Pease Login again !</p>
    
    
    </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

    
session_unset() ;
session_destroy() ;



}

    ?>



<div class="contm">

<h1 class="oli">Login For Admin</h1>
<div><form action="adminlogin.php" method="post">
<input class="ip1" type="text" placeholder="Enter Username" name="lcusername"></div>
<div><input class="ip1" type="password" placeholder="Enter Password" name="lcpassword"></div>

<button class="bi2" type="submit" name="logn" >Login</button>


    </form>
    <div class="we1"><a class="aw2" href="./home.php">
    <i class="fa fa-close"> close</i>
</a></div>
</div>
   
    
</div>



    </div>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body>
</html>