<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #060505;
}

.button {
  border: 2px solid #d2bdff;
  height: 80px;
  width: 200px;
  border-radius: 4px;
  position: relative;
  cursor: pointer;
  font-family: "Roboto", sans-serif;
  margin: 25px;
}
.button::after {
  content: "HOVER ME";
  position: absolute;
  top: 41%;
  left: 50%;
  transform: translate(-50%);
  color: #d2bdff;
  transition: all 0.1s linear;
}
.button::before {
  content: "";
  position: relative;
  display: block;
  height: 15px;
  width: 15px;
  background: #d2bdff;
  box-shadow: 0px 0px 10px 3px #0ff;
  margin-left: -8px;
  margin-top: -8px;
  opacity: 0;
  transition: all 0.1s linear;
  border-radius: 100%;
  animation: star 1.3s linear infinite;
}
@keyframes star {
  0% {
    margin-left: -8px;
    margin-top: -8px;
  }
  25% {
    margin-left: 194px;
    margin-top: -8px;
  }
  50% {
    margin-left: 194px;
    margin-top: 75px;
  }
  75% {
    margin-left: -8px;
    margin-top: 75px;
  }
  100% {
    margin-left: -8px;
    margin-top: -8px;
  }
}
.button:hover::before {
  opacity: 1;
  animation: star 1.3s linear infinite;
}
.button:hover::after {
  content: "I'M GLOWING";
  text-shadow: 0 0 10px #fff, 0 0 10px #fff, 0 0 20px #82bedc, 0 0 30px #82bedc, 0 0 40px #82bedc, 0 0 50px #82bedc, 0 0 60px #82bedc;
}

.button2 {
  position: relative;
  display: inline-block;
  padding: 30px 61px;
  border-radius: 4px;
  color: #03e9f4;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  margin: 25px;
  font-family: "Roboto", sans-serif;
  filter: hue-rotate(0deg);
  border: 2px solid #d2bdff;
  transition: all 0.1s linear;
}
.button2:hover {
  border: 1px solid transparent;
}
.button2:hover span {
  position: absolute;
  display: block;
}
.button2:hover span:nth-child(1) {
  filter: hue-rotate(0deg);
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, transparent, #3a86ff);
  animation: animate1 1s linear infinite;
}
@keyframes animate1 {
  0% {
    left: -100%;
  }
  50%, 100% {
    left: 100%;
  }
}
.button2:hover span:nth-child(2) {
  filter: hue-rotate(60deg);
  top: -100%;
  right: 0;
  width: 3px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #3a86ff);
  animation: animate2 1s linear infinite;
  animation-delay: 0.25s;
}
@keyframes animate2 {
  0% {
    top: -100%;
  }
  50%, 100% {
    top: 100%;
  }
}
.button2:hover span:nth-child(3) {
  filter: hue-rotate(120deg);
  bottom: 0;
  right: 0;
  width: 100%;
  background: linear-gradient(270deg, transparent, #3a86ff);
  animation: animate3 1s linear infinite;
  animation-delay: 0.5s;
}
@keyframes animate3 {
  0% {
    right: -100%;
    height: 3px;
  }
  50%, 100% {
    height: 2px;
    right: 100%;
  }
}
.button2:hover span:nth-child(4) {
  filter: hue-rotate(300deg);
  bottom: -100%;
  left: 0;
  width: 3px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #3a86ff);
  animation: animate4 1s linear infinite;
  animation-delay: 0.75s;
}
@keyframes animate4 {
  0% {
    bottom: -100%;
  }
  50%, 100% {
    bottom: 100%;
  }
}
    </style>
</head>
<body>
<div class="button"></div>

<div class="button2">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  HOVER ME
</div>
</body>
</html>