<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Oswald:400);

body {
  background: url(http://subtlepatterns.subtlepatterns.netdna-cdn.com/patterns/office.png) #444;
  font-size: 1em;
	font-family: 'Oswald', 'Helvetica Neue', Helvetica;
	line-height: 1.4;
}

.banner {
	position: relative;
	z-index: 1;
	margin: 65px auto;
	width: 330px;
}

.banner .line {
	margin: 0 0 10px;
	width: 100%;
	height: 78px;
	box-shadow: 10px 10px 10px rgba(0,0,0,0.05);
	text-align: center;
	text-transform: uppercase;
	font-size: 3em;
	line-height: 78px;
	transform: skew(0, -15deg);
}

.banner .line:after,
.banner .line:first-child:before {
	position: absolute;
	top: 44px;
	left: 0;
	z-index: -1;
	display: block;
	width: 330px;
	height: 78px;
	border-radius: 4px;
	background: rgba(180,180,180,0.8);
	content: '';
	transform: skew(0, 15deg);
}

.banner .line:first-child:before {
	top: -10px;
	right: 0;
	left: auto;
}

.banner .line:first-child:before,
.banner .line:last-child:after {
	width: 0;
	height: 0;
	border-width: 38px;
	border-style: solid;
	border-color: rgba(180,180,180,0.8) rgba(180,180,180,0.8) transparent transparent;
	background: transparent;
}

.banner .line:last-child:after {
	top: 12px;
	border-color: transparent transparent rgba(180,180,180,0.8) rgba(180,180,180,0.8);
}

.banner span {
	display: block;
	width: 100%;
	height: 100%;
	border-radius: 4px;
	background: rgba(255,255,255,0.9);
	color: #666;
	text-shadow: 1px 1px 0 #444;
}



.box{
    width:400px;
    height: 200px;
    background: #fff;
    position: relative;
    left:50%;
    top:50%;
    margin-left:-200px;
    margin-top:-50px;            
}
.box .content{
    overflow:hidden;
    width:400px;
    height: 200px;
    background:#000;
    position:relative;    
}
.box .content img{
    margin-top:-120px;
    -webkit-transition: all 500ms ;
    -moz-transition: all 500ms ;
    -ms-transition: all 500ms ;
    -o-transition: all 500ms ;
    transition: all 500ms ;
}
.box .content:hover img{
    opacity:0.3;
    margin-top:-170px;
    -webkit-filter: blur(3px);
}
.box .content:hover .text1{
    left:130px;
    opacity:1;    
  
}
.box .content:hover .text2{
    left:180px;
    opacity:1;
}
.box .content .text1{
    color:#fff;
    font-size:40px;
    font-family: 'Oswald', cursive;
    position:absolute;
    left:330px;
    top:60px;
    opacity:0;

-webkit-transition: all 800ms cubic-bezier(0.000, 0.440, 0.000, 0.795); 
   -moz-transition: all 800ms cubic-bezier(0.000, 0.440, 0.000, 0.795); 
    -ms-transition: all 800ms cubic-bezier(0.000, 0.440, 0.000, 0.795); 
     -o-transition: all 800ms cubic-bezier(0.000, 0.440, 0.000, 0.795); 
        transition: all 800ms cubic-bezier(0.000, 0.440, 0.000, 0.795);

-webkit-transition-timing-function: cubic-bezier(0.000, 0.440, 0.000, 0.795); 
   -moz-transition-timing-function: cubic-bezier(0.000, 0.440, 0.000, 0.795); 
    -ms-transition-timing-function: cubic-bezier(0.000, 0.440, 0.000, 0.795); 
     -o-transition-timing-function: cubic-bezier(0.000, 0.440, 0.000, 0.795); 
        transition-timing-function: cubic-bezier(0.000, 0.440, 0.000, 0.795);    
}
.box .content .text2{
    color:#fff;
    font-size:20px;
    font-family: 'Oswald', cursive;
    position:absolute;
    left:-100px;
    top:100px;
    opacity:0;
-webkit-transition: all 800ms cubic-bezier(0.000, 0.890, 0.630, 0.980); 
   -moz-transition: all 800ms cubic-bezier(0.000, 0.890, 0.630, 0.980); 
    -ms-transition: all 800ms cubic-bezier(0.000, 0.890, 0.630, 0.980); 
     -o-transition: all 800ms cubic-bezier(0.000, 0.890, 0.630, 0.980); 
        transition: all 800ms cubic-bezier(0.000, 0.890, 0.630, 0.980);

-webkit-transition-timing-function: cubic-bezier(0.000, 0.890, 0.630, 0.980); 
   -moz-transition-timing-function: cubic-bezier(0.000, 0.890, 0.630, 0.980); 
    -ms-transition-timing-function: cubic-bezier(0.000, 0.890, 0.630, 0.980); 
     -o-transition-timing-function: cubic-bezier(0.000, 0.890, 0.630, 0.980); 
        transition-timing-function: cubic-bezier(0.000, 0.890, 0.630, 0.980);
}
.box:before{
    content:"";
    width:80%;
    height:8px;
    bottom: 18px;
    left: 13px;
    z-index: -1;
    background: #000;
    position: absolute;
    box-shadow: -10px 10px 20px #000;
    -moz-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    -webkit-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    -o-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    -ms-transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    transform: scale(1) rotate(-5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
}
.box:after{
    content:"";
    width:80%;
    height:8px;
    bottom: 18px;
    right: 13px;
    z-index: -1;
    background: #000;
    position: absolute;
    box-shadow: 10px 10px 20px #000;
    -moz-transform: scale(1) rotate(5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    -webkit-transform: scale(1) rotate(5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    -o-transform: scale(1) rotate(5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    -ms-transform: scale(1) rotate(5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
    transform: scale(1) rotate(5deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
}
​

    </style>
</head>
<body>
<div class="banner">
  <div class="line">
    <span>Instahipster</span>
  </div>
</div>

<div class="box">
    <div class="content">
<img src="https://24.media.tumblr.com/tumblr_mb9wcgsFkU1rb86ldo1_400.jpg" width="500" height="500" alt="Italy / Urban / Street / City">
        <div class="text1">Voted</div>
        <div class="text2">most-hipster</div>
    </div>
</div>
</body>
</html>