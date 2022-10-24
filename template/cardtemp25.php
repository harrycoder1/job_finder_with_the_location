<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* --------- Card Animation ---------- */
.card:not(:empty):hover, .card:not(:empty):focus {
  z-index: 1;
  color: #fff;
  background: #ea124f;
  opacity: 1;
  transform: scale(1.15) rotateZ(20deg);
  cursor: pointer;
}
.card:not(:empty):hover:after, .card:not(:empty):focus:after {
  opacity: 1;
}
.card:not(:empty):hover:before, .card:not(:empty):focus:before {
  opacity: 0;
}
.card {
  padding: 10px;
  background: #fcc99e;
  border-radius: 0.7em;
  opacity: 0.6;
  display: flex;
  justify-content: flex-start;
  align-items: flex-end;
  transition: all 0.4s cubic-bezier(0.33, 1, 0.68, 1);
  transition-property: background, transform, color, opacity;
}
.card:not(:empty):before {
  box-shadow: -2px 2px 8px 2px rgba(0, 0, 0, 0.2);
}
.card:empty {
  opacity: 0.3;
}
.card:before, .card:after {
  content: "";
  position: absolute;
  border-radius: 0.7em;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: opacity 0.4s cubic-bezier(0.33, 1, 0.68, 1);
}
.card:after {
  box-shadow: -20px 20px 12px 6px rgba(0, 0, 0, 0.2);
  opacity: 0;
}
/* --------- Grid ---------- */
.grid {
  width: 100%;
  height: 100%;
  padding: 20px;
  display: grid;
  overflow: hidden;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: repeat(4, 1fr);
  grid-gap: 20px;
}
.item1 {
  grid-area: 0.1111111111;
}
.item2 {
  grid-area: 0.0625;
}
.item2.card:hover, .item2.card:focus {
  background: #00005c;
}
.item3 {
  grid-area: 0.2;
}
.item4 {
  grid-area: 0.0333333333;
}
.item5 {
  grid-area: 0.0333333333;
}
.item6 {
  grid-area: 0.0375;
}
.item7 {
  grid-area: 0.03;
}
.item8 {
  grid-area: 0.0166666667;
}
.item8.card:hover, .item8.card:focus {
  background: #f57b51;
}
.item9 {
  grid-area: 0.0222222222;
}
.item10 {
  grid-area: 0.025;
}
.item11 {
  grid-area: 0.0266666667;
}
.item11.card:hover, .item11.card:focus {
  background: #00a8cc;
}
.content {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
/*--------- Layout -------- */
*, *:before, *:after {
  position: relative;
  box-sizing: border-box;
}
body, html {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}
body {
  font-family: "PT Sans", sans-serif;
  background: #fff6d9;
  display: flex;
  justify-content: center;
  align-items: center;
}
h1, h2, h3, h4, h5 {
  margin: 2.75rem 0 1.05rem;
  line-height: 1.2;
  font-family: "Jost", sans-serif;
}
h1 {
  margin-top: 0;
  font-size: 3.052em;
}
h2 {
  font-size: 1em;
}
p {
  line-height: 1.3;
}
/* --------- Responsive ---------- */
@media only screen and (max-width: 600px) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(6, minmax(auto, 300px));
    overflow-y: scroll;
  }
  .item1 {
    grid-area: 0.1666666667;
  }
  .card {
    grid-area: auto;
    text-align: left;
  }
  .card:empty {
    display: none;
  }
}

    </style>
</head>
<body>
<main class="grid">
	<section class="content item1">
		<h1>Hover Card Animation</h1>
		<p>By animating a few CSS paint & composite properties, we can create fun interactions on hover & focus</p> 
	</section>
	<section class="card item2">
		<h2>Hover the cards<h2>
	</section>
	<section class="card item3"></section>
	<section class="card item4"></section>
	<section class="card item5">
			<h2>because interactions make it more fun<h2>
	</section>
	<section class="card item7"></section>
	<section class="card item8">
			<h2>animating the shadow on the pseudo element makes it pop out<h2>
	</section>
	<section class="card item9"></section>
	<section class="card item10"></section>
	<section class="card item11">
		<h2>add a :focus state too!<h2>
	</section>
</main>
</body>
</html>