<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
  position: relative;
  height: 100%;
  margin: 0;
  padding: 0;
}
body {
  background-color: #eeeeee;
  font-family: 'helvetica', sans-serif;
  font-size: 16px;
  transform: translate3d(0, 0, 0);
  background: linear-gradient(135deg, #2980b9 0%, #9b59b6 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1);
}
.container {
  position: relative;
  width: 100%;
  max-width: 960px;
  min-height: 100%;
  margin: 0px auto;
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.element-card {
  position: relative;
  width: 100px;
  height: 130px;
  transform-style: preserve-3d;
  transform: rotatey(0deg) translatex(0px) translatey(0px);
  transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.4);
  margin: 5px;
  cursor: pointer;
}
.element-card:hover {
  transform: rotatey(45deg) translatex(0px) translatey(0px);
}
.element-card.open {
  width: 200px;
  height: 260px;
  transform: rotatey(-180deg) translatex(0px) translatey(0px);
}
.element-card .front-facing {
  transform: rotateY(0deg) translateZ(2px);
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-color: #ecf0f1;
  border: 2px white solid;
  border-radius: 5px;
}
.element-card .front-facing .abr {
  width: 100%;
  position: absolute;
  top: 50%;
  left: 0;
  font-size: 42px;
  margin: -35px 0 0 0;
  text-align: center;
  color: #3498db;
}
.element-card .front-facing .title {
  width: 100%;
  position: absolute;
  top: 50%;
  left: 0;
  text-transform: uppercase;
  font-size: 12px;
  margin: 15px 0 0 0;
  text-align: center;
  color: #3498db;
}
.element-card .front-facing .atomic-number {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 12px;
  color: #2980b9;
}
.element-card .front-facing .atomic-mass {
  position: absolute;
  bottom: 10px;
  right: 10px;
  font-size: 12px;
  color: #2980b9;
}
.element-card .back-facing {
  transform: rotateY(180deg) translateZ(0px);
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-color: #ecf0f1;
  border: 2px white solid;
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  overflow: hidden;
}
.element-card .back-facing p {
  font-size: 14px;
  margin: 0;
}
.element-card .back-facing a.btn {
  display: inline-block;
  background-color: white;
  padding: 5px 15px;
  margin: 20px 0 0 0;
  color: #eee;
  background-color: #3498db;
  text-decoration: none;
  border-radius: 3px;
}
.element-card .back-facing a.btn:hover, .element-card .back-facing a.btn:focus {
  color: #fff;
  background-color: #2980b9;
}
.suppoprt-me {
  display: inline-block;
  position: fixed;
  bottom: 10px;
  left: 10px;
  width: 20vw;
  max-width: 250px;
  min-width: 200px;
  z-index: 9;
}
.suppoprt-me img {
  width: 100%;
  height: auto;
}

    </style>
</head>
<body>
<div class="container">
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Cu</h1>
			<p class="title">Copper</p>
			<span class="atomic-number">29</span>
			<span class="atomic-mass">63.54</span>
		</div>
		<div class="back-facing">
			<p>Copper is a chemical element with symbol Cu (from Latin: cuprum) and atomic number 29. It is a soft, malleable, and ductile metal with very high thermal and electrical conductivity.</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Copper" target="_blank">More info</a></p>
		</div>
	</div>
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Ag</h1>
			<p class="title">Silver</p>
			<span class="atomic-number">47</span>
			<span class="atomic-mass">107.86</span>
		</div>
		<div class="back-facing">
			<p>Silver is the metallic element with the atomic number 47. Its symbol is Ag, from the Latin argentum, derived from the Greek ὰργὀς, and ultimately from a Proto-Indo-European language root reconstructed as *h2erǵ-, "grey" or "shining".</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Silver" target="_blank">More info</a></p>
		</div>
	</div>
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Au</h1>
			<p class="title">Gold</p>
			<span class="atomic-number">79</span>
			<span class="atomic-mass">196.97</span>
		</div>
		<div class="back-facing">
			<p>Gold is a chemical element with symbol Au and atomic number 79. In its purest form, it is a bright, slightly reddish yellow, dense, soft, malleable, and ductile metal. Chemically, gold is a transition metal and a group 11 element.</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Gold" target="_blank">More info</a></p>
		</div>
	</div>
	
	<div class="element-card">
		<div class="front-facing">
			<h1 class="abr">Rg</h1>
			<p class="title">Roentgenium</p>
			<span class="atomic-number">111</span>
			<span class="atomic-mass">282</span>
		</div>
		<div class="back-facing">
			<p>Roentgenium is a chemical element with symbol Rg and atomic number 111. It is an extremely radioactive synthetic element (an element that can be created in a laboratory but is not found in nature).</p>
			<p><a class="btn" href="https://en.wikipedia.org/wiki/Roentgenium" target="_blank">More info</a></p>
		</div>
	</div>
	
</div>

<a class="suppoprt-me" href="https://www.buymeacoffee.com/marioduarte" target="_blank"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a Coffee&nbsp&emoji=&slug=marioduarte&button_colour=FF5F5F&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00"></a>

<script>
    $(document).ready(function(){
	
	$('.element-card').on('click', function(){
		
		if ( $(this).hasClass('open') ) {
			$(this).removeClass('open');
		} else {
			$('.element-card').removeClass('open');
			$(this).addClass('open');
		}
		
	});
	
});
</script>
</body>
</html>