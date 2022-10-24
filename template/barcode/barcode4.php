<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        barcode.upc-a {
  display: block;
  width: 48vh;
  height: 30vh;
  background: #fff;
  border: 4.8vh solid #fff;
  font-size: 0;
}
barcode.upc-a * {
  position: relative;
  display: inline-block;
  margin: 0;
}
barcode.upc-a upc-reset {
  width: 2.5263157895vh;
  height: 100%;
  background: linear-gradient(to right, #fff 0%, #fff 20%, #000 20%, #000 40%, #fff 40%, #fff 60%, #000 60%, #000 80%, #fff 80%, #fff 100%);
}
barcode.upc-a upc-digit {
  width: 3.5368421053vh;
  height: 95%;
  margin-bottom: 1.5vh;
}
barcode.upc-a upc-reset:first-of-type, barcode.upc-a upc-reset:last-of-type {
  width: 1.5157894737vh;
  background: linear-gradient(to right, #000 0%, #000 33.333%, #fff 33.333%, #fff 66.667%, #000 66.667%, #000 100%);
}
barcode.upc-a upc-digit:first-of-type, barcode.upc-a upc-digit:last-of-type {
  height: 100%;
  margin: 0;
}
barcode.upc-a upc-digit[data-val="0"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 42.8571%, #000 42.8571%, #000 71.4285%, #fff 71.4285%, #fff 85.7142%, #000 85.7142%, #000 100%);
}
barcode.upc-a upc-digit[data-val="0"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 42.8571%, #fff 42.8571%, #fff 71.4285%, #000 71.4285%, #000 85.7142%, #fff 85.7142%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="1"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 28.5714%, #000 28.5714%, #000 57.1428%, #fff 57.1428%, #fff 85.7142%, #000 85.7142%, #000 100%);
}
barcode.upc-a upc-digit[data-val="1"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 28.5714%, #fff 28.5714%, #fff 57.1428%, #000 57.1428%, #000 85.7142%, #fff 85.7142%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="2"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 28.5714%, #000 28.5714%, #000 42.8571%, #fff 42.8571%, #fff 71.4285%, #000 71.4285%, #000 100%);
}
barcode.upc-a upc-digit[data-val="2"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 28.5714%, #fff 28.5714%, #fff 42.8571%, #000 42.8571%, #000 71.4285%, #fff 71.4285%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="3"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 14.2857%, #000 14.2857%, #000 71.4285%, #fff 71.4285%, #fff 85.7142%, #000 85.7142%, #000 100%);
}
barcode.upc-a upc-digit[data-val="3"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 14.2857%, #fff 14.2857%, #fff 71.4285%, #000 71.4285%, #000 85.7142%, #fff 85.7142%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="4"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 14.2857%, #000 14.2857%, #000 28.5714%, #fff 28.5714%, #fff 71.4285%, #000 71.4285%, #000 100%);
}
barcode.upc-a upc-digit[data-val="4"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 14.2857%, #fff 14.2857%, #fff 28.5714%, #000 28.5714%, #000 71.4285%, #fff 71.4285%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="5"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 14.2857%, #000 14.2857%, #000 42.8571%, #fff 42.8571%, #fff 85.7142%, #000 85.7142%, #000 100%);
}
barcode.upc-a upc-digit[data-val="5"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 14.2857%, #fff 14.2857%, #fff 42.8571%, #000 42.8571%, #000 85.7142%, #fff 85.7142%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="6"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 14.2857%, #000 14.2857%, #000 28.5714%, #fff 28.5714%, #fff 42.8571%, #000 42.8571%, #000 100%);
}
barcode.upc-a upc-digit[data-val="6"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 14.2857%, #fff 14.2857%, #fff 28.5714%, #000 28.5714%, #000 42.8571%, #fff 42.8571%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="7"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 14.2857%, #000 14.2857%, #000 57.1428%, #fff 57.1428%, #fff 71.4285%, #000 71.4285%, #000 100%);
}
barcode.upc-a upc-digit[data-val="7"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 14.2857%, #fff 14.2857%, #fff 57.1428%, #000 57.1428%, #000 71.4285%, #fff 71.4285%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="8"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 14.2857%, #000 14.2857%, #000 42.8571%, #fff 42.8571%, #fff 57.1428%, #000 57.1428%, #000 100%);
}
barcode.upc-a upc-digit[data-val="8"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 14.2857%, #fff 14.2857%, #fff 42.8571%, #000 42.8571%, #000 57.1428%, #fff 57.1428%, #fff 100%);
}
barcode.upc-a upc-digit[data-val="9"]:nth-of-type(-n + 6) {
  background: linear-gradient(to right, #fff 0%, #fff 42.8571%, #000 42.8571%, #000 57.1428%, #fff 57.1428%, #fff 71.4285%, #000 71.4285%, #000 100%);
}
barcode.upc-a upc-digit[data-val="9"]:nth-of-type(n + 7) {
  background: linear-gradient(to right, #000 0%, #000 42.8571%, #fff 42.8571%, #fff 57.1428%, #000 57.1428%, #000 71.4285%, #fff 71.4285%, #fff 100%);
}
barcode.upc-a upc-digit::after {
  position: absolute;
  content: attr(data-val);
  font-family: mono;
  font-size: 3vh;
  bottom: -3.75vh;
  margin-left: 0.96vh;
}
barcode.upc-a upc-digit:first-of-type::after {
  bottom: 0;
  left: -4.8vh;
}
barcode.upc-a upc-digit:last-of-type::after {
  bottom: 0;
  right: -4.08vh;
}

    </style>
</head>
<body>
<barcode class="upc-a">
  <upc-reset></upc-reset>
  <upc-digit data-val="0"></upc-digit>
  <upc-digit data-val="2"></upc-digit>
  <upc-digit data-val="2"></upc-digit>
  <upc-digit data-val="0"></upc-digit>
  <upc-digit data-val="0"></upc-digit>
  <upc-digit data-val="0"></upc-digit>
  <upc-reset></upc-reset>
  <upc-digit data-val="1"></upc-digit>
  <upc-digit data-val="2"></upc-digit>
  <upc-digit data-val="5"></upc-digit>
  <upc-digit data-val="0"></upc-digit>
  <upc-digit data-val="3"></upc-digit>
  <upc-digit data-val="3"></upc-digit>
  <upc-reset></upc-reset>
</barcode>
</body>
</html>