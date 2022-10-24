<?php session_start() ; ?>
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
	.jjbbcont{
		height: auto;
	}

	.rtyu{
background-color: rgb(61, 37, 37);
	}
</style>
<body class ="rtyu">
<?php include './partial/nav.php';?>
<form class="jjsstt2" method="post">
    <div class="hed23">Search here ...</div>
	<div class="dfg"><input class="typss" type="textbox" name="str" required/>
        <button class="sst4" type="submit" name="submit"><i class="fa fa-search"></i> </i></i></button></div>
    
</form>
<div class="jjbbcont">
<?php
include('db.php');
if(isset($_POST['submit'])){
	$str=mysqli_real_escape_string($con,$_POST['str']);
	$sql="select id, cname, caddress,'company' from company where cname 
	like '%$str%' or caddress like '%$str%'";
	
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			echo '<a class = "jjdf" '. "href='companydetail.php?id=".$row['id']."&t=".$row['company']."'>".'<div class="jjbox">
            <div >' . '<img class="jjimg" src="./partial/imgs/slid1.jpg" alt=""> </div>
            <div class="jjname"> ' . $row['cname'] .'</div>
            <div class="jjaddress">' .$row['caddress'] .'</div>
        </div> '."</a>";
			echo "<br/>";



		}
	}else{
		echo "No data found";
	}
}

else {
	// <!-- Fetch all the categories and use a loop to iterate through categories -->
      
		//  $str=mysqli_real_escape_string($con,$_POST['str']);
		 $sql="select id, cname, caddress,'company' from company " ;
		$res=mysqli_query($con,$sql);

         while($row = mysqli_fetch_assoc($res)){
          // echo $row['category_id'];
          // echo $row['category_name'];
		  echo '<a class = "jjdf" '. "href='companydetail.php?id=".$row['id']."&t=".$row['company']."'>".'<div class="jjbox">
		  <div >' . '<img class="jjimg" src="./partial/imgs/slid1.jpg" alt=""> </div>
		  <div class="jjname"> ' . $row['cname'] .'</div>
		  <div class="jjaddress">' .$row['caddress'] .'</div>
	  </div> '."</a>";
		  echo "<br/>";
         } 
		}
         ?>    
        </div>
    </div>


</div>

</body>
</html>