<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lora:400,400i,700");
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
  font-family: Lora, sans-serif;
}

p {
  margin: 0;
}

#burger-toggle {
  position: absolute;
  appearance: none;
  opacity: 0;
}
#burger-toggle:checked ~ .menu {
  opacity: 1;
  visibility: visible;
}
#burger-toggle:checked ~ .menu .menu-nav-link span div,
#burger-toggle:checked ~ .menu img,
#burger-toggle:checked ~ .menu .title p {
  transform: translateY(0);
  transition: 1.2s 0.1s cubic-bezier(0.35, 0, 0.07, 1);
}
#burger-toggle:checked ~ .menu .image-link:nth-child(1) img {
  transition-delay: 0.18s;
}
#burger-toggle:checked ~ .menu .image-link:nth-child(2) img {
  transition-delay: 0.26s;
}
#burger-toggle:checked ~ .menu .image-link:nth-child(3) img {
  transition-delay: 0.34s;
}
#burger-toggle:checked ~ .menu .image-link:nth-child(4) img {
  transition-delay: 0.42s;
}
#burger-toggle:checked ~ .burger-menu .line::after {
  transform: translateX(0);
}
#burger-toggle:checked ~ .burger-menu .line:nth-child(1) {
  transform: translateY(calc(var(--burger-menu-radius) / 5)) rotate(45deg);
}
#burger-toggle:checked ~ .burger-menu .line:nth-child(2) {
  transform: scaleX(0);
}
#burger-toggle:checked ~ .burger-menu .line:nth-child(3) {
  transform: translateY(calc(var(--burger-menu-radius) / -5)) rotate(-45deg);
}

.burger-menu {
  --burger-menu-radius: 4em;
  position: fixed;
  top: 5vh;
  left: 5vw;
  z-index: 100;
  display: block;
  width: var(--burger-menu-radius);
  height: var(--burger-menu-radius);
  outline: none;
  cursor: pointer;
}
.burger-menu .line {
  position: absolute;
  left: 25%;
  width: 50%;
  height: 3px;
  background: rgba(43, 61, 79, 0.3);
  border-radius: 10px;
  overflow: hidden;
  transition: 0.5s;
}
.burger-menu .line:nth-child(1) {
  top: 30%;
}
.burger-menu .line:nth-child(2) {
  top: 50%;
}
.burger-menu .line:nth-child(3) {
  top: 70%;
}
.burger-menu .line::after {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--primary-color-darker);
  transform: translateX(-100%);
  transition: 0.25s;
}
.burger-menu .line:nth-child(2)::after {
  transition-delay: 0.1s;
}
.burger-menu .line:nth-child(3)::after {
  transition-delay: 0.2s;
}
.burger-menu:hover .line::after {
  transform: translateX(0);
}

.menu {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #1a1e23;
  opacity: 0;
  overflow-x: hidden;
  visibility: hidden;
  transition: 0.3s;
}
@media screen and (max-width: 750px) {
  .menu {
    display: block;
  }
}
.menu-nav {
  display: flex;
  flex-wrap: wrap;
  margin: 0;
  padding: 0;
  text-align: center;
  list-style-type: none;
}
@media screen and (max-width: 750px) {
  .menu-nav {
    flex-direction: column;
  }
}
.menu-nav-item {
  flex: 1;
}
.menu-nav-link {
  position: relative;
  display: inline-flex;
  font-size: 2rem;
  color: white;
  text-decoration: none;
}
.menu-nav-link span {
  overflow: hidden;
}
.menu-nav-link span div {
  transform: translateY(102%);
}
.menu-nav-link::after {
  position: absolute;
  content: "";
  top: 100%;
  left: 0;
  width: 100%;
  height: 3px;
  background: var(--primary-color);
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.5s;
}
.menu-nav-link:hover::after {
  transform: scaleX(1);
  transform-origin: left;
}
.menu .gallery {
  margin-top: 60px;
  text-align: center;
}
.menu .title {
  font-size: 24px;
  color: white;
  overflow: hidden;
}
.menu .title p {
  font-size: 12px;
  letter-spacing: 2px;
  text-transform: uppercase;
  transform: translateY(102%);
}
.menu .images {
  margin-top: 36px;
  display: flex;
  flex-wrap: wrap;
}
@media screen and (max-width: 750px) {
  .menu .images {
    justify-content: center;
  }
}
.menu .images .image-link {
  width: 15vw;
  margin: 0 12px;
  overflow: hidden;
}
@media screen and (max-width: 750px) {
  .menu .images .image-link {
    width: 40vw;
    margin: 0 12px 12px 0;
  }
}
.menu .images .image-link .image {
  position: relative;
  transition: 0.6s;
}
.menu .images .image-link .image::before {
  position: absolute;
  content: attr(data-label);
  top: 0;
  left: 0;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  color: white;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  transition: 0.4s;
}
.menu .images .image-link:hover .image {
  transform: scale(1.2);
}
.menu .images .image-link:hover .image::before {
  opacity: 1;
}
.menu .images img {
  height: 250px;
  transform: translateY(102%);
}
    </style>
</head>
<body>
<h1>Click the burger menu to see the magic.</h1>
<input type="checkbox" id="burger-toggle">
<label for="burger-toggle" class="burger-menu">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</label>
<div class="menu">
  <div class="menu-inner">
    <ul class="menu-nav">
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>Home</div>
          </span></a></li>
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>About</div>
          </span></a></li>
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>Service</div>
          </span></a></li>
      <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
            <div>Team</div>
          </span></a></li>
    </ul>
    <div class="gallery">
      <div class="title">
        <p>Sora Gallery</p>
      </div>
      <div class="images">
        <a class="image-link" href="#">
          <div class="image" data-label="Star"><img src="https://i.loli.net/2019/11/23/cnKl1Ykd5rZCVwm.jpg" alt=""></div>
        </a>
        <a class="image-link" href="#">
          <div class="image" data-label="Sun"><img src="https://i.loli.net/2019/11/16/FLnzi5Kq4tkRZSm.jpg" alt=""></div>
        </a>
        <a class="image-link" href="#">
          <div class="image" data-label="Tree"><img src="https://i.loli.net/2019/10/18/uXF1Kx7lzELB6wf.jpg" alt=""></div>
        </a>
        <a class="image-link" href="#">
          <div class="image" data-label="Sky"><img src="https://i.loli.net/2019/10/18/buDT4YS6zUMfHst.jpg" alt=""></div>
        </a>
      </div>
    </div>
  </div>
</div>
</body>
</html>