<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,100);
.content {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  height: 100vh;
  width: 100vw;
  z-index: 1;
  text-align: center;
  font-family: "Roboto", sans-serif;
  color: black;
}
.content h1 {
  font-size: 60px;
  margin-bottom: 15px;
  font-weight: 300;
}
.content h2 {
  font-size: 42px;
  font-weight: 100;
}

.menu-container {
  z-index: 2;
  position: relative;
  display: flex;
  align-items: stretch;
  overflow: hidden;
  height: 100vh;
  width: 100vw;
  pointer-events: none;
}

.menu {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  height: 100vh;
  width: 100vw;
  z-index: 3;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  transform: translateY(-100%);
  transition: transform 0.5s;
  transition-delay: 0.5s;
  visibility: hidden;
}
.menu ul li {
  font-family: "Roboto", sans-serif;
  font-weight: 100;
  font-size: 45px;
  color: white;
  min-height: 45px;
  padding: 15px;
  text-align: center;
}
.menu ul li a {
  cursor: pointer;
}

.menu-sliders {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: flex 0.45s;
}
.menu-sliders:nth-child(2) {
  flex: 1 0 100%;
  background: transparent;
}
.menu-sliders:nth-child(odd) {
  background: #005db7;
}

.plus-btn-pos {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 5;
}

.plus-btn {
  width: 40px;
  height: 40px;
  border-radius: 40px;
  background: white;
  position: relative;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  cursor: pointer;
}
.plus-btn div {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 16px;
  height: 3px;
  background: #0259a5;
  transition: transform 0.3s;
  transition-delay: 0.5s;
}
.plus-btn .r1 {
  transform: translateX(-50%) translateY(-50%) rotate(-90deg);
}
.plus-btn .r2 {
  transform: translateX(-50%) translateY(-50%) rotate(-180deg);
}
.plus-btn:hover {
  background: #0259a5;
}
.plus-btn:hover div {
  background: white;
}
.plus-btn:active {
  box-shadow: none;
}

body.menu-open .menu-sliders:nth-child(2) {
  flex: 0 0 0%;
}
body.menu-open .menu {
  transform: translateY(0%);
  visibility: visible;
  pointer-events: all;
}
body.menu-open .plus-btn .r1 {
  transform: translateX(-50%) translateY(-50%) rotate(-45deg);
}
body.menu-open .plus-btn .r2 {
  transform: translateX(-50%) translateY(-50%) rotate(-135deg);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="plus-btn-pos">
  <div class="plus-btn">
    <div class="r1"></div>
    <div class="r2"></div>
  </div>
</div>
<div class="content">
  <div>
    <h1>
      Fullscreen Menu
    </h1>
    <h2>
      Flexbox Style
    </h2>
  </div>
</div>
<div class="menu-container">
  <div class="menu-sliders"></div>
  <div class="menu-sliders"></div>
  <div class="menu-sliders"></div>
  <div class="menu">
    <ul>
      <li>
        <a>Home</a>
      </li>
      <li>
        <a>About      </a>
      </li>
      <li>
        <a>Work</a>
      </li>
      <li>
        <a>Contact</a>
      </li>
    </ul>
  </div>
</div>
<script>
    $('.plus-btn').click(function(){
  $('body').toggleClass('menu-open');
})
</script>
</body>
</html>