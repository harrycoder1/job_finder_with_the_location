<!-- $hash = password_hash($password , PASSWORD_DEFAULT) ; -->
<?php
if(isset($_POST['ss'])){
    $pwd = $_POST['pass'] ;
     $hash = password_hash($pwd, PASSWORD_DEFAULT) ;
     echo"the pase is " .$hash;

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
    <form action="harish.php" method="post">
<input name="pass" type="text" placeholder="Enter number">
<button name="ss" type="submit">submit</button>


    </form>
</body>
</html>