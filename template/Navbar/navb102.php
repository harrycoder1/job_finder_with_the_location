<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Varela+Round");
html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
  padding: 0;
  margin: 0;
}
body {
  font-family: 'Varela Round', sans-serif;
  padding: 0 10px;
}
.menu__container {
  max-width: 500px;
  height: 100px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px;
  margin-bottom: 50px;
  border-radius: 5px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.1);
  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
  transform: perspective(1000px) rotateX(-45deg) rotateY(0deg) rotateZ(0deg);
  transform-origin: center center 0px;
  transition: all 0.5s ease-out;
}
.menu__container:hover {
  transform: perspective(1000px) rotateX(355deg) rotateY(0deg) rotateZ(0deg);
  box-shadow: 0 10px 40px rgba(0,0,0,0);
}
.menu__container .menu {
  display: flex;
  justify-content: space-around;
  align-items: center;
  max-width: 100%;
  height: 100%;
}
.menu__container .menu a {
  text-decoration: none;
  color: #fff;
  font-size: 17px;
  transition: all 0.1s linear;
}
.menu__container .menu a:hover {
  transform: scale(1.1, 1.1);
}
.menu__container--2 {
  background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
  transform: perspective(1000px) rotateX(0deg) rotateY(45deg) rotateZ(0deg);
}
.menu__container--2:hover {
  transform: perspective(1000px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
}
.menu__container--3 {
  background-image: linear-gradient(to top, #a7a6cb 0%, #8989ba 52%, #8989ba 100%);
  transform: perspective(1000px) rotateX(0deg) rotateY(-45deg) rotateZ(0deg);
}
.menu__container--3:hover {
  transform: perspective(1000px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
}
.menu__container--4 {
  background-image: linear-gradient(-20deg, #ddd6f3 0%, #faaca8 100%, #faaca8 100%);
  transform: perspective(1000px) rotateX(45deg) rotateY(5deg) rotateZ(-15deg);
}
.menu__container--4:hover {
  transform: perspective(1000px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
}
.menu__container--5 {
  background-image: linear-gradient(to top, #a3bded 0%, #6991c7 100%);
  transform: perspective(1000px) rotateX(180deg) rotateY(0deg) rotateZ(0deg);
}
.menu__container--5:hover {
  transform: perspective(1000px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
}

    </style>
</head>
<body>
    
<div class="menu__container">
  <div class="menu"><a href="javascript:;">Home</a><a href="javascript:;">About</a><a href="javascript:;">Contact</a><a href="javascript:;">Faq</a></div>
</div>
<div class="menu__container menu__container--2">
  <div class="menu"><a href="javascript:;">Home</a><a href="javascript:;">About</a><a href="javascript:;">Contact</a><a href="javascript:;">Faq</a></div>
</div>
<div class="menu__container menu__container--3">
  <div class="menu"><a href="javascript:;">Home</a><a href="javascript:;">About</a><a href="javascript:;">Contact</a><a href="javascript:;">Faq</a></div>
</div>
<div class="menu__container menu__container--4">
  <div class="menu"><a href="javascript:;">Home</a><a href="javascript:;">About</a><a href="javascript:;">Contact</a><a href="javascript:;">Faq</a></div>
</div>
<div class="menu__container menu__container--5">
  <div class="menu"><a href="javascript:;">Home</a><a href="javascript:;">About</a><a href="javascript:;">Contact</a><a href="javascript:;">Faq</a></div>
</div>
</body>
</html>