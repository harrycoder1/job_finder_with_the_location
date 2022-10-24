<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body,html{margin:0;padding:0;height:100%;}
body{background:#E3DFD2;box-shadow: inset 0 0 20vmin 0 #585247;}
.wrap{
  position:relative;
  width:80vmin; height:80vmin;
  margin:0 auto;
  background:inherit;
  transform:scale(0.2) translatez(0px);
  opacity:0;
  transition:transform .5s, opacity .5s;
}
a{
  position:absolute;
  left:0; top:0;
  width:47.5%; height:47.5%;
  overflow:hidden;
  transform:scale(.5) translateZ(0px);
  background:#585247;
}
a div{
  height:100%;
  background-size:cover;
  opacity:.5;
  transition:opacity .5s;
  border-radius:inherit;
}
a:nth-child(1){
  border-radius:40vmin 0 0 0;
  transform-origin: 110% 110%;
  transition:transform .4s .15s;
}
a:nth-child(1) div{
  background-image:url('https://farm3.staticflickr.com/2827/10384422264_d9c7299146.jpg');
}
a:nth-child(2){
  border-radius:0 40vmin 0 0;
  left:52.5%;
  transform-origin: -10% 110%;
  transition:transform .4s .2s;
}
a:nth-child(2) div{
  background-image:url('https://farm7.staticflickr.com/6083/6055581292_d94c2d90e3.jpg');
}
a:nth-child(3){
  border-radius:0 0 0 40vmin;
  top:52.5%;
  transform-origin: 110% -10%;
  transition:transform .4s .25s;
}
a:nth-child(3) div{
  background-image:url('https://farm7.staticflickr.com/6092/6227418584_d5883b0948.jpg');
}
a:nth-child(4){
  border-radius:0 0 40vmin 0;
  top:52.5%; left:52.5%;
  transform-origin: -10% -10%;
  transition:transform .4s .3s;
}
a:nth-child(4) div{
  background-image: url('https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg');
}
a:nth-child(5){
  width:55%;height:55%;
  left:22.5%; top:22.5%;
  border-radius:50vmin;
  box-shadow:0 0 0 5vmin #E3DFD2;
  transform:scale(1);
}
a:nth-child(5) div{
  background-image: url('https://farm4.staticflickr.com/3766/12953056854_b8cdf14f21.jpg');
}
span{
  position:relative;
  display:block;
  margin:0 auto;
  top:45vmin;
  width:10vmin; height:10vmin;
  border-radius:100%;
  background:#585247;
  transform:translateZ(0px);
}
span span{
  position:absolute;
  width:60%;height:3px;
  background:#ACA696;
  left:20%; top:50%;
  border-radius:0;
}
span span:after, span span:before{
  content:'';
  position:absolute;
  left:0; top:-1.5vmin;
  width:100%; height:100%;
  background:inherit;
}
span span:after{
  top:1.5vmin;
}
span:hover + .wrap, .wrap:hover{
  transform:scale(.8) translateZ(0px);
  opacity:1;
}
span:hover + .wrap a, .wrap:hover a{
  transform:scale(1) translatez(0px);
}
a:hover div{
  opacity:1;
  transform:translatez(0px);
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<span><span></span></span>
<div class="wrap">
  <a href="#"><div></div></a>
  <a href="#"><div></div></a>
  <a href="#"><div></div></a>
  <a href="#"><div></div></a>
  <a href="#"><div></div></a>
</div>



</body>
</html>