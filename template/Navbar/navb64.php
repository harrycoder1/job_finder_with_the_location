<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav.primary-navigation {
  margin: 0 auto;
  display: block;
  padding: 120px 0 0 0;
  text-align: center;
  font-size: 16px;
}
nav.primary-navigation ul li {
  list-style: none;
  margin: 0 auto;
  border-left: 2px solid #3ca0e7;
  display: inline-block;
  padding: 0 30px;
  position: relative;
  text-decoration: none;
  text-align: center;
  font-family: arvo;
}
nav.primary-navigation li a {
  color: black;
}
nav.primary-navigation li a:hover {
  color: #3ca0e7;
}
nav.primary-navigation li:hover {
  cursor: pointer;
}
nav.primary-navigation ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding-left: 0;
  left: 0;
  display: none;
  background: white;
}
nav.primary-navigation ul li:hover > ul,
nav.primary-navigation ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  min-width: 250px;
  text-align: left;
  padding-top: 20px;
  box-shadow: 0px 3px 5px -1px #ccc;
}
nav.primary-navigation ul li ul li {
  clear: both;
  width: 100%;
  text-align: left;
  margin-bottom: 20px;
  border-style: none;
}
nav.primary-navigation ul li ul li a:hover {
  padding-left: 10px;
  border-left: 2px solid #3ca0e7;
  transition: all 0.3s ease;
}

a {
  text-decoration: none;
}
a:hover {
  color: #3CA0E7;
}

ul li ul li a {
  transition: all 0.5s ease;
}
    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Work &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Illustration</a></li>
        <li><a href="#">Iconography</a></li>
      </ul>
    </li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
</body>
</html>