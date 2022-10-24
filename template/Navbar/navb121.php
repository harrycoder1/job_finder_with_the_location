<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,900);
:root {
  font-size: 16px;
}

* {
  box-sizing: border-box;
  font-family: "Roboto", "Helvetica", "sans-serif";
  color: #555;
}

body {
  margin: 0;
  padding: 0;
  background-color: #151b1d;
}

main {
  min-width: 200px;
  max-width: 800px;
  margin: 80px auto;
  padding: 10px;
}
main .wrap {
  padding: 40px 20px;
  background-color: #fff;
}
main .title {
  font-size: 2em;
  text-align: center;
  margin: 20px auto 40px;
  text-transform: uppercase;
}

header nav {
  background-color: rgba(0, 0, 0, 0.8);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
}
header nav ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  position: absolute;
  left: 50%;
  top: 170px;
  transition: all 0.3s ease-in-out;
  transform: translateX(-50%);
}
header nav ul li {
  transform: translateY(50px);
  opacity: 0;
}
header nav ul li a {
  display: block;
  font-size: 2em;
  text-decoration: none;
  padding: 10px 0;
  text-align: center;
  color: #fff;
  font-weight: bold;
  transition: all 0.2s ease-in-out;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
header nav ul li a:hover {
  color: #E84A5F;
}

.toggle-btn {
  display: block;
  position: fixed;
  z-index: 10;
  right: 10px;
  top: 10px;
  cursor: pointer;
}
.toggle-btn .bar {
  width: 30px;
  height: 2px;
  margin: 7px auto;
  background-color: #fff;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.3);
}
.toggle-btn .bar:nth-child(2) {
  width: 20px;
}

#toggle:checked ~ nav {
  opacity: 1;
  visibility: visible;
}
#toggle:checked ~ nav ul {
  top: 70px;
}
#toggle:checked ~ nav ul li {
  transform: translateY(0px);
  opacity: 1;
}
#toggle:checked ~ nav ul li:nth-child(1) {
  transition: all 0.3s cubic-bezier(0.6, 0, 0.8, 1.5) 0.1s;
}
#toggle:checked ~ nav ul li:nth-child(2) {
  transition: all 0.3s cubic-bezier(0.6, 0, 0.8, 1.5) 0.2s;
}
#toggle:checked ~ nav ul li:nth-child(3) {
  transition: all 0.3s cubic-bezier(0.6, 0, 0.8, 1.5) 0.3s;
}
#toggle:checked ~ nav ul li:nth-child(4) {
  transition: all 0.3s cubic-bezier(0.6, 0, 0.8, 1.5) 0.4s;
}
#toggle:checked + label.toggle-btn .bar {
  background-color: red;
}
#toggle:checked + label.toggle-btn .bar:nth-child(2) {
  transform: translateX(50px);
  opacity: 0;
}
#toggle:checked + label.toggle-btn .bar:nth-child(1) {
  transform: translateY(10px) rotate(45deg);
}
#toggle:checked + label.toggle-btn .bar:nth-child(3) {
  transform: translateY(-8px) rotate(-45deg);
}
    </style>
</head>
<body>
<header>
  <input type='checkbox' id='toggle' style='display:none;' />
  <label class='toggle-btn toggle-btn__cross' for='toggle'>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </label>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact me</a></li>
    </ul>
  </nav>
</header>

<main>
  <div class='wrap'>
    <div class='title'>PureCSS fullscreen menu</div>
    <div class="content">
      Hellloo from the other Siiiiidddddeeeeee......<br />
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minus, laudantium voluptatibus officiis quae eaque minima soluta perspiciatis, necessitatibus vitae harum cum mollitia. Illo corporis dolor obcaecati, quam tenetur officiis.    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minus, laudantium voluptatibus officiis quae eaque minima soluta perspiciatis, necessitatibus vitae harum cum mollitia. Illo corporis dolor obcaecati, quam tenetur officiis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minus, laudantium voluptatibus officiis quae eaque minima soluta perspiciatis, necessitatibus vitae harum cum mollitia. Illo corporis dolor obcaecati, quam tenetur officiis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minus, laudantium voluptatibus officiis quae eaque minima soluta perspiciatis, necessitatibus vitae harum cum mollitia. Illo corporis dolor obcaecati, quam tenetur officiis.
    </div>
  </div>
</main>
</body>
</html>