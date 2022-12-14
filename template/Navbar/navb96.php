<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>html, body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #fff;
}

*, *::before, *::after {
  box-sizing: border-box;
}

.main {
  text-align: center;
  padding-top: 100px;
}

.hamburger {
  position: relative;
  width: 70px;
  height: 70px;
  display: inline-flex;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  padding: 20px;
}
.hamburger:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 20px;
  background: #f953c6;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #da2287, #f953c6);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #da2287, #f953c6);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  transform: rotate(0deg);
  transition: all 0.4s cubic-bezier(0.54, -0.1, 0.57, 0.57);
}
.hamburger .hamburger-input {
  position: absolute;
  opacity: 0;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  cursor: pointer;
}
.hamburger .hamburger-line {
  width: 100%;
  background: #fff;
  height: 2px;
  display: block;
  border-radius: 6px;
  transition: transform 0.4s cubic-bezier(0.54, -0.81, 0.57, 0.57);
  position: relative;
}
.hamburger .hamburger-line.first, .hamburger .hamburger-line.third {
  width: 50%;
}
.hamburger .hamburger-line.third {
  margin-left: 50%;
  transform-origin: left;
}

.menu-button-wrapper {
  position: relative;
  display: inline-block;
}
.menu-button-wrapper .item-list {
  position: absolute;
  top: 90px;
  transform: translateX(-50%) scale(0);
  transform-origin: center;
  transition: all 0.4s cubic-bezier(0.54, -0.1, 0.57, 0.57);
  background-color: #303242;
  color: #fff;
  width: 200px;
  left: 50%;
  padding: 15px 0;
  text-align: left;
  border-radius: 100px;
  font-weight: 300;
  opacity: 0;
  user-select: none;
}
.menu-button-wrapper .item-list div {
  padding: 10px 30px;
  cursor: pointer;
}
.menu-button-wrapper .menu-button {
  position: absolute;
  width: 70px;
  height: 70px;
  left: 0;
  z-index: 2;
  opacity: 0;
  cursor: pointer;
}

.menu-button:checked ~ .item-list {
  transform: translateX(-50%) scale(1);
  border-radius: 20px;
  opacity: 1;
  user-select: auto;
}
.menu-button:checked ~ .icon-wrapper .hamburger-line.second {
  transform: rotate(-45deg);
}
.menu-button:checked ~ .icon-wrapper .hamburger-line.first {
  transform: translate(2px, 8px) rotate(-135deg);
}
.menu-button:checked ~ .icon-wrapper .hamburger-line.third {
  transform: translate(11px, -3px) rotate(-135deg);
}
.menu-button:checked ~ .icon-wrapper .hamburger:before {
  transform: rotate(45deg);
}

.signature-wrapper {
  margin-top: 150px;
  margin-bottom: 100px;
  text-align: center;
}
.signature-wrapper .signature-title {
  font-size: 16px;
  letter-spacing: 1px;
  font-weight: normal;
  color: #444;
}
.signature-wrapper .signature-link {
  color: #444;
  display: inline-block;
  margin: 20px 0 10px;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-decoration: none;
  border-bottom: solid 2px #444;
}</style>
</head>
<body>
<div class="main">
  <label class="menu-button-wrapper" for="">
    <input type="checkbox" class="menu-button">
    <div class="icon-wrapper">
      <label class="hamburger">
        <input class="hamburger-input" type="checkbox">
        <span class="hamburger-line first"></span>
        <span class="hamburger-line second"></span>
        <span class="hamburger-line third"></span>
      </label>
    </div>
    <div class="item-list">
      <div>Home</div>
      <div>About</div>
      <div>Profile</div>
      <div>Contact</div>
    </div>
  </label>

  <!-- signature -->
  <div class="signature-wrapper">
    <div class="signature-title">
      Hey there, I'm Nitish, a frontend developer.
    </div>

    <a class="signature-link" target="_blank" href="https://nikkk.me/">Portfolio</a>
  </div>
  <!-- signature -->
</div>
</body>
</html>