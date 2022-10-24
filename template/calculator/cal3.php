<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*
Creator: William Jawad
https://twitter.com/will88m
*/

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
  background-color: #ff9e80;
}
.calculator {
    display: block;
    width: 995px;
    height: 476px;
    margin: auto auto auto auto;
    margin: calc(50vh - 150px) auto 0 auto;
    border-radius: 4px;
    background-color: #333;
    background-image: linear-gradient(90deg, #e6ebee, #f0f0f0);
    box-shadow: 0px 0px 0px 0px #b1b8c0 inset,
        0px -10px 10px 10px #b1b8c0 inset,
        0px 1px 0px 2px #b1b8c0 inset,
        0 55px 10px -25px rgba(0,0,0,0.1),
        0 65px 30px -10px rgba(0,0,0,0.5);
    z-index: 1;
  border-radius: 10px;
}

.out {
  display: block;
  background-color: transparent;
  margin: -6px auto auto 10px;
  border-radius: 5px;
  width: 965px;
  height: 490px;
  position: absolute;
  background-color: #333;
  z-index: -1;
}

.lcdBorder {
  display: block;
  z-index: 1;
  background-color: #222816;
  width: 760px;
  height: 105px;
  position: absolute;
  margin: 30px auto auto 30px;
  border-radius: 3px;
  box-shadow: 0 5px 20px .05px #130f0a inset,
        5px 0 10px -4px #130f0a inset,
        -0.5px 0 3px 1px #130f0a inset,
        0 0 0 2px rgba(0,0,0,1),
        0 65px 50px -10px rgba(0,0,0,-0.05);
}

.lcd {
  display: block;
  z-index: 2;
  background-color: #99a883;
  width: 700px;
  height: 60px;
  position: absolute;
  margin: 50px auto auto 60px;
  border-radius: 3px;
  box-shadow: 0 5px 20px .05px #130f0a inset,
        5px 0 10px -4px #130f0a inset,
        -0.5px 0 3px 1px #130f0a inset,
        0 0 0 2px rgba(0,0,0,1),
        0 65px 50px -10px rgba(0,0,0,-0.05);
}

.lcd p:nth-child(1){
	display: inline-block;
  font-family: "Orbitron", sans-serif;
  opacity: .5;
  margin: auto auto auto 150px;
  font-size: .6em;
}

.lcd p:nth-child(2){
	display: inline-block;
  font-family: "Orbitron", sans-serif;
  opacity: .5;
  margin: auto auto auto 150px;
  font-size: .6em;
}

.lcd p:nth-child(3){
  font-family: "Orbitron", sans-serif;
  opacity: .5;
  margin: -5px auto auto 110px;
  font-size: 1.6em;
	transform: scaleY(1.5);
}

.onoff {
  display: block;
  z-index: 2;
  background-color: black;
  width: 60px;
  height: 30px;
  position: absolute;
  margin: 30px auto auto 860px;
  border-radius: 3px;
  box-shadow: 0 5px 20px .05px #130f0a inset,
        5px 0 10px -4px #130f0a inset,
        -0.5px 0 3px 1px #130f0a inset,
        0 0 0 2px rgba(0,0,0,1),
        0 65px 50px -10px rgba(0,0,0,-0.05);
}

.onoffin {
  display: block;
  z-index: 3;
  background-color: black;
  width: 30px;
  height: 25px;
  position: absolute;
  margin: 30px auto auto 880px;
box-shadow: 3px 3px 3px 0 #102027 inset,
3px 5px 3px -5px #aeaeae inset,
3px 3px 0 1px #102027 inset,
10px 10px 5px 2px rgba(0,0,0,.7),
3px 3px 4px 3px rgba(0,0,0,4),
0 0 50px -10px rgba(0,0,0,-0.05);
}

.onoffinline1 {
  display: block;
  z-index: 3;
  background-color: #333;
  width: 1.5px;
  height: 30px;
  position: absolute;
  margin: 30px auto auto 885px;
}

.onoffinline2 {
  display: block;
  z-index: 3;
  background-color: #333;
  width: 1.5px;
  height: 30px;
  position: absolute;
  margin: 30px auto auto 890px;  
}
.onoffinline3 {
  display: block;
  z-index: 3;
  background-color: #333;
  width: 1.5px;
  height: 30px;
  position: absolute;
  margin: 30px auto auto 895px;
}

.onoffinline4 {
  display: block;
  z-index: 3;
  background-color: #333;
  width: 1.5px;
  height: 30px;
  position: absolute;
  margin: 30px auto auto 900px;
}

.onoffinline5 {
  display: block;
  z-index: 3;
  background-color: #333;
  width: 1.5px;
  height: 30px;
  position: absolute;
  margin: 30px auto auto 905px
}

.casio {
  display: block;
  background-color: transparent;
  position: relative;
  right: 20px;
  top: 80px;
  direction: rtl;
  z-index: 2;
}

.logo {
  font-family: 'play', sans-serif;
  font-size: .5em;
  font-weight: 20px;
  transform: scaleY(.8);
  margin-bottom: -5px;
}

.model {
  font-family: "Audiowide", sans-serif;
  color: #a31746;
  /* font-stretch: expanded;*/
  font-weight: 1;
  font-size: 0.5em;
}

.type {
  font-family: 'Orbitron', sans-serif;
  font-size: 0.2em;
  
}

.horizmain {
  display: block;
  background-color: #3333;
  margin: 155px auto auto auto;
  width: 995px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

#white {
  display: block;
  z-index: 2;
  background-color: #edf1ff;
  width: 50px;
  height: 30px;
  position: absolute;
  border-radius: 1px;
  box-shadow: 2px 2px 3px 0 #c7c7c7 inset,
    5px 5px 3px -1px #aeaeae inset,
    2px 2px 0 2px #c7c7c7 inset,
    0 0 0px 3px rgba(0,0,0,4),
    3px 3px 4px 3px rgba(0,0,0,4),
    0 0 50px -10px rgba(0,0,0,-0.05);
}

#light-gray {
  display: block;
  z-index: 2;
  background-color: #c8d1d2;
  width: 50px;
  height: 30px;
  position: absolute;
  border-radius: 3px;
  box-shadow: 2px 2px 3px 0 #707070 inset,
    5px 5px 3px -1px #aeaeae inset,
    2px 2px 0 2px #102027 inset,
    0 0 0px 3px rgba(0,0,0,4),
    3px 3px 4px 3px rgba(0,0,0,4),
    0 0 50px -10px rgba(0,0,0,-0.05);
}
.whitekey1 {
  margin: 180px auto auto 30px;
}

