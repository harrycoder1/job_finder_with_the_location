<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<head>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <style>
    body {
	font-family: Lato;
  font-weight: 400;
	background-color: #26282a;
	color: white;
}

.center {
	margin: 0 auto;
	text-align: center;
}

.spacer {
	margin-top: 6rem;
}

/* barcode container */
.anim-box {
	position: relative;
	width: 220px;
	height: 100px;
	padding: 25px 30px;
	transition: transform .6s ease-out;
}

/* adds the 4 corners */
.anim-box:before, .anim-box:after, .anim-box>:first-child:before, .anim-box>:first-child:after {
	position: absolute;
	width: 10%; height: 15%;
	border-color: white; 
	border-style: solid;
	content: ' ';
}

/* top left corner */
.anim-box:before {
	top: 0; left: 0;
	border-width: 2px 0 0 2px;
}

/* top right corner */
.anim-box:after {
	top: 0; right: 0;
	border-width: 2px 2px 0 0;
}

/* bottom right corner */
.anim-box>:first-child:before {
	bottom: 0; right: 0;
	border-width: 0 2px 2px 0;
}

/* bottom left corner */
.anim-box>:first-child:after {
	bottom: 0; left: 0;
	border-width: 0 0 2px 2px;
}

/* barcode bars */
.anim-item {
	display: inline-block;
	background-color: white;
	height: 100px;
}

.anim-item-sm {
	width: 2px;
	margin-right: 3px;
}

.anim-item-md {
	width: 3px;
	margin-right: 2px;
}

.anim-item-lg {
	width: 5px;
	margin-right: 5px;
}

/* grow on hover */
.anim-box:hover {
	transform: scale(1.5, 2);
}

.anim-box:hover .scanner {
  animation-play-state: running;
}

/* animated laser beam */
.scanner {
	width: 100%;
	height: 3px;
	background-color: red;
  opacity: 0.7;
  position:relative;
  box-shadow: 0px 0px 8px 10px rgba(170, 11, 23, 0.49);
  top:50%;
  animation-name: scan;
  animation-duration: 4s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-play-state: paused;
}

@keyframes scan {
  0% {
    box-shadow: 0px 0px 8px 10px rgba(170, 11, 23, 0.49);
    top: 50%;
  }  
  25% {
    box-shadow: 0px 6px 8px 10px rgba(170, 11, 23, 0.49);
    top: 5px;
  }
  75% {
    box-shadow: 0px -6px 8px 10px rgba(170, 11, 23, 0.49);
    top: 98%;
  }
}
  </style>
</head>
<body>
  <div class='spacer'></div>
  <div class='anim-box center spacer'>
    <!-- empty first child used for corners -->
    <div></div>
    <div class='scanner'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-md'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-md'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-lg'></div>
    <div class='anim-item anim-item-sm'></div>
    <div class='anim-item anim-item-md'></div> 
  </div>
  <div class='spacer'></div>
</body>
</body>
</html>