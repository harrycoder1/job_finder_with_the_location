<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=EB+Garamond|Work+Sans:700);
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  -webkit-font-smoothing: antialiased;
}

html {
  font-size: 10px;
}

body {
  background: #111;
  color: #fff;
  font: 2.6rem/1.55 "Adobe Garamond Pro", "EB Garamond", Garamond, Georgia, "Times New Roman", serif;
}

section {
  padding: 12.5%;
  width: 100%;
}
section:nth-of-type(even) {
  background: #fff;
  color: #111;
}

p {
  margin-bottom: 2.5em;
}

a {
  color: inherit;
  text-decoration: none;
}

h2 {
  font: bold 2.8rem "Work Sans", "Arial Black", Gadget, sans-serif;
  text-transform: uppercase;
  letter-spacing: 5px;
  margin-bottom: 2em;
}

nav {
  mix-blend-mode: difference;
  z-index: 100;
}
nav ul {
  position: fixed;
  top: 60px;
  right: 5px;
  height: 100vh;
  visibility: hidden;
  pointer-events: none;
  list-style: none;
  width: 35px;
}
nav ul li {
  font: bold 1.5rem "Work Sans", "Arial Black", Gadget, sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 0.75em 0;
  -ms-writing-mode: tb-lr;
      writing-mode: vertical-lr;
}
nav.active ul {
  visibility: visible;
  pointer-events: initial;
  transition-delay: 0.2s;
}

.nav-icon {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background: transparent;
  cursor: pointer;
  display: inline-block;
  height: 35px;
  position: fixed;
  top: 15px;
  right: 15px;
  transition: background 0.3s;
  width: 35px;
}
.nav-icon span {
  position: absolute;
  top: 15px;
  left: 5px;
  background: #fff;
  display: block;
  height: 3px;
  right: 5px;
  transition: transform 0.3s;
}
.nav-icon span:before, .nav-icon span:after {
  width: 100%;
  height: 3px;
  background: #fff;
  content: "";
  display: block;
  left: 0;
  position: absolute;
}
.nav-icon span:before {
  top: -8px;
}
.nav-icon span:after {
  bottom: -8px;
}
.active .nav-icon span {
  transform: rotate(90deg);
}
    </style>
</head>
<body>
    
<nav id="nav">
  <button class="nav-icon" id="nav-icon"><span></span></button>
  <ul>
    <li><a href="#home">home</a></li>
    <li><a href="#about">about</a></li>
    <li><a href="#blog">blog</a></li>
    <li><a href="#contact">contact</a></li>
  </ul>
</nav>
<section id="home">
  <h2>home</h2>
  <p>Click on the hamburger menu icon to see the vertical popout menu. Scroll down to see how it adapts to the background color. The menu icon is created using pure CSS, and the color of the menu adapts to the background color of the page by setting mix-blend-mode to "difference". The toggle animation only needs a tiny bit of JavaScript. This demo was tested in the latest versions of Chrome, Firefox and Safari. It also works on mobile.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc tellus, tempor vitae elit ac, ornare aliquet elit. Vivamus ac tincidunt est, vehicula semper neque. Aliquam eu velit mi. Mauris vel lorem sollicitudin, sollicitudin sem vel, pulvinar risus. Pellentesque ac pulvinar erat, quis aliquet lectus. Integer diam odio, auctor non ullamcorper scelerisque, imperdiet non est. Sed vulputate porttitor lorem, sit amet feugiat tortor pretium tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices, lectus at ultricies tempus, massa lorem tincidunt urna, at porta nulla massa ac est. Aliquam commodo auctor tempus. In molestie nisl eget diam scelerisque, vel porta metus euismod. Praesent venenatis augue dignissim, vestibulum ex eget, vestibulum sem. In varius est leo. Nam id lobortis erat. Etiam et metus sit amet justo consectetur lacinia faucibus in elit. Aenean elit lorem, pellentesque sed pellentesque at, cursus eget felis.</p>
