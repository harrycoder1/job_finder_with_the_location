<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{box-sizing: border-box;}
body, html{width: 100%; height: 100%;}
body{margin:0; padding:0; background: #ffcf27; font-family:sans-serif;}
legend, label, input, ul, li{margin: 0; padding: 0;}
ul,li{list-style: none;}
a{ text-decoration: none;}

.input-toggler{ display: none;}
.menu-toggler{position: absolute; right: 0px; top: 0px; width:80px; height: 90px; background: #000; z-index: 100; display: flex; justify-content:center; align-items:center; flex-direction:column; cursor: pointer;}

.menu-toggler-line{width: 60%; height:3px; background:#ffcf27; margin: 0 0 10px 0px; position: relative; transition: all .40s ease-out;}

.input-toggler:checked ~ .menu-toggler .menu-toggler-line {top: 5px; translateY:100px;  transform:rotate(45deg);}

.input-toggler:checked ~ .menu-toggler .menu-toggler-line:nth-child(2) {display: none;}

.input-toggler:checked ~ .menu-toggler .menu-toggler-line:nth-child(3) {top: -5px; translateY:10; transform:rotate(135deg);}

.nav{ width: 100%; height: 100%; background:rgba(0,0,0, 0.8);}
.nav ul{ width: 100%;}
.nav ul li{ width: 100%; text-align: center;}
.nav ul li a{display: inline-block; font-size: 36px; color: #fff; text-transform: uppercase;}

.sidebar {position: absolute; top: 0; height: 100vh; width: 100%; background:#000; opacity: 0.5;

display: flex;
justify-content: center;
align-items: center;

transform: translateX(-100%);

transition: all .40s ease-out;
}

.menu-link {color: white; font-size: 10vmin; line-height: 15vmin; -webkit-transition: all .25s ease-out; transition: all .25s ease-out;}
.menu-link:hover, .menu-link:focus, .menu-link:active {color: Gold;}

.input-toggler:checked ~ .sidebar {transform: translateX(0%); opacity: .98;}
    </style>
</head>
<body>
<input type="checkbox" id="toggle" class="input-toggler">   
<label for="toggle" class="menu-toggler">
    <span class="menu-toggler-line"></span>
    <span class="menu-toggler-line"></span>
    <span class="menu-toggler-line"></span>
</label>


<aside class="sidebar">
<ul class="menu">
  <li><a class="menu-link" href="#">Home</a></li>
  <li><a class="menu-link" href="#">Blog</a></li>
  <li><a class="menu-link" href="#">Portfolio</a></li>
  <li><a class="menu-link" href="#">About</a></li>
  <li><a class="menu-link" href="#">Contact</a></li>
</ul>
</aside>
</body>
</html>