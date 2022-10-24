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
  font-family: "Roboto", "Arial", sans-serif;
  height: 100vh;
  line-height: 1.3;
  background: tomato;
  overflow: hidden;
  text-rendering: geometricPrecision;
  -webkit-font-smoothing: antialiased;
}

.material-menu-wrapper {
  position: absolute;
  bottom: 0;
  right: 0;
  height: 100vh;
  width: 40vw;
  overflow: hidden;
}

.material-menu {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 100%;
  background: transparent;
}

.material-btn {
  will-change: transform;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  position: absolute;
  z-index: 2;
  bottom: 20px;
  right: 20px;
  width: 75px;
  height: 75px;
  background: transparent;
  cursor: pointer;
}
.material-btn.active:before {
  transform: scale(18);
}
@media (min-height: 800px) {
  .material-btn.active:before {
    transform: scale(25);
  }
}
.material-btn:active:before {
  opacity: 0.75;
}
.material-btn:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 75px;
  height: 75px;
  background: white;
  border-radius: 50%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
  cursor: pointer;
  transform-origin: center 70%;
  transform: scale(1);
  transition: all 0.35s ease-out;
}

.material-content {
  padding: 10% 15%;
  position: absolute;
  top: 0;
  right: 0;
}
.material-content.active {
  z-index: 2;
}

nav ul {
  list-style-type: none;
  padding: 0;
  text-align: right;
}
nav li {
  will-change: transform, opacity;
  margin: 25px 0;
  transform: translateY(100px);
  opacity: 0;
  transition: all 0.4s ease-out;
}
nav li.active {
  transform: translateY(0);
  opacity: 1;
}
nav li:nth-child(1) {
  transition-delay: 0.1s;
}
nav li:nth-child(2) {
  transition-delay: 0.2s;
}
nav li:nth-child(3) {
  transition-delay: 0.3s;
}
nav li:nth-child(4) {
  transition-delay: 0.4s;
}
nav a {
  text-decoration: none;
  font-size: 5vw;
  color: tomato;
  font-weight: 300;
}

.material-hamburger {
  transition: all 0.3s ease-out;
}
.material-hamburger .material-patty {
  will-change: transform, opacity;
  width: 32px;
  height: 3px;
  margin: 0 0 6px 0;
  background: #333333;
  opacity: 1;
  transform: translate(0) rotate(0deg);
  transition: all 0.2s ease-out;
}
.material-hamburger .material-patty:last-child {
  margin-bottom: 0;
}
.material-hamburger.material-close {
  transform: rotate(-180deg);
}
.material-hamburger.material-close .material-patty:nth-child(1) {
  transform: translate(-10px, 4px) rotate(-45deg) scale(0.5, 1);
}
.material-hamburger.material-close .material-patty:nth-child(3) {
  transform: translate(-10px, -4px) rotate(45deg) scale(0.5, 1);
}

main {
  will-change: transform, opacity;
  width: 80vw;
  height: 100vw;
  padding: 10vw;
  overflow: hidden;
  transition: all 0.35s ease-out;
}
main.active {
  opacity: 0;
  transform: translate(-700px, 0px);
}
main p {
  color: white;
  font-size: 4vw;
  font-weight: 300;
}
main p .highlight {
  background: white;
  color: tomato;
  font-size: 4vw;
}
    </style>
</head>
<body>
<div class="material-menu-wrapper">
  <div class="material-menu">
    <div class="material-btn">
      <div class="material-hamburger">
        <div class="material-patty"></div>
        <div class="material-patty"></div>
        <div class="material-patty"></div>
      </div>
    </div>
    <div class="material-content">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Work</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<main>
  <p>Dynamically <span class="highlight">procrastinate</span> B2C users after installed base benefits.</p>
</main>
<script>
    var circle = document.querySelector('.material-btn');
var link = document.querySelector('.material-content').querySelectorAll('li');
var ham = document.querySelector('.material-hamburger');
var main = document.querySelector('main');
var content = document.querySelector('.material-content');
var win = window;

function openMenu(event) {
 
  circle.classList.toggle('active');
  ham.classList.toggle('material-close');
  main.classList.toggle('active');
  for (var i = 0; i < link.length; i++) {
    link[i].classList.toggle('active');
  }
  content.classList.toggle('active');
  event.preventDefault();
  event.stopImmediatePropagation();
}

function closeMenu() {
  if (circle.classList.contains('active')) {
    circle.classList.remove('active');
    for (var i = 0; i < link.length; i++) {
      link[i].classList.toggle('active');
    }
    ham.classList.remove('material-close');
    main.classList.remove('active');
    content.classList.toggle('active');
  }
}

circle.addEventListener('click', openMenu, false);

win.addEventListener('click', closeMenu, false);

</script>
</body>
</html>