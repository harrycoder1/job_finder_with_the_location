<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background-color: #1e2023;
  font-family: "Fira Sans", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.site-content {
  max-width: 1100px;
  height: 100vh;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  align-items: center;
  justify-content: center;
}
.site-content__headline {
  font-weight: 200;
  color: #ffffff;
  font-size: calc(2vw + 10px);
}

.menu-icon {
  height: 30px;
  width: 30px;
  position: fixed;
  z-index: 2;
  left: 50px;
  top: 30px;
  cursor: pointer;
}
.menu-icon__line {
  height: 2px;
  width: 30px;
  display: block;
  background-color: #ffffff;
  margin-bottom: 4px;
  transition: transform 0.2s ease, background-color 0.5s ease;
}
.menu-icon__line-left {
  width: 15px;
}
.menu-icon__line-right {
  width: 15px;
  float: right;
}

.nav {
  position: fixed;
  z-index: 1;
}
.nav:before, .nav:after {
  content: "";
  position: fixed;
  width: 100vw;
  height: 100vh;
  background: rgba(234, 234, 234, 0.2);
  z-index: -1;
  transition: transform cubic-bezier(0.77, 0, 0.175, 1) 0.8s;
  transform: translateX(0%) translateY(-100%);
}
.nav:after {
  background: white;
  transition-delay: 0s;
}
.nav:before {
  transition-delay: 0.1s;
}
.nav__content {
  position: fixed;
  top: 50%;
  transform: translate(0%, -50%);
  width: 100%;
  text-align: center;
  font-size: calc(2vw + 10px);
  font-weight: 200;
  cursor: pointer;
}
.nav__list-item {
  position: relative;
  display: inline-block;
  transition-delay: 0.8s;
  opacity: 0;
  transform: translate(0%, 100%);
  transition: opacity 0.2s ease, transform 0.3s ease;
  margin-right: 25px;
}
.nav__list-item:before {
  content: "";
  position: absolute;
  background: #000000;
  width: 20px;
  height: 1px;
  top: 100%;
  transform: translate(0%, 0%);
  transition: all 0.3s ease;
  z-index: -1;
}
.nav__list-item:hover:before {
  width: 100%;
}

body.nav-active .menu-icon__line {
  background-color: #000;
  transform: translateX(0px) rotate(-45deg);
}
body.nav-active .menu-icon__line-left {
  transform: translateX(1px) rotate(45deg);
}
body.nav-active .menu-icon__line-right {
  transform: translateX(-2px) rotate(45deg);
}
body.nav-active .nav {
  visibility: visible;
}
body.nav-active .nav:before, body.nav-active .nav:after {
  transform: translateX(0%) translateY(0%);
}
body.nav-active .nav:after {
  transition-delay: 0.1s;
}
body.nav-active .nav:before {
  transition-delay: 0s;
}
body.nav-active .nav__list-item {
  opacity: 1;
  transform: translateX(0%);
  transition: opacity 0.3s ease, transform 0.3s ease, color 0.3s ease;
}
body.nav-active .nav__list-item:nth-child(0) {
  transition-delay: 0.5s;
}
body.nav-active .nav__list-item:nth-child(1) {
  transition-delay: 0.6s;
}
body.nav-active .nav__list-item:nth-child(2) {
  transition-delay: 0.7s;
}
body.nav-active .nav__list-item:nth-child(3) {
  transition-delay: 0.8s;
}
body.nav-active .nav__list-item:nth-child(4) {
  transition-delay: 0.9s;
}
    </style>
</head>
<body>
<div class="menu-icon">
	<span class="menu-icon__line menu-icon__line-left"></span>
	<span class="menu-icon__line"></span>
	<span class="menu-icon__line menu-icon__line-right"></span>
</div>

<div class="nav">
	<div class="nav__content">
		<ul class="nav__list">
			<li class="nav__list-item">Home</li>
			<li class="nav__list-item">About</li>
			<li class="nav__list-item">Projects</li>
			<li class="nav__list-item">Contact</li>
		</ul>
	</div>
</div>

<div class="site-content">
	<h1 class="site-content__headline">Another menu concept</h1>
</div>
<script>
    console.clear();

const app = (() => {
  let body;
  let menu;
  let menuItems;

  const init = () => {
    body = document.querySelector('body');
    menu = document.querySelector('.menu-icon');
    menuItems = document.querySelectorAll('.nav__list-item');

    applyListeners();
  };

  const applyListeners = () => {
    menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
  };

  const toggleClass = (element, stringClass) => {
    if (element.classList.contains(stringClass))
    element.classList.remove(stringClass);else

    element.classList.add(stringClass);
  };

  init();
})();
</script>
</body>
</html>