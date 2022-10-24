<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Alata&display=swap");
* {
  box-sizing: border-box;
}
:root {
  --speed: 0.85;
  --primary: #fff;
  --size: 30;
  --ease: cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
body {
  background: #fafafa;
  font-family: 'Alata', sans-serif;
  min-height: 100vh;
  overflow-x: hidden;
  padding: 0;
}
main {
  height: 100vh;
  overflow-y: scroll;
  scroll-behavior: smooth;
  -ms-scroll-snap-type: y mandatory;
      scroll-snap-type: y mandatory;
}
section {
  align-items: center;
  display: flex;
  font-size: 3rem;
  height: 100vh;
  justify-content: center;
  scroll-snap-align: center;
  width: 100vw;
}
.menu {
  position: fixed;
}
.menu__toggle {
  opacity: 0;
  position: absolute;
}
.menu__toggle:checked ~ .menu__content .menu__item {
  --active-x: var(--x);
  --active-y: var(--y);
  --scale: 1;
}
.menu__toggle:checked ~ .menu__toggle-label:not(.menu__toggle-label--closer) {
  --clip: circle(1000% at 0% 0%);
  height: 100vh;
  width: 100vw;
  -webkit-backdrop-filter: blur(10px);
          backdrop-filter: blur(10px);
}
.menu__toggle:checked ~ .menu__toggle-label .menu__icon:nth-of-type(1) {
  --scale: 0;
}
.menu__toggle:checked ~ .menu__toggle-label .menu__icon:nth-of-type(2) {
  --scale: 1;
}
.menu__toggle-label {
  cursor: pointer;
  height: calc(var(--size, 20) * 0.5vmin);
  width: calc(var(--size, 20) * 0.5vmin);
  display: block;
  --clip: circle(100% at 0% 0%);
  -webkit-clip-path: var(--clip);
  clip-path: var(--clip);
  position: absolute;
  top: 0;
  left: 0;
  transition: backdrop-filter calc(var(--speed, 1) * 1s) var(--ease), clip-path 0s, -webkit-clip-path 0s;
}
.menu__toggle-label--closer {
  z-index: 3;
  --scale: 0;
}
.menu__icon {
  --scale: 1;
  height: calc(var(--size, 20) * 0.25vmin);
  width: calc(var(--size, 20) * 0.25vmin);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-70%, -70%) scale(var(--scale, 1));
  fill: var(--primary);
  transition: all calc(var(--speed, 1) * 1s) var(--ease);
}
.menu__icon:nth-of-type(2) {
  --scale: 0;
}
.menu__content {
  background: hsl(var(--hue, 0), 50%, 50%);
  margin: 0;
  display: block;
  list-style-type: none;
  z-index: -1;
  filter: url("#goo");
  position: absolute;
  top: 0;
  height: 0;
  width: 0;
  left: 0;
  z-index: 2;
}
.menu__content:after {
  background: hsl(var(--hue, 0), 50%, 50%);
  content: '';
  border-radius: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
  height: calc(var(--size, 20) * 1vmin);
  width: calc(var(--size, 20) * 1vmin);
  top: 0;
  left: 0;
}
.menu__item {
  background: hsl(var(--hue, 0), 50%, 50%);
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  list-style-type: none;
  font-size: 1rem;
  height: calc(var(--size, 20) * 1vmin);
  left: calc(var(--active-x, 0) * 1vw);
  overflow: hidden;
  place-items: center;
  position: absolute;
  text-align: center;
  top: calc(var(--active-y, 0) * 1vh);
  transform: translate(-50%, -50%) scale(var(--scale, 0.75));
  transition: all calc(var(--speed, 1) * 1s) calc(var(--delay, 0) * 1s) var(--ease);
  width: calc(var(--size, 20) * 1vmin);
}
@media (min-width: 768px) {
  .menu__item {
    font-size: 3rem;
  }
}
.menu__item:nth-of-type(1) {
  --delay: 0.1;
  --x: 35;
  --y: 35;
}
.menu__item:nth-of-type(2) {
  --delay: 0.2;
  --x: 65;
  --y: 35;
}
.menu__item:nth-of-type(3) {
  --delay: 0.3;
  --x: 35;
  --y: 65;
}
.menu__item:nth-of-type(4) {
  --delay: 0.4;
  --x: 65;
  --y: 65;
}
.menu__link {
  align-items: center;
  color: #fff;
  cursor: pointer;
  text-decoration: none;
  font-weight: bold;
  text-align: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
}
.menu__link:hover {
  text-decoration: underline;
}

    </style>
</head>
<body>
    
<nav class="menu" style="--hue: 89.88236491343925">
  <input class="menu__toggle" id="menu-toggle" type="checkbox"/>
  <label class="menu__toggle-label" for="menu-toggle"></label>
  <label class="menu__toggle-label menu__toggle-label--closer" for="menu-toggle">
    <svg class="menu__icon" preserveAspectRatio="xMinYMin" viewBox="0 0 24 24">
      <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>
    </svg>
    <svg class="menu__icon" preserveAspectRatio="xMinYMin" viewBox="0 0 24 24">
      <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
    </svg>
  </label>
  <ul class="menu__content">
    <li class="menu__item" style="--x: 33; --y: 15;"><a class="menu__link" href="#HOME">HOME</a></li>
    <li class="menu__item" style="--x: 60; --y: 29;"><a class="menu__link" href="#ABOUT">ABOUT</a></li>
    <li class="menu__item" style="--x: 35; --y: 62;"><a class="menu__link" href="#CONTACT">CONTACT</a></li>
    <li class="menu__item" style="--x: 69; --y: 61;"><a class="menu__link" href="#WORK">WORK</a></li>
  </ul>
</nav>
<main>
  <section id="HOME">HOME</section>
  <section id="ABOUT">ABOUT</section>
  <section id="CONTACT">CONTACT</section>
  <section id="WORK">WORK</section>
</main>
<svg style="position: absolute; left: 100%">
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="BLUR"></feGaussianBlur>
      <feColorMatrix in="BLUR" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="GOO"></feColorMatrix>
      <feBlend in="SourceGraphic" in2="goo"></feBlend>
    </filter>
  </defs>
</svg>
</body>
</html>