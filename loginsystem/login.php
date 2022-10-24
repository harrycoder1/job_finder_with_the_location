<?php
   
    $login = false ;
    $showError = false ;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php' ;
    $username = $_POST["username"];
    $password = $_POST["password"];
   
  

// $sql = "SELECT * FROM `users` WHERE `username`= '$username' AND  `password`='$password'" ;
$sql = "SELECT * FROM `users` WHERE `username`= '$username' " ;

$result = mysqli_query($con , $sql) ;
$num = mysqli_num_rows($result) ;
if($num == 1){
    while($row = mysqli_fetch_assoc($result)) {
        if(password_verify($password , $row['password'])){
        $login = true ;

        session_start() ;
    
        $_SESSION['loggedin'] = true ;
        $_SESSION['uname' ] = $username ;
       
    
    
       header("location: welcome.php" ) ;
    }

    else{
        $showError = "Invaild credentials" ;
    }
}
} 

elseif($username == "adminh782300"&& $password == "nilesh@705845"){
header("location:/loginsystem/harishdata.php") ;

    // VERY VERY IMP
}
    
  
    else{
        $showError = "Invaild credentials" ;
    }

    

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./partials/harish.css">

    <title>login</title>

</head>

<body>
    <?php  require './partials/nav.php'  ?>

    <!-- FOR SHOW ALERT ON PAGE -->
    <?php
if( $login){

     echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>  You are login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ' ;
}

if( $showError){

    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error!</strong> '.$showError.'
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div> ' ;
}
?>

    <div class="conainer">
        <h1 class="text-center my-3"> Login to our Website</h1>



        <form action="/loginsystem/login.php" method="post" class="   text-center harishflexbox">
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>


            <button type="submit" class="btn btn-primary">Login</button>
        </form>




    </div>
</body>

<!-- bootstrps script  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</html>