<?php
// $ssecs = false;
$showAlert = false ;
$showError = false ;
$llgn = false ;

include 'db.php';

 if(isset($_POST['signj'])){

        $username = $_POST['uname'] ;
        $password = $_POST['passd']; 
        $cpassword = $_POST['cpassd']; 
        $email = $_POST['email'] ;
        // echo"your name is ".$username ;


          // CHECK EXITED WHERE EXIT NAME WHERE EXIT :
          $exitsql = "SELECT * FROM `users`WHERE `username` = '$username' " ;
          $result = mysqli_query($con , $exitsql) ;
          $numExitrow = mysqli_num_rows($result) ;

        if($numExitrow >0){
          // $exists = true ;
          $showError = true ;
          $ss = "This Username are Already Existed !" ;
          // echo"This username already exist";
        }

        else{
            // $exists = false ; 

            if($password == $cpassword ) {
                $hash = password_hash($password , PASSWORD_DEFAULT) ;
        $sql = "INSERT INTO `users` ( `username`, `password`,`email`) VALUES ( '$username', '$hash','$email')" ;
        $result = mysqli_query($con , $sql) ;
        if($result){
            $showAlert = true ;
            $ss ="You are Sign In success fully!";
            // echo"Dat are saved success fully harish";
        } 
            }
            else{
                $showError = true ;
                $ss = "Password doesn't match";
                // echo"password doesn't match";
            }
        }
}

// Login are start here
elseif (isset($_POST['loginj'])) {
  // echo"hi login";

  $username = $_POST["lusername"];
    $password = $_POST["lpassword"];
   
  

$sql = "SELECT * FROM `users` WHERE `username`= '$username' " ;

$result = mysqli_query($con , $sql) ;
$num = mysqli_num_rows($result) ;
if($num == 1){
    while($row = mysqli_fetch_assoc($result)) {
        if(password_verify($password , $row['password'])){
          $llgn = true ;
          
        $login = true ;

        session_start() ;
    
        $_SESSION['loggedin'] = true ;
        $_SESSION['uname' ] = $username ;
       
    
    
      //  header("location: welcome.php" ) ;
    }

    else{
        $ss = "Invaild credentials" ;
       $showError = true ;
    }
}
} 






}

?>




<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
$loggedin = true ;
 
}

else{
  $loggedin = false ;
}
echo'<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Concert+One&family=Courgette&family=Fugaz+One&family=Lobster&family=Pacifico&family=Permanent+Marker&family=Righteous&family=Sansita+Swashed:wght@300&family=Staatliches&display=swap"
        rel="stylesheet">

    <title>JD Project</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger text-light ">
        <div class="container-fluid">
             <a class="navbar-brand" href="#">Horizon</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page text-light " href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ppp.php">Career Opportunities</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            College
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="ecll/ess2.php">Trending course</a></li>
                            <li><a class="dropdown-item" href="ecll/ess2.php">Highest paying Branches</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                   
                </ul>';


      




        if(!$loggedin){
            echo'<div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginm">
                login
            </button>
        </div>
        <div> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signm">
                sign
            </button></div>


            <li class="btn btn-dark  nav-item dropdown">
                <a class="text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="resisadm.php">admin Resistor</a></li>
                    <li><a class="dropdown-item" href="adminlogin.php">Login Admin</a></li>
                </ul>
            </li>
          ';
         
        }   

if($loggedin){
    echo'<div> <button type="button" class="btn btn-primary" >
    <a class="lopi" href="logout.php">LogOut</a> 
</button></div>';


}
?>


            </div>
        </div>
    </nav>


    <!-- For alert Section -->
    <?php
    if ($showAlert == true) {

      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> '.$ss.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showError == true) {
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong>'.$ss.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($llgn == true) {
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Congratulation '.$username.'!</h4>
  <p>Your login success fully with our website</p>
  <hr>
  <p class="mb-0">I think youy are Enjoy this content</p>
</div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
      # code...
    }

    
?>

    <?php include 'login.php';?>
    <?php include 'sign.php';?>

<a href="/"></a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>