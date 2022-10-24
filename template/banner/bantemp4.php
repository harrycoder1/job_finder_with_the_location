<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - SVG geometric sale banners with simple jQuery &amp; CSS animations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">
<style>
  body{
  background:#D2D2D0;
}

#wrapper{
 margin:50px auto;
}

h4{
  text-align: center; 
  font-family: monospace;
  cursor: pointer;
  color:#000;
  position:fixed;
  bottom:5px;
  right:5px;
  z-index:-1;
}

 svg{
  cursor: pointer !important;
   margin:px auto;

}
 /* End of Global Styling  */ 





 /* Ex1 Styling  */ 
.Banner1{
  display:none;
}

.Biggest, .ShopNow, .Sales { /* ex 1 texts  */
  display:none;
  color: red;
    animation-name: example;
    animation-duration: 4s;
}

.BannerBorderLine, .BannerBorder {
   display:none;
}

.BannerHolder{
 display:none;
}

.BorderAnimationEx1 {
  stroke-dasharray: 2000;
  stroke-dashoffset: 2000;
  animation: BannerBorder 1s linear forwards;
  animation-delay: 2s;
}
 /* End of Ex1 Styling  */ 




 /* Ex2 Styling  */ 
.Banner2{
  display:none;
}

.Mega, .ShopNowEx2,.SalesEx2 {/* ex 2 texts  */
 display:none;
}

.BannerBorderLineEx2, .BannerBorderEx2{
   display:none;
}

.BannerHolderEx2{
 display:none;
}

.BorderAnimationEx2 {
  stroke-dasharray: 20;
  stroke-dashoffset: 20;
  animation:BannerBorder 50s linear alternate infinite;
  animation-delay: 0s;
}

 /* End of Ex2 Styling  */ 





 /* Ex3 Styling  */ 
.Banner3{
  display:none;
}

.Best,.SalesEx3, .Limited {/* ex 3 texts  */
 display:none;
}

.BannerBorderLineEx3, .BannerBorderEx3{
   display:none;
}

.BannerHolderEx3{
 display:none;
}

.BorderAnimationEx3 {
  stroke-dasharray: 2000;
  stroke-dashoffset: 2000;
  animation: BannerBorder 3s linear alternate infinite;
  animation-delay: 0s;
}

 /* End of Ex3 Styling  */ 


 /* Ex4 Styling  */ 
.Banner4{
  display:none;
}

.SaleEx4, .BestEx4 {/* ex 4 texts  */
   display:none;
}

.OffEx4 {/* ex 4 texts  */
   display:none;
   -webkit-animation: fadeinout 1s linear forwards;
  animation: fadeinout 1s linear alternate infinite;
  animation-delay: 0s;
}
 

.BannerBorderLineEx4, .BannerBorderEx4{
   display:none;
}

.BannerHolderEx4{
 display:none;
}

.circleEx4{
  display:none; 
}

.triangle1Ex4{
  display:none; 
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 3s linear alternate infinite;
  animation-delay: 2s;
}

.triangle2Ex4{
  display:none; 
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 2s linear alternate infinite;
  animation-delay: 3s;
}

.triangle3Ex4{
  display:none; 
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 1s linear alternate infinite;
  animation-delay: 4s;
}

.BorderAnimationEx4 {
  stroke-dasharray: 2000;
  stroke-dashoffset: 2000;
  animation: BannerBorder 2s linear forwards;
  animation-delay: 0s;
}

 /* End of Ex4 Styling  */ 


/* Ex5 Styling  */ 
.Banner5{
  display:none;
}

.SaleEx5, .BestEx5 {/* ex 5 texts  */
   display:none;
}

.OffEx5 {/* ex 5 texts  */
   display:none;
   -webkit-animation: fadeinout 1s linear forwards;
  animation: fadeinout 1s linear alternate infinite;
  animation-delay: 0s;
}
 

.BannerBorderLineEx5, .BannerBorderEx5{
   display:none;
}

.BannerHolderEx5{
 display:none;
}

.circleEx5{
  display:none; 
}

.triangle1Ex5, .Oval1Ex5 {
  display:none; 
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 3s linear alternate infinite;
  animation-delay: 2s;
}

