<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* --- Template Styles --- */
body {
  width: 100%;
  *zoom: 1;
  display: block;
}
body:before, body:after {
  content: "";
  display: table;
}
body:after {
  clear: both;
}

.btn {
  display: inline-block;
  padding: 6.6666666667px 10px;
  line-height: 1.2;
  font-weight: normal;
  background-color: #BDBDBD;
  border: 0;
  border-radius: 6px;
  margin-bottom: 0;
  color: #fff;
}

.btn:hover, a .btn:hover, .btn.active {
  background-color: #a4a4a4;
  border-color: #a4a4a4;
  text-decoration: none;
}

.btn-primary {
  color: #fff;
}

.btn-secondary {
  background-color: #9E9E9E;
  border-color: #9E9E9E;
  color: #fff;
}

.btn-secondary:hover, a .btn-secondary:hover, .btn-secondary.active {
  background-color: #787878;
  border-color: #787878;
}

.btn:active, .btn.active {
  outline: 0;
}

.btn.disabled, .btn[disabled] {
  pointer-events: none;
  cursor: not-allowed;
  opacity: 0.5;
  filter: alpha(opacity=50);
  box-shadow: none;
}

.btn.full {
  width: 100%;
}

.btn-skinny {
  padding: 0.5em 1em;
  font-size: 0.75em;
  line-height: normal;
}
.btn-skinny.full {
  width: 100%;
}

.btn-large {
  padding: 0.75em 2em;
  font-size: 1em;
  line-height: normal;
}
.btn-large.full {
  width: 100%;
}

.btn-block, input[type=submit].btn-block, input[type=reset].btn-block, input[type=button].btn-block {
  display: block;
  width: 100%;
  margin-right: 0;
  padding-right: 0;
  padding-left: 0;
}

button, .btn {
  cursor: pointer;
  text-align: center;
  vertical-align: middle;
  background-image: none;
  -webkit-appearance: none;
}

.btn:last-child,
input.btn {
  margin-right: 0;
}

img {
  vertical-align: middle;
  max-width: 100%;
}

/* --- General Pen Styles --- */
body {
  font-family: Georgia, serif;
  color: #333;
  font-size: 18px;
  line-height: 24px;
}

h1 {
  font-size: 50px;
  line-height: 1.125;
}

.contained {
  margin: 0 auto;
  width: 90%;
}
@media (min-width: 500px) {
  .contained {
    width: 80%;
  }
}
@media (min-width: 600px) {
  .contained {
    width: 60%;
  }
}

main {
  padding: 1em 0;
  position: relative;
  background: #f5f5f5;
  box-shadow: 0px -10px 60px rgba(0, 0, 0, 0.25);
}

/* --- Important Pen Styles --- */
header {
  overflow: hidden;
  padding-bottom: 55%;
}
@media (min-width: 600px) {
  header {
    padding-bottom: 50%;
  }
}
@media (min-width: 700px) {
  header {
    padding-bottom: 45%;
  }
}

header img {
  width: 100%;
  max-width: none;
  position: fixed;
  top: 0%;
  left: 50%;
  transform: translateX(-50%);
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="zoom-me">
	<img src="https://unsplash.it/1200/800?image=838">
</header>
<main role="main">
	<div class="contained">
		<h1>Zoom on Scroll Hero Image</h1>
		<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		<h2>Vehicula Euismod Aenean</h2>
		<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		<h2>Vehicula Euismod Aenean</h2>
		<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		<h2>Vehicula Euismod Aenean</h2>
		<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
		<h2>Vehicula Euismod Aenean</h2>
		<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		<p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	</div>
</main>
<script>
    $(window).scroll(function() {
  var scroll = $(window).scrollTop();
	$(".zoom-me img").css({
		width: (100 + scroll/5)  + "%",
		top: -(scroll/10)  + "%",
		//Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
		"-webkit-filter": "blur(" + (scroll/200) + "px)",
		filter: "blur(" + (scroll/200) + "px)"
	});
});
</script>
</body>
</html>