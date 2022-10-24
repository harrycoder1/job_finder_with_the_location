<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	height: 100vh;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-perspective: 1000px;
	perspective: 1000px;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	position: relative;
	background-color: #111;
	font-family: "Montserrat";
}

.container {
	min-width: 700px;
	min-height: 350px;
	border-radius: 20px;
	position: relative;
	-webkit-transition: 1.5s ease-in-out;
	transition: 1.5s ease-in-out;
	transform-style: preserve-3d;
}

.side {
	position: absolute;
	text-align: center;
	width: 100%;
	height: 100%;
	padding: 20px 50px;
	color: #fff;
	transform-style: preserve-3d;
	backface-visibility: hidden;
	border-radius: 20px;
}
.content {
	transform: translatez(70px) scale(0.8);
	line-height: 1.5em;
}
.content h1 {
	position: relative;
}
.content p {
	margin-top: 50px;
	line-height: 2em;
}
.content h1:before {
	content: "";
	position: absolute;
	bottom: -20px;
	height: 3px;
	background-color: #3e3;
	width: 70px;
	left: 50%;
	transform: translateX(-50%);
}
.front {
	z-index: 2;
	background-size: 100vh;
	background-size: cover;
	background-image: url(https://userscontent2.emaze.com/images/f9538183-0ff9-478f-b964-c8ab90421e3b/3d28e192fda5c17250f96a2779c84475.jpg);
}
.back {
	background-color: #333;
	transform: rotateY(180deg);
	z-index: 0;
	padding-top: 10px;
	background-image: url(https://userscontent2.emaze.com/images/f9538183-0ff9-478f-b964-c8ab90421e3b/3d28e192fda5c17250f96a2779c84475.jpg);
}
.container:hover {
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}
form {
	text-align: left;
}
.back h1 {
	margin: 0;
}
form label,
form input {
	display: block;
}
form input,
form textarea {
	background: transparent;
	border: 0;
	border-bottom: 2px solid #444;
	padding: 5px;
	width: 100%;
	color: #fff;
}
form label {
	margin: 15px 0;
}
form input[type="submit"] {
	display: block;
	width: auto;
	margin: 10px auto;
	padding: 5px 10px;
	border: 3px solid #555;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
}
/* my button style  */
.white-mode {
	text-decoration: none;
	padding: 7px 10px;
	background-color: #122;
	border-radius: 3px;
	color: #fff;
	transition: 0.35s ease-in-out;
	position: fixed;
	left: 15px;
	bottom: 15px;
	font-family: "Montserrat";
}

.white-mode:hover {
	background-color: #fff;
	color: #122;
}

    </style>
</head>
<body>
<div class="container">
	<div class="front side">
		<div class="content">
			<h1>Hakkam Abdullah</h1>
			<p>I am a graphic designer and art director. I am as well specialised in front end web design, user experience and creating identities. Throughout my career, I have worked with companies of all shapes and sizes that enriched my experience
			</p>
		</div>
	</div>
	<div class="back side">
		<div class="content">
			<h1>Contact Me</h1>
			<form>
				<label>Your Name :</label>
				<input type="text" placeholder="Omar Khattab">
				<label>Your E-mail :</label>
				<input type="text" placeholder="Example@mail.com">
				<label>Your message :</label>
				<textarea placeholder="The Subject"></textarea>
				<input type="submit" value="Done">
			</form>
		</div>
	</div>

</div>
<a target="_blank" href="http://codepen.io/Moslim/" class="white-mode">OTHER PENS</a>
</body>
</html>