.triangle2Ex5, Oval2Ex5{
  display:none; 
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 2s linear alternate infinite;
  animation-delay: 3s;
}

.triangle3Ex5, .Oval3Ex5{
  display:none;
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 1s linear alternate infinite;
  animation-delay: 4s;
}

.triangle4Ex5{
  display:none; 
  -webkit-animation: fadeinout 4s linear forwards;
  animation: fadeinout 1s linear alternate infinite;
  animation-delay: 4s;
}

.BorderAnimationEx5 {
  stroke-dasharray: 2000;
  stroke-dashoffset: 2000;
  animation: BannerBorder 2s linear forwards;
  animation-delay: 0s;
}

 /* End of Ex5 Styling  */ 


/* Ex6 Styling  */ 
.Banner6{
  display:none;
}

.SaleEx6 {/* ex 6 texts  */
   display:none;
}

.OffEx6 {/* ex 6 texts  */
   display:none;
}
 

.BannerBorderLineEx6, .BannerBorderEx6{
   display:none;
}

.BannerHolderEx6{
 display:none;
}

.circleEx6{
  display:none; 
}

.circleEx6Shadow, .OffTextEx6 {
  -webkit-animation: fadeinout 1s linear forwards;
  animation: fadeinout 4s linear alternate infinite;
  animation-delay: 0s;
}

.BorderAnimationEx6 {
 stroke-dasharray: 4;
  stroke-dashoffset: 4;
  animation: BannerBorder 200s linear alternate infinite;
  animation-delay: 0s;
}

 /* End of Ex6 Styling  */ 


 /* Global Border Animation   */ 
@keyframes BannerBorder {
  from {
    stroke-dashoffset: 2000;
  }
  to {
    stroke-dashoffset: 1;
  }
}

@-webkit-keyframes fadeinout {
  0%,100% { opacity: 0; }
  50% { opacity: 1; }
}

@keyframes fadeinout {
  0%,100% { opacity: 0; }
  50% { opacity: 1; }
}


