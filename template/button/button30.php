<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}

html {
  height: 100vh;
  min-height: 100vh;
}
html body {
  height: 100%;
  margin: 0;
  display: flex;
  background: #8d99ae;
  background: linear-gradient(to right, #2b2d42, #8d99ae, #edf2f4);
}
html body .container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  background: #fff;
  width: 75rem;
  padding: 4rem;
  box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.2);
}
html body .me {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  padding: 2rem;
  background: white;
  box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.2);
}
html body .me .fab {
  font-size: 1.75rem;
  margin: 0 1rem;
  color: #8d99ae;
  transition: 0.5s;
}
html body .me .fab:hover {
  color: #2b2d42;
}
html body .heading {
  text-align: center;
}
html body .heading h1 {
  color: #8d99ae;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 2.5rem;
}
html body .buttons {
  display: flex;
  align-items: center;
  justify-content: center;
}
html body .buttons .btn {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  padding: 1rem 2rem;
  margin: 0 1rem;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
html body .buttons .btn:nth-child(1) {
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid #8d99ae;
  padding: 1rem 2rem 1rem 3rem;
}
html body .buttons .btn:nth-child(1) .circle {
  background-color: #8d99ae;
  height: 1rem;
  width: 1rem;
  border-radius: 100%;
  margin-right: 1rem;
  position: absolute;
  left: 1rem;
  z-index: -1;
  transition: 0.25s;
}
html body .buttons .btn:nth-child(1) .text {
  position: relative;
  left: 0;
  transition: 0.5s;
}
html body .buttons .btn:nth-child(1):hover {
  color: white;
}
html body .buttons .btn:nth-child(1):hover .circle {
  transform: scale(25);
}
html body .buttons .btn:nth-child(1):hover .text {
  left: -0.5rem;
}
html body .buttons .btn:nth-child(2) {
  padding: 0;
}
html body .buttons .btn:nth-child(2) .text {
  border-top: 2px solid #8d99ae;
  border-bottom: 2px solid #8d99ae;
  padding: 1rem 2rem;
  position: relative;
  z-index: -1;
  transition: 0.25s;
}
html body .buttons .btn:nth-child(2):after, html body .buttons .btn:nth-child(2):before {
  content: "";
  position: absolute;
  z-index: 2;
  height: 2px;
  width: 0;
  left: 50%;
  background-color: #2b2d42;
  transition: 0.25s;
}
html body .buttons .btn:nth-child(2):after {
  bottom: 0;
}
html body .buttons .btn:nth-child(2):before {
  top: 0;
}
html body .buttons .btn:nth-child(2):hover .text {
  border-color: transparent;
}
html body .buttons .btn:nth-child(2):hover:before, html body .buttons .btn:nth-child(2):hover:after {
  left: 0;
  width: 100%;
}
html body .buttons .btn:nth-child(3) .text {
  color: #8d99ae;
  transition: 0.5s;
}
html body .buttons .btn:nth-child(3):after, html body .buttons .btn:nth-child(3):before {
  content: "";
  position: absolute;
  z-index: 2;
  height: 2px;
  width: 100%;
  left: 0;
  transform: translateX(-100%);
  background-color: #2b2d42;
  transition: 0.5s;
}
html body .buttons .btn:nth-child(3):before {
  top: 0;
}
html body .buttons .btn:nth-child(3):after {
  bottom: 0;
}
html body .buttons .btn:nth-child(3):hover .text {
  color: #2b2d42;
}
html body .buttons .btn:nth-child(3):hover:before, html body .buttons .btn:nth-child(3):hover:after {
  transform: translateX(100%);
}
html body .buttons .btn:nth-child(4) .text {
  transition: 0.5s;
}
html body .buttons .btn:nth-child(4) .left, html body .buttons .btn:nth-child(4) .right, html body .buttons .btn:nth-child(4):before, html body .buttons .btn:nth-child(4):after {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 0;
  width: 0;
  background: #ef233c;
  transition: 0.5s;
}
html body .buttons .btn:nth-child(4):before, html body .buttons .btn:nth-child(4):after {
  content: "";
}
html body .buttons .btn:nth-child(4):hover .text {
  color: #ef233c;
}
html body .buttons .btn:nth-child(4):hover .left, html body .buttons .btn:nth-child(4):hover .right {
  top: 0;
  width: 2px;
  height: 100%;
}
html body .buttons .btn:nth-child(4):hover .left {
  left: 0;
}
html body .buttons .btn:nth-child(4):hover .right {
  left: calc(100% - 2px);
}
html body .buttons .btn:nth-child(4):hover:before, html body .buttons .btn:nth-child(4):hover:after {
  height: 2px;
  width: 100%;
  left: 0;
}
html body .buttons .btn:nth-child(4):hover:before {
  top: 0;
}
html body .buttons .btn:nth-child(4):hover:after {
  top: calc(100% - 2px);
}
html body .buttons .btn:nth-child(5) .text {
  transition: 0.5s;
}
html body .buttons .btn:nth-child(5):before, html body .buttons .btn:nth-child(5):after {
  content: "";
  position: absolute;
  z-index: -1;
  height: 0;
  width: 0;
  background: #d90429;
  top: 50%;
  left: 50%;
  border-radius: 100%;
}
html body .buttons .btn:nth-child(5):hover .text {
  color: white;
}
html body .buttons .btn:nth-child(5):hover:before, html body .buttons .btn:nth-child(5):hover:after {
  transform: translateY(-50%) translateX(-50%);
}
html body .buttons .btn:nth-child(5):hover:before {
  -webkit-animation: 2s noway forwards;
          animation: 2s noway forwards;
}
html body .buttons .btn:nth-child(5):hover:after {
  -webkit-animation: 0.5s wow 2s forwards;
          animation: 0.5s wow 2s forwards;
}

@-webkit-keyframes wow {
  to {
    height: 20rem;
    width: 20rem;
  }
}

@keyframes wow {
  to {
    height: 20rem;
    width: 20rem;
  }
}
@-webkit-keyframes noway {
  to {
    height: 1rem;
    width: 1rem;
  }
}
@keyframes noway {
  to {
    height: 1rem;
    width: 1rem;
  }
}
    </style>
</head>
<body>
    
<div class="bar"></div>
<div class="bar"> </div>
<div class="bar"></div>
<div class="bar"></div>
<div class="bar"></div>
<div class="container">
  <div class="heading">
    <h1>Button Animations You Probably Shouldn't Use</h1>
  </div>
  <div class="buttons">
    <div class="btn btn1"><span class="circle"></span><span class="text">Wowzers</span></div>
    <div class="btn btn2"><span class="text">Kabang</span></div>
    <div class="btn btn3"><span class="text">Kerplow</span></div>
    <div class="btn btn4"><span class="text">Boinkers</span><span class="left"></span><span class="right"></span></div>
    <div class="btn btn5"><span class="text">Ohhh My</span></div>
  </div>
</div>
<div class="me"><a href="https://github.com/cmdeveloped" target="_blank"><i class="fab fa-github"></i></a><a href="https://twitter.com/collinscode_" target="_blank"><i class="fab fa-twitter"></i></a><a href="https://codepen.io/collinscode" target="_blank"><i class="fab fa-codepen"></i></a><a href="https://linkedin.com/in/cmdeveloped" target="_blank"><i class="fab fa-linkedin"></i></a></div>
</body>
</html>