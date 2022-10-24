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
    <title>Data of login</title>
</head>
<body>
    <?php  require './partials/nav.php'  ?>
    <h2>Get data of login candindate</h2>
    <form action="/loginsystem/harishdata.php" method="post">
        <input type="text " name="search" placeholder="search the data here..">
        <button type="submit">Submit</button>
    </form>

    <div class="container">

        <?php
  include './partials/_dbconnect.php' ;



  // SELECT THE TABLE FROM THE DB    // VERY VERY IMPORTENT 
  if($_SERVER['REQUEST_METHOD']=='POST'){
  
    $search = $_POST['search'] ;
    
    
    $mql = "SELECT * FROM `users` WHERE `username` = '$search' OR `sno`= '$search' OR `dt`= '$search'  " ;
    $result3 = mysqli_query($conn , $mql) ;
// find the number of rows :
$num3 = mysqli_num_rows($result3);
    echo " Total user are login this website is : $num3 " . "<br>";
      
    //   echo $search ;

      // DISPLAY THE TABLE ON THE SCREEN 
if($num3>0){
    // if(){
        
    //     $result3 = mysqli_query($conn, $mql) ;
    // }
    while($row = mysqli_fetch_assoc($result3)){
       //  echo  $row['sno'] . "  " . $row['username'] ."  ".$row['dt'] . "<br>" ;
   echo '<div class="card my-3 mx-3" style="width: 18rem; border: 3px solid  black; border-radius: 8px;  ">
   <ul class="list-group list-group-flush">
     <li class="list-group-item bg-danger">Serial Number is ' .$row['sno'] .' </li>
     <li class="list-group-item bg-info">Username is  '. $row['username'] .' </li>
     <li class="list-group-item bg-success">Date of join is '.$row['dt'] .' </li>
   </ul>
   </div>' ;
    }
   
   }
   else{
       echo "The record are not found" ;
   }

  }




        ?>
    </div>




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
</body>
</html>