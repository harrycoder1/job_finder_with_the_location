<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #nav-container {
  margin-left: auto;
  position: relative;
}

#nav-toggle {
  display: block;
  width: 32px;
  height: 32px;
  cursor: pointer;
  transform: rotate(0deg);
}

#nav-toggle span {
  background-color: black;
  width: 100%;
  height: 4px;
  border-radius: 1px;
  display: block;
  position: absolute;
  left: 0;
  content: "";
  transition: 0.5s ease-in-out;
}

#nav-toggle span:nth-child(1) {
  top: 4px;
  transform-origin: left center;
}

#nav-toggle span:nth-child(2) {
  top: 14px;
  transform-origin: left center;
}

#nav-toggle span:nth-child(3) {
  top: 24px;
  transform-origin: left center;
}

#nav-toggle.open span:nth-child(1) {
  transform: rotate(45deg);
  top: 3px;
  left: 4px;
}

#nav-toggle.open span:nth-child(2) {
  width: 0%;
  opacity: 0;
}

#nav-toggle.open span:nth-child(3) {
  transform: rotate(-45deg);
  top: 25px;
  left: 4px;
}

#nav-overlay {
  position: absolute;
  top: 16px;
  left: 16px;
  z-index: -1;
  background: rgba(0, 0, 0, 0.8);
  border-radius: 50%;
  transition: 1s;
  transform: scale3d(0, 0, 0);
}

#nav-overlay.open {
  transform: scale3d(1, 1, 1);
}

#nav-fullscreen {
  width: 100%;
  position: fixed;
  left: 0;
  top: 0;
  transition: ease-in-out 0.25s;
  transition-delay: 0s;
  visibility: hidden;
  opacity: 0;
}
#nav-fullscreen ul {
  list-style: none;
}
#nav-fullscreen a {
  color: white;
  text-decoration: none;
}

#nav-fullscreen.open {
  visibility: visible;
  opacity: 1;
  transition: ease-in-out 0.5s;
  transition-delay: 0.25s;
}

*, *:before, *:after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  display: flex;
  background-color: black;
  padding: 16px;
  overflow: hidden;
  color: white;
}

#nav-overlay {
  background: linear-gradient(180deg, #FF512F 10%, #FF512F 50%, #DD2476 90%);
}

#nav-toggle span {
  background-color: white;
}

#nav-fullscreen {
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-family: sans-serif;
  font-size: 10vh;
}
#nav-fullscreen li:hover {
  list-style: disc;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="nav-container">
			<div id="nav-overlay"></div>
			<nav id="nav-fullscreen">
						<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact</a></li>
						</ul>
			</nav>

			<a id="nav-toggle">
						<span></span>
						<span></span>
						<span></span>
			</a>
</div>
<script>
/*       
//                M               M
//             MMM MMM         MMM MMM
//          MMM       MMM   MMM       MMM
//       MMM             MMM             MMM
//       M                                 M
//       M                                 M
//       M                                 M
//       M                                 M
//       M                                 M
//       M        M               M        M
//       M        MMMM         MMMM        M
//       M        M   MMM   MMM   M        M
//       MMM      M      MMM      M      MMM
//          MMM   M               M   MMM
//             MMMM               MMMM
//                M               M
//
// ---------------- marcbizal.com -----------------
*/

function resizeNav() {
    // Set the nav height to fill the window
    $("#nav-fullscreen").css({"height": window.innerHeight});

    // Set the circle radius to the length of the window diagonal,
    // this way we're only making the circle as big as it needs to be.
    var radius = Math.sqrt(Math.pow(window.innerHeight, 2) + Math.pow(window.innerWidth, 2));
    var diameter = radius * 2;
    $("#nav-overlay").width(diameter);
    $("#nav-overlay").height(diameter);
    $("#nav-overlay").css({"margin-top": -radius, "margin-left": -radius});
}

// Set up click and window resize callbacks, then init the nav.
$(document).ready(function() {
    $("#nav-toggle").click(function() {
        $("#nav-toggle, #nav-overlay, #nav-fullscreen").toggleClass("open");
    });

    $(window).resize(resizeNav);

    resizeNav();
	
	window.setTimeout(function() {
		 $("#nav-toggle").click();
	}, 1000)
});

</script>
</body>
</html>