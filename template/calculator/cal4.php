<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:100);
html, body {
  height: 100%;
  min-height: 100%;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Roboto, sans-serif;
  background: linear-gradient(#8b9da9, #fff6e4);
}
.calculator {
  max-width: 320px;
  box-shadow: 0 0 75px 30px rgba(205, 205, 205, 0.7);
}
.calculator__display {
  padding: 10px;
  color: rgba(255, 255, 255, 0.7);
  font-size: 4em;
  text-align: right;
}
.calculator__functions {
  display: flex;
  flex-wrap: wrap;
  border: 1px solid rgba(255, 255, 255, 0.4);
  mix-blend-mode: overlay;
}
.calculator__functions button {
  flex: 0 1 25%;
  height: 70px;
  color: #111;
  font-size: 2em;
  mix-blend-mode: overlay;
  background: rgba(255, 255, 255, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.4);
}
.calculator__functions button.btn--large {
  flex: 0 1 50%;
}
.calculator__functions button.btn--opaque {
  background: rgba(255, 255, 255, 0.2);
}

    </style>
</head>
<body>
<div class="calculator">
    <div class="calculator__wrap">
        <div class="calculator__display">
            0
        </div>
        <div class="calculator__functions">
            <button value="clear" class="btn--opaque">AC</button>
            <button value="pos-neg" class="btn--opaque">+/-</button>
            <button value="%" class="btn--opaque">%</button>
            <button value="/" class="btn--opaque">/</button>
            <button value="7">7</button>
            <button value="8">8</button>
            <button value="9">9</button>
            <button value="*" class="btn--opaque">*</button>
            <button value="4">4</button>
            <button value="5">5</button>
            <button value="6">6</button>
            <button value="-" class="btn--opaque">-</button>
            <button value="1">1</button>
            <button value="2">2</button>
            <button value="3">3</button>
            <button value="+" class="btn--opaque">+</button>
            <button value="0" class="btn--large">0</button>
            <button value=".">.</button>
            <button value="=" class="btn--opaque">=</button>
        </div>
    </div>
</div>
</body>
</html>