@keyframes example {
    from {color: red;}
    to {color: yellow;}
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Frijole|Josefin+Sans:300,400,400i,600,700|Viga" rel="stylesheet">

<div id="wrapper">
  
 <!– Ex 1 –> 
  
    <svg class="Banner1" height="220" width="450">
      
       <!– Border –>
      <polygon class="BorderAnimationEx1    BannerBorder" stroke-miterlimit="10" points="30 5, 20 200, 440 170, 440 55" style="fill:none; stroke:#000; stroke-width:5" /> 

      
       <!– Banner "yellow" –> 
     <polygon class="BannerHolder" points="5 31, 5 185, 410 205, 430 10" style=" opacity:0.2; fill: #000; " />
      <polygon class="BannerHolder" points="5 31, 5 180, 410 200, 430 10" style=" opacity:1; fill: #fdd808; " />
    
     
     <!– texts –> 
      
    <text class="Sales" x="43" y="122" font-family="Viga" font-size="65" opacity="0.8" fill="#fff"> SALES <tspan x="43" y="119" font-family="Viga" font-size="65"  fill="#000"> SALES </tspan>
      </text>
    
 
      
    <text class="Biggest" font-size="23" fill="#000" font-weight="300" font-family="Viga" > 
      <tspan x="270" y="70">B I G G E S T</tspan>
      <tspan x="287" y="95">S A L E S</tspan>
      <tspan x="302" y="120">UP TO</tspan>
      <tspan x="313" y="143">70%</tspan>
      <tspan x="314" y="168">OFF</tspan>
      </text>
  

   <text class="ShopNow" x="76" y="161.5" font-family="Viga" opacity="0.8" font-size="20" fill="#fff">S H O P&nbsp;&nbsp;N O W
      </text>


     
     <!– Border Overlay –> 
      <polyline class="BorderAnimationEx1 BannerBorderLine" points="30 3, 20 200" style="fill:none; stroke:#000; stroke-width:4.5;" /> 

      
  Sorry, your browser does not support inline SVG.
</svg>

<!– End of Ex 1 –> 
  
  
  
  <!– Ex 2 –> 
  
  
     <svg class="Banner2" height="220" width="450"> 
        
       
        <!– Border –>
       <polygon class="BorderAnimationEx2 BannerBorderEx2" stroke-miterlimit="10" points="30 5, 20 200, 440 170, 440 55" style="fill:none; stroke:#000; stroke-width:5" />  

       
       <!– Banner  –>
       <polygon class="BannerHolderEx2" points="5 31, 5 185, 410 205, 430 10" style="opacity:0.2;fill:#000;" />
       <polygon class="BannerHolderEx2" points="5 31, 5 180, 410 200, 430 10" style="opacity:1;fill:#0ADBB3;" />  
        
        
       <!– texts –> 

       <text class="SalesEx2" font-family="Viga" font-size="65" >
         <tspan fill="#000" opacity="0.8" x="43" y="120" font-family="Viga" font-size="65" opacity="1" >OFFER</tspan>
         <tspan  x="43" y="117" font-family="Viga" font-size="65" opacity="1" fill="#fff">OFFER</tspan>
       </text>

     <text class="Mega"font-weight="300" font-family="Josefin Sans" font-size="23" fill="#000">
         <tspan font-weight="700" x="280" y="60">MEGA</tspan>
         <tspan x="280" y="97">SALES</tspan>
         <tspan font-weight="700" x="270" y="136">LIMITED</tspan>
         <tspan x="260" y="175">QUANTITY</tspan>
       </text>


       <text class="ShopNowEx2"   font-family="Josefin Sans" font-weight="700" font-size="20" fill="#fff">
         <tspan  fill="#000"x="65" y="157">S H O P&nbsp; &nbsp;N O W</tspan>
       <tspan x="65" y="155">S H O P&nbsp; &nbsp;N O W</tspan>
           
           </text>


              
           <!– Overlay Border –> 

       <polyline class="BorderAnimationEx2 BannerBorderLineEx2" points="30 3, 20 200" style="fill:none; stroke:#000; stroke-width:4.5;" /> 


  Sorry, your browser does not support inline SVG.
</svg>
  <!– End of Ex 2 –> 
  
  
  
  
  
  
    <!– Ex 3 –> 
  <svg class="Banner3" height="220" width="450"> 
        
 
    <!– Border –> 
    <polygon class="BorderAnimationEx3 BannerBorderEx3" stroke-miterlimit="10" points="30 5, 20 200, 440 170, 440 55" style="fill:none; stroke:#000; stroke-width:5" /> 
        

    <!– Banner  –> 
    <polygon class="BannerHolderEx3" points="5 31, 5 185, 410 203, 430 10" style="opacity:0.2;fill:#000;" />
    <polygon class="BannerHolderEx3" points="5 31, 5 180, 410 200, 430 10" style="opacity:1; fill:#EC3B71; " /> 
        
 
    <!– texts –>
    <text class="SalesEx3" font-family="Viga" font-size="65">
      <tspan  x="53" y="95" opacity="0.5" fill="#000" x="55" font-weight="700" y="160" >S&nbsp; A&nbsp;  L&nbsp; E</tspan>
       <tspan  x="53" y="90" opacity="1" fill="#fff" x="55" font-weight="700" y="160" >S&nbsp; A&nbsp;  L&nbsp; E</tspan>
    </text>

    
    <text class="Best" x="53" y="130" font-size="20" font-weight="300" font-family="Josefin Sans" fill="#000">T H E &nbsp;&nbsp;&nbsp;&nbsp; B E S T 
      <tspan   x="245" y="130" font-weight="700">D I S C O U N T</tspan>
    </text>

    <text class="Limited" x="55"  y="160"  font-family="Josefin Sans" font-size="20" font-weight="700" fill="#fff">L&nbsp; I&nbsp; M&nbsp; I&nbsp; T&nbsp; E&nbsp; D&nbsp;
      <tspan x="245" y="160" font-weight="300" font-family="Josefin Sans" >Q U A N T I T Y</tspan>
    </text>

 <!– Border Overlay –>
    <polyline class="BorderAnimationEx3 BannerBorderLineEx3" points="30 3, 20 200" style="fill:none; stroke:#000; stroke-width:4.5;" /> 


  Sorry, your browser does not support inline SVG.
</svg>
  
  <!– End of Ex 3 –> 
  
  
  
   <!–Ex 4–>

  <svg class="Banner4" height="160" width="470"> 
        
        
 <!– Border –>          
    <polygon class="BannerBorderEx4 BorderAnimationEx4" points="50 20, 30 130, 420 125, 440 40" style="opacity:1; fill:NONE; stroke:#000; stroke-width:4.5;" />

    
<!– BannerHolder –>
    <polygon class="BannerHolderEx4" points="25 31, 10 125, 410 135, 430 40" style="opacity:0.1; fill:#000;"/>
    <polygon class="BannerHolderEx4" points="30 31, 15 120, 410 130, 430 20" style="opacity:1;fill:#5C3890;"/>
       
       
       
<!– Circle OFF & Triangles –>  

    <circle class="circleEx4" cx="90" cy="28.5" r="25" stroke="#fff" stroke-width="0" fill="#fff"/>

    <circle class="circleEx4" cx="90" cy="27" r="25" stroke="#fff" stroke-width="0" fill="#000"/>


    <polygon class="triangle1Ex4" style="opacity:1;fill:#5C3890;" points="63.5,10.06217782649107 53,10 63.49999999999999,3.937822173508927"></polygon>

    <polygon class="triangle2Ex4" points="130,15.196152422706632 114,10 123,4.803847577293366"></polygon>

    <polygon class="triangle3Ex4" style="opacity:1;fill:#5C3890;" points="33,20.196152422706632 29,15 37.99999999999999,9.803847577293366"></polygon>


<!– Texts –> 

    <text class="SaleEx4"  font-family="Josefin Sans" font-weight="700" font-size="70">
      <tspan opacity="0.4" fill="#000" x="223" y="104">SALE</tspan>
      <tspan fill="#fff" x="220" y="100">SALE</tspan>
    </text>
                         
    <text class="BestEx4"  font-family="Josefin Sans" font-weight="300i" font-size="25">
      <tspan opacity="1" fill="#FFF" x="53" y="80">B E S T</tspan>
      <tspan fill="#fff" x="53" y="110">O F F E R</tspan>
    </text>
                         

    <text class="OffEx4"  font-family="Josefin Sans" font-size="17">
      <tspan  font-weight="300" fill="#FFF" x="75" y="25">50%</tspan>
      <tspan  font-weight="700" fill="#fff" x="73" y="42">OFF</tspan>
    </text>

  Sorry, your browser does not support inline SVG.
</svg>
  <!– End of Ex 4–> 
  
  
  
     <!–Ex 5–>
<svg class="Banner5" height="160" width="470"> 
        
        
 <!– Border –>      
<polygon class="BannerHolderEx5" points="25 31, 20 125, 410 135, 430 40"
                       style="opacity:0.1;fill:#000;" />
                       
<polygon class="BannerHolderEx5" points="50 20, 30 130, 420 136, 440 40"
                       style="opacity:1; fill:NONE; stroke:#000; stroke-width:4.5;" />
                       
<polygon class="BannerHolderEx5" points="10 23, 20 120, 410 130, 430 45"
                       style="opacity:1;fill:#EBB026;"/>
       
       
       
<!– Circle OFF & Triangles –>  
<circle class="circleEx5" cx="410" cy="41.5" r="25" stroke="#fff" stroke-width="0" fill="#fff"/>
<circle class="circleEx5" cx="410" cy="40" r="25" stroke="#fff" stroke-width="0" fill="#000"/>

<polygon class="triangle1Ex5" style="opacity:1;fill:#EBB026;" points="63.5,10.06217782649107 53,10 63.49999999999999,3.937822173508927">
</polygon>

<polygon class="triangle2Ex5" style="opacity:1;fill:#EBB026;" points="130,15.196152422706632 114,10 123,4.803847577293366">   
</polygon>

<polygon class="triangle3Ex5" style="opacity:1;fill:#EBB026;" points="33,20.196152422706632 29,15 37.99999999999999,9.803847577293366">
</polygon>


<polygon class="triangle4Ex5" style="opacity:1;fill:#EBB026;" points="102.5,10.330127018922193 95,10 102.5,5.669872981077805" />


<polygon class="Oval1Ex5" style="opacity:1;fill:#EBB026;"  points="444.5048443395121,22.16941869558779 441.11260466978155,24.874639560909117 436.8825509907063,23.90915741234015 435,20 436.8825509907063,16.09084258765985 441.1126046697816,15.125360439090883 444.5048443395121,17.83058130441221" />

<polygon class="Oval1Ex5" style="opacity:1;fill:#EBB026;"  points="389.3301270189222,12.5 385,15 380.6698729810778,12.500000000000002 380.6698729810778,7.500000000000002 385,5 389.3301270189222,7.500000000000002" />

<polygon class="Oval1Ex5" style="opacity:1;fill:#EBB026;" points="417.5980762113533,8.5 415,10 412.4019237886467,8.5 412.4019237886467,5.500000000000001 415,4 417.5980762113533,5.500000000000001" />

<!– Texts –> 

<text class="SaleEx5"  font-family="Josefin Sans" font-weight="700" font-size="70">
<tspan opacity="0.4" fill="#000" x="29" y="104">S A L E</tspan>
<tspan fill="#fff" x="26" y="100">S A L E</tspan>
</text>
                         
<text class="BestEx5"  font-family="Josefin Sans" font-weight="300" font-size="25">
<tspan opacity="1" fill="#FFF" x="303" y="77">B E S T</tspan>
<tspan fill="#fff" x="290" y="102">O F F E R</tspan>
</text>
                         
<text class="OffEx5"  font-family="Josefin Sans" font-size="17">
<tspan  font-weight="400" fill="#FFF" x="395" y="38">80%</tspan>
<tspan  font-weight="700" fill="#fff" x="393" y="55">OFF</tspan>
</text>

  Sorry, your browser does not support inline SVG.
</svg>
  <!– End of Ex 5–> 
  
  
     <!–Ex 6–>

  <svg class="Banner6" height="160" width="470"> 
        
        
 <!– Border –>          
    <polygon class="BannerBorderEx6" points="50 20, 30 130, 420 125, 440 40" style="opacity:1; fill:NONE; stroke:#000; stroke-width:4.5;" />

    
<!– BannerHolder –>
    <polygon class="BannerHolderEx6" points="25 31, 10 125, 410 135, 430 40" style="opacity:0.1; fill:#000;"/>
    <polygon class="BannerHolderEx6" points="30 31, 15 120, 410 130, 430 20" style="opacity:1;fill:#ED3C72;"/>
       
       
       
<!– Circle OFF & Triangles –>  

    <circle class="circleEx6Shadow" opacity="0.5" cx="335" cy="75" r="65"  stroke="#fff" stroke-width="0" fill="#fff"/>

    <circle class="circleEx6" cx="330" cy="75" r="65" stroke="#fff" stroke-width="0" fill="#000"/>


<!– Texts –> 

    <text class="SaleEx6"  font-family="Josefin Sans" font-weight="700" font-size="70">
      <tspan opacity="0.4" fill="#000" x="63" y="104">SALE</tspan>
      <tspan fill="#fff" x="63" y="100">SALE</tspan>
    </text>
                                                     
    <text class="OffEx6"  >
    <tspan font-weight="300" font-size="20" font-family="Josefin Sans" fill="#fff" x="291" y="45">U P&nbsp;&nbsp;T O</tspan>
      <tspan class="OffTextEx6" font-family="Frijole" font-size="50"  font-weight="300" fill="#FFF" x="275" y="95">80%</tspan>
      <tspan font-weight="300" font-size="20" font-family="Josefin Sans"  fill="#fff" x="306" y="124">O F F</tspan>
    </text>


  <!– Border Overlay –> 
      <polyline class="BorderAnimationEx6 BannerBorderLineEx6" points="50 20, 30 130" style="stroke:#000; opacity:0.5; stroke-width:4.5;" /> 
      
  Sorry, your browser does not support inline SVG.
</svg>
  <!– End of Ex 6–> 
  

  </div>

<h4>
  <br> Click the banner to rerun ..
   <br> coded by <a href="https://www.Mansoour.com"> Mansoour</a></h4>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="./script.js"></script>
<script>
  /* inspired by https://goo.gl/HuhJi1 and https://goo.gl/ABJTqd  */

$(document).ready(function(){
  /* Ex1 */
$(".Banner1").delay(1000).fadeIn(500);  
$(".BannerBorder,.BannerBorderLine").delay(1000).fadeIn(500);
$(".BannerHolder").delay(2500).fadeIn(1000);
$(".Sales").delay(3500).fadeIn(1000);
$(".Biggest").delay(4500).fadeIn(1000);
$(".ShopNow").delay(5500).fadeIn(1000);
  
  
    /* Ex2 */
$(".Banner2").delay(6000).fadeIn(500);
$(".BannerHolderEx2").delay(6500).fadeIn(500);
$(".BannerBorderEx2,.BannerBorderLineEx2").delay(7000).fadeIn(500);
$(".SalesEx2").delay(7300).fadeIn(500);
$(".Mega").delay(8500).fadeIn(500);
$(".ShopNowEx2").delay(9000).fadeIn(500);

     /* Ex3 */
$(".Banner3").delay(10000).fadeIn(500);
$(".BannerHolderEx3").delay(10500).fadeIn(500);
$(".BannerBorderEx3,.BannerBorderLineEx3").delay(11000).fadeIn(500);
$(".SalesEx3").delay(11300).fadeIn(500);
$(".Best").delay(12500).fadeIn(500);
$(".Limited").delay(13000).fadeIn(500);
  
       /* Ex4 */
$(".Banner4").delay(15000).fadeIn(500);
$(".BannerHolderEx4").delay(16000).fadeIn(500);
$(".BannerBorderEx4,.BannerBorderLineEx3").delay(2100).fadeIn(500);
$(".SaleEx4").delay(16400).fadeIn(500);
$(".circleEx4").delay(17000).fadeIn(500);
$(".OffEx4").delay(17600).fadeIn(500);
$(".BestEx4").delay(18000).fadeIn(500);
 $(".triangle1Ex4").delay(17100).fadeIn(500);
$(".triangle2Ex4").delay(17300).fadeIn(500);
$(".triangle3Ex4").delay(17600).fadeIn(500);
  
   /* Ex5 */
$(".Banner5").delay(20000).fadeIn(500);
$(".BannerHolderEx5").delay(20000).fadeIn(500);
$(".BannerBorderEx5,.BannerBorderLineEx5").delay(2200).fadeIn(500);
$(".SaleEx5").delay(20400).fadeIn(500);
$(".circleEx5").delay(21000).fadeIn(500);
$(".OffEx5").delay(22600).fadeIn(500);
$(".BestEx5").delay(22000).fadeIn(500);
 $(".triangle1Ex5,.Oval3Ex5").delay(21100).fadeIn(500);
$(".triangle2Ex5,.Oval1Ex5").delay(21300).fadeIn(500);
$(".triangle3Ex5,.Oval2Ex5, .triangle4Ex5").delay(21600).fadeIn(500);
  
  
  /* Ex6 */
$(".Banner6").delay(24000).fadeIn(500);
$(".BannerHolderEx6").delay(24000).fadeIn(500);
$(".BannerBorderEx6,.BannerBorderLineEx6").delay(2500).fadeIn(500);
$(".SaleEx6").delay(26400).fadeIn(500);
$(".circleEx6").delay(26000).fadeIn(500);
$(".OffEx6").delay(26600).fadeIn(500);


});





 /* Rerun on click */

/* Ex1 */
$( ".Banner1" ).click(function() {
$(".BannerBorder,.BannerBorderLine,.BannerHolder,.Sales,.Biggest,.ShopNow").delay(0).fadeOut(500);  
$(".BannerBorder,.BannerBorderLine").delay(1000).fadeIn(500);
$(".BannerHolder").delay(2500).fadeIn(1000);
$(".Sales").delay(3500).fadeIn(1000);
$(".Biggest").delay(4500).fadeIn(1000);
$(".ShopNow").delay(5500).fadeIn(1000);
});


 /* Ex2 */
$( ".Banner2" ).click(function() {
$(".BannerHolderEx2,.BannerBorderEx2,.BannerBorderLineEx2,.SalesEx2,.Mega,.ShopNowEx2").delay(0).fadeOut(500);  
$(".Banner2").delay(1000).fadeIn(500);
$(".BannerHolderEx2").delay(1500).fadeIn(500);
$(".BannerBorderEx2,.BannerBorderLineEx2").delay(2000).fadeIn(500);
$(".SalesEx2").delay(2300).fadeIn(500);
$(".Mega").delay(3500).fadeIn(500);
$(".ShopNowEx2").delay(4000).fadeIn(500);
});


     /* Ex3 */
$( ".Banner3" ).click(function() {
$(".BannerHolderEx3,.BannerBorderEx3,.BannerBorderLineEx3,.SalesEx3,.Best,.Limited").delay(0).fadeOut(500);  
$(".Banner3").delay(1000).fadeIn(500);
$(".BannerHolderEx3").delay(1500).fadeIn(500);
$(".BannerBorderEx3,.BannerBorderLineEx3").delay(2000).fadeIn(500);
$(".SalesEx3").delay(2300).fadeIn(500);
$(".Best").delay(3500).fadeIn(500);
$(".Limited").delay(4000).fadeIn(500);
});


/* Ex4*/
$( ".Banner4" ).click(function() {
$(".BannerHolderEx4,.BannerBorderEx4,.BannerBorderLineEx4,.SaleEx4,.circleEx4,.OffEx4,.BestEx4,.triangle1Ex4,.triangle2Ex4,.triangle3Ex4").delay(0).fadeOut(500);  
$(".BannerHolderEx4").delay(1000).fadeIn(500);
$(".BannerBorderEx4,.BannerBorderLineEx4").delay(100).fadeIn(500);
$(".SaleEx4").delay(2000).fadeIn(500);
$(".circleEx4").delay(3000).fadeIn(500);
$(".OffEx4").delay(3600).fadeIn(500);
$(".BestEx4").delay(3800).fadeIn(500);
 $(".triangle1Ex4").delay(4100).fadeIn(500);
$(".triangle2Ex4").delay(4300).fadeIn(500);
$(".triangle3Ex4").delay(4600).fadeIn(500);
});


  
   /* Ex5 */ 
$( ".Banner5" ).click(function() {
$(".BannerHolderEx5,.BannerBorderEx5,.BannerBorderLineEx5,.SaleEx5,.circleEx5,.OffEx5,.triangle2Ex5,.triangle1Ex5,.Oval3Ex5,.BestEx5,.Oval1Ex5,.triangle3Ex5,.Oval2Ex5,.triangle4Ex5").delay(0).fadeOut(500);  
$(".Banner5").delay(1000).fadeIn(500);
$(".BannerHolderEx5").delay(1000).fadeIn(500);
$(".BannerBorderEx5,.BannerBorderLineEx5").delay(220).fadeIn(500);
$(".SaleEx5").delay(1400).fadeIn(500);
$(".circleEx5").delay(2000).fadeIn(500);
$(".OffEx5").delay(3600).fadeIn(500);
$(".BestEx5").delay(3000).fadeIn(500);
 $(".triangle1Ex5,.Oval3Ex5").delay(3100).fadeIn(500);
$(".triangle2Ex5,.Oval1Ex5").delay(3300).fadeIn(500);
$(".triangle3Ex5,.Oval2Ex5, .triangle4Ex5").delay(3600).fadeIn(500);
});

 /* Ex6 */
$( ".Banner6" ).click(function() {
$(".BannerHolderEx6,.BannerBorderEx6,.BannerBorderLineEx6,.SaleEx6,.circleEx6Shadow,.circleEx6,.OffEx6").delay(0).fadeOut(500);  
$(".Banner6").delay(1000).fadeIn(500);
$(".BannerHolderEx6").delay(2000).fadeIn(500);
$(".BannerBorderEx6,.BannerBorderLineEx6").delay(2500).fadeIn(500);
$(".SaleEx6").delay(2400).fadeIn(500);
  $(".circleEx6Shadow").delay(2600).fadeIn(500);
$(".circleEx6").delay(3600).fadeIn(500);
$(".OffEx6").delay(3660).fadeIn(500);
});
</script>
</body>
</html>
