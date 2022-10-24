<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Cute+Font&display=swap");
.list__contact, .list__strauss .list__straussItem li, .list__strauss, .list__clients .list__clientsItems li, .list__clients, .list__about, .list__home {
  position: absolute;
  opacity: 0;
  bottom: 0;
  z-index: -1;
  -webkit-transform-origin: bottom center;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -o-transform-origin: bottom center;
  transform-origin: bottom center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
}
.list__contact:after, .list__strauss .list__straussItem li:after, .list__strauss:after, .list__clients .list__clientsItems li:after, .list__clients:after, .list__about:after, .list__home:after {
  top: 100px;
  width: 1px;
  height: 100%;
  background: #555273;
  z-index: -1;
}
.list__contact a, .list__strauss .list__straussItem li a, .list__strauss a, .list__clients .list__clientsItems li a, .list__clients a, .list__about a, .list__home a {
  display: flex;
  width: 100px;
  height: 100px;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -o-align-items: center;
  align-items: center;
  margin: auto;
  justify-content: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  border-radius: 50%;
  line-height: 1;
  color: #e2eff1;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
}
.list__contact a:visited, .list__strauss a:visited, .list__clients a:visited, .list__about a:visited, .list__home a:visited, .list__contact a:active, .list__strauss a:active, .list__clients a:active, .list__about a:active, .list__home a:active {
  color: #e2eff1;
}
.list__contact a:hover, .list__strauss a:hover, .list__clients a:hover, .list__about a:hover, .list__home a:hover {
  color: #fff;
}

.toggle:checked + .label .list__contact, .toggle:checked + .label .list__strauss, .toggle:checked + .label .list__clients, .toggle:checked + .label .list__about, .toggle:checked + .label .list__home {
  opacity: 1;
  z-index: 0;
}

nav {
  position: relative;
  margin: auto;
  width: 500px;
  height: 100%;
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
}

ul {
  padding: 0;
  margin: 0;
  font-size: 30px;
  text-align: center;
}

li {
  list-style: none;
}

