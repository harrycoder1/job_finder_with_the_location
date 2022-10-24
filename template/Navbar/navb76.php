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

body {
  height: 100vh;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  color: #fff;
  background-image: linear-gradient(to left bottom, #F2E3C6 0%, #A7A1A5 100%);
  overflow: hidden;
}

*,
*:before,
*:after {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}

ul {
  list-style-type: none;
}

.nav {
  margin-top: 30px;
  text-align: center;
  width: 100%;
}
.nav__list {
  display: inline-block;
}
.nav__menu {
  float: left;
  width: 140px;
  height: 65px;
  line-height: 65px;
  text-transform: uppercase;
  background-color: #2c8fb5;
  cursor: pointer;
}
.nav__menu:hover {
  background-color: #226f8c;
}
.nav__menu:hover > .nav__menu-lists li {
  display: block;
}
.nav__menu:hover > .nav__menu--1-lists li:nth-child(1) {
  opacity: 0;
  -webkit-animation: menu1 ease-in-out forwards;
          animation: menu1 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
}
@-webkit-keyframes menu1 {
  from {
    opacity: 0;
    transform: rotateX(-180deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
@keyframes menu1 {
  from {
    opacity: 0;
    transform: rotateX(-180deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
.nav__menu:hover > .nav__menu--1-lists li:nth-child(2) {
  opacity: 0;
  -webkit-animation: menu1 ease-in-out forwards;
          animation: menu1 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 150ms;
          animation-delay: 150ms;
}
@keyframes menu1 {
  from {
    opacity: 0;
    transform: rotateX(-180deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
.nav__menu:hover > .nav__menu--1-lists li:nth-child(3) {
  opacity: 0;
  -webkit-animation: menu1 ease-in-out forwards;
          animation: menu1 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 300ms;
          animation-delay: 300ms;
}
@keyframes menu1 {
  from {
    opacity: 0;
    transform: rotateX(-180deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
.nav__menu:hover > .nav__menu--1-lists li:nth-child(4) {
  opacity: 0;
  -webkit-animation: menu1 ease-in-out forwards;
          animation: menu1 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 450ms;
          animation-delay: 450ms;
}
@keyframes menu1 {
  from {
    opacity: 0;
    transform: rotateX(-180deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
.nav__menu:hover > .nav__menu--1-lists li:nth-child(5) {
  opacity: 0;
  -webkit-animation: menu1 ease-in-out forwards;
          animation: menu1 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 600ms;
          animation-delay: 600ms;
}
@keyframes menu1 {
  from {
    opacity: 0;
    transform: rotateX(-180deg);
  }
  to {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
.nav__menu:hover > .nav__menu--2-lists li:nth-child(1) {
  opacity: 0;
  transform: translateY(-100%);
  -webkit-animation: menu2 ease-in-out forwards;
          animation: menu2 ease-in-out forwards;
  -webkit-animation-duration: 175ms;
          animation-duration: 175ms;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
}
@-webkit-keyframes menu2 {
  0% {
    opacity: 0;
    transform: translateY(-100%) scale(0.3);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
@keyframes menu2 {
  0% {
    opacity: 0;
    transform: translateY(-100%) scale(0.3);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
.nav__menu:hover > .nav__menu--2-lists li:nth-child(2) {
  opacity: 0;
  transform: translateY(-100%);
  -webkit-animation: menu2 ease-in-out forwards;
          animation: menu2 ease-in-out forwards;
  -webkit-animation-duration: 175ms;
          animation-duration: 175ms;
  -webkit-animation-delay: 145.8333333333ms;
          animation-delay: 145.8333333333ms;
}
@keyframes menu2 {
  0% {
    opacity: 0;
    transform: translateY(-100%) scale(0.3);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
.nav__menu:hover > .nav__menu--2-lists li:nth-child(3) {
  opacity: 0;
  transform: translateY(-100%);
  -webkit-animation: menu2 ease-in-out forwards;
          animation: menu2 ease-in-out forwards;
  -webkit-animation-duration: 175ms;
          animation-duration: 175ms;
  -webkit-animation-delay: 291.6666666667ms;
          animation-delay: 291.6666666667ms;
}
@keyframes menu2 {
  0% {
    opacity: 0;
    transform: translateY(-100%) scale(0.3);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
.nav__menu:hover > .nav__menu--2-lists li:nth-child(4) {
  opacity: 0;
  transform: translateY(-100%);
  -webkit-animation: menu2 ease-in-out forwards;
          animation: menu2 ease-in-out forwards;
  -webkit-animation-duration: 175ms;
          animation-duration: 175ms;
  -webkit-animation-delay: 437.5ms;
          animation-delay: 437.5ms;
}
@keyframes menu2 {
  0% {
    opacity: 0;
    transform: translateY(-100%) scale(0.3);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
.nav__menu:hover > .nav__menu--2-lists li:nth-child(5) {
  opacity: 0;
  transform: translateY(-100%);
  -webkit-animation: menu2 ease-in-out forwards;
          animation: menu2 ease-in-out forwards;
  -webkit-animation-duration: 175ms;
          animation-duration: 175ms;
  -webkit-animation-delay: 583.3333333333ms;
          animation-delay: 583.3333333333ms;
}
@keyframes menu2 {
  0% {
    opacity: 0;
    transform: translateY(-100%) scale(0.3);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
.nav__menu:hover > .nav__menu--3-lists li:nth-child(1) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu3 ease-in-out forwards;
          animation: menu3 ease-in-out forwards;
  -webkit-animation-duration: 200ms;
          animation-duration: 200ms;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
}
@-webkit-keyframes menu3 {
  0% {
    opacity: 0;
    transform: rotate(-45deg) translateX(50%);
  }
  100% {
    opacity: 1;
    transform: rotate(0) translateX(0);
  }
}
@keyframes menu3 {
  0% {
    opacity: 0;
    transform: rotate(-45deg) translateX(50%);
  }
  100% {
    opacity: 1;
    transform: rotate(0) translateX(0);
  }
}
.nav__menu:hover > .nav__menu--3-lists li:nth-child(2) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu3 ease-in-out forwards;
          animation: menu3 ease-in-out forwards;
  -webkit-animation-duration: 200ms;
          animation-duration: 200ms;
  -webkit-animation-delay: 153.8461538462ms;
          animation-delay: 153.8461538462ms;
}
@keyframes menu3 {
  0% {
    opacity: 0;
    transform: rotate(-45deg) translateX(50%);
  }
  100% {
    opacity: 1;
    transform: rotate(0) translateX(0);
  }
}
.nav__menu:hover > .nav__menu--3-lists li:nth-child(3) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu3 ease-in-out forwards;
          animation: menu3 ease-in-out forwards;
  -webkit-animation-duration: 200ms;
          animation-duration: 200ms;
  -webkit-animation-delay: 307.6923076923ms;
          animation-delay: 307.6923076923ms;
}
@keyframes menu3 {
  0% {
    opacity: 0;
    transform: rotate(-45deg) translateX(50%);
  }
  100% {
    opacity: 1;
    transform: rotate(0) translateX(0);
  }
}
.nav__menu:hover > .nav__menu--3-lists li:nth-child(4) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu3 ease-in-out forwards;
          animation: menu3 ease-in-out forwards;
  -webkit-animation-duration: 200ms;
          animation-duration: 200ms;
  -webkit-animation-delay: 461.5384615385ms;
          animation-delay: 461.5384615385ms;
}
@keyframes menu3 {
  0% {
    opacity: 0;
    transform: rotate(-45deg) translateX(50%);
  }
  100% {
    opacity: 1;
    transform: rotate(0) translateX(0);
  }
}
.nav__menu:hover > .nav__menu--3-lists li:nth-child(5) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu3 ease-in-out forwards;
          animation: menu3 ease-in-out forwards;
  -webkit-animation-duration: 200ms;
          animation-duration: 200ms;
  -webkit-animation-delay: 615.3846153846ms;
          animation-delay: 615.3846153846ms;
}
@keyframes menu3 {
  0% {
    opacity: 0;
    transform: rotate(-45deg) translateX(50%);
  }
  100% {
    opacity: 1;
    transform: rotate(0) translateX(0);
  }
}
.nav__menu:hover > .nav__menu--4-lists li:nth-child(1) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu4 ease-in-out forwards;
          animation: menu4 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
}
@-webkit-keyframes menu4 {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0) rotateX(0);
  }
}
@keyframes menu4 {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0) rotateX(0);
  }
}
.nav__menu:hover > .nav__menu--4-lists li:nth-child(2) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu4 ease-in-out forwards;
          animation: menu4 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 125ms;
          animation-delay: 125ms;
}
@keyframes menu4 {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0) rotateX(0);
  }
}
.nav__menu:hover > .nav__menu--4-lists li:nth-child(3) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu4 ease-in-out forwards;
          animation: menu4 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 250ms;
          animation-delay: 250ms;
}
@keyframes menu4 {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0) rotateX(0);
  }
}
.nav__menu:hover > .nav__menu--4-lists li:nth-child(4) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu4 ease-in-out forwards;
          animation: menu4 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 375ms;
          animation-delay: 375ms;
}
@keyframes menu4 {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0) rotateX(0);
  }
}
.nav__menu:hover > .nav__menu--4-lists li:nth-child(5) {
  opacity: 0;
  transform-origin: top center;
  -webkit-animation: menu4 ease-in-out forwards;
          animation: menu4 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 500ms;
          animation-delay: 500ms;
}
@keyframes menu4 {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0) rotateX(0);
  }
}
.nav__menu:hover > .nav__menu--5-lists li:nth-child(1) {
  opacity: 0;
  -webkit-animation: menu5 ease-in-out forwards;
          animation: menu5 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 0ms;
          animation-delay: 0ms;
}
@-webkit-keyframes menu5 {
  0% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0);
  }
}
@keyframes menu5 {
  0% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0);
  }
}
.nav__menu:hover > .nav__menu--5-lists li:nth-child(2) {
  opacity: 0;
  -webkit-animation: menu5 ease-in-out forwards;
          animation: menu5 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 125ms;
          animation-delay: 125ms;
}
@keyframes menu5 {
  0% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0);
  }
}
.nav__menu:hover > .nav__menu--5-lists li:nth-child(3) {
  opacity: 0;
  -webkit-animation: menu5 ease-in-out forwards;
          animation: menu5 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 250ms;
          animation-delay: 250ms;
}
@keyframes menu5 {
  0% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0);
  }
}
.nav__menu:hover > .nav__menu--5-lists li:nth-child(4) {
  opacity: 0;
  -webkit-animation: menu5 ease-in-out forwards;
          animation: menu5 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 375ms;
          animation-delay: 375ms;
}
@keyframes menu5 {
  0% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0);
  }
}
.nav__menu:hover > .nav__menu--5-lists li:nth-child(5) {
  opacity: 0;
  -webkit-animation: menu5 ease-in-out forwards;
          animation: menu5 ease-in-out forwards;
  -webkit-animation-duration: 300ms;
          animation-duration: 300ms;
  -webkit-animation-delay: 500ms;
          animation-delay: 500ms;
}
@keyframes menu5 {
  0% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    transform: rotateY(0);
  }
}
.nav__menu-lists {
  perspective: 5000px;
}
.nav__menu-items {
  display: none;
  width: 140px;
  height: 65px;
  background-color: #2c8fb5;
}
.nav__menu-items:hover {
  background-color: #226f8c;
}
.nav__menu:nth-child(1) {
  border-top-left-radius: 10px;
}
.nav__menu:last-child {
  border-top-right-radius: 10px;
}

