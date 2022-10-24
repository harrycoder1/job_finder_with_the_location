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
  height: 100vh;
  overflow: hidden;
  background: #000;
  color: #fff;
  font-family: "Playfair Display", cursive;
  display: flex;
  align-items: center;
  justify-content: center;
}

.menu {
  overflow: hidden;
  cursor: -webkit-grab;
  cursor: grab;
  width: 100%;
  position: relative;
  z-index: 1;
  height: 40vh;
}
.menu.is-dragging {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}
.menu--wrapper {
  counter-reset: count;
  display: flex;
  position: absolute;
  z-index: 1;
  height: 100%;
  top: 0;
  left: 0;
  width: 100%;
}
.menu--item {
  counter-increment: count;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 30vw;
  height: 100%;
  padding: 0 1.5vw;
  overflow: hidden;
}
@media (max-width: 767px) {
  .menu--item {
    width: 40vw;
    height: 40vw;
  }
}
.menu--item:nth-child(n+10):before {
  content: counter(count);
}
.menu--item figure {
  position: absolute;
  z-index: 1;
  display: block;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-appearance: none;
  padding: 0;
  border: none;
  outline: none;
  box-shadow: none;
  cursor: pointer;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
  transform-origin: center;
}
.menu--item figure img {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  vertical-align: middle;
  transform-origin: center;
}
.menu--item figure:before {
  position: absolute;
  z-index: 2;
  bottom: 1vw;
  left: 1vw;
  display: inline-block;
  content: "0" counter(count);
  color: #ffffff;
  font-size: 3vw;
}

.version {
  display: inline-block;
  position: fixed;
  text-align: center;
  z-index: 1;
  text-decoration: none;
  background: #333;
  font-family: sans-serif;
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
  border-radius: 10px;
  box-shadow: 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  top: -30px;
  right: -50px;
  bottom: auto;
  transform: rotate(45deg);
  transform-origin: 0% 100%;
  border-radius: 0;
  padding: 8px 30px;
  font-size: 11px;
}
.version:before {
  content: "";
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100px;
  bottom: 0;
  right: 0%;
  background: transparent;
}
@media (max-width: 767px) {
  .version {
    transform: scale(0.6) rotate(45deg);
    right: -100px;
  }
}
    </style>
</head>
<body>
    <!--

Follow me on
Instagram: https://www.instagram.com/supahfunk/
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

Vertical Version: https://codepen.io/supah/pen/xxZMdNW

-->

<div class="menu">
  <div class="menu--wrapper">
    <div class="menu--item">
      <figure><img src="https://images.unsplash.com/photo-1595265677860-9a3168007dc0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" /></figure>
    </div>

    <div class="menu--item">
      <figure><img src="https://images.unsplash.com/photo-1594786118579-95ba90c801ec?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" /></figure>
    </div>

    <div class="menu--item">
      <figure><img src="https://images.unsplash.com/photo-1509339022327-1e1e25360a41?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" /></figure>
    </div>

    <div class="menu--item">
      <figure><img src="https://images.unsplash.com/photo-1525417071002-5ee4e6bb44f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" /></figure>
    </div>

    <div class="menu--item">
      <figure><img src="https://images.unsplash.com/photo-1594072702031-f0e2a602dd2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" /></figure>
    </div>

    <div class="menu--item">
      <figure><img src="https://images.unsplash.com/photo-1592989819277-a3aafa40c66a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" /></figure>
    </div>
  </div>
</div>

<a class="version" href="https://codepen.io/supah/pen/xxZMdNW" target="_parent">Vertical version</a>
<script>/*--------------------
Vars
--------------------*/
const $menu = document.querySelector('.menu');
const $items = document.querySelectorAll('.menu--item');
const $images = document.querySelectorAll('.menu--item img');
let menuWidth = $menu.clientWidth;
let itemWidth = $items[0].clientWidth;
let wrapWidth = $items.length * itemWidth;

let scrollSpeed = 0;
let oldScrollY = 0;
let scrollY = 0;
let y = 0;


/*--------------------
Lerp
--------------------*/
const lerp = (v0, v1, t) => {
  return v0 * (1 - t) + v1 * t;
};


/*--------------------
Dispose
--------------------*/
const dispose = scroll => {
  gsap.set($items, {
    x: i => {
      return i * itemWidth + scroll;
    },
    modifiers: {
      x: (x, target) => {
        const s = gsap.utils.wrap(-itemWidth, wrapWidth - itemWidth, parseInt(x));
        return `${s}px`;
      } } });


};
dispose(0);


/*--------------------
Wheel
--------------------*/
const handleMouseWheel = e => {
  scrollY -= e.deltaY * 0.9;
};


/*--------------------
Touch
--------------------*/
let touchStart = 0;
let touchX = 0;
let isDragging = false;
const handleTouchStart = e => {
  touchStart = e.clientX || e.touches[0].clientX;
  isDragging = true;
  $menu.classList.add('is-dragging');
};
const handleTouchMove = e => {
  if (!isDragging) return;
  touchX = e.clientX || e.touches[0].clientX;
  scrollY += (touchX - touchStart) * 2.5;
  touchStart = touchX;
};
const handleTouchEnd = () => {
  isDragging = false;
  $menu.classList.remove('is-dragging');
};


/*--------------------
Listeners
--------------------*/
$menu.addEventListener('mousewheel', handleMouseWheel);

$menu.addEventListener('touchstart', handleTouchStart);
$menu.addEventListener('touchmove', handleTouchMove);
$menu.addEventListener('touchend', handleTouchEnd);

$menu.addEventListener('mousedown', handleTouchStart);
$menu.addEventListener('mousemove', handleTouchMove);
$menu.addEventListener('mouseleave', handleTouchEnd);
$menu.addEventListener('mouseup', handleTouchEnd);

$menu.addEventListener('selectstart', () => {return false;});


/*--------------------
Resize
--------------------*/
window.addEventListener('resize', () => {
  menuWidth = $menu.clientWidth;
  itemWidth = $items[0].clientWidth;
  wrapWidth = $items.length * itemWidth;
});


/*--------------------
Render
--------------------*/
const render = () => {
  requestAnimationFrame(render);
  y = lerp(y, scrollY, .1);
  dispose(y);

  scrollSpeed = y - oldScrollY;
  oldScrollY = y;

  gsap.to($items, {
    skewX: -scrollSpeed * .2,
    rotate: scrollSpeed * .01,
    scale: 1 - Math.min(100, Math.abs(scrollSpeed)) * 0.003 });

};
render();</script>
</body>
</html>