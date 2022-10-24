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
  margin: 0;
  padding: 0;
}

body {
  width: 100%;
  height: 100vh;
  display: flex;
  overflow: hidden;
}

.btn-container {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--bg);
}
.btn-container:nth-child(1) {
  --btn-bg: #da0000;
  --bg: #f22c3a;
}
.btn-container:nth-child(2) {
  --btn-bg: #fac300;
  --bg: #fc6100;
}

button {
  --width: 180px;
  --height: 60px;
  border: 0;
  position: relative;
  min-width: var(--width);
  min-height: var(--height);
  border-radius: var(--height);
  color: #fff;
  font-family: "Montserrat";
  font-weight: bold;
  background: rgba(0, 0, 0, 0.3);
  cursor: pointer;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 1rem;
}
button .text,
button .icon-container {
  position: relative;
  z-index: 2;
}
button .icon-container {
  --icon-size: 25px;
  position: relative;
  width: var(--icon-size);
  height: var(--icon-size);
  margin-left: 15px;
  transition: transform 500ms ease;
}
button .icon-container .icon {
  position: absolute;
  left: 0;
  top: 0;
  width: var(--icon-size);
  height: var(--icon-size);
  transition: transform 500ms ease, opacity 250ms ease;
}
button .icon-container .icon--left {
  transform: translateX(-200%);
  opacity: 0;
}
button .icon-container .icon svg {
  width: 100%;
  height: 100%;
  fill: #fff;
}
button::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: var(--btn-bg);
  border-radius: var(--height);
  z-index: 1;
  transition: transform 500ms ease;
}
button:hover::after {
  transform: translateX(65%);
}
button:hover .icon-container {
  transform: translateX(125%);
}
button:hover .icon-container .icon--left {
  transform: translateX(0);
  opacity: 1;
}
button:hover .icon-container .icon--right {
  transform: translateX(200%);
  opacity: 0;
}

.support {
  position: absolute;
  right: 10px;
  bottom: 10px;
  padding: 10px;
  display: flex;
}
.support a {
  margin: 0 10px;
  color: #fff;
  font-size: 1.8rem;
  backface-visibility: hidden;
  transition: all 150ms ease;
}
.support a:hover {
  transform: scale(1.1);
}
    </style>
</head>
<body>
<div class="btn-container">
	<button>
		<span class="text">Hover</span>
		<div class="icon-container">
			<div class="icon icon--left">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
			<div class="icon icon--right">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
		</div>
	</button>
</div>

<div class="btn-container">
	<button>
		<span class="text">Hover</span>
		<div class="icon-container">
			<div class="icon icon--left">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
			<div class="icon icon--right">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
		</div>
	</button>
</div>

<svg style="display: none;">
	<symbol id="arrow-right" viewBox="0 0 20 10">
		<path d="M14.84 0l-1.08 1.06 3.3 3.2H0v1.49h17.05l-3.3 3.2L14.84 10 20 5l-5.16-5z"></path>
	</symbol>
</svg>

<div class="support">
	<a href="https://twitter.com/DevLoop01" target="_blank"><i class="fab fa-twitter-square"></i></a>
	<a href="https://dribbble.com/devloop01" target="_blank"><i class="fab fa-dribbble"></i></a>
</div>
</body>
</html>