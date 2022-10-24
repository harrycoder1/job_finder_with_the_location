<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background: #fff;
  font-family: "Comfortaa", sans-serif;
  position: relative;
}

footer {
  text-align: center;
  padding: 1em;
  max-width: 80px;
  position: fixed;
  top: 0;
  right: 25px;
}
footer a {
  text-decoration: none;
  display: inline-block;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  background: transparent;
  border: 1px dashed #fff;
  color: #fff;
  margin: 5px;
}
footer a:hover {
  background: rgba(255, 255, 255, 0.1);
}
footer a .icons {
  margin-top: 12px;
  display: inline-block;
  font-size: 20px;
}

* {
  box-sizing: border-box;
}

.main-content {
  text-align: center;
  text-transform: uppercase;
  scroll-snap-type: y mandatory;
  position: relative;
  height: 100vh;
  overflow-y: scroll;
}

.hover,
.word,
h1 {
  cursor: pointer;
}

h1 {
  position: relative;
  color: #fff;
  font: 900 60px Montserrat;
  text-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}

.concept {
  position: relative;
  padding: 5em;
  height: 100vh;
  overflow: hidden;
  scroll-snap-align: center;
}
.concept:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: radial-gradient(rgba(0, 0, 0, 0.3), transparent);
  opacity: 0;
  transition: all 1s cubic-bezier(0.19, 1, 0.22, 1);
}
.concept:hover:before {
  opacity: 0.5;
}

.concept-one {
  display: grid;
  grid: repeat(3, 1fr)/repeat(3, 1fr);
  background: yellow;
  padding: 8em;
  background: url("https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/desert.jpg") no-repeat center center/cover;
}
.concept-one h1 {
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  top: 50%;
  margin-top: -30px;
  transition: 0.5s ease;
  z-index: 0;
  letter-spacing: 25px;
}
.concept-one .hover {
  z-index: 1;
}
.concept-one .hover-1:hover ~ h1 {
  left: 30px;
  margin-top: -10px;
}
.concept-one .hover-2:hover ~ h1 {
  margin-top: -10px;
}
.concept-one .hover-3:hover ~ h1 {
  right: 30px;
  margin-top: -10px;
}
.concept-one .hover-4:hover ~ h1 {
  left: 30px;
}
.concept-one .hover-6:hover ~ h1 {
  right: 30px;
}
.concept-one .hover-7:hover ~ h1 {
  left: 30px;
  margin-top: -50px;
}
.concept-one .hover-8:hover ~ h1 {
  margin-top: -50px;
}
.concept-one .hover-9:hover ~ h1 {
  right: 30px;
  margin-top: -50px;
}

.concept-two {
  display: grid;
  grid: 100%/repeat(6, 1fr);
  padding: 5em 15em;
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/forest.jpg) center center/cover;
}
.concept-two .hover {
  position: relative;
  display: grid;
  place-items: center;
}
.concept-two h1 {
  color: transparent;
  text-align: 0 1px 1px;
  -webkit-text-stroke: 2px #fff;
  text-shadow: none;
  transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.concept-two .hover:hover h1 {
  transform: scale(1.5);
  color: #fff;
  -webkit-text-stroke: 2px transparent;
  text-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.concept-three {
  padding: 5em;
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/canyon.jpg) center center/cover;
}
.concept-three .word {
  display: flex;
  align-items: center;
  max-width: 500px;
  margin: auto;
}
.concept-three .hover {
  flex: 1;
  display: grid;
  height: calc(100vh - 10em);
  grid: repeat(2, 2fr)/100%;
  position: relative;
}
.concept-three .hover div {
  position: relative;
  z-index: 5;
}
.concept-three .hover div:nth-child(1):hover ~ h1 {
  margin-top: -10px;
}
.concept-three .hover div:nth-child(2):hover ~ h1 {
  margin-top: -50px;
}
.concept-three h1 {
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  top: 50%;
  margin-top: -30px;
  transition: 0.3s cubic-bezier(0.23, 1, 0.32, 1);
  z-index: 0;
}

.concept-four {
  height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  letter-spacing: 2em;
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/glacier.jpg) no-repeat center center/cover;
}
.concept-four h1 {
  display: inline-block;
}
.concept-four:hover h1 {
  letter-spacing: 25px;
  transform: scale(1.3);
  transition: 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.concept-five {
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/mountains.jpg) center center/cover;
  display: flex;
  align-items: center;
}
.concept-five .word {
  width: 600px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 80%;
}
.concept-five .word:hover .char:nth-child(even) {
  top: 20px;
}
.concept-five .word:hover .char:nth-child(odd) {
  top: -20px;
}
.concept-five .char {
  flex: 1;
  position: relative;
  display: inline-block;
  top: 0;
  transition: 0.5s cubic-bezier(0.19, 1, 0.22, 1);
}

