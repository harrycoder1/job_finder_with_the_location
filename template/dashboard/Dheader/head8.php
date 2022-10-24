<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  padding: 0;
  background: black;
  color: white;
}

nav {
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  height: 35px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: .2em 2em;
  float: right;
}

nav ul li {
  display: inline-block;
  margin: 0;
  padding: .2em .7em;
}

nav a {
  width: 100%;
  height: 100%;
  color: white;
  text-decoration: none;
  font-family: Ubuntu;
  font-size: 1.15em;
  font-weight: lighter;
  letter-spacing: 1px;
  transition: .25s ease-in-out;
}

nav a:hover {
  color: rgb(220, 120, 0);
}

.nav-bg {
  content: '';
  position: absolute;
  display: block;
  top: -100%;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: rgb(50, 50, 50);
  transition: .45s ease-in-out;
}

.bg-hidden {
  top: -100%;
  opacity: 0;
}

.bg-visible {
  top: 0;
  opacity: 1;
}

h1 {
  text-align: center;
  font-family: Ubuntu;
  letter-spacing: 1px;
}

.hero {
  position: relative;
  width: 100%;
  height: 500px;
  background: rgb(50, 50, 50);
  background: url(https://doninmass.files.wordpress.com/2013/04/walking-in-rain-painting-wallpaper-hd.jpg) no-repeat 50% 50% fixed;
  background-size: 130%;
  overflow: hidden;
}

.hero h1 {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  padding: .3em;
  font-size: 3em;
  font-weight: lighter;
}

.content-wrapper {
  width: 80%;
  height: 3000px;
  padding: 1em 10%;
}

.content-wrapper h1 {
  margin: 0;
  color: rgb(220, 120, 0);
}

.content-wrapper p {
  font-family: "Open Sans";
  text-indent: 1.5em;
}
    </style>
</head>
<body>
<nav>
  <div class="nav-bg"></div>
  <ul>
    <li><a href="">Link</a></li>
    <li><a href="">Link</a></li>
    <li><a href="">Link</a></li>
    <li><a href="">Link</a></li>
  </ul>
</nav>
<div class="hero">
  <h1>Something Inspiring</h1>
</div>
<div class="content-wrapper">
  <h1>Some Title</h1>
  <p>Cray marfa artisan mlkshk tote bag. Freegan man braid master cleanse, pork belly retro artisan man bun hammock cronut quinoa roof party. Pop-up cardigan poutine meditation, affogato stumptown wolf fashion axe pug. Listicle paleo seitan keytar, twee kinfolk salvia meggings cold-pressed retro fingerstache typewriter organic cred. Tacos church-key gochujang, swag ugh squid put a bird on it VHS fingerstache ennui cardigan craft beer. Taxidermy beard you probably haven't heard of them four dollar toast PBR&B. Poutine lo-fi blue bottle, twee hammock sriracha godard.</p>
  
  <p>Cardigan DIY dreamcatcher stumptown. Brunch yuccie swag, selfies leggings echo park quinoa cred squid cray typewriter. Tofu crucifix small batch typewriter irony, blog iPhone cold-pressed tousled pork belly polaroid. Direct trade heirloom deep v chicharrones kale chips. 8-bit viral kale chips food truck chillwave pork belly, art party cornhole hoodie banjo freegan. Tacos vice selfies, wolf tumblr vinyl affogato leggings sartorial forage plaid deep v cronut schlitz you probably haven't heard of them. Meditation normcore fap, pork belly 3 wolf moon pabst next level tacos gochujang franzen.</p>
  
  <p>Ethical keytar slow-carb forage before they sold out meggings. Kombucha church-key kickstarter, pork belly scenester beard ugh ennui ramps gochujang pop-up chambray retro tacos messenger bag. Lo-fi pour-over tote bag migas brunch deep v shoreditch slow-carb before they sold out selfies. Meh hashtag kombucha ennui venmo. Lo-fi seitan normcore hoodie biodiesel celiac. Pickled master cleanse kitsch tofu, freegan vinyl letterpress. Tote bag banjo 90's, brunch XOXO retro cred seitan venmo master cleanse.</p>
</div>
<script>
    $(document).ready(function() {
   $(window).on('scroll', function() {
    if($(window).scrollTop() < 1000) {
      $('.hero').css('background-size', 130 + parseInt($(window).scrollTop() / 5) + '%');
      $('.hero h1').css('top', 50 + ($(window).scrollTop() * .1) + '%');
      $('.hero h1').css('opacity', 1 - ($(window).scrollTop() * .003));
    }
     
     if($(window).scrollTop() >= $('.content-wrapper').offset().top - 300) {
       $('.nav-bg').removeClass('bg-hidden');
       $('.nav-bg').addClass('bg-visible');
     } else {
       $('.nav-bg').removeClass('bg-visible');
       $('.nav-bg').addClass('bg-hidden');
     }
  });
});
</script>
</body>
</html>