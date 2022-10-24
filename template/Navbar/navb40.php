<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Droid+Sans);
* {
  margin: 0;
  padding: 0;
}

body {
  background: tomato;
  font-family: "Droid Sans", sans-serif;
  color: #fff;
  text-align: center;
}

.overlay {
  display: none;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: #34495e;
}

ul {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

ul li {
  list-style-type: none;
  margin: 20px 0;
  font-size: 26px;
  text-transform: uppercase;
  transition: all 0.2s ease;
  cursor: pointer;
}
ul li:hover {
  transform: translateX(-10px);
}

.menu-btn {
  position: absolute;
  top: 30px;
  right: 30px;
  z-index: 10;
  cursor: pointer;
  appearance: none;
  background: #fff;
  border: 0 none;
  display: block;
  height: 2px;
  width: 20px;
}
.menu-btn:active, .menu-btn:focus {
  outline: 0 none;
}
.menu-btn:before, .menu-btn:after {
  background: #fff;
  content: "";
  display: block;
  height: 2px;
  width: 20px;
}
.menu-btn:before {
  transform: translateY(-6px);
}
.menu-btn:after {
  transform: translateY(4px);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<button class="menu-btn"></button>

<div class="overlay">
  <div class="text">
    <ul>
      <li>Pizzas</li>
      <li>Tacos</li>
      <li>Burger</li>
    </ul>
  </div>
</div>
<script>
    const $icon = $('.menu-btn');
const $menu = $('.overlay');

$icon.on('click', function () {
  if (!$menu.hasClass('active')) {
    $menu.fadeIn().toggleClass('active');
  } else {
    $menu.fadeOut().removeClass('active');
  }
});
</script>
</body>
</html>