<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  height: 100%;
  overflow-x: hidden;
}

body {
  margin: 0;
  padding: 0;
  background-color: #1b1b1b;
}

.content-wrapper {
  background-color: #325585;  
  min-height: 100%;  
  transform: translate3d(0,0,0);
  transition: transform .3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

body.open .content-wrapper {
  transform: translate3d(-46px,0,0);
}


.content-wrapper .menu-btn {
  display: block;
  float: right;
  color: hsl(0,0%,100%);
  padding: .5em;
  font-size: 1.5em;
  text-decoration: none;
}

.menu {
  position: fixed;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
}

.menu li {
  margin-bottom: .5em;
  list-style-type: none;
}

.menu a {
  display: block;
  text-decoration: none;
  color: hsl(0,0%,100%);
  font-size: 1.5em;
  padding: .5em;
  opacity: 0;
  transform: translate3d(48px, -48px, 0) scale(0);
  transition: .4s .3s all;
}

body.open .menu a {
  opacity: 1;
  transform: translate3d(0,0,0) scale(1);
}

body.open .menu li:nth-child(0) a {
  transition :  0.2s .1s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

body.open .menu li:nth-child(1) a {
  transition :  0.2s .2s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

body.open .menu li:nth-child(2) a {
  transition :  0.2s .3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

body.open .menu li:nth-child(3) a {
  transition :  0.2s .4s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

body.open .menu li:nth-child(4) a {
  transition :  0.2s .5s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

body.open .menu li:nth-child(5) a {
  transition :  0.2s .6s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

body.open .menu li:nth-child(6) a {
  transition :  0.2s .7s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

/* demo styles */

.content-wrapper {
  padding-top: 1px;
  box-sizing: border-box;
}

.spec-link {
  color: #fff;
  display: table;
  margin: 100px auto 0;
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="body">
<menu class="menu">
  <li>
    <a href="#" class="fa fa-home"></a>
  </li>
  <li>
    <a href="#" class="fa fa-user"></a>
  </li>
  <li>
    <a href="#" class="fa fa-phone"></a>
  </li>
  <li>
    <a href="#" class="fa fa-globe"></a>
  </li>
  <li>
    <a href="#" class="fa fa-gear"></a>
  </li>
  <li>
    <a href="#" class="fa fa-search"></a>
  </li>
</menu>
<div class="content-wrapper">
  <a href="#" onclick="document.getElementById('body').classList.toggle('open');" class="fa fa-bars menu-btn"></a>
  
  <a class="spec-link" href="http://css-tricks.ir/tutorial/%D9%BE%DB%8C%D8%A7%D8%AF%D9%87-%D8%B3%D8%A7%D8%B2%DB%8C-%D9%85%D9%86%D9%88-%D8%A8%D8%B1%D8%A7%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D9%88-%D8%AA%D8%A8%D9%84%D8%AA/">Read The Article</a>
</div>

</body>
</html>