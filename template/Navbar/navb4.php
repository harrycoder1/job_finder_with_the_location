<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
  background: #e8e8f3;
  height: 100vh;
  display: grid;
  place-content: center;
  -webkit-tap-highlight-color: transparent;
}

.menu {
  position: relative;
  top: 40px;
  padding: 30px;
  background: #e8e8f3;
  border-radius: 100%;
  cursor: pointer;
  box-shadow: 7px 7px 15px rgba(55, 84, 170, 0.15), -7px -7px 20px white, inset 0px 0px 4px rgba(255, 255, 255, 0.2), inset 7px 7px 15px rgba(55, 84, 170, 0), inset -7px -7px 20px rgba(255, 255, 255, 0), 0px 0px 4px rgba(255, 255, 255, 0);
}
.menu::before, .menu::after {
  content: "";
  background: #c3c2c7;
  border-radius: 5px;
  width: 30px;
  height: 5px;
  position: absolute;
  left: 16px;
  top: 27px;
  transition: 0.2s ease;
  z-index: 1;
}
.menu::before {
  transform: rotate(0deg);
}
.menu::after {
  transform: rotate(-90deg);
}
.menu.open {
  opacity: 0.9;
}
.menu.open::before {
  transform: rotate(45deg);
}
.menu.open::after {
  transform: rotate(-45deg);
}
.menu.open .button {
  opacity: 1;
  pointer-events: auto;
}
.menu.open .button:first-of-type {
  bottom: 40px;
  right: 70px;
  background: url("https://bassets.github.io/cam.svg") no-repeat 50%/50% #e8e8f3;
}
.menu.open .button:nth-of-type(2) {
  bottom: 80px;
  background: url("https://bassets.github.io/img.svg") no-repeat 50%/50% #e8e8f3;
  transition-delay: 0.05s;
}
.menu.open .button:last-of-type {
  bottom: 40px;
  right: -70px;
  background: url("https://bassets.github.io/music.svg") no-repeat 50% 45%/50% 45% #e8e8f3;
  transition-delay: 0.1s;
}

.button {
  padding: 30px;
  border-radius: 50%;
  cursor: pointer;
  background: #e8e8f3;
  position: absolute;
  bottom: 0;
  right: 0;
  opacity: 0;
  pointer-events: none;
  box-shadow: inherit;
  transition: 0.2s cubic-bezier(0.18, 0.89, 0.32, 1.28), 0.2s ease opacity, 0.2s cubic-bezier(0.08, 0.82, 0.17, 1) transform;
}
.button:hover {
  transform: scale(1.1);
}
    </style>
</head>
<body>
<div class="menu" onclick="this.classList.toggle('open')">
  <div class="button"></div>
  <div class="button"></div>
  <div class="button"></div>
</div>
</body>
</html>