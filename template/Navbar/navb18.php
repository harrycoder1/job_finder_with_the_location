<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: "Roboto";
  font-weight: 400;
  overflow: hidden;
}

.container {
  min-width: 100%;
  min-height: 100%;
  display: block;
  position: relative;
}

.menu {
  width: 40px;
  height: 40px;
  display: block;
  position: relative;
}

.list, .intro {
  height: 100%;
  top: 0;
  z-index: -1;
  display: flex;
  position: fixed;
  flex-flow: column wrap;
  align-items: center;
  justify-content: center;
  transition: all 0.75s ease;
}

.list {
  background: #26d07c;
  width: 120px;
  left: -120px;
  opacity: 0;
}
.list span {
  background: #fff;
  width: 100px;
  margin: 5px 0;
  padding: 10px 0;
  text-align: center;
  border-radius: 4px;
}

.intro {
  width: 100%;
  padding: 0 8px;
  left: 0;
  text-align: center;
}

.btn {
  background: #000;
  width: 40px;
  height: 40px;
  top: 10px;
  left: 10px;
  display: block;
  position: absolute;
  border-radius: 50%;
}
.btn::before, .btn::after {
  background: #fff;
  width: 20px;
  height: 2px;
  left: 10px;
  display: block;
  position: absolute;
  transition: all 0.75s ease;
  content: "";
}
.btn::before {
  top: 16px;
}
.btn::after {
  bottom: 16px;
}

.menu:focus-within .list {
  left: 0;
  opacity: 1;
}
.menu:focus-within .intro {
  width: calc(100% - 120px);
  left: 120px;
}
.menu:focus-within .btn::before {
  transform: rotate(45deg) translate(2px, 2px);
}
.menu:focus-within .btn::after {
  transform: rotate(-45deg) translate(2px, -2px);
}
    </style>
</head>
<body>
    
<div class="container">
  <div class="menu" tabindex="1">
    <div class="list">
      <span>Menu 1</span><span>Menu 2</span><span>Menu 3</span>
    </div>
    <div class="intro">
      <div class="btn"></div>
      <h1>Off Canvas Menu <br> Pure CSS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat urna sit amet volutpat luctus. Cras bibendum at massa vel elementum. Aenean hendrerit tellus consequat erat tempor scelerisque. Nunc mattis malesuada lectus. Maecenas vitae ullamcorper quam, non rutrum sem.</p>
    </div>
  </div>
</div>
<a class="me" href="https://codepen.io/uzcho_/pens/popular/?grid_type=list" target="_blank"></a>
</body>
</html>