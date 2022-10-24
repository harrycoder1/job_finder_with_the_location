<?php
 session_start() ;

//     $aa = $_SESSION["uname"] ;

// } 
if(isset($_SESSION['uname']) ){
    $aa = $_SESSION["uname"] ;

}

// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//     $loggedin = true ;
     
//     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./partial/home.css">
</head>
<style>
 
        .checked {
          color: orange;
        }
        
        
        </style>

<body>
<?php include './partial/nav.php';?>  
<span class="we1"><a class="aw2" href="./ejob.php">
    <i class="fa fa-close"> close</i>
</a></span>

<?php
include('db.php');
if(isset($_GET['id']) && $_GET['id']>0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="company"){
        $sql="select id, cname, caddress, cdescription, cvacancies, cjob, clocation, crequired, cemail from company where id='$id'";
        $_SESSION['ii'] = $id;
        
    }
        else{
        header('location:home.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
       echo'<div class="bbjcont">
    <div class="ljcont">

 <img class ="re1" src="./partial/imgs/slid3.jpg" >
    
    
    <div class="re5">' .$row['cname'] .'
    </div>
    <div class="re2">
        <div class="lhead hijj">vacancies available <br>' .$row['cvacancies'].'</div>
        <div class="lhead hijj">Rquirement of employers : <br>'.$row['crequired'].' </div>

    </div>
    
    <div class="re3">
        <div class="hijj">Job Available in : </div>'.$row['cjob'].'

    </div>
    <div class="re8">
       
        <div class="hijj">Address : </div>'.$row['caddress'].' 
    </div>
    <div class="re4">
        
       <div class="hijj">location :</div>
       <a href="'.$row['clocation'].'"> 
       <img class="imgh" src="./partial/imgs/google-maps (1).png" alt=""></a> 
    </div>
    <div class="re6">
        <div class="hijj">Decription : </div>'.$row['cdescription'].'
   
    </div>
    <div class="re7">
        <div class="hijj"> visite Our website here .. </div><a href="'.$row['cemail'].'"> click</a>  
    </div>
    </div>
   ' ;




    }else{
        header('location:ejob.php');
        die();
    }
}
?>
<!-- for reviews from the users -->
 <div class="chatjj">
        <div class="ytr hijj">Reviews  :     </div>


        <!-- for chat detail print  -->
        <div class="user">

            <?php
$hh = $_SESSION['ii'];
            	// <!-- Fetch all the categories and use a loop to iterate through categories -->
      
		//  $str=mysqli_real_escape_string($con,$_POST['str']);
		 $sql="select " ;
         $sql="select user, cdesc, rattingstar, time, csr,'jdcomment' from jdcomment  where csr 
         like '$hh' ";
         $res=mysqli_query($con,$sql);
         if (mysqli_num_rows($res)>0) {

            
             # code...
         
        
   
      
 
          while($row = mysqli_fetch_assoc($res)){
           // echo $row['category_id'];
           // echo $row['category_name'];
        
           $p = $row['rattingstar'];
         

            echo '
            <div class="clogo"></div>
            <div class="name">'.$row['user'].'</div>
            <div>';
            
            if ($p == 5) 
            {
                # code...
                echo'
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>';
        
            }
            if($p == 4){
                echo'
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>';
            }
            if($p == 3){
                echo'
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>';
            }
            if($p == 2){
                echo'
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>';
            }
            if($p == 1){
                echo'
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>';
            }
            if($p == 0){
                echo'
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>';
            }




            echo'
            </div>
            <br>
            <div class="comtedesc"> '.$row['cdesc'].'</div>
            <div class="dateinsert tex">'.$row['time'].'</div>' ;
            
          }
         }
            
            ?>
       
        </div>
        


       



<!-- for  insert the review -->

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-controls="collapseOne">
     Add your Reviw
        </button>
      </h2>
     
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
       
        <div class="unicmt accordion-body">
            <div class="clogo"></div>
            <div class="name"><?php if(isset($_SESSION['uname']) ){
    echo $aa;

} 
              ?></div>
            <form action="/jdproject/companydetail.php" method="post">
                <div>
                    <div class="rting rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
            
                </div>
                <textarea name="cmtdesc" cols="30" rows="10"></textarea>
                <?php
               
                
                if($loggedin){
                    echo'<button type="submit" name ="review">Post</button>';
                }
                else{
                     
                echo'<div class="notice">comment post only for login user <br> please login Now! </div>';
                }
                ?>
            
            </form>
        </div>
      </div>
    </div>
  
  </div>




        </div>
        </div>

       



<!-- for iinsert the data in to the chat box -->
        <?php
        include('db.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset( $_POST['review'])){
              // Update the record
                $impdes = $_POST["cmtdesc"];
                $imprate = $_POST["rate"];
                $hh = $_SESSION['ii'];
          
            // Sql query to be executed
            $sql = "INSERT INTO `jdcomment` ( `user`, `cdesc`, `csr`, `time`, `rattingstar`) VALUES ( '$aa', '$impdes', '$hh', current_timestamp(), '$imprate')";
            $result = mysqli_query($con, $sql);
            echo "comment are add succesfully" ;
            }
            else{
                echo "We could not update the record successfully";
            }
            }
        ?>
        



    
</body>
</html>








