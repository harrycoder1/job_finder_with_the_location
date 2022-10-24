<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Alegreya Sans;
  background: #feeded;
}
.menu {
  position: relative;
  background: #cd3e3d;
  width: 3em;
  height: 3em;
  border-radius: 5em;
  margin: auto;
  margin-top: 5em;
  margin-bottom: 5em;
  cursor: pointer;
  border: 1em solid #fdaead;
}
.menu:after {
  content: "";
  position: absolute;
  top: 1em;
  left: 1em;
  width: 1em;
  height: 0.2em;
  border-top: 0.6em double #fff;
  border-bottom: 0.2em solid #fff;
}
.menu ul {
  list-style: none;
  padding: 0;
}
.menu li {
  width: 5em;
  height: 1.4em;
  padding: 0.2em;
  margin-top: 0.2em;
  text-align: center;
  border-top-right-radius: 0.5em;
  border-bottom-right-radius: 0.5em;
  transition: all 1s;
  background: #fdaead;
  opacity: 0;
  z-index: -1;
}
.menu:hover li {
  opacity: 1;
}
/**
 * Add a pseudo element to cover the space
 * between the links. This is so the menu
 * does not lose :hover focus and disappear
 */
.menu:hover ul::before {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  display: block;
  left: 50%;
  top: -5.0em;
  /**
   * The pseudo-element is a semi-circle
   * created with CSS. Top, bottom, and right
   * borders are 6.5em (left being 0), and then
   * a border-radius is added to the two corners
   * on the right.
   */
  border-width: 6.5em;
  border-radius: 0 7.5em 7.5em 0;
  border-left: 0;
  border-style: solid;
  /**
   * Have to have a border color for the border
   * to be hoverable. I'm using a very light one
   * so that it looks invisible.
   */
  border-color: rgba(0,0,0,0.01);
  /**
   * Put the psuedo-element behind the links
   * (So they can be clicked on)
   */
  z-index: -1;
  /**
   * Make the cursor default so it looks like
   * nothing is there
   */
  cursor: default;
}
.menu a {
  color: white;
  text-decoration: none;
  /**
   * This is to vertically center the text on the
   * little tab-like things that the text is on.
   */
  line-height: 1.5em;
}
.menu a {
  color: white;
  text-decoration: none;
}
.menu ul {
  transform: rotate(180deg) translateY(-2em);
  transition: 1s all;
}
.menu:hover ul {
  transform: rotate(0deg) translateY(-1em);
}
.menu li:hover {
  background: #cd3e3d;
  z-index: 10;
}

.menu li:nth-of-type(1) {
  transform: rotate(-90deg);
  position: absolute;
  left: -1.2em;
  top: -4.2em;
}
.menu li:nth-of-type(2) {
  transform: rotate(-45deg);
  position: absolute;
  left: 2em;
  top: -3em;
}
.menu li:nth-of-type(3) {
  position: absolute;
  left: 3.4em;
  top: 0.3em;
}
.menu li:nth-of-type(4) {
  transform: rotate(45deg);
  position: absolute;
  left: 2em;
  top: 3.7em;
}
.menu li:nth-of-type(5) {
  transform: rotate(90deg);
  position: absolute;
  left: -1.2em;
  top: 5em;
}
.hint {
  text-align: center;
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
<nav class="menu">
  <ul>
    <li><a href="#products">Products</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#careers">Careers</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>
<h1 class="hint">Pure CSS Circular Menu</h1>
<p class="hint">Hover to show menu!</p>
</body>
</html>