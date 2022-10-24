<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*Colors*/
/*Font*/
/* Reset*/
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  background: linear-gradient(90deg, #3f4593, #5960bd);
  margin: 0;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

a {
  text-decoration: none;
  color: inherit;
}

/* Start Style*/
.main__menu {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
}
@media (max-width: 900px) {
  .main__menu {
    grid-template-columns: 1fr;
    max-width: 300px;
  }
}
.main__menu .list-item:hover .drop-menu li {
  display: block;
}
.main__menu .list-item:hover .menu-1 {
  perspective: 1000px;
}
.main__menu .list-item:hover .menu-1 .drop-item {
  opacity: 0;
}
.main__menu .list-item:hover .menu-1 .drop-item:nth-child(1) {
  animation-name: leftToRight;
  animation-duration: 400ms;
  animation-delay: -150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-1 .drop-item:nth-child(2) {
  animation-name: leftToRight;
  animation-duration: 400ms;
  animation-delay: 0ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-1 .drop-item:nth-child(3) {
  animation-name: leftToRight;
  animation-duration: 400ms;
  animation-delay: 150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-1 .drop-item:nth-child(4) {
  animation-name: leftToRight;
  animation-duration: 400ms;
  animation-delay: 300ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-2 {
  perspective: 1000px;
}
.main__menu .list-item:hover .menu-2 .drop-item {
  opacity: 0;
  transform-origin: top center;
}
.main__menu .list-item:hover .menu-2 .drop-item:nth-child(1) {
  animation-name: topToBottom;
  animation-duration: 400ms;
  animation-delay: -150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-2 .drop-item:nth-child(2) {
  animation-name: topToBottom;
  animation-duration: 400ms;
  animation-delay: 0ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-2 .drop-item:nth-child(3) {
  animation-name: topToBottom;
  animation-duration: 400ms;
  animation-delay: 150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-2 .drop-item:nth-child(4) {
  animation-name: topToBottom;
  animation-duration: 400ms;
  animation-delay: 300ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-3 {
  perspective: 1000px;
}
.main__menu .list-item:hover .menu-3 .drop-item {
  opacity: 0;
}
.main__menu .list-item:hover .menu-3 .drop-item:nth-child(1) {
  animation-name: itemBounce;
  animation-duration: 400ms;
  animation-delay: -150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-3 .drop-item:nth-child(2) {
  animation-name: itemBounce;
  animation-duration: 400ms;
  animation-delay: 0ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-3 .drop-item:nth-child(3) {
  animation-name: itemBounce;
  animation-duration: 400ms;
  animation-delay: 150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-3 .drop-item:nth-child(4) {
  animation-name: itemBounce;
  animation-duration: 400ms;
  animation-delay: 300ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-4 {
  perspective: 1000px;
}
.main__menu .list-item:hover .menu-4 .drop-item {
  opacity: 0;
  transform-origin: top right;
}
.main__menu .list-item:hover .menu-4 .drop-item:nth-child(1) {
  animation-name: bottomToTop;
  animation-duration: 400ms;
  animation-delay: -150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-4 .drop-item:nth-child(2) {
  animation-name: bottomToTop;
  animation-duration: 400ms;
  animation-delay: 0ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-4 .drop-item:nth-child(3) {
  animation-name: bottomToTop;
  animation-duration: 400ms;
  animation-delay: 150ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .menu-4 .drop-item:nth-child(4) {
  animation-name: bottomToTop;
  animation-duration: 400ms;
  animation-delay: 300ms;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}
.main__menu .list-item:hover .home {
  border-top: 6px solid #33658a;
}
.main__menu .list-item:hover .about {
  border-top: 6px solid #9966cc;
}
.main__menu .list-item:hover .widget {
  border-top: 6px solid #ff3333;
}
.main__menu .list-item:hover .kabobs {
  border-top: 6px solid #ffcc33;
}
.main__menu .list-item:hover .contact {
  border-top: 6px solid #55dde0;
}
.main__menu .list-item a {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 200px;
  color: #fff;
  cursor: unset;
}
.main__menu .list-item a:hover {
  cursor: pointer;
}
.main__menu .list-item a span {
  font: 600 25px "Roboto", sans-serif;
  order: 2;
}
.main__menu .list-item a img {
  width: 100px;
}
.main__menu .list-item a.home {
  background: #ff3333;
}
.main__menu .list-item a.about {
  background: #ffcc33;
}
.main__menu .list-item a.widget {
  background: #55dde0;
}
.main__menu .list-item a.kabobs {
  background: #9966cc;
}
.main__menu .list-item a.contact {
  background: #33658a;
}
.main__menu .list-item a i {
  color: #fff;
  font-size: 100px;
}
.main__menu .list-item .drop-menu .drop-item {
  display: none;
}
.main__menu .list-item .drop-menu .drop-item a {
  height: 80px;
  font: 300 22px "Roboto", sans-serif;
}
.main__menu .list-item .drop-menu .drop-item a.item--1 {
  background: #ffcc33;
}
.main__menu .list-item .drop-menu .drop-item a.item--2 {
  background: #33658a;
}
.main__menu .list-item .drop-menu .drop-item a.item--3 {
  background: #ff3333;
}

@keyframes leftToRight {
  0% {
    opacity: 0;
    transform: rotateY(-90deg) translateY(30px);
  }
  100% {
    opacity: 1;
    transform: rotateY(0deg) translateY(0px);
  }
}
@keyframes topToBottom {
  0% {
    opacity: 0;
    transform: rotateX(-90deg);
  }
  100% {
    opacity: 1;
    transform: rotateX(0deg);
  }
}
@keyframes itemBounce {
  0% {
    opacity: 0;
    transform: scale(0.3) translateY(-60px);
  }
  80% {
    transform: scale(1.2) translateY(10px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0px);
  }
}
@keyframes bottomToTop {
  0% {
    opacity: 0;
    transform: rotate(-30deg);
  }
  100% {
    opacity: 1;
    transform: rotate(0deg);
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<ul class="main__menu">
  <li class="list-item">
    <a href="#" class="home item--js">
      <span>Home</span>
      <i class="ion ion-ios-home-outline"></i>
    </a>
  </li>
  <li class="list-item">
    <a href="#" class="about item--js">
      <span>About</span>
      <i class="ion ion-ios-contact-outline"></i>
    </a>
  </li>
  <li class="list-item">
    <a href="#" class="widget item--js">
      <span>Widgets</span>
      <i class="ion ion-ios-partly-sunny-outline"></i>
    </a>
    <ul class="drop-menu menu-4">
      <li class="drop-item"><a href="#" class="item--1">Big Widget</a></li>
      <li class="drop-item"><a href="#" class="item--2">Bigger Widget</a></li>
      <li class="drop-item"><a href="#" class="item--3">Huge Widget</a></li>
    </ul>
  </li>
  <li class="list-item">
    <a href="#" class="kabobs item--js">
      <span>KaBoBs</span>
      <img src="https://res.cloudinary.com/elafreet/image/upload/v1530189897/cooking1.svg" alt="">
    </a>
    <ul class="drop-menu menu-2">
      <li class="drop-item"><a href="#" class="item--1">Shish Kabobs</a></li>
      <li class="drop-item"><a href="#" class="item--2">BBQ Kabobs</a></li>
      <li class="drop-item"><a href="#" class="item--3">Summer Kabobs</a></li>
    </ul>
  </li>
  <li class="list-item">
    <a href="#" class="contact item--js">
      <span>Contact</span>
      <i class="ion ion-ios-mail-open-outline"></i>
    </a>
  </li>
</ul>

</body>
</html>