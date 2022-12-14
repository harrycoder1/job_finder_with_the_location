<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
	 box-sizing: border-box;
}
 input {
	 visibility: hidden;
}
 body, html {
	 min-height: 100vh;
	 padding: 0;
	 margin: 0;
}
 @media (min-width: 768px) {
	 body, html {
		 font-size: 14px;
	}
}
 @media (min-width: 992px) {
	 body, html {
		 font-size: 16px;
	}
}
 .card {
	 background: #000;
	 border-radius: 1.25rem;
	 color: #fff;
	 filter: drop-shadow(5px 5px 5px #000);
	 flex-shrink: 0;
	 font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	 font-size: 1.5rem;
	 font-weight: bolder;
	 height: 70vmin;
	 max-height: 420px;
	 padding: 2.5rem;
	 position: absolute;
	 transition: transform 0.25s ease-out;
	 width: 50vmin;
	 max-width: 300px;
	 min-width: 220px;
	 min-height: 308px;
}
 .card:nth-of-type(1) {
	 transform: translate(-40%, 0) rotate(-15deg);
}
 .card__footer {
	 align-items: center;
	 bottom: 30px;
	 display: flex;
	 font-size: 0.75rem;
	 left: 2.5rem;
	 position: absolute;
	 right: 2.5rem;
}
 .card__footer img {
	 height: 2rem;
	 margin-right: 6px;
	 width: 2rem;
}
 .card--answer {
	 color: #000;
	 background: #fff;
}
 #javascript:checked ~ .scene {
	 background: #f8dc3f;
}
 #javascript:checked ~ .scene .card--javascript {
	 transform: translate(40%, 0) rotate(15deg) translate(0, 10%);
	 z-index: 2;
}
 #javascript:checked ~ .scene .card--typescript {
	 transform: translate(40%, 0) rotate(15deg) translate(0, -10%);
	 z-index: 1;
}
 #javascript:checked ~ .scene label[for='typescript'] {
	 z-index: 3;
}
 #typescript:checked ~ .scene {
	 background: #007bc7;
}
 #typescript:checked ~ .scene .card--typescript {
	 transform: translate(40%, 0) rotate(15deg) translate(0, 10%);
	 z-index: 2;
}
 #typescript:checked ~ .scene .card--javascript {
	 transform: translate(40%, 0) rotate(15deg) translate(0, -10%);
	 z-index: 1;
}
 #typescript:checked ~ .scene label[for='javascript'] {
	 z-index: 3;
}
 label {
	 cursor: pointer;
	 height: 84vmin;
	 position: absolute;
	 transform: translate(40%, 0) rotate(15deg);
	 width: 50vmin;
}
 .scene {
	 align-items: center;
	 background: #db0a5b;
	 display: flex;
	 font-size: 10px;
	 justify-content: center;
	 margin: 0;
	 min-height: 100vh;
	 padding: 0;
	 height: 100vh;
	 width: 100vw;
	 position: relative;
	 transition: background 0.25s;
}
 [type='radio'] {
	 position: absolute;
	 opacity: 0;
}
 sub {
	 margin-left: 6px;
}
 
    </style>
</head>
<body>
<input type="radio" name="choice" id="javascript" checked="checked"/>
<input type="radio" name="choice" id="typescript"/>
<div class="scene">
  <label for="typescript"></label>
  <label for="javascript"></label>
  <div class="card  ">
    <div class="card__content">Use _______ instead of _______.</div>
    <footer class="card__footer"><img src="http://blog.codepen.io/wp-content/uploads/2012/06/Button-White-Small.png"/><span>Cards Against Developers<sub>vol. 2</sub></span>
    </footer>
  </div>
  <div class="card card--answer card--javascript">
    <div class="card__content">JavaScript</div>
    <footer class="card__footer"><img src="http://blog.codepen.io/wp-content/uploads/2012/06/Button-Black-Small.png"/><span>Cards Against Developers<sub>vol. 2</sub></span>
    </footer>
  </div>
  <div class="card card--answer card--typescript">
    <div class="card__content">TypeScript</div>
    <footer class="card__footer"><img src="http://blog.codepen.io/wp-content/uploads/2012/06/Button-Black-Small.png"/><span>Cards Against Developers<sub>vol. 2</sub></span>
    </footer>
  </div>
</div>
</body>
</html>