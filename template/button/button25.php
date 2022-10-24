<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin:0;
  padding:0;
  background: #262626;
}

ul {
  margin:0;
  padding:0;
  display:flex;
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%, -50%);
}

ul li {
  list-style:none;
  margin: 0 15px;
}

ul li a {
  position: relative;
  display: block;
  width: 60px;
  height: 60px;
  text-align: center;
  line-height: 60px;
  background: #171515;
  border-radius: 50%;
  font-size: 30px;
  color: #666;
  transition: .5s;
}

ul li a:before {
  content: '';
  position: absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  border-radius:50%;
  background: #d35400;
  transition: .5s;
  transform: scale(.9);
  z-index: -1;
}

ul li a:hover:before {
  transform: scale(1.2);
  box-shadow: 0 0 15px #d35400;
  filter: blur(3px);
}

ul li a:hover {
  color: #ffa502;
  box-shadow: 0 0 15px #d35400;
  text-shadow: 0 0 15px #d35400;
}
    </style>
</head>
<body>
<div>
  <div class="container">
    <ul>
      <li><a href="#"><i class="fa fa-arrows" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-btc" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-repeat" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
</body>
</html>