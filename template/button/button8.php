<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, .button, .tick {
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
}

body {
  width: 100%;
  height: 90vh;
}

.button {
  width: 300px;
  height: 80px;
  background: dodgerblue;
  border-radius: 6px;
  transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
}

.button svg {
  transform: rotate(180deg);
  transition: all .5s;
}

.button__circle {
  width: 120px;
  height: 120px;
  background: mediumseagreen;
  border-radius: 50%;
  transform: rotate(-180deg);
}

.button:hover {
  cursor: pointer;
}

.tick {
  color: white;
  font-size: 2em;
  transition: all .9s;
}
    </style>
</head>
<body>
<div class="button">
	<div class="container">
		<div class="tick">
		</div>
	</div>
</div>
<script>
    let button = document.querySelector('.button');
let buttonText = document.querySelector('.tick');

const tickMark = "<svg width=\"58\" height=\"45\" viewBox=\"0 0 58 45\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"#fff\" fill-rule=\"nonzero\" d=\"M19.11 44.64L.27 25.81l5.66-5.66 13.18 13.18L52.07.38l5.65 5.65\"/></svg>";

buttonText.innerHTML = "Submit";

button.addEventListener('click', function() {

  if (buttonText.innerHTML !== "Submit") {
    buttonText.innerHTML = "Submit";
  } else if (buttonText.innerHTML === "Submit") {
    buttonText.innerHTML = tickMark;
  }
  this.classList.toggle('button__circle');
});
</script>
</body>
</html>