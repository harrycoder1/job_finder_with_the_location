<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body{
    margin: 0; 
    padding: 0;
    background: #19161c;
    height: 100vh;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: column;
    align-content: center;
}
.box{
    position: relative;
}

.input {
    padding: 10px;
    width: 80px;
    height: 80px;
    background: none;
    border: 4px solid #ffd52d;
    border-radius: 50px;
    box-sizing: border-box;
    font-family: Comic Sans MS;
    font-size: 26px;
    color: #ffd52d;
    outline: none;
    transition: .5s;
}
.box:hover input{
    width: 350px;
    background: #3b3640;
    border-radius: 10px;
}
.box i{
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translate(-50%,-50%);
    font-size: 26px;
    color: #ffd52d;
    transition: .2s;
}
.box:hover i{
    opacity: 0;
    z-index: -1;
}

/* YouTube icon */
#ytb {
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 52px;
  border: 2px solid transparent;
  color: #ff1717;
  font-size: 25px;
  transition: 0.3s;
}

#ytb:hover{
  border-radius: 50%;
  border-color: #ff1717;
  box-shadow: 0 0 10px #ff4040;
}</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="box">
    <form name="search">
        <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
    </form>
    <i class="fas fa-search"></i>

</div>
<a href="https://www.youtube.com/c/ShortCode" target="_blank" id="ytb">
<i class="fab fa-youtube"> </i>
</a>
</body>
</html>