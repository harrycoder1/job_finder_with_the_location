<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html {
  background: #44384E;
  margin: 70px;
}

ul {
  -moz-transform: scale(0.2);
  -ms-transform: scale(0.2);
  -webkit-transform: scale(0.2);
  transform: scale(0.2);
  -moz-transition: ease-out 0.3s all;
  -o-transition: ease-out 0.3s all;
  -webkit-transition: ease-out 0.3s all;
  transition: ease-out 0.3s all;
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: relative;
  display: inline-block;
  width: 200px;
  height: 200px;
}
ul li {
  position: absolute;
  width: 100px;
  height: 100px;
  -webkit-transform-origin: 100% 100%;
  overflow: hidden;
  display: none;
}
ul li a {
  color: #fcd1d5;
  display: block;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  text-align: center;
  background: #F6717F;
  font-size: 25px;
}
ul li:nth-child(odd) a {
  background: #f77b88;
}
ul li:nth-child(1) {
  display: block;
  -moz-transform: rotate(60deg) skew(30deg);
  -ms-transform: rotate(60deg) skew(30deg);
  -webkit-transform: rotate(60deg) skew(30deg);
  transform: rotate(60deg) skew(30deg);
}
ul li:nth-child(1) a {
  line-height: 50px;
  -moz-transform: skew(-30deg) rotate(-60deg);
  -ms-transform: skew(-30deg) rotate(-60deg);
  -webkit-transform: skew(-30deg) rotate(-60deg);
  transform: skew(-30deg) rotate(-60deg);
}
ul li:nth-child(1) a:hover {
  background: #f45969;
  color: white;
}
ul li:nth-child(2) {
  display: block;
  -moz-transform: rotate(120deg) skew(30deg);
  -ms-transform: rotate(120deg) skew(30deg);
  -webkit-transform: rotate(120deg) skew(30deg);
  transform: rotate(120deg) skew(30deg);
}
ul li:nth-child(2) a {
  line-height: 50px;
  -moz-transform: skew(-30deg) rotate(-60deg);
  -ms-transform: skew(-30deg) rotate(-60deg);
  -webkit-transform: skew(-30deg) rotate(-60deg);
  transform: skew(-30deg) rotate(-60deg);
}
ul li:nth-child(2) a:hover {
  background: #f45969;
  color: white;
}
ul li:nth-child(3) {
  display: block;
  -moz-transform: rotate(180deg) skew(30deg);
  -ms-transform: rotate(180deg) skew(30deg);
  -webkit-transform: rotate(180deg) skew(30deg);
  transform: rotate(180deg) skew(30deg);
}
ul li:nth-child(3) a {
  line-height: 50px;
  -moz-transform: skew(-30deg) rotate(-60deg);
  -ms-transform: skew(-30deg) rotate(-60deg);
  -webkit-transform: skew(-30deg) rotate(-60deg);
  transform: skew(-30deg) rotate(-60deg);
}
ul li:nth-child(3) a:hover {
  background: #f45969;
  color: white;
}
ul li:nth-child(4) {
  display: block;
  -moz-transform: rotate(240deg) skew(30deg);
  -ms-transform: rotate(240deg) skew(30deg);
  -webkit-transform: rotate(240deg) skew(30deg);
  transform: rotate(240deg) skew(30deg);
}
ul li:nth-child(4) a {
  line-height: 50px;
  -moz-transform: skew(-30deg) rotate(-60deg);
  -ms-transform: skew(-30deg) rotate(-60deg);
  -webkit-transform: skew(-30deg) rotate(-60deg);
  transform: skew(-30deg) rotate(-60deg);
}
ul li:nth-child(4) a:hover {
  background: #f45969;
  color: white;
}
ul li:nth-child(5) {
  display: block;
  -moz-transform: rotate(300deg) skew(30deg);
  -ms-transform: rotate(300deg) skew(30deg);
  -webkit-transform: rotate(300deg) skew(30deg);
  transform: rotate(300deg) skew(30deg);
}
ul li:nth-child(5) a {
  line-height: 50px;
  -moz-transform: skew(-30deg) rotate(-60deg);
  -ms-transform: skew(-30deg) rotate(-60deg);
  -webkit-transform: skew(-30deg) rotate(-60deg);
  transform: skew(-30deg) rotate(-60deg);
}
ul li:nth-child(5) a:hover {
  background: #f45969;
  color: white;
}
ul li:nth-child(6) {
  display: block;
  -moz-transform: rotate(360deg) skew(30deg);
  -ms-transform: rotate(360deg) skew(30deg);
  -webkit-transform: rotate(360deg) skew(30deg);
  transform: rotate(360deg) skew(30deg);
}
ul li:nth-child(6) a {
  line-height: 50px;
  -moz-transform: skew(-30deg) rotate(-60deg);
  -ms-transform: skew(-30deg) rotate(-60deg);
  -webkit-transform: skew(-30deg) rotate(-60deg);
  transform: skew(-30deg) rotate(-60deg);
}
ul li:nth-child(6) a:hover {
  background: #f45969;
  color: white;
}
ul li.close {
  width: 50px;
  height: 50px;
  background: white;
  border-radius: 50%;
  position: absolute;
  left: calc(50% - 25px);
  top: calc(50% - 25px);
  display: block;
  -moz-transform: scale(3.8) rotate(45deg);
  -ms-transform: scale(3.8) rotate(45deg);
  -webkit-transform: scale(3.8) rotate(45deg);
  transform: scale(3.8) rotate(45deg);
  -moz-transition: ease-in-out 0.3s all;
  -o-transition: ease-in-out 0.3s all;
  -webkit-transition: ease-in-out 0.3s all;
  transition: ease-in-out 0.3s all;
  -webkit-transform-origin: 50% 50%;
}
ul li.close a {
  background: none;
  width: 50px;
  height: 50px;
  line-height: 50px;
  color: #ccc;
}
ul.active {
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
}
ul.active .close {
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
}

</style>
</head>
<body>

<ul>
  <li>
    <a href="#">
      <i class="fa fa-home"></i>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa fa-gears"></i>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa fa-users"></i>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa fa-sitemap"></i>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa fa-tags"></i>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa fa-gamepad"></i>
    </a>
  </li>
  <li class="close">
    <a href="#">
      <i class="fa fa-times"></i>
    </a>
  </li>
</ul>
<script>
    $(document).ready(function(){
  $('.close').click(function(){
    $('ul').toggleClass('active');
  })
})
</script>

</body>
</html>