<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Parisienne|Quicksand&display=swap');
html, body {
	height: 100%;
	margin: 0;
	background-image: linear-gradient(to bottom right, rgb(235, 76, 171), rgb(227, 77, 171), rgb(218, 78, 170), rgb(210, 80, 170), rgb(202, 81, 170), rgb(193, 82, 170), rgb(185, 83, 169), rgb(176, 84, 169), rgb(168, 85, 169), rgb(160, 87, 169), rgb(151, 88, 168), rgb(143, 89, 168));
}
.container {
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	color: #fff;
}
.lead { font-family: 'Quicksand'; }
.header-bar {
	position: relative;
	width: 50%;
	min-width: 300px;
	height: 50px;
	border: 10px solid transparent;
	border-top: 10px solid #fffa;
	border-left: 10px solid #fffa;
	box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.25) inset;
}
.header-bar::after {
	content: '';
	position: absolute;
	top: -10px;
	right: -10px;
	width: 30%;
	height: 49px;
	border: 10px solid transparent;
	border-bottom: 10px solid #fffa;
	border-right: 10px solid #fffa;
	transition: 0.3s linear all;
}
.header-bar > .logo {
	position: absolute;
	top: calc(50% - 20px);
	left: 10px;
	transform: translateY(-50%);
	color: #fffc;
	font-family: 'Parisienne', cursive;
	cursor: default;
	user-select: none;
}
.slider-menu {
	position: absolute;
	top: 0;
	right: 0;
	display: flex;
	list-style-type: none;
	margin: 0;
	padding: 0;
	z-index: 1;
}
.slider-menu > li {
	display: inline-flex;
	padding: 14px;
	margin-left: 2px;
	font-family: 'Quicksand', sans-serif;
	color: #fff;
	cursor: pointer;
	transition: 0.3s linear all;
	user-select: none;
}
.slider-menu > li:hover {
	color: #faa;
	box-shadow: 0 50px 5px rgba(0, 0, 0, 0.15) inset;
}
.aeu-signature {
	position: fixed;
	top: 5px;
	left: 50%;
	transform: translate(-50%);
	font-size: 15px;
	line-height: 30px;
	background-color: #fff;
	padding: 5px 10px;
	border-radius: 25px;
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}
.aeu-signature { font-family: "Quicksand"; }
.aeu-signature > img { height: 30px; }
    </style>
</head>
<body>
<div class="container">
	<p class="lead">Just my entry in yet another Codepen challenge.</p>
	<div class="header-bar">
		<h1 class="logo">E</h1>
		<ul class="slider-menu">
			<li>Home</li>
			<li>About</li>
			<li>Services</li>
		</ul>
	</div>
</div>

<p class="aeu-signature">🌮 made this with 💕.</p>
</body>
</html>