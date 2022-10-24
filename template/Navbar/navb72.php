<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  background-image: url("https://www.toptal.com/designers/subtlepatterns/patterns/ignasi_pattern_s.png");
  background-attachment: fixed;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

a {
  text-decoration: none;
  color: inherit;
}

@media (max-width: 991px) {
  .menu {
    width: 256px;
  }
}
.menu ol {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
}
@media (max-width: 991px) {
  .menu ol {
    grid-template-columns: 1fr;
  }
}
.menu ol li {
  position: relative;
}
.menu ol li a {
  height: 234px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 1em 0;
  background: #2a98e9;
  color: #fff;
  position: relative;
  z-index: 100;
  overflow: hidden;
  transition: background-color 100ms ease, box-shadow 150ms ease;
  transition-timing-function: cubic-bezier(0.57, 0.21, 0.69, 3.25);
  font-size: 40px;
}
.menu ol li a i {
  display: block;
  font-size: 100px;
  transform: translateY(25px);
  transition: transform 400ms ease;
  transition: 0.4s cubic-bezier(0.94, 1.6, 0.5, 1);
}
.menu ol li a span {
  display: block;
  margin-top: 0.2em;
  transition: transform 300ms ease, opacity 150ms ease;
  transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
  transform: translateY(70px);
  opacity: 0;
}
.menu ol li a.home {
  background: #1681d2;
}
.menu ol li a.about {
  background: #1a8fe7;
}
.menu ol li a.widgets {
  background: #319ae9;
}
.menu ol li a.kabobs {
  background: #48a6ec;
}
.menu ol li a.contact {
  background: #5fb1ee;
}
.menu ol li a.widgets::before, .menu ol li a.kabobs::before {
  content: "";
  display: block;
  width: 0px;
  height: 0;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #9fdfff;
  transition: transform 700ms ease, opacity 900ms ease;
  transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
  position: absolute;
  bottom: 0;
}
@media (max-width: 991px) {
  .menu ol li a.widgets::before, .menu ol li a.kabobs::before {
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-right: 15px solid #9fdfff;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
  }
}
.menu ol li a:hover {
  background: #fff;
  color: #9fdfff;
  box-shadow: inset 4px -4px 0 4px #9fdfff;
}
@media (max-width: 991px) {
  .menu ol li a:hover {
    box-shadow: inset -4px 4px 0 4px #9fdfff !important;
  }
}
.menu ol li a:hover span, .menu ol li a:hover i {
  transform: translateY(0);
  opacity: 1;
  color: #1a8fe7;
  background: linear-gradient(45deg, #9fdfff, #1a8fe7);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
@media (max-width: 991px) {
  .menu ol li a:hover::before {
    border-top-width: 450px;
    border-bottom-width: 450px;
    border-right-width: 450px;
    opacity: 0;
  }
}
@media (min-width: 992px) {
  .menu ol li a:hover::before {
    border-left-width: 450px;
    border-right-width: 450px;
    border-bottom-width: 450px;
    opacity: 0;
  }
}
.menu ol li .sub-menu {
  display: flex;
  flex-direction: column;
  position: absolute;
  width: 120%;
  transform: translateY(-300px);
  transition: transform 150ms ease;
  transition: 0.2s cubic-bezier(0.94, 1.6, 0.5, 1);
}
@media (max-width: 991px) {
  .menu ol li .sub-menu {
    transform: translate(-20%, -234px);
  }
}
.menu ol li .sub-menu .menu-item a {
  background: #9fdfff;
  font-size: 21px;
  font-weight: 500;
  height: 90px;
  align-items: flex-start;
  padding-left: 1.4em;
  transition: all 110ms ease;
  transition: 0.2s cubic-bezier(0.57, 0.21, 0.69, 3.25);
}
@media (max-width: 991px) {
  .menu ol li .sub-menu .menu-item a {
    border: 7px solid transparent;
    border-left: 0;
    border-bottom: 0;
  }
}
@media (min-width: 992px) {
  .menu ol li .sub-menu .menu-item a {
    border: 7px solid transparent;
    border-top: 0;
    border-right: 0;
  }
}
.menu ol li .sub-menu .menu-item a span {
  transform: translateY(0);
  opacity: 1;
}
.menu ol li .sub-menu .menu-item a.item--b {
  background: #aee4ff;
}
.menu ol li .sub-menu .menu-item a.item--c {
  background: #c3ebff;
}
.menu ol li .sub-menu .menu-item a:hover {
  background: #fff;
  padding-left: 1.8em;
  box-shadow: inset 4px -4px 0 4px #9fdfff;
  border-color: #f1f1f1;
}
@media (max-width: 991px) {
  .menu ol li .sub-menu .menu-item a:hover {
    box-shadow: inset -4px 4px 0 4px #9fdfff;
  }
}
.menu ol li .sub-menu .menu-item a:hover span {
  color: #1a8fe7;
  background: linear-gradient(45deg, #9fdfff, #1a8fe7);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.menu ol li:hover .sub-menu {
  transform: translateY(0);
  z-index: 99;
}
@media (max-width: 991px) {
  .menu ol li:hover .sub-menu {
    transform: translate(256px, -234px);
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="menu">
  <ol>
    <li class="menu-item">
      <a href="#0" class="home">
        <i class="ion ion-md-home"></i>
        <span>Home</span>
      </a>
    </li>
    <li class="menu-item">
      <a href="#0" class="about">
        <i class="ion ion-ios-hand-outline"></i>
        <span>About</span>
      </a>
    </li>
    <li class="menu-item">
      <a href="#0" class="widgets">
        <i class="ion ion-ios-aperture-outline"></i>
        <span>Widgets</span>
        <div class="dots"></div>
      </a>
      <ol class="sub-menu">
        <li class="menu-item item--a"><a href="#0" class="item--a"><span>Big Widgets</span></a></li>
        <li class="menu-item item--b"><a href="#0" class="item--b"><span>Bigger Widgets</span></a></li>
        <li class="menu-item item--b"><a href="#0" class="item--c"><span>Huge Widgets</span></a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0" class="kabobs">
        <i class="ion ion-ios-bonfire-outline"></i>
        <span>Kabobs</span>
      </a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0" class="item--a"><span>Shishkabobs</span></a></li>
        <li class="menu-item"><a href="#0" class="item--b"><span>BBQ kabobs</span></a></li>
        <li class="menu-item"><a href="#0" class="item--c"><span>Summer kabobs</span></a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0" class="contact">
        <i class="ion ion-ios-mail-outline"></i>
        <span>Contact</span>
      </a>
    </li>
  </ol>
</nav>
</body>
</html>