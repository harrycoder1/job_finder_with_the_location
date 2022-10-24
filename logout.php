
<?php

session_start() ;
session_unset() ;
session_destroy() ;

header("location: home.php") ;
exit ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <a href="/home.php"></a> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi how</h1>
</body>
</html>