.whitekey2 {
  margin: 180px auto auto 102px;
}

.whitekey3 {
  margin: 180px auto auto 174px;
}

.whitekey4 {
margin: 180px auto auto 246px;
}

.whitekey5 {
margin: 180px auto auto 318px;
}

.whitekey6 {
margin: 180px auto auto 390px;
}

.whitekey7 {
margin: 180px auto auto 462px;
}

.whitekey8 {
margin: 240px auto auto 30px;
}

.whitekey9 {
margin: 240px auto auto 102px;
}

.whitekey10 {
margin: 240px auto auto 174px;
}

.whitekey11 {
margin: 240px auto auto 246px;
}

.whitekey12 {
margin: 240px auto auto 318px;
}

.whitekey13 {
margin: 240px auto auto 390px;
}

.whitekey14 {
margin: 240px auto auto 462px;
}

.whitekey15 {
margin: 300px auto auto 30px;
}

.whitekey16 {
margin: 300px auto auto 102px;
}

.whitekey17 {
margin: 300px auto auto 174px;
}

.whitekey18 {
margin: 300px auto auto 246px;
}

.whitekey19 {
margin: 300px auto auto 318px;
}

.whitekey20 {
margin: 300px auto auto 390px;
}

.whitekey21 {
margin: 300px auto auto 462px;
}

.whitekey22 {
margin: 360px auto auto 30px;
}

.whitekey23 {
margin: 360px auto auto 102px;
}

.whitekey24 {
margin: 360px auto auto 174px;
}

.whitekey25 {
margin: 360px auto auto 246px;
}

.whitekey26 {
margin: 360px auto auto 318px;
}

.whitekey27 {
margin: 360px auto auto 390px;
}

