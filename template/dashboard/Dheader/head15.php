<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  font: 200 16px Lato, sans-serif;
  height: 100%;
}

h1,
h2,
h3,
h4,
h5 {
  /*  prevent Webkit font rendering during transition  */
  -webkit-transform: translateZ(0px);
  transform: translateZ(0px);
}

h1 {
  font-weight: 700;
}

h2 {
  font-size: 1em;
}

h3 {
  font-size: .8em;
  font-weight: 100;
  color: #555;
}

h5 {
  font-size: .5em;
  font-weight: 400;
}

p {
  font: 18px Lato, sans-serif;
  color: #777;
  padding: 3em 0;
}

.header {
  position: fixed;
  color: #fff;
  z-index: 999;
  width: 100%;
  top:1em;
}

.logo,
.menu {
  display: inline-block;
}

.header .logo {
  margin-left: 3em;
}

.header .menu {
  float: right;
  margin-right: 3.7em;
  line-height: 2;
}

.hero {
  font-size: 3em;
  line-height: 0.1;
  text-align: center;
}

.hero-title {
  position: absolute;
  z-index: 1;
  color: #fff;
  top: 40%;
  left: 0;
  right: 0;
  margin: auto;
}
.hero-image {
  background:url(http://artskidesign.com/archive/wp-content/uploads/2016/09/bg-scroll-animation-0b.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
/* .hero-image img {
  width: 100%;
  height: auto;
} */

.container {
  opacity: 0;
  visibility: hidden;
  margin-top: 300px;
}

.container img {
  width: 80%;
  height: auto;
  margin: 0 auto;
  margin: 3em 0;
  opacity: 0;
  visibility: hidden;
}

.inner {
  margin: 0 10%;
}

.inner p {
  max-width: 800px;
  line-height: 2;
  margin: auto;
  text-align: left;
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
  <div class="logo">
    <h1>Vx</h1></div>
  <div class="menu">
    <h4>MENU</h4></div>
</div>
<section class="hero">

  <div class="hero-image">
    <div class="hero-title">
      <h1>STATE OF MIND</h1>
      <h5>Mountains makes you free</h5>
    </div>
<!--     <img src="http://artskidesign.com/wp-content/uploads/2016/09/bg-scroll-animation-0b.jpg" /> -->
  </div>


  <div class="container">
    <div class="inner">
      <div class="inner-header">
        <h1>HERO IMAGE</h1>
        <h3>fade out effect on scroll</h3>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec eros quam. Nulla facilisi. Fusce nec ornare leo. Mauris ullamcorper enim erat, non tincidunt sapien dignissim sed. Nam consequat risus ac maximus eleifend. Duis aliquam, sem at laoreet
        luctus, dolor quam porttitor erat, bibendum congue libero quam nec metus. Mauris turpis purus, facilisis sed sapien sit amet, dapibus dignissim nunc. Pellentesque vitae nulla ac odio gravida commodo ut vel lacus. Nullam pulvinar magna ut massa
        ullamcorper scelerisque.</p>
    </div>
    <img class="q" src="http://artskidesign.com/archive/wp-content/uploads/2016/09/bg-scroll-animation-1.jpg" />
    <img class="q" src="http://artskidesign.com/archive/wp-content/uploads/2016/09/bg-fade-out-2.jpg" />
    <div class="inner">
      <h2>Into scroll animation</h2>
      <p>Curabitur laoreet diam vitae neque mollis consectetur. Aliquam pharetra mauris sagittis quam congue, sit amet iaculis sem blandit. Nullam efficitur viverra felis, vulputate euismod dolor convallis sollicitudin. Praesent suscipit, elit a bibendum
        pharetra, lectus lorem facilisis sapien, non sollicitudin sem purus ut orci. Duis est risus, vestibulum ut ullamcorper eu, vehicula quis mauris. Cras dictum mi vitae viverra ornare. Proin eget dolor sagittis nunc auctor porta. Praesent scelerisque
        elit risus, a malesuada felis commodo eget.</p>
    </div>
  </div>
  <script>
    // Create variables 
var   wh = $(window).height(),
      $header = $('.header'),
      $hero = $('.hero'),
      $heroImg = $('.hero-image'),
      $heroTitle = $('.hero-title'),
      $heroTitleH1 = $('.hero-title h1'),
      $heroTitleH5 = $('.hero-title h5'),
      $container = $('.container'),
      $innerHeader = $('.inner-header'),
      $containerImg = $('.container img');

// Init
var ctrl = new ScrollMagic.Controller({
  globalSceneOptions: {
    triggerHook: 'onLeave'
  }
});

// Create scene
$hero.each(function() {
  new ScrollMagic.Scene({
      duration: '80%',

    
    })
    .setPin(this)
    .addTo(ctrl);
});


// Create  timeline and animations
var fadeScroll = new TimelineMax();
fadeScroll
  .set($heroImg, {scale: 1.1})
  .set($heroTitle, {perspective:800, transformStyle:'preserve-3d'})
  .set($container, {yPercent: 41, perspective:800, transformStyle:'preserve-3d'}) 
  .to($heroImg, 4, {yPercent: -5,scale: 0.8, ease:SlowMo.easeOut}, '0')
  .to($heroTitleH1, 4, {scale:0.9, rotationX:-10, rotationY:10}, '0')
  .to($heroTitleH5, 4, {scale:0.9,x:-30, rotationX:-10, rotationY:10}, '0')
  .fromTo($heroImg, 2, {opacity: 1}, {opacity: 0}, '=-.9')
  .to($container, .5, {autoAlpha: 1, y:-50,ease:SlowMo.easeOut}, '=-0.7')
  .to($header, 1, {color: 'black'}, '+1.4')
  

// Create scene
new ScrollMagic.Scene({
    duration: '120%'
  })
  .setTween(fadeScroll)
  .triggerElement($hero)
  .addTo(ctrl);


  
//Image transition loop 
$($containerImg).each(function(){ 
  
   // Create variables
   var controller = new ScrollMagic.Controller();
   var img = this;
  
   // Create  timeline and animations
   var imageIn = new TimelineMax(); 
       imageIn
      .set(img, {scale:.8})
      .to(img, 2, {autoAlpha:1,scale:1,rotationX:0, ease: Power0.easeNone });
  
   // Create scene
   var scene = new ScrollMagic.Scene({
          duration: '100%',
            triggerElement:img,
            offset: -wh*0.9
        })     
        .setTween(imageIn)
        .addTo(controller); 
  
});
  </script>
</section>
</body>
</html>