<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Noto+Sans:400,700);
body {
  background-color: #3c3c3c;
  padding: 50px 0;
  font-family: "Noto Sans", sans-serif;
  text-align: center;
}

.container {
  background-color: #222222;
  margin: 0 auto;
  width: 100%;
  max-width: 320px;
  min-height: 568px;
  margin: 0 auto;
  border-radius: 8px;
  position: relative;
  overflow: hidden;
  -webkit-box-shadow: 0px 9px 13px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 9px 13px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 9px 13px 0px rgba(0, 0, 0, 0.3);
  -webkit-transform: scale(1);
}

.menu-trigger, .close-trigger {
  position: absolute;
  top: 32px;
  right: 20px;
  display: block;
  width: 42px;
  height: 42px;
  cursor: pointer;
  z-index: 333;
}
.menu-trigger:hover .menu-trigger-bar:before, .close-trigger:hover .menu-trigger-bar:before {
  width: 100%;
}
.menu-trigger:hover .close-trigger-bar:before, .close-trigger:hover .close-trigger-bar:before {
  width: 100%;
}

.close-trigger {
  z-index: 5;
  top: 42px;
}

.menu-trigger-bar {
  display: block;
  width: 100%;
  height: 4px;
  background-color: white;
  margin-bottom: 6px;
  transform: rotate(-45deg);
  position: relative;
}
.menu-trigger-bar:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 0%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2);
  transition: all 0.3s cubic-bezier(0.55, 0, 0.1, 1);
}
.menu-trigger-bar.top {
  width: 50%;
}
.menu-trigger-bar.middle:before {
  left: auto;
  right: 0;
}
.menu-trigger-bar.bottom {
  width: 50%;
  margin-left: 50%;
}

.close-trigger-bar {
  display: block;
  width: 100%;
  height: 4px;
  background-color: #222222;
  position: relative;
}
.close-trigger-bar:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 0%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  transition: all 0.3s cubic-bezier(0.55, 0, 0.1, 1);
}
.close-trigger-bar.left {
  transform: translateX(100px) translateY(-100px) rotate(-45deg);
}
.close-trigger-bar.right {
  transform: translateX(-100px) translateY(-100px) rotate(45deg);
  top: -3px;
}

.logo {
  display: block;
  width: 64px;
  height: 64px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -52px;
  margin-left: -32px;
  text-align: center;
  z-index: 10;
}
.logo span {
  display: block;
  text-align: center;
  line-height: 62px;
  font-size: 72px;
  color: white;
}

.logo-title {
  position: absolute;
  top: 10px;
  left: 0;
  width: 100%;
  height: 100%;
  color: #222222;
  font-size: 32px;
  line-height: 82x;
}

.logo-badge {
  position: absolute;
  display: block;
  width: 24px;
  height: 24px;
  top: 6px;
  right: -6px;
  border-radius: 100%;
  background-color: #6295ca;
  font-size: 12px;
  line-height: 2;
  text-align: center;
}

.inner-container, .menu-container {
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}

.inner-container {
  z-index: 20;
}

.menu-container {
  display: flex;
  align-items: center;
}

.menu {
  display: block;
  width: 100%;
  padding: 20%;
}
.menu li {
  text-align: left;
  display: block;
  padding: 15px 0;
}
.menu a {
  text-decoration: none;
  color: #222222;
  display: inline-block;
  padding: 10px 0;
  position: relative;
}
.menu a:hover:before {
  opacity: 1;
  transform: translateX(0px);
}
.menu a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 18px;
  height: 4px;
  opacity: 0;
  background-color: #222222;
  transform: translateX(100px);
  transition: all 0.3s cubic-bezier(0.55, 0, 0.1, 1);
}

.menu-bg {
  position: absolute;
  display: block;
  width: 200%;
  left: -53%;
  top: -25%;
  height: 40%;
  background-color: white;
}
.menu-bg.middle {
  top: 29%;
  left: -53%;
  transform: rotate(-45deg) scaleY(0);
}
.menu-bg.top {
  left: -34%;
  top: 0;
  transform: rotate(-45deg) translateY(-152%);
}
.menu-bg.bottom {
  top: 105%;
  transform: rotate(-45deg) translateY(25%);
  left: -20%;
}

#links {
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  height: 50px;
  font-size: 13px;
  font-family: tahoma;
  color: #fff;
}

#links a {
  text-decoration: none;
  font-size: 2.3em;
  color: #fff;
}

#twitter {
  position: absolute;
  bottom: 15px;
  right: 20px;
}

#pens {
  position: absolute;
  bottom: 15px;
  left: 20px;
}
    </style>
</head>
<body>
    <!-- BASEN ON DRIBBBLE SHOT: https://dribbble.com/shots/2209627-UI8-Nav -->

<div class="container">
  <span class="menu-trigger">
    <i class="menu-trigger-bar top"></i>
    <i class="menu-trigger-bar middle"></i>
    <i class="menu-trigger-bar bottom"></i>
  </span>
  <span class="close-trigger">
    <i class="close-trigger-bar left"></i>
    <i class="close-trigger-bar right"></i>
  </span>
  <span class="logo">
    <span>
      ⬢
      <i class="logo-title">UI</i>
      <i class="logo-badge">6</i>
    </span>
  </span>
  <div class="inner-container">
      <i class="menu-bg top"></i>
      <i class="menu-bg middle"></i>
      <i class="menu-bg bottom"></i>
    <div class="menu-container">
      <ul class="menu">
        <li>
          <a href="#">Login</a>
        </li>
        <li>
          <a href="#">Create account</a>
        </li>
        <li>
          <a href="#">Support</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- -->
