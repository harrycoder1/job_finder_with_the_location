<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box;
}

body {
  background-color: #462882;
  height: 100vh;
  width: 100vw;
  position: relative;
}

.container {
  position: fixed;
  bottom: 1em;
  right: 1em;
}

.menu-toggle {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #1ef0a0;
  box-shadow: 4px 4px 2px 1px rgba(0, 0, 0, 0.2);
  position: absolute;
  z-index: 5;
  bottom: 0;
  right: 0;
  display: table;
  text-align: center;
}
.menu-toggle .fa {
  color: #fff;
  font-size: 2em;
  display: table-cell;
  vertical-align: middle;
  transition: 0.4s;
}
.menu-toggle.open .fa {
  transform: rotate(135deg);
}

.btn-app {
  width: 2.5em;
  height: 2.5em;
  border-radius: 50%;
  position: absolute;
  background-color: #4644fd;
  color: #fff;
  text-align: center;
}
.btn-app .fa {
  line-height: 2.5em;
}

.open .btn-app {
  box-shadow: 4px 4px 2px 1px rgba(0, 0, 0, 0.2);
}

.menu-round {
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: 3;
}
.menu-round .btn-app {
  bottom: 0.25em;
  right: 0.25em;
  transition: 0.4s;
}
.menu-round.open .btn-app:nth-of-type(1) {
  right: 0.5em;
  bottom: 4.25em;
  transition-delay: 0.2s;
}
.menu-round.open .btn-app:nth-of-type(2) {
  right: 3.5em;
  bottom: 3.5em;
  transition-delay: 0.1s;
}
.menu-round.open .btn-app:nth-of-type(3) {
  right: 4.25em;
  bottom: 0.5em;
}

.menu-line {
  position: absolute;
  z-index: 2;
}
.menu-line .btn-app {
  bottom: 0;
  right: 0.5em;
  transition: 0.3s;
  transition-delay: 0.5s;
}
.menu-line.open .btn-app:nth-of-type(1) {
  bottom: 4.25em;
}
.menu-line.open .btn-app:nth-of-type(1) {
  bottom: 7.25em;
}
.menu-line.open .btn-app:nth-of-type(2) {
  bottom: 10.25em;
}
.menu-line.open .btn-app:nth-of-type(3) {
  bottom: 13.25em;
}
.menu-line.open .btn-app:nth-of-type(4) {
  bottom: 16.25em;
}
.menu-line.open .btn-app:nth-of-type(5) {
  bottom: 19.25em;
}
.menu-line.open .btn-app:nth-of-type(6) {
  bottom: 22.25em;
}
.menu-line.open .btn-app:nth-of-type(7) {
  bottom: 25.25em;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<div class="menu-toggle">
		<span class="fa fa-plus"></span>
	</div>
	
	<div class="menu-round">
		<div class="btn-app">
			<div class="fa fa-twitter"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-facebook"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa- fa-wikipedia-w"></div>
		</div>
	</div>
	
	<div class="menu-line">
		<div class="btn-app">
			<div class="fa fa-map-marker"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-envelope"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-video-camera"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-soundcloud"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-graduation-cap"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-image"></div>
		</div>
		<div class="btn-app">
			<div class="fa fa-vine"></div>
		</div>
	</div>
	
	
</div>
<script>
    $( ".menu-toggle" ).click(function() {
	$(".menu-toggle").toggleClass('open');
  $(".menu-round").toggleClass('open');
	$(".menu-line").toggleClass('open');
});
</script>
</body>
</html>