.toggle {
  opacity: 0;
}
.toggle:checked + .label .hum {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: rotate(45deg) translate(10px, 10px);
  -moz-transform: rotate(45deg) translate(10px, 10px);
  -ms-transform: rotate(45deg) translate(10px, 10px);
  -o-transform: rotate(45deg) translate(10px, 10px);
  transform: rotate(45deg) translate(10px, 10px);
}
.toggle:checked + .label .hum:before {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: rotate(-90deg) translate(10px, 0px);
  -moz-transform: rotate(-90deg) translate(10px, 0px);
  -ms-transform: rotate(-90deg) translate(10px, 0px);
  -o-transform: rotate(-90deg) translate(10px, 0px);
  transform: rotate(-90deg) translate(10px, 0px);
}
.toggle:checked + .label .hum:after {
  opacity: 0;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: rotate(-90deg) translate(20px, 0px);
  -moz-transform: rotate(-90deg) translate(20px, 0px);
  -ms-transform: rotate(-90deg) translate(20px, 0px);
  -o-transform: rotate(-90deg) translate(20px, 0px);
  transform: rotate(-90deg) translate(20px, 0px);
}
.toggle:checked + .label .list__home {
  opacity: 1;
  height: 200px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.toggle:checked + .label .list__about {
  opacity: 1;
  height: 200px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.toggle:checked + .label .list__clients {
  opacity: 1;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: translate(200px, -200px) rotate(45deg);
  -moz-transform: translate(200px, -200px) rotate(45deg);
  -ms-transform: translate(200px, -200px) rotate(45deg);
  -o-transform: translate(200px, -200px) rotate(45deg);
  transform: translate(200px, -200px) rotate(45deg);
}
.toggle:checked + .label .list__clients:after {
  height: 36px;
  -webkit-transition: 1.1s;
  -moz-transition: 1.1s;
  -ms-transition: 1.1s;
  -o-transition: 1.1s;
  transition: 1.1s;
}
.toggle:checked + .label .list__clients li {
  opacity: 0;
}
.toggle:checked + .label .list__strauss {
  opacity: 1;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: translate(90px, -260px) rotate(-135deg);
  -moz-transform: translate(90px, -260px) rotate(-135deg);
  -ms-transform: translate(90px, -260px) rotate(-135deg);
  -o-transform: translate(90px, -260px) rotate(-135deg);
  transform: translate(90px, -260px) rotate(-135deg);
}
.toggle:checked + .label .list__strauss:after {
  height: 36px;
  -webkit-transition: 1.1s;
  -moz-transition: 1.1s;
  -ms-transition: 1.1s;
  -o-transition: 1.1s;
  transition: 1.1s;
}
.toggle:checked + .label .list__clientsItems:nth-of-type(1) {
  height: 0;
}
.toggle:checked + .label .list__contact {
  opacity: 1;
  height: 200px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}

.label {
  position: absolute;
  top: calc(50% - (100px / 2));
  left: calc(50% - (100px / 2));
  width: 100px;
  height: 100px;
  background-color: #e23e57;
  border-radius: 50%;
  z-index: 10;
}

.list {
  position: absolute;
  top: -200px;
  left: calc(50% - 250px);
  width: 500px;
  height: 500px;
  -webkit-transform-origin: center;
  -moz-transform-origin: center;
  -ms-transform-origin: center;
  -o-transform-origin: center;
  transform-origin: center;
}
.list__home {
  height: 10px;
  transform: translate(200px, -300px);
  -webkit-transform: translate(200px, -300px);
  overflow: hidden;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: translate(200px, -300px);
  -moz-transform: translate(200px, -300px);
  -ms-transform: translate(200px, -300px);
  -o-transform: translate(200px, -300px);
  transform: translate(200px, -300px);
}
.list__home a {
  background: #65799b;
}
.list__about {
  height: 10px;
  overflow: hidden;
  transform: translate(158px, -275px) rotate(-45deg);
  -webkit-transform: translate(158px, -275px) rotate(-45deg);
  -moz-transform: translate(158px, -275px) rotate(-45deg);
  -ms-transform: translate(158px, -275px) rotate(-45deg);
  -o-transform: translate(158px, -275px) rotate(-45deg);
  transform: translate(158px, -275px) rotate(-45deg);
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.list__about a {
  background: #65799b;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.list__clients {
  width: 300px;
  height: 300px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: translate(100px, -110px) rotate(45deg);
  -moz-transform: translate(100px, -110px) rotate(45deg);
  -ms-transform: translate(100px, -110px) rotate(45deg);
  -o-transform: translate(100px, -110px) rotate(45deg);
  transform: translate(100px, -110px) rotate(45deg);
}
.list__clients a {
  background: #65799b;
}
.list__clients a span {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.list__clients:after {
  top: 250px;
  width: 1px;
  height: 0;
  background: #555273;
  left: 45px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.list__clients .list__clientsItems {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.list__clients .list__clientsItems li {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  opacity: 0;
  width: 100px;
  height: 0;
  overflow: hidden;
}
.list__clients .list__clientsItems li:after {
  z-index: -1;
}
.list__clients .list__clientsItems li a {
  margin: 0 0 auto 0;
  background: #555273;
}
.list__clients .list__clientsItems li:after {
  top: 100px;
  left: 50px;
}
.list__clients .list__clientsItems li:nth-of-type(1) {
  -webkit-transform: scale(0.8) translate(-15px, -155px) rotate(-20deg);
  -moz-transform: scale(0.8) translate(-15px, -155px) rotate(-20deg);
  -ms-transform: scale(0.8) translate(-15px, -155px) rotate(-20deg);
  -o-transform: scale(0.8) translate(-15px, -155px) rotate(-20deg);
  transform: scale(0.8) translate(-15px, -155px) rotate(-20deg);
}
.list__clients .list__clientsItems li:nth-of-type(1) a {
  -webkit-transform: rotate(-25deg);
  -moz-transform: rotate(-25deg);
  -ms-transform: rotate(-25deg);
  -o-transform: rotate(-25deg);
  transform: rotate(-25deg);
}
.list__clients .list__clientsItems li:nth-of-type(2) {
  font-size: 22px;
  -webkit-transform: scale(0.8) translate(20px, -148px) rotate(30deg);
  -moz-transform: scale(0.8) translate(20px, -148px) rotate(30deg);
  -ms-transform: scale(0.8) translate(20px, -148px) rotate(30deg);
  -o-transform: scale(0.8) translate(20px, -148px) rotate(30deg);
  transform: scale(0.8) translate(20px, -148px) rotate(30deg);
}
.list__clients .list__clientsItems li:nth-of-type(2) a {
  -webkit-transform: rotate(-75deg);
  -moz-transform: rotate(-75deg);
  -ms-transform: rotate(-75deg);
  -o-transform: rotate(-75deg);
  transform: rotate(-75deg);
}
.list__clients .list__clientsItems li:nth-of-type(3) {
  -webkit-transform: scale(0.8) translate(33px, -107px) rotate(120deg);
  -moz-transform: scale(0.8) translate(33px, -107px) rotate(120deg);
  -ms-transform: scale(0.8) translate(33px, -107px) rotate(120deg);
  -o-transform: scale(0.8) translate(33px, -107px) rotate(120deg);
  transform: scale(0.8) translate(33px, -107px) rotate(120deg);
}
.list__clients .list__clientsItems li:nth-of-type(3):after {
  top: 100px;
  -webkit-transition: 0s;
  -moz-transition: 0s;
  -ms-transition: 0s;
  -o-transition: 0s;
  transition: 0s;
}
.list__clients .list__clientsItems li:nth-of-type(3) a {
  -webkit-transform: rotate(195deg);
  -moz-transform: rotate(195deg);
  -ms-transform: rotate(195deg);
  -o-transform: rotate(195deg);
  transform: rotate(195deg);
}
.list__clients:hover {
  opacity: 1;
}
.list__clients:hover ul,
.list__clients:hover li {
  display: flex;
  display: -webkit-box;
  display: -ms-flexbox;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -o-align-items: center;
  align-items: center;
}
.list__clients:hover .list__clientsItems {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.list__clients:hover .list__clientsItems li:nth-of-type(1) {
  height: 200px;
  opacity: 1;
}
.list__clients:hover .list__clientsItems li:nth-of-type(2) {
  height: 225px;
  opacity: 1;
}
.list__clients:hover .list__clientsItems li:nth-of-type(3) {
  height: 210px;
  opacity: 1;
}
.list__clients a {
  margin: 150px 0 0 0;
}
.list__strauss {
  width: 200px;
  height: 300px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: translate(185px, -355px) rotate(-135deg);
  -moz-transform: translate(185px, -355px) rotate(-135deg);
  -ms-transform: translate(185px, -355px) rotate(-135deg);
  -o-transform: translate(185px, -355px) rotate(-135deg);
  transform: translate(185px, -355px) rotate(-135deg);
}
.list__strauss a {
  background: #65799b;
}
.list__strauss a span {
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
}
.list__strauss:after {
  top: 250px;
  width: 1px;
  height: 0;
  background: #555273;
  left: 45px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.list__strauss .list__straussItem {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.list__strauss .list__straussItem li {
  opacity: 0;
  width: 100px;
  height: 0;
  overflow: hidden;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.list__strauss .list__straussItem li:after {
  z-index: -1;
}
.list__strauss .list__straussItem li a {
  margin: 0 0 auto 0;
  background: #555273;
}
.list__strauss .list__straussItem li:after {
  top: 100px;
  left: 50px;
}
.list__strauss .list__straussItem li:nth-of-type(1) {
  -webkit-transform: scale(0.8) translate(-15px, -160px) rotate(-20deg);
  -moz-transform: scale(0.8) translate(-15px, -160px) rotate(-20deg);
  -ms-transform: scale(0.8) translate(-15px, -160px) rotate(-20deg);
  -o-transform: scale(0.8) translate(-15px, -160px) rotate(-20deg);
  transform: scale(0.8) translate(-15px, -160px) rotate(-20deg);
}
.list__strauss .list__straussItem li:nth-of-type(1) a {
  -webkit-transform: rotate(155deg);
  -moz-transform: rotate(155deg);
  -ms-transform: rotate(155deg);
  -o-transform: rotate(155deg);
  transform: rotate(155deg);
}
.list__strauss .list__straussItem li:nth-of-type(2) {
  font-size: 22px;
  -webkit-transform: scale(0.8) translate(20px, -155px) rotate(30deg);
  -moz-transform: scale(0.8) translate(20px, -155px) rotate(30deg);
  -ms-transform: scale(0.8) translate(20px, -155px) rotate(30deg);
  -o-transform: scale(0.8) translate(20px, -155px) rotate(30deg);
  transform: scale(0.8) translate(20px, -155px) rotate(30deg);
}
.list__strauss .list__straussItem li:nth-of-type(2) a {
  -webkit-transform: rotate(105deg);
  -moz-transform: rotate(105deg);
  -ms-transform: rotate(105deg);
  -o-transform: rotate(105deg);
  transform: rotate(105deg);
}
.list__strauss .list__straussItem li:nth-of-type(3) {
  font-size: 22px;
  -webkit-transform: scale(0.8) translate(30px, -105px) rotate(120deg);
  -moz-transform: scale(0.8) translate(30px, -105px) rotate(120deg);
  -ms-transform: scale(0.8) translate(30px, -105px) rotate(120deg);
  -o-transform: scale(0.8) translate(30px, -105px) rotate(120deg);
  transform: scale(0.8) translate(30px, -105px) rotate(120deg);
}
.list__strauss .list__straussItem li:nth-of-type(3):after {
  top: 100px;
}
.list__strauss .list__straussItem li:nth-of-type(3) a {
  -webkit-transform: rotate(15deg);
  -moz-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  transform: rotate(15deg);
}
.list__strauss:hover {
  opacity: 1;
}
.list__strauss:hover ul,
.list__strauss:hover li {
  display: flex;
  display: -webkit-box;
  display: -ms-flexbox;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -o-align-items: center;
  align-items: center;
}
.list__strauss:hover .list__straussItem {
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.list__strauss:hover .list__straussItem li:nth-of-type(1) {
  height: 200px;
  opacity: 1;
}
.list__strauss:hover .list__straussItem li:nth-of-type(2) {
  height: 230px;
  opacity: 1;
}
.list__strauss:hover .list__straussItem li:nth-of-type(3) {
  height: 225px;
  opacity: 1;
}
.list__strauss a {
  margin: 150px 0 0 0;
}
.list__contact {
  height: 10px;
  overflow: hidden;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
  -webkit-transform: translate(230px, -210px) rotate(135deg);
  -moz-transform: translate(230px, -210px) rotate(135deg);
  -ms-transform: translate(230px, -210px) rotate(135deg);
  -o-transform: translate(230px, -210px) rotate(135deg);
  transform: translate(230px, -210px) rotate(135deg);
}
.list__contact a {
  background: #65799b;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

p {
  position: absolute;
  bottom: 10px;
  left: calc(50% - 22px);
  margin: 0;
  color: #fff;
  font-size: 30px;
}

.hum {
  position: absolute;
  top: 28px;
  left: 30px;
  width: 40px;
  height: 4px;
  background-color: #fff;
  border-radius: 4px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.hum:before {
  top: 10px;
  left: 0;
  width: 100%;
  height: 4px;
  background-color: #fff;
  border-radius: 4px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}
.hum:after {
  top: 20px;
  left: 0;
  width: 100%;
  height: 4px;
  background-color: #fff;
  border-radius: 4px;
  -webkit-transition: 0.8s;
  -moz-transition: 0.8s;
  -ms-transition: 0.8s;
  -o-transition: 0.8s;
  transition: 0.8s;
}

@media screen and (min-width: 450px) {
  nav {
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
  }
}
html, body {
  width: 100%;
  height: 100%;
}

html {
  overflow: hidden;
}

body {
  position: relative;
  margin: 0;
  background-color: #e2eff1;
  font-family: "Cute Font", Roboto, sans-serif;
  overflow: scroll;
  color: #e2eff1;
}

*:before, *:after {
  position: absolute;
  content: "";
}
    </style>
</head>
<body>
    
<nav>
  <input class="toggle" id="nav" type="checkbox"/>
  <label class="label" for="nav">
    <p>Menu</p><span class="hum"></span>
    <ul class="list">
      <li class="list__home"><a href="#0">Home</a></li>
      <li class="list__about"><a href="#0">About</a></li>
      <li class="list__clients"><a href="#0"><span>Clients</span></a>
        <ul class="list__clientsItems">
          <li><a href="#0">Burger King</a></li>
          <li><a href="#0">Southwest Airlines</a></li>
          <li><a href="#0">Levi Strauss</a></li>
        </ul>
      </li>
      <li class="list__strauss"><a href="#0"><span>Services</span></a>
        <ul class="list__straussItem">
          <li><a href="#0">Print Design</a></li>
          <li><a href="#0">Web Design</a></li>
          <li><a href="#0">Mobile App Development</a></li>
        </ul>
      </li>
      <li class="list__contact"><a href="#0">Contact</a></li>
    </ul>
  </label>
</nav>
</body>
</html>