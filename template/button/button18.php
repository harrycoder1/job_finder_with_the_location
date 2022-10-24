<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100vw;
  margin: -8px;
   background: #e0e5ec;
}

.frame{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
  height: 80px;
  width: 350px;
  position: relative;
   box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001,
   inset 0px 0px 0px 0px #fff9,
   inset 0px 0px 0px 0px #0001,
   inset 0px 0px 0px 0px #fff9,        inset 0px 0px 0px 0px #0001;
 transition:box-shadow 0.6s cubic-bezier(.79,.21,.06,.81);
   border-radius: 10px;
}

.btn{
  height: 50px;
  width: 50px;
  border-radius: 3px;
  background: #e0e5ec;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  -webkit-tap-highlight-color: transparent;
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
 transition:box-shadow 0.6s cubic-bezier(.79,.21,.06,.81);
  font-size: 26px;
  color: #666;
  text-decoration: none;
}
.btn:hover{
background: radial-gradient(circle,  #0ff 0%, #e0e5ec 60%);
  color: rgba(102,102,102,.5); 
  animation: colorchange 3s linear infinite;
}
.btn:active{
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
}

@keyframes colorchange {
	to {filter: hue-rotate(360deg);}
}
    </style>
</head>
<body>
<head>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <div class ="frame">
   
    <a href="#" class="btn">
 <i class="fas fa-backward"></i>
</a>
    <a href="#" class="btn">
<i class="fas fa-play"></i>
</a>
    <a href="#" class="btn">
 <i class="fas fa-forward"></i>
</a>
  
</div>
</body>
</body>
</html>