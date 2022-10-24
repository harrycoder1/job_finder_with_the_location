<?php
include('db.php');
if(isset($_GET['id']) && $_GET['id']>0 && isset($_GET['t']) && $_GET['t']!=''){
    $id=mysqli_real_escape_string($con,$_GET['id']);
    $t=mysqli_real_escape_string($con,$_GET['t']);
    if($t=="company"){
        $sql="select id, cname, caddress, cdescription, cvacancies, sjob, clocation, crequired, cemail from company where id='$id'";
    }
        else{
        header('location:home.php');
        die();
    }

    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        echo "<h2>".$row['cname']."</h2>";
        echo "<p>".$row['caddress']."</p>";
        echo "<a href='ejob.php'>Back</a>";
    }else{
        header('location:index.php');
        die();
    }
}
?>