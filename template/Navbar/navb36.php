<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
  box-sizing: border-box;
}

*, *:after, *:before {
  box-sizing: inherit;
}

a {
  color: #fff;
  text-decoration: none;
}

html {
  width: 100%;
  height: 100%;
}

body {
  background: #161616;
  width: 100%;
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  color: #fff;
  padding: 60px;
}

h1 {
  width: 100%;
  text-align: center;
  padding: 40px 0;
}

.open {
  position: fixed;
  top: 40px;
  right: 40px;
  width: 50px;
  height: 50px;
  display: block;
  cursor: pointer;
  transition: opacity 0.2s linear;
}
.open:hover {
  opacity: 0.8;
}
.open span {
  display: block;
  float: left;
  clear: both;
  height: 4px;
  width: 40px;
  border-radius: 40px;
  background-color: #fff;
  position: absolute;
  right: 3px;
  top: 3px;
  overflow: hidden;
  transition: all 0.4s ease;
}
.open span:nth-child(1) {
  margin-top: 10px;
  z-index: 9;
}
.open span:nth-child(2) {
  margin-top: 25px;
}
.open span:nth-child(3) {
  margin-top: 40px;
}

.sub-menu {
  transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  height: 0;
  width: 0;
  right: 0;
  top: 0;
  position: absolute;
  background-color: rgba(38, 84, 133, 0.54);
  border-radius: 50%;
  z-index: 18;
  overflow: hidden;
}
.sub-menu li {
  display: block;
  float: right;
  clear: both;
  height: auto;
  margin-right: -160px;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.sub-menu li:first-child {
  margin-top: 180px;
}
.sub-menu li:nth-child(1) {
  -webkit-transition-delay: 0.05s;
}
.sub-menu li:nth-child(2) {
  -webkit-transition-delay: 0.1s;
}
.sub-menu li:nth-child(3) {
  -webkit-transition-delay: 0.15s;
}
.sub-menu li:nth-child(4) {
  -webkit-transition-delay: 0.2s;
}
.sub-menu li:nth-child(5) {
  -webkit-transition-delay: 0.25s;
}
.sub-menu li a {
  color: #fff;
  font-family: "Lato", Arial, Helvetica, sans-serif;
  font-size: 16px;
  width: 100%;
  display: block;
  float: left;
  line-height: 40px;
}

.oppenned .sub-menu {
  opacity: 1;
  height: 400px;
  width: 400px;
}
.oppenned span:nth-child(2) {
  overflow: visible;
}
.oppenned span:nth-child(1), .oppenned span:nth-child(3) {
  z-index: 100;
  transform: rotate(45deg);
}
.oppenned span:nth-child(1) {
  transform: rotate(45deg) translateY(12px) translateX(12px);
}
.oppenned span:nth-child(2) {
  height: 400px;
  width: 400px;
  right: -160px;
  top: -160px;
  border-radius: 50%;
  background-color: rgba(38, 84, 133, 0.54);
}
.oppenned span:nth-child(3) {
  transform: rotate(-45deg) translateY(-10px) translateX(10px);
}
.oppenned li {
  margin-right: 168px;
}

.button {
  display: block;
  float: left;
  clear: both;
  padding: 20px 40px;
  background: #fff;
  border-radius: 3px;
  border: 2px solid #10a1ea;
  overflow: hidden;
  position: relative;
}
.button:after {
  transition: transform 0.3s ease;
  content: "";
  position: absolute;
  height: 200px;
  width: 400px;
  transform: rotate(45deg) translateX(-540px) translateY(-100px);
  background: #10a1ea;
  z-index: 1;
}
.button:before {
  transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  content: attr(title);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #fff;
  z-index: 2;
  text-align: center;
  padding: 20px 40px;
  transform: translateY(200px);
}
.button:hover {
  text-decoration: none;
}
.button:hover:after {
  transform: translateX(-300px) translateY(-100px);
}
.button:hover:before {
  transform: translateY(0);
}

.container {
  display: flex;
  max-width: 80%;
  justify-content: center;
  margin: 0 auto;
}

.card {
  position: relative;
  z-index: 10;
  width: 380px;
  border-radius: 4px;
  padding-bottom: 40px;
  background: #131e32;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px;
}
.card figcaption {
  position: absolute;
  bottom: 0;
  padding: 10px;
  color: #fff;
}
.card img {
  max-width: 100%;
  border: 1px solid #222;
  transition: 0.4s;
}
.card:hover img {
  transform: scale(1.1);
}

.yt-card {
  position: absolute;
  bottom: 5%;
  right: 5%;
  text-align: center;
  color: #272243;
  width: 100%;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 20px rgba(0, 0, 0, 0.03);
  width: 320px;
  overflow: hidden;
  -webkit-animation: updown 3s ease 6;
          animation: updown 3s ease 6;
}
.yt-card::before {
  content: "";
  border-width: 20px;
  border-color: transparent;
  border-style: solid;
  border-left-color: rgba(255, 255, 255, 0.9);
  border-left-width: 30px;
  display: block;
  position: absolute;
  top: 55%;
  left: 50%;
  z-index: 2;
  transform: translatex(calc(-50% + 15px));
  filter: drop-shadow(5px 5px 4px #000);
  pointer-events: none;
}
.yt-card h1 {
  margin: 0;
  padding: 10px;
  font-size: 16px;
}
.yt-card img {
  max-width: 100%;
  bottom: -14px;
  position: relative;
}
@-webkit-keyframes updown {
  0%, 50%, 100% {
    transform: translatey(0);
  }
  20% {
    transform: translatey(5px);
  }
  25% {
    transform: translatey(-20px);
  }
  30% {
    transform: translatey(20px);
  }
  35% {
    transform: translatey(-5px);
  }
}
@keyframes updown {
  0%, 50%, 100% {
    transform: translatey(0);
  }
  20% {
    transform: translatey(5px);
  }
  25% {
    transform: translatey(-20px);
  }
  30% {
    transform: translatey(20px);
  }
  35% {
    transform: translatey(-5px);
  }
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h1>
  Click on the hamburger icon →
</h1>
<div  class="open">
	<span class="cls"></span>
	<span>
		<ul class="sub-menu ">
			<li>
				<a href="#about" title="about">Sobre / About</a>
			</li>
			<li>
				<a href="#skills" title="skills">Habilidades / Skills</a>
			</li>
			<li>
				<a href="#jobs" title="jobs">Trabalhos / Jobs</a>
			</li>
			<li>
				<a href="#contact" title="contact">Contato / Contact</a>
			</li>
		</ul>
	</span>
	<span class="cls"></span>
</div>


<div class="container">
  Check out my new pens
  <br>
  <br>
</div>
<div class="container">  
  <a href="https://codepen.io/sergioandrade/pen/qBZKgVV" target="_blank" class="card">
    <img src="https://i.imgur.com/T57flD5.jpg" alt="Animated menu on sidebar left">
    <figcaption>
      Animated menu on sidebar left
    </figcaption>
  </a>
  <a href="https://codepen.io/sergioandrade/pen/OJNONVp" target="_blank" class="card">
    <img src="https://i.imgur.com/Z7DwAUc.jpg" alt="">
    <figcaption>
      Just HTML Game - No css and no JS
    </figcaption>
  </a>
   <a href="https://codepen.io/sergioandrade/pen/pXmKJv" target="_blank" class="card">
    <img src="https://i.imgur.com/z7lt0tT.jpg" alt="Countdown with css grid layout">
    <figcaption>
      Countdown with css grid layout
    </figcaption>
  </a>
  
    <div class="yt-card">
      <h1>See more content like <br> this on my website:</h1>
      <a href="http://sergioandra.de" target="_blank">
        <img src="https://i.imgur.com/Hngvtpq.jpg">
      </a>
    </div>
 

</div>
<script>
    $(document).ready(function() {
		$(document).delegate('.open', 'click', function(event){
			$(this).addClass('oppenned');
			event.stopPropagation();
		})
		$(document).delegate('body', 'click', function(event) {
			$('.open').removeClass('oppenned');
		})
		$(document).delegate('.cls', 'click', function(event){
			$('.open').removeClass('oppenned');
			event.stopPropagation();
		});
	});
</script>

</body>
</html>