</section>
<section id="about">
  <h2>about</h2>
  <p>Click on the hamburger menu icon to see the vertical popout menu. Scroll down to see how it adapts to the background color. The menu icon is created using pure CSS, and the color of the menu adapts to the background color of the page by setting mix-blend-mode to "difference". The toggle animation only needs a tiny bit of JavaScript. This demo was tested in the latest versions of Chrome, Firefox and Safari. It also works on mobile.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc tellus, tempor vitae elit ac, ornare aliquet elit. Vivamus ac tincidunt est, vehicula semper neque. Aliquam eu velit mi. Mauris vel lorem sollicitudin, sollicitudin sem vel, pulvinar risus. Pellentesque ac pulvinar erat, quis aliquet lectus. Integer diam odio, auctor non ullamcorper scelerisque, imperdiet non est. Sed vulputate porttitor lorem, sit amet feugiat tortor pretium tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices, lectus at ultricies tempus, massa lorem tincidunt urna, at porta nulla massa ac est. Aliquam commodo auctor tempus. In molestie nisl eget diam scelerisque, vel porta metus euismod. Praesent venenatis augue dignissim, vestibulum ex eget, vestibulum sem. In varius est leo. Nam id lobortis erat. Etiam et metus sit amet justo consectetur lacinia faucibus in elit. Aenean elit lorem, pellentesque sed pellentesque at, cursus eget felis.</p>
</section>
<section id="blog">
  <h2>blog</h2>
  <p>Click on the hamburger menu icon to see the vertical popout menu. Scroll down to see how it adapts to the background color. The menu icon is created using pure CSS, and the color of the menu adapts to the background color of the page by setting mix-blend-mode to "difference". The toggle animation only needs a tiny bit of JavaScript. This demo was tested in the latest versions of Chrome, Firefox and Safari. It also works on mobile.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc tellus, tempor vitae elit ac, ornare aliquet elit. Vivamus ac tincidunt est, vehicula semper neque. Aliquam eu velit mi. Mauris vel lorem sollicitudin, sollicitudin sem vel, pulvinar risus. Pellentesque ac pulvinar erat, quis aliquet lectus. Integer diam odio, auctor non ullamcorper scelerisque, imperdiet non est. Sed vulputate porttitor lorem, sit amet feugiat tortor pretium tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices, lectus at ultricies tempus, massa lorem tincidunt urna, at porta nulla massa ac est. Aliquam commodo auctor tempus. In molestie nisl eget diam scelerisque, vel porta metus euismod. Praesent venenatis augue dignissim, vestibulum ex eget, vestibulum sem. In varius est leo. Nam id lobortis erat. Etiam et metus sit amet justo consectetur lacinia faucibus in elit. Aenean elit lorem, pellentesque sed pellentesque at, cursus eget felis.</p>
</section>
<section id="contact">
  <h2>contact</h2>
  <p>Click on the hamburger menu icon to see the vertical popout menu. Scroll down to see how it adapts to the background color. The menu icon is created using pure CSS, and the color of the menu adapts to the background color of the page by setting mix-blend-mode to "difference". The toggle animation only needs a tiny bit of JavaScript. This demo was tested in the latest versions of Chrome, Firefox and Safari. It also works on mobile.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nunc tellus, tempor vitae elit ac, ornare aliquet elit. Vivamus ac tincidunt est, vehicula semper neque. Aliquam eu velit mi. Mauris vel lorem sollicitudin, sollicitudin sem vel, pulvinar risus. Pellentesque ac pulvinar erat, quis aliquet lectus. Integer diam odio, auctor non ullamcorper scelerisque, imperdiet non est. Sed vulputate porttitor lorem, sit amet feugiat tortor pretium tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices, lectus at ultricies tempus, massa lorem tincidunt urna, at porta nulla massa ac est. Aliquam commodo auctor tempus. In molestie nisl eget diam scelerisque, vel porta metus euismod. Praesent venenatis augue dignissim, vestibulum ex eget, vestibulum sem. In varius est leo. Nam id lobortis erat. Etiam et metus sit amet justo consectetur lacinia faucibus in elit. Aenean elit lorem, pellentesque sed pellentesque at, cursus eget felis.</p>
</section>

<script>
    var nav = document.getElementById('nav');
var navlinks = nav.getElementsByTagName('a');

function toggleNav() {
    (nav.classList.contains('active')) ? nav.classList.remove('active') : nav.classList.add('active');
  }

document.getElementById('nav-icon').addEventListener('click', function(e) {
    e.preventDefault();
    toggleNav();
});

for(var i = 0; i < navlinks.length; i++) {
    navlinks[i].addEventListener('click', function() {
      toggleNav();
  });
}
</script>
</body>
</html>