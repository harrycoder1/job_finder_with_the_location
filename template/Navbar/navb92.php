<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-family: "Raleway", sans-serif;
  font-size: 18px;
}

body {
  background-color: #333;
}

h1, h2, h3, h4, h5, h6 {
  color: #f2f2f2;
}

h1 {
  font-size: 2.441rem;
}

a {
  color: #f2f2f2;
  text-decoration: none;
}
a:focus, a:hover {
  text-decoration: underline;
}

header {
  height: 80px;
  left: 0;
  padding: 0.5rem;
  position: fixed;
  text-align: right;
  top: 0;
  transition: transform 0.6s;
  width: 100%;
  z-index: 500;
}
main {
  background-color: #485274;
  height: 100vh;
  padding-top: 80px;
  transform-origin: left center;
  transition: transform 0.6s 50ms;
}
.container {
  margin: 0 auto;
  width: 80%;
}

.nav-button {
  text-transform: uppercase;
}

.nav-wrapper {
  background-color: #343c55;
  box-shadow: -1px 0px 3px 0px rgba(0, 0, 0, 0.75);
  height: 100%;
  padding-top: 80px;
  perspective: 1000px;
  position: fixed;
  right: 0;
  top: 0;
  transform: translateX(100%);
  transition: transform 0.6s, visibility 0.6s;
  visibility: hidden;
  width: 25vw;
}
.nav-visible .nav-wrapper {
  transform: translateX(0);
  visibility: visible;
}

.nav {
  position: relative;
  transform: rotateY(90deg);
  transform-origin: left center;
  transition: transform 0.6s;
}
.nav-visible .nav {
  transform: rotateY(0deg);
}
.nav li.active a {
  background-color: #212635;
}
.nav a {
  display: block;
  line-height: 1.4;
  padding: 0.7em 0.5em 0.7em 1.4em;
  text-transform: uppercase;
}
.nav a:focus, .nav a:hover {
  background-color: #2b3145;
  text-decoration: none;
}

.nav-marker {
  background-color: currentColor;
  height: 2.8rem;
  position: absolute;
  right: 0;
  top: 80px;
  width: 3px;
}
.nav-marker:before {
  border: 5px solid transparent;
  border-right-color: inherit;
  content: "";
  height: 0;
  position: absolute;
  right: 3px;
  top: 50%;
  transform: translateY(-50%);
  width: 0;
}

.color-1 {
  color: deeppink;
}

.button-lines {
  background: transparent;
  border: none;
  cursor: pointer;
  display: inline-block;
  padding: 1rem 0.5rem;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.lines {
  background: #fff;
  border-radius: 0.2rem;
  display: inline-block;
  height: 0.2rem;
  width: 2rem;
  position: relative;
}
.lines:hover {
  background: #000;
}
.lines:after, .lines:before {
  background: #fff;
  border-radius: 0.2rem;
  display: inline-block;
  height: 0.2rem;
  width: 2rem;
  content: "";
  left: 0;
  position: absolute;
}
.lines:after:hover, .lines:before:hover {
  background: #000;
}
.lines:after {
  top: 0.5rem;
}
.lines:before {
  top: -0.5rem;
}

.button-lines-x .lines {
  transition: background 0.3s ease;
}
.button-lines-x .lines:after, .button-lines-x .lines:before {
  transform-origin: 50% 50% 0;
  transition: top 0.3s 0.4s ease, transform 0.3s ease;
}
.nav-visible .button-lines-x .lines {
  background: transparent;
}
.nav-visible .button-lines-x .lines:after, .nav-visible .button-lines-x .lines:before {
  top: 0;
  transition: top 0.3s ease, transform 0.3s 0.3s ease;
}
.nav-visible .button-lines-x .lines:after {
  transform: rotate3d(0, 0, 1, 45deg);
}
.nav-visible .button-lines-x .lines:before {
  transform: rotate3d(0, 0, 1, -45deg);
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <header>
    <button aria-label='Toggle menu' class='nav-button button-lines button-lines-x close' role='button' type='button'>
      <span class='lines'></span>
    </button>
  </header>
  <main>
    <div class='container'>
      <h1>3D Side Navigation</h1>
    </div>
  </main>
  <nav class='nav-wrapper'>
    <ul class='nav'>
      <li class='active'>
        <a href='#'>Page 1</a>
      </li>
      <li>
        <a href='#'>Page 2</a>
      </li>
      <li>
        <a href='#'>Page 3</a>
      </li>
      <li>
        <a href='#'>Page 4</a>
      </li>
    </ul>
    <span class='nav-marker color-1'></span>
  </nav>

<script>
    let navButton = document.querySelector(".nav-button");

navButton.addEventListener("click", e => {
  e.preventDefault();

  // toggle nav state
  document.body.classList.toggle("nav-visible");
});
</script>
</body>
</html>