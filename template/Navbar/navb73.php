<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @charset "UTF-8";
body {
  display: flex;
  justify-content: center;
  height: 100vh;
  padding: 0px;
  margin: 0px;
  overflow: hidden;
  font-family: "Nanum Gothic", sans-serif;
  perspective: 700px;
  background: #333;
}
body * {
  box-sizing: border-box;
  transform-style: preserve-3d;
}
@media (min-width: 666px) {
  body nav {
    width: 100%;
    position: absolute;
    background: #222;
    margin: 0px;
    max-width: 100%;
    z-index: 2;
  }
  body nav ol {
    width: 100%;
    display: flex;
    justify-content: space-around;
    padding: 0px;
    margin: 0px;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  body nav ol li {
    display: inline-block;
    padding: 30px;
    flex-grow: 1;
    text-align: center;
    position: relative;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  body nav ol li:nth-of-type(4) ol:after {
    content: "";
    font-family: FontAwesome;
  }
  body nav ol li:hover ol:before {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    display: block;
    bottom: -30px;
    left: -15px;
    transform: rotate(45deg) scale(0.5);
    border: 3px solid orange;
    border-color: orange transparent transparent orange;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, orange 45%, orange 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    animation: clipin 0.4s ease-in 1 forwards;
    animation-delay: 0.2s;
    -webkit-clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
    clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
  }
  body nav ol li:hover li {
    position: relative;
  }
  body nav ol li:hover li:first-of-type:before {
    display: none;
  }
  body nav ol li:hover li:before {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    display: block;
    right: -30px;
    top: -15px;
    left: auto;
    transform: rotate(-45deg) scale(0.5);
    border: 3px solid red;
    border-color: red transparent transparent red;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, red 45%, red 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    animation: clipin 0.4s ease-in 1 forwards;
    -webkit-clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
    clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
  }
  @keyframes clipin {
    0% {
      -webkit-clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
      clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
    }
    50% {
      -webkit-clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
      clip-path: polygon(35% 35%, 35% 0, 35% 0, 35% 35%, 0 35%, 0 35%);
    }
    75% {
      -webkit-clip-path: polygon(35% 35%, 35% 0, 100% 0, 100% 100%, 0 100%, 0 35%);
      clip-path: polygon(35% 35%, 35% 0, 100% 0, 100% 100%, 0 100%, 0 35%);
    }
    100% {
      -webkit-clip-path: polygon(100% 100%, 100% 0, 100% 0, 100% 100%, 0 100%, 0 100%);
      clip-path: polygon(100% 100%, 100% 0, 100% 0, 100% 100%, 0 100%, 0 100%);
    }
  }
  body nav ol li ol:after {
    content: "";
    font-family: FontAwesome;
    vertical-align: center;
    font-size: 150px;
    color: #ff8000;
    position: absolute;
    padding-top: 40px;
    height: calc(100% - 40px);
    width: 100%;
    left: -100%;
    top: 0;
    background: orange;
    transform: rotate(-90deg);
    transform-origin: 0% 0%;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  body nav ol li:nth-of-type(1):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(1):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(1):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(1):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ff2b00;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(2):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(2):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(2):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(2):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ff5500;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(3):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(3):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(3):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(3):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ff8000;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(4):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(4):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(4):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(4):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ffaa00;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(5):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(5):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(5):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(5):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #ffd500;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(6):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(6):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(6):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(6):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: yellow;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(7):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(7):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(7):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(7):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #d5ff00;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(8):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(8):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(8):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(8):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #aaff00;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(9):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(9):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(9):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(9):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #80ff00;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:nth-of-type(10):hover a {
    color: #222;
  }
  body nav ol li:nth-of-type(10):hover ol li a {
    color: #fff;
  }
  body nav ol li:nth-of-type(10):hover:before {
    transform: translateY(0) rotate(0deg);
  }
  body nav ol li:nth-of-type(10):before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #55ff00;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform: translateY(-125%) rotate(-5deg);
  }
  body nav ol li:hover ol {
    transform: translateY(0) translateZ(-1px);
  }
  body nav ol li:hover ol:after {
    transform: rotate(0deg);
  }
  body nav ol li:hover ol li:nth-of-type(1n) {
    transform: none;
    margin: 0px;
  }
  body nav ol li:hover ol li:nth-of-type(1n):hover:after {
    opacity: 1;
    top: 0vh;
  }
  body nav ol li a {
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 900;
  }
  body nav ol li ol {
    display: block;
    position: absolute;
    top: 100%;
    transform: translateY(-110%) translateZ(-5px);
    transform-origin: top right;
    z-index: -1;
    width: 120%;
    left: 0;
  }
  body nav ol li ol:hover li:nth-of-type(1n):hover {
    padding: 40px 30px;
  }
  body nav ol li ol li {
    display: block;
    margin: 20px 0;
  }
  body nav ol li ol li a {
    font-size: 14px;
  }
  body nav ol li ol li:before {
    display: none;
  }
  body nav ol li ol li:nth-of-type(1) {
    transition-delay: 0.1s;
    background: #ff2b00;
  }
  body nav ol li ol li:nth-of-type(1):before {
    animation-delay: 0.05s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #ff2b00 45%, #ff2b00 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #ff2b00 transparent transparent #ff2b00;
  }
  body nav ol li ol li:nth-of-type(2) {
    transition-delay: 0.2s;
    background: #ff5500;
  }
  body nav ol li ol li:nth-of-type(2):before {
    animation-delay: 0.1s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #ff5500 45%, #ff5500 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #ff5500 transparent transparent #ff5500;
  }
  body nav ol li ol li:nth-of-type(3) {
    transition-delay: 0.3s;
    background: #ff8000;
  }
  body nav ol li ol li:nth-of-type(3):before {
    animation-delay: 0.15s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #ff8000 45%, #ff8000 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #ff8000 transparent transparent #ff8000;
  }
  body nav ol li ol li:nth-of-type(4) {
    transition-delay: 0.4s;
    background: #ffaa00;
  }
  body nav ol li ol li:nth-of-type(4):before {
    animation-delay: 0.2s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #ffaa00 45%, #ffaa00 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #ffaa00 transparent transparent #ffaa00;
  }
  body nav ol li ol li:nth-of-type(5) {
    transition-delay: 0.5s;
    background: #ffd500;
  }
  body nav ol li ol li:nth-of-type(5):before {
    animation-delay: 0.25s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #ffd500 45%, #ffd500 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #ffd500 transparent transparent #ffd500;
  }
  body nav ol li ol li:nth-of-type(6) {
    transition-delay: 0.6s;
    background: yellow;
  }
  body nav ol li ol li:nth-of-type(6):before {
    animation-delay: 0.3s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, yellow 45%, yellow 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: yellow transparent transparent yellow;
  }
  body nav ol li ol li:nth-of-type(7) {
    transition-delay: 0.7s;
    background: #d5ff00;
  }
  body nav ol li ol li:nth-of-type(7):before {
    animation-delay: 0.35s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #d5ff00 45%, #d5ff00 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #d5ff00 transparent transparent #d5ff00;
  }
  body nav ol li ol li:nth-of-type(8) {
    transition-delay: 0.8s;
    background: #aaff00;
  }
  body nav ol li ol li:nth-of-type(8):before {
    animation-delay: 0.4s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #aaff00 45%, #aaff00 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #aaff00 transparent transparent #aaff00;
  }
  body nav ol li ol li:nth-of-type(9) {
    transition-delay: 0.9s;
    background: #80ff00;
  }
  body nav ol li ol li:nth-of-type(9):before {
    animation-delay: 0.45s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #80ff00 45%, #80ff00 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #80ff00 transparent transparent #80ff00;
  }
  body nav ol li ol li:nth-of-type(10) {
    transition-delay: 1s;
    background: #55ff00;
  }
  body nav ol li ol li:nth-of-type(10):before {
    animation-delay: 0.5s;
    background: linear-gradient(45deg, transparent -50%, transparent 45%, #55ff00 45%, #55ff00 55%, transparent 55%, transparent 125%);
    background-repeat: no-repeat;
    border-color: #55ff00 transparent transparent #55ff00;
  }
  body nav ol li ol li:first-of-type {
    margin-top: 0;
  }
  body nav ol li ol li:nth-of-type(even) {
    transform-origin: top left;
    transform: rotate(5deg);
  }
  body nav ol li ol li:nth-of-type(odd) {
    transform-origin: top right;
    transform: rotate(-5deg);
  }
}
@media (max-width: 666px) {
  body nav {
    position: absolute;
    top: 0;
    height: 45px;
    left: 0;
    background: #222;
    width: 100%;
  }
  body nav:hover ol li:nth-of-type(1n) {
    transform: rotate(0deg);
    margin: 0px;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  body nav:hover ol li:nth-of-type(1) {
    transition-delay: 0.0666666667s;
  }
  body nav:hover ol li:nth-of-type(1):hover a {
    color: #ff2b00;
  }
  body nav:hover ol li:nth-of-type(2) {
    transition-delay: 0.1333333333s;
  }
  body nav:hover ol li:nth-of-type(2):hover a {
    color: #ff5500;
  }
  body nav:hover ol li:nth-of-type(3) {
    transition-delay: 0.2s;
  }
  body nav:hover ol li:nth-of-type(3):hover a {
    color: #ff8000;
  }
  body nav:hover ol li:nth-of-type(4) {
    transition-delay: 0.2666666667s;
  }
  body nav:hover ol li:nth-of-type(4):hover a {
    color: #ffaa00;
  }
  body nav:hover ol li:nth-of-type(5) {
    transition-delay: 0.3333333333s;
  }
  body nav:hover ol li:nth-of-type(5):hover a {
    color: #ffd500;
  }
  body nav:hover ol li:nth-of-type(6) {
    transition-delay: 0.4s;
  }
  body nav:hover ol li:nth-of-type(6):hover a {
    color: yellow;
  }
  body nav:hover ol li:nth-of-type(7) {
    transition-delay: 0.4666666667s;
  }
  body nav:hover ol li:nth-of-type(7):hover a {
    color: #d5ff00;
  }
  body nav:hover ol li:nth-of-type(8) {
    transition-delay: 0.5333333333s;
  }
  body nav:hover ol li:nth-of-type(8):hover a {
    color: #aaff00;
  }
  body nav:hover ol li:nth-of-type(9) {
    transition-delay: 0.6s;
  }
  body nav:hover ol li:nth-of-type(9):hover a {
    color: #80ff00;
  }
  body nav:hover ol li:nth-of-type(10) {
    transition-delay: 0.6666666667s;
  }
  body nav:hover ol li:nth-of-type(10):hover a {
    color: #55ff00;
  }
  body nav:hover:before {
    transform: rotate(45deg);
    box-shadow: 0 0 0 0;
  }
  body nav:hover:after {
    transform: rotate(-45deg);
  }
  body nav:before, body nav:after {
    content: "";
    position: absolute;
    width: 30px;
    height: 3px;
    background: #fff;
    top: 10px;
    left: calc(50% - 15px);
    border-radius: 5px;
    box-shadow: 0 10px 0 0 #fff;
    transition: transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 100ms ease-in-out;
    transition-delay: 0.1s, 0s;
    transform-origin: 0% 50%;
  }
  body nav:after {
    box-shadow: none;
    top: 30px;
    transform-origin: 0% 50%;
  }
  body nav:hover ol {
    transform: translateY(0) translateZ(-1px);
  }
  body nav:hover ol ol {
    transform: none;
  }
  body nav ol {
    position: absolute;
    width: 100%;
    top: 0px;
    display: table;
    left: 0;
    margin: 0px;
    transform: translateY(calc(-100% - 45px)) translateZ(-1px);
    text-align: center;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    background: #000;
    padding: 60px 0 20px;
    height: auto;
  }
  body nav ol li {
    position: relative;
    display: inline-block;
    width: 100%;
    clear: both;
    height: 50px;
    padding: 10px 0;
    margin: 10px 0;
    transition: all 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    background: #000;
  }
  body nav ol li:nth-of-type(even) {
    transform: rotate(-5deg);
  }
  body nav ol li:nth-of-type(odd) {
    transform: rotate(5deg);
  }
  body nav ol li:hover ol {
    height: auto;
    transition: opacity 0.2s ease-in-out;
    opacity: 1;
  }
  body nav ol li a {
    color: #fff;
    text-decoration: none;
  }
  body nav ol ol {
    position: relative;
    transform: none;
    background: transparent;
    display: inline-block;
    width: 100%;
    height: auto;
    top: auto;
    padding: 0;
    height: 0;
    overflow: hidden;
    opacity: 0;
    transition: opacity 0.2s ease-in-out;
  }
  body nav ol ol li {
    font-size: 12px;
    height: auto;
  }
  body nav ol ol li:first-of-type {
    padding-top: 20px;
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="#0">Home</a></li>
    <li class="menu-item"><a href="#0">About</a></li>
    <li class="menu-item">
      <a href="#0">Widgets</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Kabobs</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Contact</a></li>
  </ol>
</nav>
</body>
</html>