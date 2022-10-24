<?php session_start() ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./partial/home.css">
    <link rel="stylesheet" href="./partial/layout.css">
</head>
<body>
<?php include './partial/nav.php';?>  
<span class="we1"><a class="aw2" href="./ppp.php">
    <i class="fa fa-close"> close</i>
</a></span>

<?php
include('db.php');
if(isset($_GET['id']) && $_GET['id']>0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="joptnites"){
        $sql="select id, bname, bjbranch, bjgovement, bjprivate,bdescription, 'joptnites' from joptnites where id='$id'";
    }
        else{
        header('location:home.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
      

       echo'<div class="vfdcont">

       <div class="ffname">'.$row['bname'].'</div>
       <div class="bse"><div class="t123"> Job titles in E.E</div>'.$row['bjbranch'].'</div>
       
       <div class="jpri"><div class="t123"> Private organizations are recruiters of '.$row['bname'].'</div>'.$row['bjprivate'].'</div>
       
       <div class="jgove"><div class="t123"> Government organizations are recruiters of '.$row['bname'].'</div>'.$row['bjgovement'].'</div>
       
       <div class="jdesc"><div class="t123">Know about '.$row['bname'].' </div>
           '.$row['bdescription'].'</div>
       
       </div>';




    }else{
        header('location:ejob.php');
        die();
    }
}
?>

    
</body>
</html>








