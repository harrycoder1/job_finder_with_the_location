<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/sourcesanspro/v21/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7g.ttf) format('truetype');
}
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
body {
  font-family: 'Source Sans Pro', sans-serif;
  background-color: #e6e9ec;
}
nav {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 100%;
  text-align: center;
  transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
}
nav:after {
  content: "";
  display: table;
  clear: both;
}
nav ul li {
  list-style: none;
  display: inline-block;
  oveflow: hidden;
}
nav ul li a {
  display: block;
  padding: 10px 40px;
  text-decoration: none;
  font-size: 18px;
  position: relative;
  color: rgba(255, 255, 255, 0.8);
  transform: translateX(-15%);
  border-radius: 50px;
  width: 130%;
  text-align: center;
  transition-duration: 0.25s;
}
nav ul li a:hover {
  color: white;
}
nav ul li.active a {
  color: white;
}
nav ul li:nth-child(1) a {
  background-color: #69AF23;
}
nav ul li:nth-child(2n) a {
  background-color: #008737;
}
nav ul li:nth-child(3n) a {
  background-color: #FFC300;
}
nav ul li:nth-child(4n) a {
  background-color: #E62D87;
}
nav ul li:nth-child(5n) a {
  background-color: #552382;
}
nav .dot {
  background-color: red;
  width: 6px;
  height: 6px;
  position: absolute;
  bottom: -20px;
  left: 0;
  border-radius: 50%;
  transition-duration: 0.5s;
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<nav>
	<div class="dot"></div>
	<ul>
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Portfolio</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">More</a></li>
	</ul>
</nav>
<script>
    var activeOffset = $('nav ul .active').position().left;
var activeItemWidth = $('nav ul .active').width();

$('document').ready(function(){
	$('.dot').css('left', activeOffset + activeItemWidth / 2);
	var bgColor = $('.active a').css("background-color");
	$('.dot').css('background-color', bgColor);
});

$('nav').mouseout(function(){
	$('.dot').css('left', activeOffset + activeItemWidth / 2);
	var bgColor = $('.active a').css("background-color");
	$('.dot').css('background-color', bgColor);
});

$('nav ul li').hover(function(){
	var navOffset = $(this).position().left;
	var navItemWidth = $(this).width();
	
	$('.dot').css('left', navOffset + navItemWidth / 2);
	
	var bgColor = $('a', this).css("background-color");
	
	$('.dot').css('background-color', bgColor);
});
</script>
</body>
</html>