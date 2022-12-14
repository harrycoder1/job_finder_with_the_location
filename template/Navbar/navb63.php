<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* [1] */
/* [2] */
/* [3] */
/* [4] */
/* [5] */
/* [6] */
/* Styles: */
.icon {
  position: relative;
  background: white;
  cursor: pointer;
  margin: auto;
  color: deepskyblue;
  border-radius: 50%;
  height: 150px;
  width: 150px;
  line-height: 150px;
  text-align: center;
  font-size: 2.75em;
  font-weight: bold;
  transition: 0.24s 0.2s;
}

.icon:hover {
  background: rgba(255, 255, 255, 0.75);
}

.menu {
  position: absolute;
  top: -75px;
  left: -75px;
  border: 150px solid transparent;
  cursor: default;
  border-radius: 50%;
  transform: scale(0);
  transition: transform 1.4s 0.07s;
  z-index: -5;
}

.spread {
  position: absolute;
  top: -100px;
  left: -100px;
  transform-origin: 100px 100px;
  transition: all 0.5s 0.1s;
}

.icon:hover {
  /* Where all the MAGIC happens: */
}
.icon:hover .menu {
  transition: transform 0.4s 0.08s, z-index   0s  0.5s;
  transform: scale(1);
  z-index: 5;
}
.icon:hover .spread, .icon:hover .unit {
  transition: all 0.6s;
}
.icon:hover .spread:nth-child(1) {
  transition-delay: 0.02s;
  transform: rotate(85deg);
}
.icon:hover .spread:nth-child(1) .unit {
  transition-delay: 0.04s;
  transform: rotate(635deg);
}
.icon:hover .spread:nth-child(2) {
  transition-delay: 0.04s;
  transform: rotate(125deg);
}
.icon:hover .spread:nth-child(2) .unit {
  transition-delay: 0.08s;
  transform: rotate(595deg);
}
.icon:hover .spread:nth-child(3) {
  transition-delay: 0.06s;
  transform: rotate(165deg);
}
.icon:hover .spread:nth-child(3) .unit {
  transition-delay: 0.12s;
  transform: rotate(555deg);
}
.icon:hover .spread:nth-child(4) {
  transition-delay: 0.08s;
  transform: rotate(205deg);
}
.icon:hover .spread:nth-child(4) .unit {
  transition-delay: 0.16s;
  transform: rotate(515deg);
}
.icon:hover .spread:nth-child(5) {
  transition-delay: 0.1s;
  transform: rotate(245deg);
}
.icon:hover .spread:nth-child(5) .unit {
  transition-delay: 0.2s;
  transform: rotate(475deg);
}
.icon:hover .spread:nth-child(6) {
  transition-delay: 0.12s;
  transform: rotate(285deg);
}
.icon:hover .spread:nth-child(6) .unit {
  transition-delay: 0.24s;
  transform: rotate(435deg);
}
.icon:hover .spread:nth-child(7) {
  transition-delay: 0.14s;
  transform: rotate(325deg);
}
.icon:hover .spread:nth-child(7) .unit {
  transition-delay: 0.28s;
  transform: rotate(395deg);
}
.icon:hover .spread:nth-child(8) {
  transition-delay: 0.16s;
  transform: rotate(365deg);
}
.icon:hover .spread:nth-child(8) .unit {
  transition-delay: 0.32s;
  transform: rotate(355deg);
}
.icon:hover .spread:nth-child(9) {
  transition-delay: 0.18s;
  transform: rotate(405deg);
}
.icon:hover .spread:nth-child(9) .unit {
  transition-delay: 0.36s;
  transform: rotate(315deg);
}

/* END .icon:hover */
.unit {
  position: absolute;
  background: white;
  font-size: 60%;
  text-decoration: none;
  width: 45px;
  height: 45px;
  line-height: 45px;
  color: dodgerblue;
  border-radius: 50%;
  transition: 0.6s;
}

/* Just CodePen layout stuff: */
body, a, ul, li {
  margin: 0;
  outline: 0;
  padding: 0;
  list-style: none;
}

html, body {
  height: 100%;
  min-height: 300px;
}

body {
  font-family: sans-serif;
  background: radial-gradient(#00bfff, #1e90ff);
  transform: translate3d(0, 0, 0);
}

.icon {
  top: 50%;
  margin-top: -75px;
}

    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="icon">MENU
  <ul class="menu">
    
    <li class="spread">
          <a class="unit" href="#">2</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">4</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">6</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">7</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">8</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">9</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">10</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">11</a>
    </li>
    
    <li class="spread">
          <a class="unit" href="#">14</a>
    </li>
    
  </ul>
</div>
</body>
</html>