.whitekey28 {
margin: 360px auto auto 462px;
}

.whitekey29 {
margin: 420px auto auto 30px;
}

.whitekey30 {
margin: 420px auto auto 102px;
}

.whitekey31 {
margin: 420px auto auto 174px;
}

.whitekey32 {
margin: 420px auto auto 246px;
}

.whitekey33 {
margin: 420px auto auto 318px;
}

.whitekey34 {
margin: 420px auto auto 390px;
}

.whitekey35 {
margin: 420px auto auto 462px;
}

#black-text {
  font-family: "Archivo Narrow", sans-serif;
  text-align: center;
  font-weight: 700;
  margin-top: 10px;
  margin-left: 5px;
}

.w1 {
  font-family: "Audiowide", sans-serif;
  color: #a31545;
/*   margin: 10px auto auto 5px; */
}

.w2 {
  font-family: "Audiowide", sans-serif;
  color: #007bb2;
/*   margin: 10px auto auto 5px; */
  
  
}

.w3 {
  font-family: "Balsamiq Sans", cursive !important;
  transform: rotate(90deg);
  margin-left: 10px !important;
  margin-top: -2px !important;
  font-size: 1.5em;
/*   font-weight: 600; */
}

.w4 {
  font-family: "Balsamiq Sans", cursive !important;
/*   margin: -7px auto auto 9px; */
  margin-left: 10px !important;
  margin-top: 5px !important;
/*   font-size: 1.0em; */
/*   font-weight: 1000; */
  transform: rotate(95deg) scaleX(-1);
}

.w5 {
  font-family: "Michroma", sans-serif !important;
/*   margin: 10px auto auto 28px; */
  font-size: .8em;
/*   font-weight: 1000; */
  transform: scaleX(1.5);
}

.w6 {
  font-family: "Balsamiq Sans", sans-serif !important;
/*   margin: -3px auto auto 25px; */
/*   font-size: 1.4em; */
  margin-top: 8px !important;
  transform: scaleX(1.5);
}

.w7 {
  font-family: "Balsamiq Sans", sans-serif !important;
/*   margin: 5px auto auto 28px; */
  margin-top: 8px !important;
/*   font-size: 1.1em; */
/*   font-weight: 1000; */
  transform: scaleX(1.5);
  
}

#black {
  background-color: black;
  display: block;
  z-index: 3;
  width: 50px;
  height: 30px;
  position: absolute;
  border-radius: 1px;
  box-shadow: 3px 3px 3px 0 #102027 inset,
  3px 5px 3px -5px #aeaeae inset,
  3px 3px 0 1px #102027 inset,
  0 0 0px 3px rgba(0,0,0,4),
  3px 3px 4px 3px rgba(0,0,0,4),
  0 0 50px -10px rgba(0,0,0,-0.05);
}

#gray {
  background-color: #333;
  display: block;
  z-index: 3;
  width: 50px;
  height: 30px;
  position: absolute;
  border-radius: 1px;
  box-shadow: 3px 3px 3px 0 #333 inset,
  3px 5px 3px -5px #aeaeae inset,
  3px 3px 0 1px #4f5b62 inset,
  0 0 0px 3px rgba(0,0,0,4),
  3px 3px 4px 3px rgba(0,0,0,4),
  0 0 50px -10px rgba(0,0,0,-0.05);
}

#orange {
  display: block;
  z-index: 3;
  background-color: #d84315;
  width: 50px;
  height: 30px;
  position: absolute;
  border-radius: 1px;
  box-shadow: 3px 3px 3px 0 #b91400 inset,
  3px 5px 3px -5px #aeaeae inset,
  3px 3px 0 1px #b91400 inset,
  0 0 0px 3px rgba(0,0,0,4),
  3px 3px 4px 3px rgba(0,0,0,4),
  0 0 50px -10px rgba(0,0,0,-0.05);
}

.blackkey1 {
  margin: 180px auto auto 550px;
}

.blackkey2 {
  margin: 180px auto auto 622px;

}

.blackkey3 {
margin: 180px auto auto 694px;
}

.blackkey4 {
  background-color: #333;
  margin: 180px auto auto 766px;
}

