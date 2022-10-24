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
  background: -webkit-linear-gradient(
    to right,
    #ffd200,
    #f7971e
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to right,
    #ffd200,
    #f7971e
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.menu_overlay {
  width: 100vw;
  height: 100vh;
  position: absolute;
  overflow: hidden;
  color: #fff;
  background: #c94b4b;
  background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
  background: linear-gradient(to right, #4b134f, #c94b4b);
  z-index: 100;
  transform: translateX(110%);
  transition: transform 0.5s ease;
}

.menu_overlay .fas {
  position: absolute;
  right: 20px;
  top: 20px;
  font-size: 2.5rem;
  transition: all 0.3s ease;
}
.menu_overlay .fas:hover {
  color: #4b134f;
  transform: scale(1.1) rotate(180deg);
}

.menu_overlay ul {
  height: 100%;
  width: 100%;
  list-style: none;
  padding: 100px;
  margin-left: 50px;
  font-size: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
  justify-content: space-around;
  align-content: center;
  grid-gap: 20px;
}

.menu_overlay li {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(247, 151, 30);
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  border-radius: 20px;
  position: relative;
  width: 100%;
  height: 100%;
}

.menu_overlay a {
  color: #fff;
  text-decoration: none;
}

/*  */
.ribbon {
  position: absolute;
  right: -5px;
  top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px;
  height: 75px;
  text-align: right;
}

.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #4b134f;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(45deg);
  width: 100px;
  display: block;
  background: linear-gradient(#06d6a0 0%, #06d6a0 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px;
  right: -21px;
}

.ribbon span::before {
  content: "";
  position: absolute;
  left: 0px;
  top: 100%;
  z-index: -1;
  border-left: 3px solid #06d6a0;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #06d6a0;
}

.ribbon span::after {
  content: "";
  position: absolute;
  right: 0px;
  top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #06d6a0;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #06d6a0;
}

#menuBtn {
  display: none;
}

#menuBtn:checked ~ .menu_overlay {
  transform: translateX(0);
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
  z-index: 100;
}

.h2-l {
  margin-left: 100px;
  background-color: #4b134f;
  padding: 20px;
  z-index: 0;
}

@media screen and (max-width: 650px) {
  .list a {
    font-size: 2rem;
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
    <ul>
      <li>
        <div class="ribbon"><span></span></div>
        <a href="#">Home</a>
      </li>
      <li>
        <div class="ribbon"><span></span></div>
        <a href="#">About</a>
      </li>
      <li>
        <div class="ribbon"><span></span></div>
        <a href="#">Projects</a>
      </li>
      <li>
        <div class="ribbon"><span></span></div>
        <a href="#">Blog</a>
      </li>
      <li>
        <div class="ribbon"><span></span></div>
        <a href="#">Contact</a>
      </li>
      <li>
        <div class="ribbon"><span></span></div>
        <a href="#"></a>
      </li>
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

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<title>Full Page Menu Layout</title>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
<script>
    let li = document.querySelectorAll("li");

li.forEach((elem) => {
  elem.addEventListener("mouseover", (e) => {
    let spanElem = elem.querySelector(".ribbon span");
    let val = e.target.textContent.trim();

    if (spanElem.textContent == "") {
      spanElem.textContent = val;
    }
  });

  elem.addEventListener("mouseleave", (e) => {
    let spanElem = elem.querySelector(".ribbon span");
    spanElem.textContent = "";
  });
});

</script>
</body>
</html>