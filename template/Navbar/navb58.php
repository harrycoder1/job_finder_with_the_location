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
        body {
  background-color: #EDEDED;
}
.circular-menu {
  position: fixed;
  bottom: 1em;
  right: 1em;
}

.circular-menu .floating-btn {
  display: block;
  width: 3.5em;
  height: 3.5em;
  border-radius: 50%;
  background-color: hsl(4, 98%, 60%);
  box-shadow: 0 2px 5px 0 hsla(0, 0%, 0%, .26);  
  color: hsl(0, 0%, 100%);
  text-align: center;
  line-height: 3.9;
  cursor: pointer;
  outline: 0;
}

.circular-menu.active .floating-btn {
  box-shadow: inset 0 0 3px hsla(0, 0%, 0%, .3);
}

.circular-menu .floating-btn:active {
  box-shadow: 0 4px 8px 0 hsla(0, 0%, 0%, .4);
}

.circular-menu .floating-btn i {
  font-size: 1.3em;
  transition: transform .2s;  
}

.circular-menu.active .floating-btn i {
  transform: rotate(-45deg);
}

.circular-menu:after {
  display: block;
  content: ' ';
  width: 3.5em;
  height: 3.5em;
  border-radius: 50%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: -2;
  background-color: hsl(4, 98%, 60%);
  transition: all .3s ease;
}

.circular-menu.active:after {
  transform: scale3d(5.5, 5.5, 1);
  transition-timing-function: cubic-bezier(.68, 1.55, .265, 1);
}

.circular-menu .items-wrapper {
  padding: 0;
  margin: 0;
}

.circular-menu .menu-item {
  position: absolute;
  top: .2em;
  right: .2em;
  z-index: -1;
  display: block;
  text-decoration: none;
  color: hsl(0, 0%, 100%);
  font-size: 1em;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  text-align: center;
  line-height: 3;
  background-color: hsla(0,0%,0%,.1);
  transition: transform .3s ease, background .2s ease;
}

.circular-menu .menu-item:hover {
  background-color: hsla(0,0%,0%,.3);
}

.circular-menu.active .menu-item {
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.circular-menu.active .menu-item:nth-child(1) {
  transform: translate3d(1em,-7em,0);
}

.circular-menu.active .menu-item:nth-child(2) {
  transform: translate3d(-3.5em,-6.3em,0);
}

.circular-menu.active .menu-item:nth-child(3) {
  transform: translate3d(-6.5em,-3.2em,0);
}

.circular-menu.active .menu-item:nth-child(4) {
  transform: translate3d(-7em,1em,0);
}

/**
 * The other theme for this menu
 */

.circular-menu.circular-menu-left {
  right: auto; 
  left: 1em;
}

.circular-menu.circular-menu-left .floating-btn {
  background-color: hsl(217, 89%, 61%);
}

.circular-menu.circular-menu-left:after {
  background-color: hsl(217, 89%, 61%);
}

.circular-menu.circular-menu-left.active .floating-btn i {
  transform: rotate(90deg);
}

.circular-menu.circular-menu-left.active .menu-item:nth-child(1) {
  transform: translate3d(-1em,-7em,0);
}

.circular-menu.circular-menu-left.active .menu-item:nth-child(2) {
  transform: translate3d(3.5em,-6.3em,0);
}

.circular-menu.circular-menu-left.active .menu-item:nth-child(3) {
  transform: translate3d(6.5em,-3.2em,0);
}

.circular-menu.circular-menu-left.active .menu-item:nth-child(4) {
  transform: translate3d(7em,1em,0);
}
    </style>
</head>
<body>
<div id="circularMenu" class="circular-menu">

<a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
  <i class="fa fa-plus"></i>
</a>

<menu class="items-wrapper">
  <a href="#" class="menu-item fa fa-facebook"></a>
  <a href="#" class="menu-item fa fa-twitter"></a>
  <a href="#" class="menu-item fa fa-google-plus"></a>
  <a href="#" class="menu-item fa fa-linkedin"></a>
</menu>

</div>


<div id="circularMenu1" class="circular-menu circular-menu-left active">

<a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
  <i class="fa fa-bars"></i>
</a>

<menu class="items-wrapper">
  <a href="#" class="menu-item fa fa-home"></a>
  <a href="#" class="menu-item fa fa-user"></a>
  <a href="#" class="menu-item fa fa-pie-chart"></a>
  <a href="#" class="menu-item fa fa-cog"></a>
</menu>

</div>
</body>
</html>