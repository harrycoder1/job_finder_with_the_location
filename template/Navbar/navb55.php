<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body{
   font-family: "Dosis",sans-serif;
  text-align: center;
}

#menu {
    width: 150px;
    height: 150px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -75px 0 0 -75px;
    list-style: none;
    font-size: 200%;
}

.menu-button {
    opacity: 0;
    z-index: -1;
}

.menu-button {
    width: 150px;
    height: 150px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    background: #424242;
    background-size: 100%;
    overflow: hidden;
    text-decoration: none;
}

#menu:not(:target)>a:first-of-type,
#menu:target>a:last-of-type {
    opacity: 1;
    z-index: 1;
}

#menu:not(:target)>.icon-plus:before,
#menu:target>.icon-minus:before {
    opacity: 1;
}

.menu-item {
    width: 70px;
    height: 70px;
    position: absolute;
    left: 55%;
    line-height: 5px;
    top: 50%;
    margin: -50px 0 0 -50px;
    border-radius: 50%;
    background-color: #424242;
    transform: translate(0px, 0px);
    transition: transform 500ms;
    z-index: -2;
    transition: .5s;
}

.menu-item:hover{
opacity: 0.5;
  box-shadow: 0 5px 10px black; 
}


.menu-item a {
    color: #fff;
    position: relative;
    top: 30%;
    left: 0;
    text-decoration: none;
}

#menu:target>.menu-item:nth-child(6) {
    transform: rotate(60deg) translateY(-150px) rotate(300deg);
    transition-delay: 0s;
}

#menu:target>.menu-item:nth-child(5) {
    transform: rotate(20deg) translateY(-155px) rotate(-20deg);
    transition-delay: 0.1s;
}

#menu:target>.menu-item:nth-child(3) {
    transform: rotate(-20deg) translateY(-155px) rotate(20deg);
    transition-delay: 0.2s;
}

#menu:target>.menu-item:nth-child(4) {
    transform: rotate(-60deg) translateY(-150px) rotate(60deg);
    transition-delay: 0.3s;
}

.content{
  position: absolute;
  text-align: center;
  margin: -10px 0 0 -30px;
  top: 70%;
  left: 50%;
  font-size: 20px;
}
    </style>
</head>
<body>
<div class="container">
     <ul id="menu">
            <a class="menu-button icon-plus" href="#menu" title="Show navigation"></a>
            <a class="menu-button icon-minus" href="#0" title="Hide navigation"></a>
            <li class="menu-item">
                <a href="#menu">
                    <span class="fa fa-github"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#menu">
                    <span class="fa fa-linkedin"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#menu">
                    <span class="fa fa-instagram"></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#menu">
                    <span class="fa fa-twitter"></span>
                </a>
            </li>
        </ul>
  
  <div class="content">
    <div class="text">
      <h3> Click circle!</h3>
      <h6>Tada...!</h6>
    </div>
  </div>
</div>
    
</body>
</html>