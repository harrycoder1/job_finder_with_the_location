<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Playfair Display", serif;
  font-size: 62.5%;
  overflow-x: hidden;
}

.container {
  width: 100vw;
  min-width: 100%;
  height: 100vh;
  min-height: 100%;
  position: relative;
  background: #f7971e; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #ffd200, #f7971e);
  background: linear-gradient(to right, #ffd200, #f7971e);
}

.menu_overlay {
  width: 100vw;
  height: 100vh;
  position: absolute;
  overflow: hidden;
  color: #fff;
  z-index: 100;
  transform: translateY(-100%);
  transition: transform 0.5s ease;
  background: #ffe259; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #ffa751, #ffe259);
  background: linear-gradient(to right, #ffa751, #ffe259);
  display: flex;
  justify-content: center;
  align-items: center;
}

.list {
  height: 40%;
  width: 40%;
  position: relative;
  list-style: none;
}

.list li {
  height: 50%;
  width: 50%;
  padding: 10px;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.4s ease;
}

.list li:nth-child(1) {
  top: 0;
  left: 0;
  background-color: #4b134f;
}

.list li:nth-child(2) {
  bottom: 0;
  left: 0;
  background-color: #c94b4b;
}

.list li:nth-child(3) {
  top: 0;
  right: 0;
  background-color: #f7971e;
}

.list li:nth-child(4) {
  bottom: 0;
  right: 0;
  background-color: slateblue;
}

.list li:nth-child(1):hover,
.list li:nth-child(2):hover {
  z-index: 1;
  animation: bounce 2s ease infinite;
}

.list li:nth-child(3):hover,
.list li:nth-child(4):hover {
  z-index: 1;
  animation: bounce2 2s ease infinite;
}

@keyframes bounce {
  0% {
    transform: scale(1);
  }
  25% {
    transform: scale(1.1) rotate(10deg);
  }
  50% {
    transform: scale(1);
  }
  75% {
    transform: scale(1.1) rotate(10deg);
  }
  100% {
    transform: scale(1);
  }
}

@keyframes bounce2 {
  0% {
    transform: scale(1);
  }
  25% {
    transform: scale(1.1) rotate(-10deg);
  }
  50% {
    transform: scale(1);
  }
  75% {
    transform: scale(1.1) rotate(-10deg);
  }
  100% {
    transform: scale(1);
  }
}

.list a {
  font-size: 1.6rem;
  text-decoration: none;
  color: #fff;
}

.menu_overlay .fas {
  position: absolute;
  right: 20px;
  top: 20px;
  font-size: 2.5rem;
  transition: all 0.3s ease;
  z-index: 100;
}
.menu_overlay .fas:hover {
  color: #4b134f;
  transform: scale(1.1) rotate(180deg);
}

#menuBtn {
  display: none;
}

.landing_page {
  max-height: 100vh;
  height: 100%;
  width: 100%;
  position: relative;
}

.menu {
  position: absolute;
  right: 20px;
  top: 20px;
}

.fas {
  font-size: 2rem;
  color: #222;
}

.fas:hover {
  color: #4b134f;
}

.side_text {
  height: 10vh;
  width: 60%;
  color: #c94b4b;
  position: absolute;
  left: 0px;
  bottom: 20px;
  text-shadow: 0 0 1px #111;
  padding: 10px;
  font-size: 16px;
  color: #4b134f;
}

.main_text {
  color: #c94b4b;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 0 0 1px #111;
  display: flex;
  flex-direction: column;
}

.h2-r,
.h2-l {
  font-size: 6rem;
}

.h2-r {
  transform: rotate(270deg);
  margin-left: -100px;
  z-index: 10;
}

.h2-l {
  margin-left: 100px;
  background-color: #4b134f;
  padding: 20px;
  z-index: 0;
}

@media screen and (max-width: 750px) and (min-width: 651px) {
  .list li a {
    font-size: 1.4rem;
  }

  .list {
    height: 30%;
    width: 50%;
  }
}

@media screen and (max-width: 650px) {
  .list {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  .list li {
    margin-bottom: 10px;
    position: relative;
  }

  .list a {
    font-size: 1.4rem;
  }
}

    </style>
</head>
<body>
<div class="container">
  <input type="checkbox" name="" id="menuBtn">
  <div class="menu_overlay">
    <label for="menuBtn">
      <i class="fas fa-times"></i>
    </label>
    <ul class="list">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="landing_page">
    <div class="menu">
      <label for="menuBtn">
        <i class="fas fa-bars"></i>
      </label>
    </div>
    <div class="side_text">
      <div class="text_h4 h4-r">Web Developer</div>
      <div class="text_h4 h4-l">Web Designer</div>
    </div>
    <div class="main_text">
      <div class="text_h2 h2-r">Kiran</div>
      <div class="text_h2 h2-l">Raj</div>
    </div>
  </div>
</div>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<script>
    let side1 = document.querySelector(".side1");
let side2 = document.querySelector(".side2");
let overlay = document.querySelector(".menu_overlay");
let open = document.querySelector(".fa-bars");
let close = document.querySelector(".fa-times");

console.log(side1, side2, overlay, open, close);

open.addEventListener("click", () => {
  overlay.style.transform = "translateY(0)";
});

close.addEventListener("click", () => {
  overlay.style.transform = "translateY(-110%)";
});

</script>
</body>
</html>