.stuff {
  position: absolute;
  bottom: 30px;
  width: 100%;
  text-align: center;
}
.stuff .pens {
  margin-right: 20px;
  text-decoration: none;
  font-size: 20px;
  color: #333;
}
.stuff .pens:hover {
  text-decoration: underline;
}
.stuff .fa-twitter {
  position: relative;
  top: 8px;
  color: #1DA1F2;
  font-size: 50px;
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="nav">
  <ul class="nav__list">
    <li class="nav__menu">menu
      <ul class="nav__menu-lists nav__menu--1-lists">
        <li class="nav__menu-items">Etiam</li>
        <li class="nav__menu-items">Lectus</li>
        <li class="nav__menu-items">Netus</li>
        <li class="nav__menu-items">Dictum</li>
        <li class="nav__menu-items">Nibh</li>
      </ul>
    </li>
    <li class="nav__menu">menu
      <ul class="nav__menu-lists nav__menu--2-lists">
        <li class="nav__menu-items">Etiam</li>
        <li class="nav__menu-items">Lectus</li>
        <li class="nav__menu-items">Netus</li>
        <li class="nav__menu-items">Dictum</li>
        <li class="nav__menu-items">Nibh</li>
      </ul>
    </li>
    <li class="nav__menu">menu
      <ul class="nav__menu-lists nav__menu--1-lists">
        <li class="nav__menu-items">Etiam</li>
        <li class="nav__menu-items">Lectus</li>
        <li class="nav__menu-items">Netus</li>
        <li class="nav__menu-items">Dictum</li>
        <li class="nav__menu-items">Nibh</li>
      </ul>
    </li>
    <li class="nav__menu">menu
      <ul class="nav__menu-lists nav__menu--1-lists">
        <li class="nav__menu-items">Etiam</li>
        <li class="nav__menu-items">Lectus</li>
        <li class="nav__menu-items">Netus</li>
        <li class="nav__menu-items">Dictum</li>
        <li class="nav__menu-items">Nibh</li>
      </ul>
    </li>
    <li class="nav__menu">menu
      <ul class="nav__menu-lists nav__menu--1-lists">
        <li class="nav__menu-items">Etiam</li>
        <li class="nav__menu-items">Lectus</li>
        <li class="nav__menu-items">Netus</li>
        <li class="nav__menu-items">Dictum</li>
        <li class="nav__menu-items">Nibh</li>
      </ul>
    </li>
  </ul><div class='stuff'><a href='https://codepen.io/mrspok407/' class='pens' target="_blank">Check out my other pens</a><a href="https://twitter.com/mrspok407" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
</div>
</body>
</html>