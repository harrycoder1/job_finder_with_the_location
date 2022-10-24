<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin:0px;
}
.colour-block {
  background:#823A9C;
  width:60%;
  padding:7% 20% 10% 20%;
  color:#fff;
}
.white-block {
  background:#fff;
  width:60%;
  padding:7% 20% 10% 20%;
  color:#823A9C;
}
h1 {
  text-align:center;
  font-size:80px;
  font-family:'wire one', serif;
  font-weight:normal;
}
p {
  font-size:20px;
  font-family:'Raleway', serif;
}


/*------------------*/
/*  SKEW CLOCKWISE  */
/*------------------*/
.skew-cc{
  width:100%;
  height:100px;
  position:absolute;
  left:0px;
  background: linear-gradient(to right bottom, #823A9C 49%, #fff 50%),    linear-gradient(-50deg, #ffffff 16px, #000 0);
}


/*-------------------------*/
/* SKEW COUNTER CLOCKWISE  */
/*-------------------------*/
.skew-c{
  width:100%;
  height:100px;
  position:absolute;
  left:0px;
  background: linear-gradient(to left bottom, #fff 49%, #823A9C 50%);
}
    </style>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Wire+One|Raleway:300' rel='stylesheet' type='text/css'>

<div class="skew-c"></div>
<div class="colour-block">
  <h1>Responsive Skewed Page Dividers.</h1>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
</div>
<div class="skew-cc"></div>
<div class="white-block">
  <h1>Skewed Counter-Clockwise.</h1>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
</div>
<div class="skew-c"></div>
<div class="colour-block">
  <h1>Skewed Clockwise.</h1>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
</div>
</body>
</html>