.blackkey5 {
  margin: 180px auto auto 838px;
}

.blackkey6 {
  margin: 180px auto auto 910px;
}

.blackkey7 {
  margin: 240px auto auto 550px;
}

.blackkey8 {
  margin: 240px auto auto 622px;
}

.blackkey9 {
  margin: 240px auto auto 694px;
}

.blackkey10 {
  margin: 240px auto auto 766px;
}

.blackkey11 {
  margin: 240px auto auto 838px;
}

.blackkey12 {
  margin: 240px auto auto 910px;
}

.blackkey13 {
  margin: 300px auto auto 550px;
}

.blackkey14 {
  margin: 300px auto auto 622px;
}

.blackkey15 {
  margin: 300px auto auto 694px;
}

.blackkey16 {
  margin: 300px auto auto 766px;
}

.blackkey17 {
margin: 300px auto auto 838px;
}

.blackkey18 {
margin: 300px auto auto 910px;
}

.blackkey19 {
margin: 360px auto auto 550px;
}

.blackkey20 {
margin: 360px auto auto 622px;
}

.blackkey21 {
margin: 360px auto auto 694px;
}

.blackkey22 {
margin: 360px auto auto 766px;
}

.blackkey23 {
margin: 360px auto auto 838px;
}

.blackkey24 {
margin: 360px auto auto 910px;
}

.blackkey25 {
margin: 420px auto auto 550px;
}

.blackkey26 {
margin: 420px auto auto 622px;
}

.blackkey27 {
margin: 420px auto auto 694px;
}

.blackkey28 {
margin: 420px auto auto 766px;
}

.blackkey29 {
margin: 420px auto auto 838px;
}

.blackkey30 {
margin: 420px auto auto 910px;
}

#white-text {
  font-family: "Archivo Narrow", sans-serif;
  color: white;
  margin: auto;
  padding: 10px 0;
  text-align: center;
  font-size: .9em;
  font-weight: 700;
}

.b1 {
  font-size: .9em !important;
}

.b2 {
  padding: 8px 0 !important;
  font-size: .85em !important;
}

.b3 {
  padding: 8px 0 !important;
  font-size: .85em !important;
}

.b4 {
  font-size: .75em !important;
  transform: scaleY(1.5) !important;
  }

.b5 {
  font-size: 1em !important;
  font-weight: 600 !important;
  }

.b6 {
  font-size: 1em !important;
  font-weight: 600 !important;
  }

.b7 {
	padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b8 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b9 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b10 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b13 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b14 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b15 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b16 {
  padding: 3px 0 !important;
  font-size: 2.2em !important;
}

.b19 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b20 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b21 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
}

.b22 {
  padding: 5px 0 !important;
  font-size: 1.2em !important;
  transform: scaleX(2.5) !important;
  }

.b23 {
  color: white !important;
  margin: -20px !important;
/*   margin: -15px auto auto auto !important; */
  font-size: 1.5em !important;
}

.b24 {
  margin: -10px !important;
  font-size: 1.5em !important;
}

.b25 {
  margin: -5px auto auto 3px !important;
  font-size: 1.2em !important;
}

.b26 {
  margin: -25px auto auto 5px !important;
  font-size: 2em !important;
}

.b27 {
  padding: 8px 0 !important;
  font-size: 1em !important;
}

.b28 {
  padding: 3px 0 !important;
  font-size: 1.5em !important;
}

.b29 {
  padding: 8px 0 0 5px !important;
  font-size: 1em !important;
}

.b30 {
  padding: 2px 0 0 5px !important;
  font-size: 1.5em !important;
}

.vertline {
  display: block;
  background-color: #3336;
  margin: 165px auto auto 530px;
  width: 2px;
  height: 300px;
  position: absolute;
  z-index: 4;
}

