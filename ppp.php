<?php session_start() ; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Opportunities</title>
    <link rel="stylesheet" href="./partial/home.css">
    <style>
   
   .yyu::before{
    
            content: '';
            background: url('./partial/imgs/er.jpg') 
                no-repeat center center/cover;
            position: absolute;
            opacity: 0.6;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }
   
    .dd12{
        border: 7px dashed #19187a;
        width: 301px;
        height: 200px;
        border-radius: 117px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 23px;
        margin-top: 22px;
    }
    .dd12:hover{
box-shadow: 1px 1px 20px 5px #3997f8;
color: white;
text-shadow: 2px 2px 23px black;
    }
    .jjbbcont{
        display: flex;
    flex-wrap: wrap;
    justify-content: center;
    /* height: 100vh; */
    /* background-color: #051650; */
    }
    </style>
</head>

<body class ="yyu">
<?php include './partial/nav.php';?>
<form class="jjsstt2" method="post">
    <div class="hed23">Search by the name of Branchs...</div>
	<div class="dfg"><input class="typss" type="textbox" name="str" required/>
        <button class="sst4" type="submit" name="submit"><i class="fa fa-search"></i> </i></i></button></div>
    
</form>
<div class="jjbbcont">
<?php
include('db.php');
if(isset($_POST['submit'])){
	$str=mysqli_real_escape_string($con,$_POST['str']);
	$sql="select id, bname, 'joptnites' from joptnites where bname 
	like '%$str%' ";
	
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			echo '<a class = "jjdf" '. "href='ccc.php?id=".$row['id']."&t=".$row['joptnites']."'>".'<div class="jjb">
            <div class="dd12">'.$row['bname'].'</div>
            
        </div> '."</a>";
			echo "<br/>";



		}
	}else{
		echo "No data found";
	}
}
else{
    $sql="select id, bname, 'joptnites' from joptnites  ";
	
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			echo '<a class = "jjdf" '. "href='ccc.php?id=".$row['id']."&t=".$row['joptnites']."'>".'<div class="jjb">
            <div class="dd12">'.$row['bname'].'</div>
            
        </div> '."</a>";
			echo "<br/>";



		}
	}else{
		echo "No data found";
	}
}
?>
</div>

</body>

</html>