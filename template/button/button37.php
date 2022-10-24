<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:100,300,700);
h1 {
  color: white;
  font-family: "Lato";
  font-weight: 500;
  letter-spacing: 1.8px;
  text-transform: uppercase;
  text-align: center;
  padding: 10px 0 0 5px;
  width: 500px;
  margin-left: -220px;
  margin-bottom: 60px;
}

body {
  background-color: #1a1a1a;
}

.text, .hover {
  color: white;
  font-family: "Lato";
  font-weight: 500;
  letter-spacing: 1.8px;
  text-transform: uppercase;
  text-align: center;
  padding: 10px 0 0 5px;
}
.text span, .hover span {
  font-weight: 300;
}

.hover {
  color: #1a1a1a;
  margin-top: -50px;
  margin-bottom: 25px;
}

.container {
  height: 50px;
  width: 50px;
  padding-top: 50px;
  margin: auto;
}

.pulsebutton {
  border-radius: 50%;
  border: 4px solid;
  border-color: #2da372;
  background-color: #1a1a1a;
  height: 50px;
  width: 50px;
  padding: 0;
  outline: none;
  transition: all 1.2s ease-in;
}
.pulsebutton:hover {
  box-shadow: inset 0 0 0px 25px #2da372;
  transition: all 1.2s linear;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<body>
<div class="container">
  
  <h1> Hover intent like button</h1>
  
  <input type='button' class='pulsebutton'>
  <div class="text">Like +<span id="value">99</span></div>
  </input>
</div>
</body>
<script>
    // This function adds an increment of 1 ONCE to the 'likes' value
$(function (){

var valueElement = $('#value');
function incrementValue(e){
    valueElement.text(Math.max(parseInt(valueElement.text()) + e.data.increment, 0));
    return false;
}

$('.pulsebutton').one('mouseenter', {increment: 1}, incrementValue);

});

</script>
</body>
</html>