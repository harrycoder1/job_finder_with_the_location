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
  font-family: "Open Sans", sans-serif;
  background: #374954;
  color: white;
  text-align: center;
}

#main {
  position: relative;
  list-style: none;
  background: #6BBE92;
  font-weight: 400;
  font-size: 0;
  text-transform: uppercase;
  display: inline-block;
  padding: 0;
  margin: 50px auto;
}
#main li {
  font-size: 0.8rem;
  display: inline-block;
  position: relative;
  padding: 15px 20px;
  cursor: pointer;
  z-index: 5;
  min-width: 120px;
}

li {
  margin: 0;
}

.drop {
  overflow: hidden;
  list-style: none;
  position: absolute;
  padding: 0;
  width: 100%;
  left: 0;
  top: 48px;
}
.drop div {
  -webkit-transform: translate(0, -100%);
  -moz-transform: translate(0, -100%);
  -ms-transform: translate(0, -100%);
  transform: translate(0, -100%);
  -webkit-transition: all 0.5s 0.1s;
  -moz-transition: all 0.5s 0.1s;
  -ms-transition: all 0.5s 0.1s;
  transition: all 0.5s 0.1s;
  position: relative;
}
.drop li {
  display: block;
  padding: 0;
  width: 100%;
  background: #3E8760 !important;
}

#marker {
  height: 6px;
  background: #3E8760 !important;
  position: absolute;
  bottom: 0;
  width: 120px;
  z-index: 2;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

#main li:nth-child(1):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(1):hover ~ #marker {
  -webkit-transform: translate(0px, 0);
  -moz-transform: translate(0px, 0);
  -ms-transform: translate(0px, 0);
  transform: translate(0px, 0);
}

#main li:nth-child(2):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(2):hover ~ #marker {
  -webkit-transform: translate(120px, 0);
  -moz-transform: translate(120px, 0);
  -ms-transform: translate(120px, 0);
  transform: translate(120px, 0);
}

#main li:nth-child(3):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(3):hover ~ #marker {
  -webkit-transform: translate(240px, 0);
  -moz-transform: translate(240px, 0);
  -ms-transform: translate(240px, 0);
  transform: translate(240px, 0);
}

#main li:nth-child(4):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(4):hover ~ #marker {
  -webkit-transform: translate(360px, 0);
  -moz-transform: translate(360px, 0);
  -ms-transform: translate(360px, 0);
  transform: translate(360px, 0);
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- not responsive yet -->
<nav>
  <ul id="main">
    <li>Home</li>
    <li>About</li>
    <li>Skills
      <ul class="drop">
        <div>
        <li>scss</li>
        <li>jquery</li>
        <li>html</li>
        </div>
      </ul>
    </li>
    <li>Contact</li>
    <div id="marker"></div>
  </ul>
</nav>
</body>
</html>