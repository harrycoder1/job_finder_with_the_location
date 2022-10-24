<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto&display=swap");
body {
  background: #edf5e1;
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  text-shadow: 0.5px 0.5px 0 #CCCCCC;
}

.background {
  position: fixed;
  z-index: -1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transition: 0.75s;
}

.nav {
  padding: 0px;
  width: 640px;
  margin: 100px auto auto auto;
}

ul {
  list-style-type: none;
}

li a {
  padding: 30px;
  float: left;
  width: 100px;
  text-align: center;
  font-size: 15px;
  color: #edf5e1;
  text-decoration: none;
}

li a:hover .circle {
  position: relative;
  z-index: 1;
  top: -60px;
  width: 80px;
  height: 80px;
  border-radius: 100%;
  animation: illuminate 2s ease-out infinite;
  background: #fdc6be;
}

li i {
  height: 50px;
}

li a:hover i {
  transform: translateY(-10px);
}

li a .title {
  font-size: 0px;
}

li a:hover .title {
  transform: translateY(10px);
  font-size: 15px;
  transition: 0.5s;
}

li a.title:hover {
  transform: translateY(-10px);
}

.nav li:first-child a {
  background: #05386b !important;
}

.nav li:nth-child(2) a {
  background: #379683 !important;
}

.nav li:nth-child(3) a {
  background: #5cdb95 !important;
}

.nav li:nth-child(4) a {
  background: #8ee4af !important;
}

.nav li:first-child:hover ~ .background {
  background: #05386b;
}

.nav li:nth-child(2):hover ~ .background {
  background: #379683;
}

.nav li:nth-child(3):hover ~ .background {
  background: #5cdb95;
}

.nav li:nth-child(4):hover ~ .background {
  background: #8ee4af;
}

@keyframes illuminate {
  0% {
    transform: scale(0.7, 0.7);
    opacity: 0.7;
  }
  50% {
    opacity: 0.3;
  }
  100% {
    transform: scale(1.15);
    opacity: 0;
  }
}
    </style>
</head>
<body>
<ul class="nav">
  <li>
    <a href="https://jasminegump.com" target = "_blank">
      <i class="fas fa-home fa-3x home">
        <div class = "circle"></div>
      </i>
      <div class = "title">Home</div>
    </a>
  </li>
  
  <li>
    <a href="https://twitter.com/ladyjellington" target = "_blank">
      <i class="fab fa-twitter fa-3x twitter">
        <div class = "circle"></div>
      </i>
      <div class = "title">Twitter</div>
    </a>
  </li>
  
  <li>
    <a href="https://codepen.io/ladyjellington" target = "_blank">
      <i class="fab fa-codepen fa-3x codepen">
        <div class = "circle"></div></i>
      <div class = "title">Codepen</div>
    </a>
  </li>
  
  <li>
    <a href="https://github.com/jasminegmp" target = "_blank">
        <i class="fab fa-github fa-3x github">
          <div class = "circle"></div></i>
        <div class = "title">Github</div>
      </a>
  </li>
  <div class="background"></div>

</ul>


</body>
</html>