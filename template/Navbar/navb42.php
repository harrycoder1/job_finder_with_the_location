<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Poiret+One);
* {
  box-sizing: border-box;
}

.button {
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 10000;
  color: white;
  padding: 10px;
  font-size: 30px;
  cursor: pointer;
}
.button .fa {
  transition: color 1000ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition-delay: 0.75s;
}

html {
  overflow-x: hidden;
}

body {
  color: #fff;
  font-family: "Poiret One", cursive;
  position: relative;
  background: crimson;
  transform: translateX(0);
  transition: transform 800ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.menu {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 400px;
  padding-left: 0;
  transform: translateX(-150%);
  transition: transform 500ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition-delay: 0.2s;
}

.content {
  position: absolute;
  margin: 0 auto;
  padding: 30px 20%;
  font-size: 18px;
  transform: translateX(100%);
  transition: color 1s ease 1s, background 0.5s ease 1s, transform 1000ms cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.5s;
}

h1 {
  font-size: 60px;
}

p {
  margin-bottom: 100px;
  line-height: 2.4;
}

ul {
  margin: 0;
  padding: 20px 0;
  list-style: none;
}

li {
  margin: 0;
  padding: 0;
}

a {
  text-decoration: none;
  display: block;
  padding: 10px 20px;
  padding-left: 120px;
}
a:hover {
  background: slategrey;
}

.contactus_is_visible .contactus, .clients_is_visible .clients, .aboutus_is_visible .aboutus, .home_is_visible .home {
  transform: translateX(0);
}

.contactus_is_visible .contactus, .clients_is_visible .clients, .aboutus_is_visible .aboutus, .home_is_visible .home {
  z-index: 5000;
}

.home_is_visible .home {
  color: white;
  background: cadetblue;
}
.home_is_visible .button .fa {
  color: white;
}
.home_is_visible a {
  color: white;
}

.aboutus_is_visible .aboutus {
  color: black;
  background: salmon;
}
.aboutus_is_visible .button .fa {
  color: black;
}
.aboutus_is_visible a {
  color: black;
}

.clients_is_visible .clients {
  color: white;
  background: darkgoldenrod;
}
.clients_is_visible .button .fa {
  color: white;
}
.clients_is_visible a {
  color: white;
}

.contactus_is_visible .contactus {
  color: black;
  background: sandybrown;
}
.contactus_is_visible .button .fa {
  color: black;
}
.contactus_is_visible a {
  color: black;
}

body.nav_is_visible {
  transform: translateX(300px);
}
body.nav_is_visible .menu {
  transform: translateX(-100%);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class='button'>
  <div class='fa fa-bars'></div>
</div>
<div class='menu'>
  <nav>
    <ul>
      <li>
        <a href='home_is_visible'>Home</a>
      </li>
      <li>
        <a href='aboutus_is_visible'>About</a>
      </li>
      <li>
        <a href='clients_is_visible'>Clients</a>
      </li>
      <li>
        <a href='contactus_is_visible'>Contact Us</a>
      </li>
    </ul>
  </nav>
</div>
<div class='content home'>
  <h1>OffCanvas Nav</h1>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
</div>
<div class='content aboutus'>
  <h1>About Us</h1>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
</div>
<div class='content clients'>
  <h1>Clients</h1>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
</div>
<div class='content contactus'>
  <h1>Contact Us</h1>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend %leo</p>
</div>
<script>
    $('body').addClass('home_is_visible');

$('.button').on("click", function(){
  $('body').toggleClass('nav_is_visible');
});

function removeClasses() {
  $(".menu ul li").each(function() {
    var link = $(this).find('a').attr('href');
  $('body').removeClass(link);
  });
}
$('.menu a').on("click", function(e){
  e.preventDefault();
  removeClasses();
  var link = $(this).attr('href');
  $('body').addClass(link);
  $('body').removeClass('nav_is_visible');
});
</script>
</body>
</html>