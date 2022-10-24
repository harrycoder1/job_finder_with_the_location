<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  	font-family: 'Lato', sans-serif;
  	font-weight: 400;
  	font-size: 16px;
  	line-height: 1.7;
  	color: #eee;
}

.header {
  	height: 100vh;
  	background-image: 
	  linear-gradient(to right bottom, 
     rgba(76, 216, 255, 0.8),
     rgba(30, 108, 217, 0.8)),
     url('https://images.pexels.com/photos/213399/pexels-photo-213399.jpeg');
  	
	background-size: cover;
  	background-position: top;
  	position: relative;

  	clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%);
}

.brand-box {
  	position: absolute;
  	top: 40px;
  	left: 40px;
}

.brand { font-size: 20px; }

.text-box {
  	position: absolute;
  	top: 50%;
  	left: 50%;
  	transform: translate(-50%, -50%);
  	text-align: center;
}

.heading-primary {
  	color: #fff;
  	text-transform: uppercase;

  	backface-visibility: hidden;
  	margin-bottom: 30px;
}

.heading-primary-main {
  	display: block;
  	font-size: 26px;
  	font-weight: 400;
  	letter-spacing: 5px;
}

.heading-primary-sub {
  	display: block;
  	font-size: 18px;
  	font-weight: 700;
  	letter-spacing: 7.4px;
}

.btn:link,
.btn:visited {
  	text-transform: uppercase;
  	text-decoration: none;
  	padding: 10px 20px;
  	display: inline-block;
  	border-radius: 100px;
  	transition: all .2s;
  	position: relative;
}

.btn:hover {
  	transform: translateY(-3px);
  	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
  	transform: translateY(-1px);
  	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
  	background-color: #fff;
  	color: #777;
	font-size: 14px;
}
    </style>
</head>
<body>
<header class="header">
	<div class="brand-box">
		<span class="brand">Example Brand</span>
	</div>
	
	<div class="text-box">
		<h1 class="heading-primary">
			<span class="heading-primary-main">Heading Primary Main</span>
			<span class="heading-primary-sub">The secondary heading</span>
		</h1>
		<a href="#" class="btn btn-white btn-animated">Discover our tours</a>
	</div>
</header>
</body>
</html>