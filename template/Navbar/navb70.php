<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu {
  background: #F67280;
  height: 4rem;
}
.menu ol {
  list-style-type: none;
  margin: 0 auto;
  padding: 0;
}
.menu > ol {
  max-width: 1000px;
  padding: 0 2rem;
  display: flex;
}
.menu > ol > .menu-item {
  flex: 1;
  padding: 0.75rem 0;
}
.menu > ol > .menu-item:after {
  content: "";
  position: absolute;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  bottom: 5px;
  left: calc(50% - 2px);
  background: #FECEAB;
  will-change: transform;
  transform: scale(0);
  transition: transform 0.2s ease;
}
.menu > ol > .menu-item:hover:after {
  transform: scale(1);
}
.menu-item {
  position: relative;
  line-height: 2.5rem;
  text-align: center;
}
.menu-item a {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  display: block;
  color: #FFF;
}
.sub-menu .menu-item {
  padding: 0.75rem 0;
  background: #F67280;
  opacity: 0;
  transform-origin: bottom;
  animation: enter 0.2s ease forwards;
}
.sub-menu .menu-item:nth-child(1) {
  animation-duration: 0.2s;
  animation-delay: 0s;
}
.sub-menu .menu-item:nth-child(2) {
  animation-duration: 0.3s;
  animation-delay: 0.1s;
}
.sub-menu .menu-item:nth-child(3) {
  animation-duration: 0.4s;
  animation-delay: 0.2s;
}
.sub-menu .menu-item:hover {
  background: #F8B195;
}
.sub-menu .menu-item a {
  padding: 0 0.75rem;
}
@media screen and (max-width: 600px) {
  .sub-menu .menu-item {
    background: #C06C84;
  }
}

@media screen and (max-width: 600px) {
  .menu {
    position: relative;
  }
  .menu:after {
    content: "";
    position: absolute;
    top: calc(50% - 2px);
    right: 1rem;
    width: 30px;
    height: 4px;
    background: #FFF;
    box-shadow: 0 10px #FFF, 0 -10px #FFF;
  }
  .menu > ol {
    display: none;
    background: #F67280;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
    animation: fade 0.2s ease-out;
  }
  .menu > ol > .menu-item {
    flex: 0;
    opacity: 0;
    animation: enter 0.3s ease-out forwards;
  }
  .menu > ol > .menu-item:nth-child(1) {
    animation-delay: 0s;
  }
  .menu > ol > .menu-item:nth-child(2) {
    animation-delay: 0.1s;
  }
  .menu > ol > .menu-item:nth-child(3) {
    animation-delay: 0.2s;
  }
  .menu > ol > .menu-item:nth-child(4) {
    animation-delay: 0.3s;
  }
  .menu > ol > .menu-item:nth-child(5) {
    animation-delay: 0.4s;
  }
  .menu > ol > .menu-item + .menu-item {
    margin-top: 0.75rem;
  }
  .menu > ol > .menu-item:after {
    left: auto;
    right: 1rem;
    bottom: calc(50% - 2px);
  }
  .menu > ol > .menu-item:hover {
    z-index: 1;
  }
  .menu:hover > ol {
    display: flex;
  }
  .menu:hover:after {
    box-shadow: none;
  }
}

.sub-menu {
  position: absolute;
  width: 100%;
  top: 100%;
  left: 0;
  display: none;
  z-index: 1;
}
.menu-item:hover > .sub-menu {
  display: block;
}

@media screen and (max-width: 600px) {
  .sub-menu {
    width: 100vw;
    left: -2rem;
    top: 50%;
    transform: translateY(-50%);
  }
}

html, body {
  font-size: 16px;
  font-family: "Fira Mono", monospace;
  margin: 0;
  background: #2A363B;
}

* {
  box-sizing: border-box;
}
*:before, *:after {
  box-sizing: inherit;
}

a {
  text-decoration: none;
}

@keyframes enter {
  from {
    opacity: 0;
    transform: scaleY(0.98) translateY(10px);
  }
  to {
    opacity: 1;
    transform: none;
  }
}
@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="#0">Home</a></li>
    <li class="menu-item"><a href="#0">About</a></li>
    <li class="menu-item">
      <a href="#0">Widgets</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Kabobs</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Contact</a></li>
  </ol>
</nav>
</body>
</html>