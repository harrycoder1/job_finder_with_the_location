<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *, *::before, *::after {
  position: relative;
  box-sizing: border-box;
  transition: 1s all linear;
}
html, body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100%;
  width: 100%;
  background-color: #333;
  color: #fff;
}
.banner {
  width: 20em;
  background: red;
  height: 5em;
  overflow: hidden;
  display: flex;
  justify-content: flex-start;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
  cursor: pointer;
  border-radius: 0.3em;
}
.banner:hover {
  transform: scale(1.05);
  box-shadow: 0 5px 15px 10px rgba(0, 0, 0, 0.55);
}
.shopping-image {
  height: auto;
  width: 10em;
}
.shopping-image > img {
  height: 5em;
  width: 10em;
  object-fit: cover;
  border-radius: 0 2em 2em 0Array/0Array 3em 3em 0;
  box-shadow: 3px 5px 1px 3px #900;
}
.text {
  height: 5em;
  width: 10em;
  display: flex;
  justify-content: center;
  text-align: center;
}
.text > * {
  font-szie: 12px;
  text-align: center;
}
a {
  color: #fff;
}

    </style>
</head>
<body>
<div class="banner">
	<div class="shopping-image">
		<img src="https://images.unsplash.com/photo-1534452203293-494d7ddbf7e0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80" alt="shopping">
	</div>
	
	<div class="text">
		<h4>
			HOLIDAY SUPERSALE
		</h4>
	</div>
</div>

<a href="https://studio.envato.com/explore/web-banner-design/46338-hq-web-banner-design-10sizes">Inspiration</a>
</body>
</html>