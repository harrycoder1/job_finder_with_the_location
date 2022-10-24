
<?php


include('db.php');
if(isset($_POST['wel'])){
	// $str=mysqli_real_escape_string($con,$_POST['str']);
	// $sql="select id, bname, 'joptnites' from joptnites where bname 
	// like '%$str%' ";
	echo"name is".$_POST['yulo'] ;
	// $res=mysqli_query($con,$sql);
	// if(mysqli_num_rows($res)>0){
	// 	while($row=mysqli_fetch_assoc($res)){
	// 		echo '<a class = "jjdf" '. "href='ccc.php?id=".$row['id']."&t=".$row['joptnites']."'>".'<div class="jjb">
    //         <div class="dd12">'.$row['bname'].'</div>
            
    //     </div> '."</a>";
	// 		echo "<br/>";



	}


elseif (isset($_POST['sign'])) {
    echo"We are Sign in ".$_POST['jjd'];
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello tut khnow yo</h1>
    <form action="./vl.php" method="post">
        <input name="yulo" type="text" placeholder="username">
        <button name="wel" type="submit">submit</button>
    </form>
    <form action="./vl.php" method="post">
        <input name="jjd" type="text" placeholder="username">
        <button name="sign" type="submit">submit</button>
    </form>
</body>
</html>