.horzlinewhite1 {
  display: block;
  background-color: #3333;
  margin: 225px auto auto 15px;
  width: 510px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlinewhite2 {
  display: block;
  background-color: #3333;
  margin: 285px auto auto 15px;
  width: 510px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlinewhite3 {
  display: block;
  background-color: #3333;
  margin: 345px auto auto 15px;
  width: 510px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlinewhite4 {
  display: block;
  background-color: #3333;
  margin: 405px auto auto 15px;
  width: 510px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlineblack1 {
  display: block;
  background-color: #3333;
  margin: 225px auto auto 538px;
  width: 440px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlineblack2 {
  display: block;
  background-color: #3333;
  margin: 285px auto auto 538px;
  width: 440px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlineblack3 {
  display: block;
  background-color: #3333;
  margin: 345px auto auto 538px;
  width: 440px;
  height: 2px;
  position: absolute;
  z-index: 4;
}

.horzlineblack4 {
  display: block;
  background-color: #3333;
  margin: 405px auto auto 538px;
  width: 440px;
  height: 2px;
  position: absolute;
  z-index: 4;
}
    </style>
</head>
<body>
    <!---
Creator: William Jawad
https://twitter.com/will88m
--->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&Noticia+Text&Archivo+Narrow&Balsamiq+Sans&Iceberg&Play&Michroma&Audiowide&display=swap" rel="stylesheet">

<div class="calculator" aria-hidden="true">
	<div class="lcd"><p>RUN</p><p>DEG</p><p>1.23456789 E 10</p></div>
  <div class="lcdBorder"></div>
  <div class="onoff"></div>
  <div class="onoffin"></div>
  <div class="onoffinline1"></div>
  <div class="onoffinline2"></div>
  <div class="onoffinline3"></div>
  <div class="onoffinline4"></div>
  <div class="onoffinline5"></div>
  <div class="horizmain"></div>
 <!---
start of white keys
--->
<div id="white" class="whitekey1"><p id="black-text" class="w1">F1</p></div>


<div id="white" class="whitekey2"><p id="black-text" class="w2">F2</p></div>
<div id="light-gray" class="whitekey3"><p id="black-text" class="w3">=</p></div>
<div id="light-gray" class="whitekey4"><p id="black-text" class="w4">#</p></div>
<div id="light-gray" class="whitekey5"><p id="black-text" class="w5">$</p></div>
<div id="light-gray" class="whitekey6"><p id="black-text" class="w6">:</p></div>
<div id="light-gray" class="whitekey7"><p id="black-text" class="w7">;</p></div>
<div id="light-gray" class="whitekey8"><p id="black-text" class="w8">A</p></div>
<div id="light-gray" class="whitekey9"><p id="black-text" class="w9">B</p></div>
<div id="light-gray" class="whitekey10"><p id="black-text" class="w10">C</p></div>
<div id="light-gray" class="whitekey11"><p id="black-text" class="w11">D</p></div>
<div id="light-gray" class="whitekey12"><p id="black-text" class="w12">E</p></div>
<div id="light-gray" class="whitekey13"><p id="black-text" class="w13">F</p></div>
<div id="light-gray" class="whitekey14"><p id="black-text" class="w14">G</p></div>
<div id="light-gray" class="whitekey15"><p id="black-text" class="w15">H</p></div>
<div id="light-gray" class="whitekey16"><p id="black-text" class="w16">I</p></div>
<div id="light-gray" class="whitekey17"><p id="black-text" class="w17">J</p></div>
<div id="light-gray" class="whitekey18"><p id="black-text" class="w18">K</p></div>
<div id="light-gray" class="whitekey19"><p id="black-text" class="w19">L</p></div>
<div id="light-gray" class="whitekey20"><p id="black-text" class="w20">M</p></div>
<div id="light-gray" class="whitekey21"><p id="black-text" class="w21">N</p></div>
<div id="light-gray" class="whitekey22"><p id="black-text" class="w22">O</p></div>
<div id="light-gray" class="whitekey23"><p id="black-text" class="w23">P</p></div>
<div id="light-gray" class="whitekey24"><p id="black-text" class="w24">Q</p></div>
<div id="light-gray" class="whitekey25"><p id="black-text" class="w25">R</p></div>
<div id="light-gray" class="whitekey26"><p id="black-text" class="w26">S</p></div>
<div id="light-gray" class="whitekey27"><p id="black-text" class="w27">T</p></div>
<div id="light-gray" class="whitekey28"><p id="black-text" class="w28">U</p></div>
<div id="light-gray" class="whitekey29"><p id="black-text" class="w29">V</p></div>
<div id="light-gray" class="whitekey30"><p id="black-text" class="w30">W</p></div>
<div id="light-gray" class="whitekey31"><p id="black-text" class="w31">X</p></div>
<div id="light-gray" class="whitekey32"><p id="black-text" class="w32">Y</p></div>
<div id="light-gray" class="whitekey33"><p id="black-text" class="w33">Z</p></div>
<div id="light-gray" class="whitekey34"><p id="black-text" class="w34">=</p></div>
<div id="light-gray" class="whitekey35"><p id="black-text" class="w35">SPC</p></div>
  <div class="vertline"></div>
  <div class="horzlinewhite1"></div>
  <div class="horzlinewhite2"></div>
  <div class="horzlinewhite3"></div>
  <div class="horzlinewhite4"></div>
<!---
end of white keys
--->
<!---
start of black keys
--->
<div id="black" class="blackkey1"><p id="white-text" class="b1">MODE</p></div>
<div id="gray" class="blackkey2"><p id="white-text" class="b2">(</p></div>
<div id="gray" class="blackkey3"><p id="white-text" class="b3">)</p></div>
<div id="gray" class="blackkey4"><p id="white-text" class="b4">⬆</p></div>
<div id="orange" class="blackkey5"><p id="white-text" class="b5">C</p></div>
<div id="orange" class="blackkey6"><p id="white-text" class="b6">AC</p></div>
<div id="gray" class="blackkey7"><p id="white-text" class="b7">7</p></div>
<div id="gray" class="blackkey8"><p id="white-text" class="b8">8</p></div>
<div id="gray" class="blackkey9"><p id="white-text" class="b9">9</p></div>
<div id="gray" class="blackkey10"><p id="white-text" class="b10">/</p></div>
<div id="black" class="blackkey11"><p id="white-text" class="b11">STAT</p></div>
<div id="black" class="blackkey12"><p id="white-text" class="b12">STOP</p></div>
<div id="gray" class="blackkey13"><p id="white-text" class="b13">4</p></div>
<div id="gray" class="blackkey14"><p id="white-text" class="b14">5</p></div>
<div id="gray" class="blackkey15"><p id="white-text" class="b15">6</p></div>
<div id="gray" class="blackkey16"><p id="white-text" class="b16">*</p></div>
<div id="black" class="blackkey17"><p id="white-text" class="b17">ANS</p></div>
<div id="black" class="blackkey18"><p id="white-text" class="b18">CONT</p></div>
<div id="gray" class="blackkey19"><p id="white-text" class="b19">1</p></div>
<div id="gray" class="blackkey20"><p id="white-text" class="b20">2</p></div>
<div id="gray" class="blackkey21"><p id="white-text" class="b21">3</p></div>
<div id="gray" class="blackkey22"><p id="white-text" class="b22">-</p></div>
<div id="gray" class="blackkey23"><p id="white-text" class="b23">,</p></div>
<div id="black" class="blackkey24"><p id="white-text" class="b24">⇦</p></div>
<div id="gray" class="blackkey25"><p id="white-text" class="b25">0</p></div>
<div id="gray" class="blackkey26"><p id="white-text" class="b26">.</p></div>
<div id="gray" class="blackkey27"><p id="white-text" class="b27">E</p></div>
<div id="gray" class="blackkey28"><p id="white-text" class="b28">+</p></div>
<div id="gray" class="blackkey29"><p id="white-text" class="b29">EXE</p></div>
<div id="black" class="blackkey30"><p id="white-text" class="b30">⇨</p></div>
  <div class="vertline"></div>
  <div class="horzlineblack1"></div>
  <div class="horzlineblack2"></div>
  <div class="horzlineblack3"></div>
  <div class="horzlineblack4"></div>
<!---
end of black keys
--->
  <div class="out" aria-hidden="true"></div>
            <div class="casio">
                <div class="speaker"></div>
                <H1><span><p class="logo">CASIO</p>
                      <p class="type">PROGRAMMABLE CALCULATOR</p>
                      <p class="model">FX-702P</p>
                </span></H1>
            </div>
  </div>

</body>
</html>