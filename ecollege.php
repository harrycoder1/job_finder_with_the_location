<?php session_start() ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .tyep{
           
    height: 135px;
    text-align: center;
    width: 350px;
    margin: 11px;
    display: flex;
    /* max-width: 400px; */
    justify-content: center;
    align-items: center;
    padding: 19px;
    border-radius: 18px;
    box-shadow: 2px 2px 20px #ffffffad;
    
    
    
    }
    .vnmcont{
        display: flex;
    flex-wrap: wrap;
    justify-content: center;
    /* height: 100vh; */
    align-items: center;
    }
    .trew2{
        text-decoration: none;
    font-size: 23px;
    font-family: cursive;
    color: rgb(243, 242, 242);
    font-weight: 600;
    }
    .trew2:hover{
        text-shadow: 2px 2px 23px orangered;
        color: white;
    }
    .wert::before{
    
    content: '';
    background: url('./partial/imgs/cllg.jpg') 
        no-repeat center center/cover;
    position: absolute;
   
    top: 0px;
    left: 0px;
    width: 100vw;
    height: 100vh;
    z-index: -1;

    filter: blur(9px);
    -webkit-filter: blur(9px);

}
    
    
    
    
</style>
<body class ="wert">
<?php include './partial/nav.php';?>
<div class="vnmcont">
    <div class="tyep"><a class="trew2"  href="./ecll/ess1.php">Science student after 12th </a> </div>
    <div class="tyep"><a class="trew2"  href="./ecll/ess2.php">Trending Cource in Engineering</a> </div>
    
    <div class="tyep"><a class="trew2"  href="./ecll/ess4.php">Overall Student applied Engineering based on Branches</a> </div>
    <div class="tyep"><a class="trew2"  href="./ecll/ess5.php">Overall Student applied Engineering branches and Seat Available</a> </div>
    <div class="tyep"><a class="trew2"  href="./ecll/ess6.php">Highest Paying Engineering Branches In India in 2022 ( Engineering Degree)</a> </div>

</div>
</body>
</html>