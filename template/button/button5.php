<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Space+Mono);
* {
  box-sizing: border-box;
}

body {
  padding: 10px;
  font-size: 16px;
  font-family: "Space Mono", sans-serif;
  text-align: center;
  background-color: #eaf0ff;
  color: #002868;
}

h1 {
  font-size: 1.5em;
}

small {
  color: #888;
}

@media (min-width: 780px) {
  .wrapper {
    width: 600px;
    display: grid;
    grid-template-columns: repeat(2, [col] calc(100%/2));
    grid-auto-rows: 120px;
    margin: 30px auto 40px;
  }
}
.button {
  display: inline-block;
  min-width: 150px;
  margin: 20px auto;
  background: #8BC34A;
  color: #fefefe;
  font-size: 1.2em;
  padding: 1em;
  border-radius: 4px;
  text-align: center;
  position: relative;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
  border: 0;
  transition: border-radius linear 0.05s, width linear 0.05s;
}
.button:focus {
  outline: 0;
}
.button.animate {
  width: 68.1818181818px;
  height: 68.1818181818px;
  min-width: 0;
  border-radius: 50%;
  color: transparent;
}
.button.animate:after {
  position: absolute;
  content: "";
  width: 25px;
  height: 25px;
  border: 4px solid #fefefe;
  border-radius: 50%;
  border-left-color: transparent;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  animation: spin ease-in 2.5s forwards;
  animation-name: spin;
  -webkit-animation-name: spin;
  transition-timing-function: ease-in-out;
  -webkit-transition-timing-function: ease-in-out;
  animation-duration: 2.5s;
  -webkit-animation-duration: 2.5s;
  animation-fill-mode: forwards;
  -webkit-animation-fill-mode: forwards;
}
.button.animate.success:before {
  position: absolute;
  content: "";
  width: 25px;
  height: 12.5px;
  border: 4px solid #fefefe;
  border-right: 0;
  border-top: 0;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(0deg) scale(0);
  transform: translate(-50%, -50%) rotate(0deg) scale(0);
  -webkit-animation: success ease-in 0.15s forwards;
  animation: success ease-in 0.15s forwards;
  animation-delay: 2.5s;
}
.button.animate.error {
  position: relative;
  -webkit-animation: vibrate ease-in 0.5s forwards;
  animation: vibrate ease-in 0.5s forwards;
  -webkit-animation-delay: 2.5s;
  animation-delay: 2.5s;
}
.button.animate.error:before {
  color: #fff;
  position: absolute;
  content: "!";
  font-size: 1.8rem;
  font-weight: bold;
  text-align: center;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0);
  transform: translate(-50%, -50%) scale(0);
  -webkit-animation: error ease-in 0.5s forwards;
  animation: error ease-in 0.5s forwards;
  animation-delay: 2.5s;
}

@keyframes spin {
  0% {
    transform: translate(-50%, -50%) rotate(0deg) scale(1);
  }
  90% {
    transform: translate(-50%, -50%) rotate(1080deg) scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: translate(-50%, -50%) rotate(0deg) scale(1);
  }
  98% {
    -webkit-transform: translate(-50%, -50%) rotate(1080deg) scale(1);
  }
  100% {
    -webkit-transform: translate(-50%, -50%) rotate(1080deg) scale(0);
  }
}
@keyframes success {
  from {
    transform: translate(-50%, -50%) rotate(0) scale(0);
  }
  to {
    transform: translate(-50%, -50%) rotate(-45deg) scale(1);
  }
}
@-webkit-keyframes success {
  from {
    -webkit-transform: translate(-50%, -50%) rotate(0) scale(0);
  }
  to {
    -webkit-transform: translate(-50%, -50%) rotate(-45deg) scale(1);
  }
}
@keyframes error {
  from {
    transform: translate(-50%, -50%) scale(0);
  }
  to {
    transform: translate(-50%, -50%) scale(1);
    background-color: #f44336;
  }
}
@-webkit-keyframes error {
  from {
    -webkit-transform: translate(-50%, -50%) scale(0);
  }
  to {
    -webkit-transform: translate(-50%, -50%) scale(1);
    background-color: #f44336;
  }
}
@keyframes vibrate {
  0%, 30%, 60%, 85%, 100% {
    left: 0;
    background-color: #f44336;
  }
  10%, 40%, 90%, 70% {
    left: -2px;
    background-color: #f44336;
  }
  20%, 50%, 80%, 95% {
    left: 2px;
    background-color: #f44336;
  }
}
    </style>
</head>
<body>
<h1>Animated submit buttons</h1>
<div class="wrapper">
<div class="block">Success state animation<br><button class="button success">Submit</button></div>
<div class="block">Error state animation<br><button class="button error">Submit</button></div>
</div>
<small>* The animation resets for demo purposes</small>
<script>
    var animateButton = function(e) {

e.preventDefault;
//reset animation
e.target.classList.remove('animate');

e.target.classList.add('animate');

e.target.classList.add('animate');
setTimeout(function(){
  e.target.classList.remove('animate');
},6000);
};

var classname = document.getElementsByClassName("button");

for (var i = 0; i < classname.length; i++) {
classname[i].addEventListener('click', animateButton, false);
}
</script>
</body>
</html>