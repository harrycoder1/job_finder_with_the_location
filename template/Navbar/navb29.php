<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0px auto;
  padding: 0px;
  text-align: center;
  font-family: 'Open Sans', sans-serif;

}

.cont_principal {
  position: absolute;
  width: 100%;
  height: 100%;  
 background: rgb(255,255,255);
background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(224,232,245,1) 100%);
background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(224,232,245,1) 100%);
background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(224,232,245,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e0e8f5',GradientType=0 );

}

.cont_menu {
  position: absolute;
  width: 320px;
  left: 50%;
  margin-left: -160px;
  margin-top: 20%;
}

.cont_titulo_menu{
  position: relative;
  float: left;
  width: 100%;
  height: 60px;
  overflow: hidden;
  background-color: #4F7DF5;
  box-shadow: 0px 7px 30px -12px rgba(0,0,0,0.5);
  margin-top: 20px;
  border-radius:3px ;
   -webkit-user-select: none;  
  -moz-user-select: none; 
  -ms-user-select: none;         user-select: none;           }


.cont_icon_menu{
  position: relative;
  float: right;
  margin-right: 20px;
  top:14px;

}
.cont_icon_menu > img {
width: 32px;
z-index: 2;
position: relative;
}
.cont_titulo {
position: relative;
float: left;
margin-top: 20px;
margin-left: 20px;
color: #fff;
}

.cont_circle_1 {
  position: absolute;
top:-16px;
  left: -16px;
  width: 64px;
  height: 64px;
background-color: #fff;
opacity: 0.3;
  z-index: 0;
border-radius:50% ;
animation: animation_circle_1 3s infinite;
    animation-direction: alternate;
transform: scale(0);
}
.cont_circle_2 {
  position: absolute;
top:-46px;
  left: -46px;
  width: 128px;
  height: 128px;
background-color: #fff;
opacity: 0.2;
  z-index: 0;
border-radius:50% ;
animation: animation_circle_1 3s infinite;
    animation-direction: alternate;
animation-delay: 0.5s;
transform: scale(0);
}
.cont_circle_3 {
  position: absolute;
top:-80px;
  left: -80px;
  width: 192px;
  height: 192px;
background-color: #fff;
opacity: 0.1;
  z-index: 0;
border-radius:50% ;
animation: animation_circle_1 3s infinite;
    animation-direction: alternate;
animation-delay: 1s;
transform: scale(0);
}
.cont_circle_4 {
  position: absolute;
top:-115px;
  left: -116px;
  width: 256px;
  height: 256px;
background-color: #fff;
opacity: 0.1;
  z-index: 0;
border-radius:50% ;
animation: animation_circle_1 3s infinite;
    animation-direction: alternate;
animation-delay: 1.5s;
transform: scale(0);
}

@-webkit-keyframes animation_circle_1 {
  from { transform: scale(0);   }
  to { transform: scale(1); }
}
@-o-keyframes animation_circle_1 {
  from { transform: scale(0); }
  to { transform: scale(1); }
}
@-moz-keyframes animation_circle_1 {
  from { transform: scale(0); }
  to { transform: scale(1); }
}
@keyframes animation_circle_1 {
  from { transform: scale(0); }
  to { transform: scale(1); }
}

.cont_drobpdown_menu {
  position: relative;
  float: left;
  width: 100%;
   background-color: #fff;
  box-shadow: 0px 2px 20px -2px rgba(0,0,0,0.3);
margin-top: 10px;
  border-radius:3px ;
opacity: 1;
  transition: all 0.5s;
} 
.cont_drobpdown_menu ul > li {

  list-style: none;
  margin-left: -3px;
  margin-top: 20px;
  margin-bottom: 20px;
  border-left: 5px solid #eee ;
  width: 100%;
  display: block;
transition: all 0.5s;
}
.cont_drobpdown_menu ul > li:hover { 
  border-left: 5px solid #6992FE ;
}
.cont_drobpdown_menu ul > li:hover >a {  
color: #6992FE;
}

.cont_drobpdown_menu ul > li:nth-child(2) {
  border: none;
}
.cont_drobpdown_menu ul > li > a {
  position: relative;
  display: block;
  width: 90%;
  padding-top:10px;
  padding-bottom:10px;
  text-decoration: none;
  color: #C4D0DE;
transition: all 0.5s;
}
.cont_drobpdown_menu ul > li > hr  {
width: 75%;
height: 0px;
color: #123455;
background-color: #123455;
border:1px solid #eee;
}


.cont_icon_trg {
      position: relative;
    float: left;
    margin-bottom: -30px;
    z-index: 1;
  left: 10px;
  transform: translate(0px,10px);
transition: all 0.5s;
}


.disable   {
  transition: all 0.5s;
  opacity: 0;  
  transform: translate(0px,10px);

}

.disable > ul > li {
  transform: translate(0px,10px);
  opacity: 0;
}

.active   {
   opacity: 1;  
  transform: translate(0px,0px);
}

.active > ul > li {
transition-delay: 0.5s;
  transform: translate(0px,0px);
  opacity: 1;
}


    </style>
</head>
<body>
<div class="cont_principal">
<div class="cont_menu">
  <div class="cont_titulo_menu" onclick="menu()">
<div class="cont_titulo">
    <h4>ACCOUNT SETTINGS</h4>
    </div>
    <div class="cont_icon_menu">
   <img src="http://danysantos.hol.es/img/planet.png" alt="" />
<div class="cont_circle_1"></div>
<div class="cont_circle_2"></div>
<div class="cont_circle_3"></div>
<div class="cont_circle_4"></div>
    </div>
  </div>
<div class="cont_icon_trg disable">
<svg width="46px" height="38px" viewBox="0 0 46 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  >
    <defs>
        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
            <feOffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
            <feGaussianBlur stdDeviation="1.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.0813575634 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></feColorMatrix>
            <feMerge>
                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
        </filter>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        <polygon id="Triangle-1" fill="#FFFFFF" filter="url(#filter-1)" sketch:type="MSShapeGroup" points="23 7 39 24 7 24 "></polygon>
    </g>
</svg></div>
<div class="cont_drobpdown_menu disable" >

  <ul>
  <li><a href="#">Profile Information</a></li>
 <li><hr /></li>
  <li><a href="#">Change Password</a></li>
</ul>
  
  </div> 
  </div> 
</div>
<script>
    var c = 0;
function menu(){
  if(c % 2 == 0) {
document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
c++; 
  }else{
document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
c++;
  }
}
</script>
</body>
</html>