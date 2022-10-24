<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
  padding: 0px;
  margin: 0px;
  background: #FFF;
  font-family: 'Ubuntu', sans-serif;
  color: #FFF;
  height: 100%;
}
body {
  padding-top: 5rem;
  box-sizing: border-box;
}
body * {
  box-sizing: border-box;
}
.bg {
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/545665/bg-work.jpg');
  background-size: cover;
  background-position: center;
  position: fixed;
  filter: blur(10px);
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
}
.card {
  max-width: 350px;
  min-height: 400px;
  background: #FFF;
  margin: auto;
  display: flex;
  flex-direction: column;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.35);
  border-radius: 3px;
  position: relative;
  z-index: 1;
}
.card .display {
  flex: 1;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/545665/bg-work.jpg');
  background-size: cover;
  background-position: center;
  width: 100%;
  border-radius: 3px 3px 0px 0px;
}
.card .nav {
  height: 60px;
  background: #fa7;
  padding: 0px 20px;
  line-height: 60px;
  border-radius: 0px 0px 3px 3px;
}
.card .nav .text {
  display: inline-block;
}
.card .nav .btn {
  position: relative;
  display: inline-block;
  float: right;
}
.card .nav .btn i {
  line-height: 60px;
}
.card .nav .menu {
  line-height: 40px;
  width: 150px;
  position: absolute;
  top: 55px;
  left: 40px;
  transform: translateY(-100%) translateX(-100%) scale(0.5, 0);
  transform-origin: 90% 90%;
  background: #FFF;
  color: #444;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25);
  border-radius: 20px;
  overflow: hidden;
  opacity: 0;
  transition: all 0.2s;
}
.card .nav .menu .link {
  padding: 0px 10px;
}
.card .nav .menu .link i {
  vertical-align: middle;
  height: 40px;
  line-height: 35px;
}
.card .nav .menu .link:hover {
  background: rgba(0, 0, 0, 0.15);
  cursor: pointer;
}
.card .nav #menu {
  display: none;
}
.card .nav #menu:checked ~ .menu {
  transform: translateY(-100%) translateX(-100%) scale(1, 1);
  border-radius: 2px;
  opacity: 1;
}

    </style>
</head>
<body>
<div class="bg"></div>
<div class="card">
  <div class="display"></div>
  <div class="nav">
    <div class="text">A Mission</div>
    <label class="btn" for="menu">
      <input type="checkbox" id="menu" checked="checked"/><i class="material-icons">more_vert</i>
      <div class="menu">
        <div class="link"><i class="material-icons">open_in_new</i> Open</div>
        <div class="link"><i class="material-icons">archive</i> Save</div>
        <div class="link"><i class="material-icons">share</i> Share</div>
        <div class="link"><i class="material-icons">save</i> Download</div>
      </div>
    </label>
  </div>
</div>
</body>
</html>