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
  height: 100vh;
  position: relative;
  background: #f7971e;
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
  background: #ffe259;
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
  display: flex;
  align-items: center;
  justify-content: center;
}

.list li {
  height: 100px;
  width: 150px;
  padding: 20px;
}

.list a {
  font-size: 2rem;
  text-decoration: none;
  color: #fff;
  display: block;
  border-bottom: 2px solid transparent;
  transition: all 0.4s ease;
}

.list a:hover {
  border-bottom: 2px solid red;
  color: #4b134f;
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
  width: 30%;
  color: #c94b4b;
  position: absolute;
  left: 0px;
  bottom: 0px;
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

@media screen and (max-width: 650px) {
  .list a {
    font-size: 1.4rem;
  }
}

@media screen and (max-width: 450px) {
  .list {
    display: flex;
    flex-direction: column;
  }
}

    </style>
</head>
<body>
<div class="container">
  <div class="menu_overlay">
    <i class="fas fa-times"></i>
    <ul class="list">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Projects</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="landing_page">
    <div class="menu">
      <i class="fas fa-bars"></i>
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

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<title>Full Page Menu Layout</title>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
<script>
    let overlay = document.querySelector(".menu_overlay");
let open = document.querySelector(".fa-bars");
let close = document.querySelector(".fa-times");

open.addEventListener("click", () => {
  overlay.style.transform = "translateY(0)";
});

close.addEventListener("click", () => {
  overlay.style.transform = "translateY(-110%)";
});


</script>
</body>
</html>