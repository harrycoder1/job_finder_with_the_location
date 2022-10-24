<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  font-family: "Lato" !important;
}

.nav {
  width: 500px;
  height: 500px;
  text-align: center;
  display: inline-block;
  vertical-align: middle;
  float: left;
  position: relative;
  margin-right: 20px;
}
.nav:before {
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
.nav:after {
  content: "";
  display: inline-block;
  position: absolute;
  bottom: 0;
  right: 0;
  top: 100%;
  border-right: 1px solid #3e5edf;
  transition: all 0.5s;
  transition-delay: 0.5s;
}
.nav.active:after {
  top: 0;
}

.radial-nav {
  position: relative;
  display: inline-block;
  width: 70px;
  height: 70px;
  -webkit-transform-origin: center center;
}
.radial-nav .menu {
  border: none !important;
  position: relative;
  width: 70px;
  height: 70px;
  z-index: 100;
  transition: all 0.5s;
  display: table-cell;
  vertical-align: middle;
}
.radial-nav .menu:active {
  -webkit-transform: rotate(-15deg);
}
.radial-nav li:not(.menu) {
  position: absolute;
  left: 0;
  width: 70px;
  height: 70px;
  border-radius: 70px;
  border: 1px solid transparent;
  text-align: center;
  display: inline-block;
  vertical-align: middle;
  transition: all 0.5s;
  z-index: 1;
}
.radial-nav li:not(.menu).selected {
  -webkit-transform: rotate(0deg) translateX(120px) rotate(0deg);
  border: 1px solid #5151F1;
}
.radial-nav li:not(.menu).selected a {
  opacity: 1;
}
.radial-nav li:not(.menu):before {
  content: "";
  display: inline-block;
  vertical-align: middle;
  height: 100%;
}
.radial-nav li:not(.menu) a {
  display: inline-block;
  vertical-align: middle;
  opacity: 0;
  -webkit-transition: all 0.5s;
}
.radial-nav.expanded li:not(.menu) {
  border: 1px solid #5151F1;
}
.radial-nav.expanded li:not(.menu):hover {
  background-color: #5151F1;
}
.radial-nav.expanded li:nth-child(1) {
  -webkit-transform: translateY(-120px);
}
.radial-nav.expanded li:nth-child(2) {
  -webkit-transform: rotate(-45deg) translateX(120px) rotate(45deg);
}
.radial-nav.expanded li:nth-child(3) {
  -webkit-transform: translateX(120px);
}
.radial-nav.expanded li:nth-child(4) {
  -webkit-transform: rotate(45deg) translateX(120px) rotate(-45deg);
}
.radial-nav.expanded li:nth-child(5) {
  -webkit-transform: translateY(120px);
}
.radial-nav.expanded li:nth-child(6) {
  -webkit-transform: rotate(135deg) translateX(120px) rotate(-135deg);
}
.radial-nav.expanded li:nth-child(7) {
  -webkit-transform: rotate(180deg) translateX(120px) rotate(-180deg);
}
.radial-nav.expanded li:nth-child(8) {
  -webkit-transform: rotate(225deg) translateX(120px) rotate(-225deg);
}
.radial-nav.expanded li a {
  opacity: 1;
}
.radial-nav.expanded .icon-menu {
  border-color: #5151F1;
  -webkit-transform: rotate(90deg);
}
.radial-nav.expanded .icon-menu:before {
  border-color: #5151F1;
}
.radial-nav.expanded .menu:active {
  -webkit-transform: rotate(15deg) !important;
}

.icon-menu {
  display: inline-block;
  border-top: 3px solid #141444;
  border-bottom: 3px solid #141444;
  width: 30px;
  height: 30px;
  cursor: pointer;
  -webkit-transition: all 0.3s;
}
.icon-menu:before {
  content: "";
  display: inline-block;
  border-bottom: 3px solid #141444;
  width: 100%;
  -webkit-transition: all 0.3s;
}
.icon-menu:hover {
  border-color: #00003A;
}
.icon-menu:hover:before {
  border-color: #00003A;
}

html, body {
  height: 100%;
  background-color: #2d2dc2;
}

a {
  color: inherit;
  text-decoration: none;
}

* {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

body {
  color: #d1d1d1;
}

.content {
  padding-top: 65px;
  overflow: hidden;
}
.content .item {
  opacity: 0;
  transition: all 0.5s;
  transition-delay: 1.3s;
  position: absolute;
}
.content .item.active {
  opacity: 1;
  position: static;
}
.content .item h1 {
  font-size: 25px;
  margin-bottom: 0.3em;
}

    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<section>
  <div class="nav">
    <ul class="radial-nav">
    <li data-content="js"><a href="#">JS</a></li>
    <li data-content="css"><a href="#">CSS</a></li>
    <li data-content="html5"><a href="#">HTML5</a></li>
    <li data-content="jade"><a href="#">JADE</a></li>
    <li data-content="git"><a href="#">GIT</a></li>
    <li data-content="grunt"><a href="#">GRUNT</a></li>
    <li data-content="yo"><a href="#">YO</a></li>
    <li data-content="gulp"><a href="#">GULP</a></li>
    <li class="menu"><span class="icon-menu"></span></li>
  </ul>
  </div>  
  <section class="content">
    <article class="item" id="grunt">
      <h1>Grunt: the task runner</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
    <article class="item" id="jade">
      <h1>Jade: A Node templating engine</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
    <article class="item" id="css">
      <h1>CSS3</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
    <article class="item" id="git">
      <h1>GIT: Version control</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
    <article class="item" id="gulp">
      <h1>GULP: An other task runner</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
    <article class="item" id="yo">
      <h1>YO</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
    <article class="item" id="js">
      <h1>JS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ad laudantium ullam nobis magni, molestiae, nisi doloribus fugiat quam, quo odio ex sequi eum recusandae tempore optio! Veniam, mollitia soluta.</p>
    </article>
  </section>
</section>
</body>
</html>