<div id='links'>
<a id='twitter' href="https://twitter.com/karlovidek" target="_blank"><span class='fa fa-twitter'></span></a>
<div id='pens'><a href="https://codepen.io/karlovidek/" target="_blank"><span class='fa fa-codepen'></span></a> my other Pens</div>
</div>
<script>
    //OPEN TRIGGER
var openTrigger = $('.menu-trigger');
var openTriggerTop = openTrigger.find('.menu-trigger-bar.top');
var openTriggerMiddle = openTrigger.find('.menu-trigger-bar.middle');
var openTriggerBottom = openTrigger.find('.menu-trigger-bar.bottom');

//CLOSE TRIGGER
var closeTrigger = $('.close-trigger');
var closeTriggerLeft = closeTrigger.find('.close-trigger-bar.left');
var closeTriggerRight = closeTrigger.find('.close-trigger-bar.right');

//LOGO
var logo = $('.logo');

//MENU
var menuContainer = $('.menu-container');
var menu = $('.menu');
var menuTop = $('.menu-bg.top');
var menuMiddle = $('.menu-bg.middle');
var menuBottom = $('.menu-bg.bottom');

//TL
var tlOpen = new TimelineMax({paused: true});
var tlClose = new TimelineMax({paused: true});

//OPEN TIMELINE
tlOpen.add("preOpen")
  .to(logo, 0.4, {
            scale: 0.8,
            opacity: 0,
            ease: Power2.easeOut
        }, "preOpen")
.to(openTriggerTop, 0.4, {
  x: "+80px", y: "-80px", delay: 0.1, ease: Power4.easeIn, onComplete: function() {
    closeTrigger.css('z-index','25');
  }
}, "preOpen")
.to(openTriggerMiddle, 0.4, {
  x: "+=80px", y: "-=80px", ease: Power4.easeIn,
  onComplete: function() {
    openTrigger.css('visibility','hidden');
  }
}, "preOpen")
.to(openTriggerBottom, 0.4, {
  x: "+=80px", y: "-=80px", delay: 0.2, ease: Power4.easeIn
}, "preOpen")
.add("open", "-=0.4")
.to(menuTop, 0.8, {
  y: "13%",
  ease: Power4.easeInOut
}, "open")
.to(menuMiddle, 0.8, {
  scaleY: 1,
  ease: Power4.easeInOut
}, "open")
.to(menuBottom, 0.8, {
  y: "-114%",
  ease: Power4.easeInOut
}, "open")
.fromTo(menu, 0.6, {
  y: 30, opacity: 0, visibility: 'hidden'
}, {
  y: 0, opacity: 1, visibility: 'visible', ease: Power4.easeOut
}, "-=0.2")
.add("preClose", "-=0.8")
.to(closeTriggerLeft, 0.8, {
  x: "-=100px", y: "+=100px", ease: Power4.easeOut
}, "preClose")
.to(closeTriggerRight, 0.8, {
  x: "+=100px", y: "+=100px", delay: 0.2, ease: Power4.easeOut
}, "preClose");

//CLOSE TIMELINE
tlClose.add("close")
  .to(menuTop, 0.2, {
  backgroundColor: "#6295ca", ease: Power4.easeInOut, onComplete: function() {
    logo.css('z-index','26');
    closeTrigger.css('z-index','5');
 openTrigger.css('visibility','visible');
  }
}, "close")
.to(menuMiddle, 0.2, {
  backgroundColor: "#6295ca", ease: Power4.easeInOut
}, "close") 
.to(menuBottom, 0.2, {
  backgroundColor: "#6295ca", ease: Power4.easeInOut
}, "close")
  .to(menu, 0.6, {
  y: 20, opacity: 0, ease: Power4.easeOut, onComplete: function() {
    menu.css('visibility','hidden');
  }
}, "close")
.to(logo, 0.8, {
  scale: 1, opacity: 1, ease: Power4.easeInOut
}, "close", "+=0.2")
.to(menuTop, 0.8, {
  y: "-113%",
  ease: Power4.easeInOut
}, "close", "+=0.2")
.to(menuMiddle, 0.8, {
  scaleY: 0,
  ease: Power4.easeInOut
}, "close", "+=0.2")
.to(menuBottom, 0.8, {
  y: "23%",
  ease: Power4.easeInOut,
  onComplete: function() {
    menuTop.css('background-color','#ffffff');
    menuMiddle.css('background-color','#ffffff');
    menuBottom.css('background-color','#ffffff');
  }
}, "close", "+=0.2")
.to(closeTriggerLeft, 0.2, {
  x: "+=100px", y: "-=100px", ease: Power4.easeIn
}, "close")
.to(closeTriggerRight, 0.2, {
  x: "-=100px", y: "-=100px", delay: 0.1, ease: Power4.easeIn
}, "close")
.to(openTriggerTop, 1, {
  x: "-=80px", y: "+=80px", delay: 0.2, ease: Power4.easeOut
}, "close")
.to(openTriggerMiddle, 1, {
  x: "-=80px", y: "+=80px", ease: Power4.easeOut
}, "close")
.to(openTriggerBottom, 1, {
  x: "-=80px", y: "+=80px", delay: 0.1, ease: Power4.easeOut
}, "close");

//EVENTS
openTrigger.on('click', function(){
  if(tlOpen.progress() < 1){
                tlOpen.play();
            } else {
                tlOpen.restart();
            }
});
       
closeTrigger.on('click', function(){
  if(tlClose.progress() < 1){
                tlClose.play();
            } else {
                tlClose.restart();
            }
});
</script>
</body>
</html>