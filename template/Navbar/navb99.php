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
  font-family: "Montserrat";
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.nav {
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.nav__list {
  display: flex;
  flex-flow: column wrap;
  height: 85vh;
  transform: translate(0, -100%);
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.nav__list--active {
  transform: translate(0, 0);
}
.nav__item {
  flex: 1;
  position: relative;
}
.nav__link {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  text-decoration: none;
  font-size: 24px;
  background: #2b3033;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.nav__link:hover {
  background: #272b2e;
}
@media (max-width: 640px) {
  .nav {
    width: 70px;
  }
  .nav__list {
    height: 90vh;
  }
}

.burger {
  height: 15vh;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  background: #2b3033;
  cursor: pointer;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.burger:hover {
  background: #272b2e;
}
.burger__patty {
  position: relative;
  height: 2px;
  width: 40px;
  background: white;
}
.burger__patty:before {
  content: "";
  position: absolute;
  top: -10px;
  left: 0;
  height: 2px;
  width: 100%;
  background: white;
}
.burger__patty:after {
  content: "";
  position: absolute;
  top: 10px;
  left: 0;
  height: 2px;
  width: 100%;
  background: white;
}
.burger__patty, .burger__patty:before, .burger__patty:after {
  will-change: transform;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.burger--active .burger__patty {
  transform: rotate(90deg);
}
.burger--active .burger__patty:before {
  transform: rotate(-45deg) translate(-7px, -7px) scaleX(0.7);
}
.burger--active .burger__patty:after {
  transform: rotate(45deg) translate(-7px, 7px) scaleX(0.7);
}
@media (max-width: 640px) {
  .burger {
    height: 10vh;
  }
  .burger__patty {
    transform: scale(0.8);
  }
  .burger--active .burger__patty {
    transform: scale(0.8) rotate(90deg);
  }
}

.panel {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.panel__wrapper {
  padding: 7vh 7vw;
  perspective: 1000px;
}
.panel__content {
  will-change: transform;
  transform: scale(0.7) rotateX(-230deg);
  transform-origin: center 80%;
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.panel__content--active {
  transform: none;
  opacity: 1;
}
.panel__headline {
  font-weight: 700;
  opacity: 0.8;
  font-size: 48px;
  margin: 0 0 25px 0;
}
.panel p {
  margin: 0 0 25px 0;
  color: #1a1a1a;
  font-size: 24px;
  max-width: 800px;
}
.panel p:last-child {
  margin-bottom: 0;
}
.panel__block {
  height: 3px;
  background: rgba(0, 0, 0, 0.2);
  margin: 0 0 25px 0;
}
@media (max-width: 640px) {
  .panel__headline {
    font-size: 36px;
  }
  .panel__wrapper {
    padding: 10vh 10vw;
  }
  .panel p {
    font-size: 16px;
  }
}

.c-blue {
  color: #5fc7ea;
}

.c-red {
  color: #e68568;
}

.c-green {
  color: #68e6ac;
}

.c-yellow {
  color: #e6d068;
}

.b-blue {
  background: #5fc7ea;
}

.b-red {
  background: #e68568;
}

.b-green {
  background: #68e6ac;
}

.b-yellow {
  background: #e6d068;
}

.logo {
  position: fixed;
  bottom: 3vh;
  right: 3vw;
  z-index: 2;
}
.logo img {
  width: 65px;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transform: rotate(0);
}
.logo img:hover {
  transform: rotate(180deg) scale(1.1);
}
    </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="nav">
  <div class="burger">
    <div class="burger__patty"></div>
  </div>

  <ul class="nav__list">
    <li class="nav__item">
      <a href="#1" class="nav__link c-blue"><i class="fa fa-camera-retro"></i></a>
    </li>
    <li class="nav__item">
      <a href="#2" class="nav__link c-yellow scrolly"><i class="fa fa-bolt"></i></a>
    </li>
    <li class="nav__item">
      <a href="#3" class="nav__link c-red"><i class="fa fa-music"></i></a>
    </li>
    <li class="nav__item">
      <a href="#4" class="nav__link c-green"><i class="fa fa-paper-plane"></i></a>
    </li>
  </ul>
</nav>

<section class="panel b-blue" id="1">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-camera-retro"></i>&nbsp;Cameras</h1>
      <div class="panel__block"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias ducimus, eos asperiores, ab officia sint nostrum quia, corporis officiis id praesentium expedita numquam ad non error optio est in.</p>
    </div>
  </article>
</section>
<section class="panel b-yellow" id="2">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-bolt"></i>&nbsp;Lightning</h1>
      <div class="panel__block"></div>
      <p>Paleo authentic mlkshk taxidermy, vinyl meditation lomo drinking vinegar sartorial raw denim Thundercats bitters selvage listicle. Keffiyeh Williamsburg gastropub McSweeney's.</p>
    </div>
  </article>
</section>
<section class="panel b-red" id="3">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;Music</h1>
      <div class="panel__block"></div>
      <p>Beard sriracha kitsch literally, taxidermy normcore aesthetic wayfarers salvia keffiyeh farm-to-table sartorial gluten-free mlkshk. Selvage normcore 3 wolf moon, umami Kickstarter artisan meggings cardigan drinking vinegar bicycle rights.</p>
    </div>
  </article>
</section>
<section class="panel b-green" id="4">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-paper-plane"></i>&nbsp;Paper Planes</h1>
      <div class="panel__block"></div>
      <p>90's wayfarers lomo you probably haven't heard of them trust fund banh mi. Flannel Shoreditch dreamcatcher, quinoa flexitarian Banksy pickled post-ironic lo-fi. Photo booth asymmetrical tousled letterpress.</p>
    </div>
  </article>
</section>
<a href="http://ettrics.com/code/vertical-layout-navigation/" class="logo" target="_blank">
  <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/ettrics-logo.svg" alt="" />
</a>
<script>
    var menu = document.querySelector(".nav__list");
var burger = document.querySelector(".burger");
var doc = $(document);
var l = $(".scrolly");
var panel = $(".panel");
var vh = $(window).height();

var openMenu = function () {
  burger.classList.toggle("burger--active");
  menu.classList.toggle("nav__list--active");
};

// reveal content of first panel by default
panel.eq(0).find(".panel__content").addClass("panel__content--active");

var scrollFx = function () {
  var ds = doc.scrollTop();
  var of = vh / 4;

  // if the panel is in the viewport, reveal the content, if not, hide it.
  for (var i = 0; i < panel.length; i++) {
    if (panel.eq(i).offset().top < ds + of) {
      panel.eq(i).find(".panel__content").addClass("panel__content--active");
    } else {
      panel.eq(i).find(".panel__content").removeClass("panel__content--active");
    }
  }
};

var scrolly = function (e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);

  $("html, body")
    .stop()
    .animate(
      {
        scrollTop: $target.offset().top
      },
      300,
      "swing",
      function () {
        window.location.hash = target;
      }
    );
};

var init = function () {
  burger.addEventListener("click", openMenu, false);
  window.addEventListener("scroll", scrollFx, false);
  window.addEventListener("load", scrollFx, false);
  $('a[href^="#"]').on("click", scrolly);
};

doc.on("ready", init);

</script>
</body>
</html>