<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
  box-sizing: border-box;
  height: 100%;
  margin: 0;
  padding: 0;
}
*, *:before, *:after {
  box-sizing: inherit;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #0B1110;
  background: linear-gradient(45deg, #0B1110, #171717);
  cursor: pointer;
}
.glowing-animation {
  animation: glowing 17000ms infinite;
}
@keyframes glowing {
  0% {
    box-shadow: 0 0 -2px 1 rgba(61, 72, 70, 0.4);
  }
  40% {
    box-shadow: 0 0 20px 3px rgba(61, 72, 70, 0.5);
  }
  60% {
    box-shadow: 0 0 30px 3px rgba(61, 72, 70, 0.3);
  }
  100% {
    box-shadow: 0 0 -10px 0 rgba(61, 72, 70, 0.2);
  }
}
#barcodeContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #070b0a;
  padding: 0px 20px;
  border-radius: 15px;
  box-shadow: 0 0px 1px rgba(61, 72, 70, 0.8);
  cursor: crosshair;
}
#barcode {
  position: relative;
  color: #626B5B;
  font-family: 'Libre Barcode 128 Text', cursive;
  font-size: 5rem;
  font-weight: 100;
  white-space: no-wrap;
}
.animatedSpan {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.animatedSpan:hover {
  color: darkturquoise;
}
.barcodeSelected {
  color: darkturquoise;
}
.highlighted {
  color: aliceblue;
  border-bottom: 1px solid darkred;
  padding-bottom: 10px;
  text-shadow: 1px 1px 35px aqua;
}

    </style>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">

<div id='barcodeContainer' class='glowing-animation'>
  <h1 id="barcode">
    <span class = "animatedSpan ">[</span><span class = "animatedSpan">d</span><span class = "animatedSpan">a</span><span class = "animatedSpan">y</span><span class = "animatedSpan">n</span><span class = "animatedSpan">a</span><span class = "animatedSpan"> </span><span class = "animatedSpan">b</span><span class = "animatedSpan">l</span><span class = "animatedSpan">a</span><span class = "animatedSpan">c</span><span class = "animatedSpan">k</span><span class = "animatedSpan">w</span><span class = "animatedSpan">e</span><span class = "animatedSpan">l</span><span class = "animatedSpan">l</span><span class = "animatedSpan ">]
    </span>

<!-- PLANNED OBSOLESCENCE -->
<!--   <span class='animatedSpan'>P</span><span class='animatedSpan'>l</span><span class='animatedSpan'>a</span><span class='animatedSpan'>n</span><span class='animatedSpan'>n</span><span class='animatedSpan'>e</span><span class='animatedSpan'>d</span><span class='animatedSpan'> </span><span class='animatedSpan'>O</span><span class="animatedSpan">b</span><span class="animatedSpan">s</span><span class="animatedSpan">o</span><span class="animatedSpan">l</span><span class="animatedSpan">e</span><span class="animatedSpan">s</span><span class="animatedSpan">c</span><span class="animatedSpan">e</span><span class="animatedSpan">n</span><span class="animatedSpan">c</span><span class="animatedSpan">e</span> -->
    
  </h1>
</div>    
<script>
    let barcodeSpans = $("#barcode").children();

function barcodeAnimation()
{
  barcodeSpans.each(function(i)
  {
    let span = $(this);
    setTimeout(function()
    {
      // highlight each individual span with 200ms between each
      span.toggleClass('highlighted');
      // span.fadeToggle("slow");
    }, 200*i);});
  
  barcodeSpans.each(function(i)
  {
    let span = $(this);
    setTimeout(function()
    {
      // remove the highlighting from each span with 20ms between each
      span.toggleClass('highlighted');
      
    }, 20*i);});
}

$(document).ready(function()
{
  setInterval(barcodeAnimation, 4000);
});
</script>
</body>
</html>