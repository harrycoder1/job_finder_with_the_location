<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  box-sizing: border-box; }

body {
  height: 100%;
  width: 100%;
  background: #eee;
  font-family: 'PT Sans', sans-serif; }

.demo {
  width: 100%;
  height: 100%; }

.penName {
  text-align: center;
  font-size: 36px; }

.mainCard {
  text-align: center;
  display: block;
  margin: 60px auto;
  background-color: white;
  box-shadow: 0 5px 40px rgba(0, 0, 0, 0.2);
  width: 90%;
  animation-name: mainCard;
  animation-duration: 1s;
  animation-delay: 0s;
  animation-fill-mode: both; }

@keyframes mainCard {
  0% {
    transform: scale(0); } }

.mainCardHeader {
  background-color: AQUAMARINE;
  height: 100px;
  width: 100%;
  animation-name: mainCardHeader;
  animation-duration: 0.4s;
  animation-delay: 0.5s;
  animation-fill-mode: both; }

@keyframes mainCardHeader {
  0% {
    transform: scaleY(0); } }

.mainCardContent {
  margin: 0 auto;
  text-align: center;
  position: relative;
  top: -50px;
  height: 100%;
  width: 90%; }

.miniCard {
  display: inline-block;
  padding: 5px;
  margin: 0 20px 20px 0;
  background-color: white;
  height: 300px;
  width: 250px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  animation-name: miniCard;
  animation-duration: 1s;
  animation-delay: 0.8s;
  animation-fill-mode: both; }

@keyframes miniCard {
  0% {
    transform: scale(0); }
  50% {
    transform: scale(1.05); }
  100% {
    transform: scale(1); } }

    </style>
</head>
<body>
<div class="demo">
<h2 class="penName">Material Cards Stack</h2>
<div class="mainCard">
  <div class="mainCardHeader"></div>
  <div class="mainCardContent">
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
    <div class="miniCard"></div>
  </div>
</div>
  
</div>
</body>
</html>