.concept-six {
  display: flex;
  align-items: center;
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/beach.jpg) top right/cover;
}
.concept-six .word {
  width: 550px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 80%;
}
.concept-six .word:hover .char:nth-child(1) {
  margin-top: -30px;
  transform: rotate(-20deg);
}
.concept-six .word:hover .char:nth-child(2) {
  margin: -40px 0px 0 10px;
  transform: rotate(5deg);
}
.concept-six .word:hover .char:nth-child(3) {
  margin: 15px 0 0 10px;
  transform: rotate(12deg);
}
.concept-six .word:hover .char:nth-child(4) {
  margin: -25px 0 0;
  transform: rotate(5deg);
}
.concept-six .word:hover .char:nth-child(5) {
  margin: -40px 5px 0;
  transform: rotate(-10deg);
}
.concept-six .char {
  flex: 1;
  transition: 0.3s ease-in-out;
  position: relative;
}

.concept-seven {
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/fries.jpg) top center/cover;
  display: flex;
  justify-content: center;
  align-items: center;
}
.concept-seven h1 {
  letter-spacing: 35px;
  position: relative;
}
.concept-seven h1:before {
  content: "fries";
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  max-width: 400px;
  color: transparent;
  letter-spacing: 10px;
  text-shadow: none;
}
.concept-seven:hover h1:before {
  transition: 0.6s ease;
  color: rgba(255, 255, 255, 0.8);
  animation: jump-out 0.6s ease forwards;
}

@keyframes jump-out {
  0% {
    opacity: 0;
    transform: scale(1);
  }
  20% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: scale(2);
  }
}
.concept-eight {
  background: url(https://meowlivia.s3.us-east-2.amazonaws.com/codepen/background/falls.jpg) center center/cover;
  display: flex;
  align-items: center;
  justify-content: center;
}
.concept-eight .word {
  display: flex;
  align-items: center;
  justify-items: center;
  width: 450px;
  height: 80%;
}
.concept-eight .word:hover .char:before {
  transition: 0.6s ease;
  color: rgba(255, 255, 255, 0.8);
  animation: falls 1s ease forwards;
}
.concept-eight .word:hover .char:nth-child(1):before {
  animation: falls 0.9s ease 0.2s forwards;
}
.concept-eight .word:hover .char:nth-child(2n+3):before {
  animation: falls 1s ease 0.3s forwards;
}
.concept-eight .char {
  flex: 1;
  position: relative;
}
.concept-eight .char:before {
  content: attr(data-content);
  position: absolute;
  top: 0;
  color: transparent;
  text-shadow: none;
}

@keyframes falls {
  0% {
    opacity: 0;
    top: 0;
  }
  20% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    top: 100px;
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="main-content">
  <div class="concept concept-one">
    <div class="hover hover-1"></div>
    <div class="hover hover-2"></div>
    <div class="hover hover-3"></div>
    <div class="hover hover-4"></div>
    <div class="hover hover-5"></div>
    <div class="hover hover-6"></div>
    <div class="hover hover-7"></div>
    <div class="hover hover-8"></div>
    <div class="hover hover-9"></div>
    <h1>Desert</h1>
  </div>
  <div class="concept concept-two">
    <div class="hover">
      <h1>F</h1>
    </div>
    <div class="hover">
      <h1>O</h1>
    </div>
    <div class="hover">
      <h1>R</h1>
    </div>
    <div class="hover">
      <h1>E</h1>
    </div>
    <div class="hover">
      <h1>S</h1>
    </div>
    <div class="hover">
      <h1>T</h1>
    </div>
  </div>
  <div class="concept concept-three">
    <div class="word">
      <div class="hover">
        <div></div>
        <div></div>
        <h1>C</h1>
      </div>
      <div class="hover">
        <div></div>
        <div></div>
        <h1>A</h1>
      </div>
      <div class="hover">
        <div></div>
        <div></div>
        <h1>N</h1>
      </div>
      <div class="hover">
        <div></div>
        <div></div>
        <h1>Y</h1>
      </div>
      <div class="hover">
        <div></div>
        <div></div>
        <h1>O</h1>
      </div>
      <div class="hover">
        <div></div>
        <div></div>
        <h1>N</h1>
      </div>
    </div>
  </div>
  <div class="concept concept-four">
    <h1>Glacier</h1>
  </div>
  <div class="concept concept-five">
    <h1 class="word"><span class="char">M</span><span class="char">O</span><span class="char">U</span><span class="char">N</span><span class="char">T</span><span class="char">A</span><span class="char">I</span><span class="char">N</span><span class="char">S</span>
    </h1>
  </div>
  <div class="concept concept-six">
    <h1 class="word"><span class="char">O</span><span class="char">C</span><span class="char">E</span><span class="char">A</span><span class="char">N</span>
    </h1>
  </div>
  <div class="concept concept-seven">
    <h1>fries</h1>
  </div>
  <div class="concept concept-eight">
    <h1 class="word">
      <div class="char" data-content="F">F</div>
      <div class="char" data-content="A">A</div>
      <div class="char" data-content="L">L</div>
      <div class="char" data-content="L">L</div>
      <div class="char" data-content="S">S</div>
    </h1>
  </div>
</div>
<footer><a href="https://twitter.com/meowlivia_" target="_blank"><i class="icon-social-twitter icons"></i></a><a href="https://github.com/oliviale" target="_blank"><i class="icon-social-github icons"></i></a><a href="https://dribbble.com/oliviale" target="_blank"><i class="icon-social-dribbble icons"></i></a></footer>
</body>
</html>