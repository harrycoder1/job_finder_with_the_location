<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* GENERAL STYLING: NOT NECESSARY */
html {
  font-size: 10px;
}

body {
  line-height: 1;
  font-family: "Futura", "Helvetica", "Arial", sans-serif;
}

nav {
  display: block;
}

nav ul {
  list-style: none;
}

a {
  margin: 0;
  padding: 0;
  font-size: 100%;
  vertical-align: baseline;
  background: transparent;
}

*, *:before, *:after {
  box-sizing: border-box;
}

::-moz-selection {
  background: #ff6060;
  color: #373331;
}

::selection {
  background: #ff6060;
  color: #373331;
}

body {
  letter-spacing: 0.03rem;
  width: 100%;
  background-color: #00afaf;
}

/* END OF GENERAL STYLING */
/* START OF USEFUL CODE */
header {
  position: absolute;
  overflow: visible;
  z-index: 100;
  background-color: transparent;
  width: 100%;
  height: 5rem;
  padding: 1.5rem;
}
header h1 {
  font-size: 2.2rem;
  float: left;
  margin-top: 5px;
}
header a {
  text-decoration: none;
}
header span.menu-control-open,
header span.menu-control-close,
header nav,
header a {
  font-weight: bold;
  text-transform: uppercase;
  color: #F0F0F0;
}
header span.menu-control-open,
header span.menu-control-close,
header nav a {
  font-size: 2.2rem;
  margin-bottom: 1.5rem;
}
header span.menu-control-open,
header span.menu-control-close {
  display: block;
  cursor: pointer;
}
header span.menu-control-open {
  position: relative;
  font-size: 1.2rem;
  line-height: 150%;
  float: right;
  margin-top: 5px;
}
header span.menu-control-open svg {
  position: absolute;
  top: -12px;
  left: 12px;
}
header span.menu-control-open svg line, header span.menu-control-open svg circle {
  fill: none;
  stroke: #ffffff;
  stroke-width: 3;
}
header span.menu-control-open:before {
  padding-top: 1px;
}
header span.menu-control-open:before, header span.menu-control-open:after {
  content: "";
  display: block;
  width: 100%;
  border-top: 3px solid wheat;
}
header span.menu-control-close {
  font-size: 1.2rem;
  text-align: right;
}
header nav {
  display: flex;
  flex-direction: column;
}

.menu {
  position: absolute;
  right: 0;
  top: 0;
  background-color: #373331;
  color: #F0F0F0;
  height: 100vh;
  width: 0;
  overflow: hidden;
  transition: all 0.3s ease-in-out;
  /* Unnecessary styles for the menu footer */
}
.menu a {
  transform: translate3d(-150px, 0, 0);
  transition: transform 0.15s ease-in;
}
.menu .menu-inner {
  position: relative;
  height: 100%;
  width: 80vw;
  padding: 1.5rem;
}
.menu .version, .menu .madeIn {
  position: absolute;
  bottom: 1.5rem;
  font-size: 1.2rem;
  text-transform: uppercase;
  font-weight: bold;
}
.menu .version {
  right: 1.5rem;
}

.menu--active {
  height: 100vh;
  overflow: hidden;
}
.menu--active nav a {
  transform: translate3d(0, 0, 0);
  transition: transform 500ms ease-out;
  /* Handles items within the slide-out to give them the delayed slide-in */
}
.menu--active nav a:first-child {
  transition-delay: 0.2s;
}
.menu--active nav a:nth-child(2) {
  transition-delay: 0.3s;
}
.menu--active nav a:last-child {
  transition-delay: 0.4s;
}

@media screen and (max-width: 767px) {
  .menu--active .menu {
    width: 80%;
  }
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
  .menu--active .menu {
    width: 40%;
  }
  .menu--active .menu .menu-inner {
    width: 40vw;
  }
}
@media screen and (min-width: 1024px) {
  header {
    height: 7rem;
    padding: 2.5rem;
  }
  header span.menu-control-open,
header span.menu-control-close {
    display: none;
  }
  header .menu {
    position: static;
    overflow: visible;
    background-color: transparent;
    width: auto;
    height: auto;
  }
  header .menu .menu-inner {
    padding: 0;
    width: 100%;
  }
  header .menu a {
    transform: none;
    transition: none;
  }
  header .menu .version,
header .menu .madeIn {
    bottom: -90.85vh;
    letter-spacing: 1px;
    font-size: 1.3rem;
  }
  header nav {
    flex-direction: row;
    justify-content: flex-end;
  }
  header nav a {
    font-size: 2.65rem;
    margin-left: 4rem;
  }
}
    </style>
</head>
<body>
<div id="body">
  <header>
    <h1><a href="/">Jonno Witts</a></h1>
    <span class="menu-control-open" id="menuControlOpen">
      <svg width="10" height="15">
          <circle r="3" cx="5" cy="5"></circle>
          <line x1="5" x2="5" y1="7" y2="13"></line>
      </svg>
      Menu
    </span>
    <div class="menu">
        <div class="menu-inner">
            <span class="menu-control-close" id="menuControlClose">Close</span>
            <nav>
                <a href="#">Work</a>
                <a href="#">Notes</a>
                <a href="#">Info</a>
            </nav>
            <span class="version">2017.0.1</span>
            <span class="madeIn">Made in England</span>
        </div>
    </div>
  </header>
</div>
<script>
    
    var body = document.getElementById('body');
            var openMenu = document.getElementById('menuControlOpen'); // or whatever triggers the toggle
            var closeMenu = document.getElementById('menuControlClose'); // or whatever triggers the toggle

            openMenu.addEventListener('click', function(e) {
               body.classList.toggle('menu--active'); // or whatever your active class is
            });

             closeMenu.addEventListener('click', function(e) {
                body.classList.toggle('menu--active'); // or whatever your active class is
            });


        
</script>
</body>
</html>