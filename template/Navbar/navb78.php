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
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  line-height: 1.5;
  background: #27ae60;
}

nav ul {
  list-style: none;
  padding-left: 0;
  margin-top: 0;
  margin-bottom: 0;
}

h1 {
  width: 500px;
  margin: 100px auto 20px;
  color: #f0f0f0;
  text-align: center;
}

.nav {
  width: 500px;
  margin: 0 auto;
  background: #1e8449;
  color: #f0f0f0;
}
.nav a {
  display: block;
  padding: 0 16px;
  line-height: inherit;
  cursor: pointer;
}
.nav__menu {
  line-height: 45px;
  font-weight: 700;
  text-transform: uppercase;
}
.nav__menu-item {
  display: inline-block;
  position: relative;
}
.nav__menu-item:hover {
  background-color: #9b59b6;
}
.nav__menu-item:hover .nav__submenu {
  display: block;
}
.nav__submenu {
  font-weight: 300;
  text-transform: none;
  display: none;
  position: absolute;
  width: 220px;
  background-color: #9b59b6;
}
.nav__submenu-item:hover {
  background: rgba(0, 0, 0, 0.1);
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,300" rel="stylesheet" type="text/css"/>
<h1>A Simple Dropdown Menu</h1>
<nav class="nav">
  <ul class="nav__menu">
    <li class="nav__menu-item"><a>Home</a></li>
    <li class="nav__menu-item"><a>Services</a>
      <ul class="nav__submenu">
        <li class="nav__submenu-item"> <a>Web Design</a></li>
        <li class="nav__submenu-item"> <a>Web Development</a></li>
        <li class="nav__submenu-item"> <a>Web Hosting</a></li>
      </ul>
    </li>
    <li class="nav__menu-item"><a>About</a>
      <ul class="nav__submenu">
        <li class="nav__submenu-item"> <a>Our Company</a></li>
        <li class="nav__submenu-item"> <a>Our Team</a></li>
        <li class="nav__submenu-item"> <a>Our Reach</a></li>
      </ul>
    </li>
    <li class="nav__menu-item"><a>Blog</a></li>
    <li class="nav__menu-item"><a>Contact</a></li>
  </ul>
</nav>
</body>
</html>