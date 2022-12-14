<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  font-family: "Muli", sans-serif;
}

.menu {
  font-weight: 100;
  background: #efefef;
  width: 150px;
  height: 100%;
  padding-left: 50px;
  position: fixed;
  z-index: 100;
  -webkit-box-shadow: -3px 0px 5px 0px rgba(0, 0, 0, 0.2);
  box-shadow: -3px 0px 5px 0px rgba(0, 0, 0, 0.2);
  right: -130px;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  color: #222;
}
.menu:hover, .menu:focus {
  transform: translate3d(-130px, 0, 0);
  animation-timing-function: 1s ease-in;
}
.menu .title {
  top: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  transform: rotate(270deg);
  left: 10px;
  font-weight: 800;
  font-size: 15px;
}
.menu .nav {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-weight: 100;
}
.menu .nav li {
  padding-bottom: 30px;
  list-style-type: none;
}
.menu .nav li a {
  display: block;
  text-decoration: none;
  color: inherit;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
}
.menu .nav li a:hover {
  color: #aaa;
}

.intro {
  position: absolute;
  top: 30%;
  margin: 0 auto;
  left: 0;
  right: 0;
  font-size: 45px;
  text-align: center;
  font-style: italic;
}
    </style>
</head>
<body>
<div class="menu">
    <div class="title">MENU</div>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Work</a></li>
      <li><a href="#">Resources</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
</div>

<div class="intro">
  Hover over the menu.<br> Thanks for visiting.
</div>
</body>
</html>