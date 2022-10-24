<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Fonts */
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
/* Variables */
/* Heart Vars */
/* Placeholders */
.favourite, body .wrapper_title, body .wrapper_content {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
}

body {
  margin: 0;
  padding: 0;
}

body {
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
}

/* Styles */
body {
  font-family: "Montserrat", sans-serif;
  text-align: center;
  background-color: #2A0E22;
  height: 100vh;
  overflow: hidden;
  background-image: url("");
}
body h1 {
  color: white;
  font-size: 22px;
  margin-top: 30px;
  font-weight: 700;
}
body h2 {
  color: white;
  font-size: 12px;
  font-weight: 400;
}
body h1, body h2 {
  text-transform: uppercase;
}
body p {
  color: black;
}
body .wrapper {
  width: 380px;
  margin: 0 auto;
  height: 100%;
  position: relative;
}
body .wrapper_content {
  width: 185px;
  height: 60px;
  background-color: transparent;
  border-radius: 1px;
}
body .wrapper_title {
  float: left;
  text-align: left;
  right: auto;
  width: 320px;
  height: 230px;
}
body .wrapper_title__social a {
  position: relative;
  overflow: hidden;
  display: block !important;
  display: none;
  width: 140px;
  margin-right: 15px;
  text-decoration: none;
  padding: 0px 0px 5px 0px;
  height: 40px;
  border: 2px solid white;
  float: left;
  color: white;
  font-size: 12px;
  font-weight: 400;
  margin-top: 20px;
}
body .wrapper_title__social a .slide {
  height: 45px;
  width: 100px;
  float: left;
  position: absolute;
  transform: skew(20deg);
  left: -120px;
  transition-property: left;
  transition-duration: 0.2s;
  background: white;
}
body .wrapper_title__social a .slide .arrow {
  position: absolute;
  right: 31px;
  top: 24px;
  opacity: 0;
  transform: skew(-20deg);
}
body .wrapper_title__social a .slide .arrow .stem {
  width: 10px;
  height: 2px;
  background: #858490;
}
body .wrapper_title__social a .slide .arrow .point {
  width: 6px;
  height: 6px;
  border-right: 2px solid #858490;
  top: -3px;
  right: 1px;
  position: absolute;
  transform: rotate(45deg);
  border-top: 2px solid #858490;
}
body .wrapper_title__social a img {
  width: 16px;
  margin-left: 10px;
  position: relative;
  margin-right: 8px;
  transition-property: margin-left;
  transition-duration: 0.1s;
  margin-top: 10px;
  top: 4px;
}
body .wrapper_title__social a:hover > .slide {
  left: -70px;
  transition-property: left;
  transition-duration: 0.1s;
}
body .wrapper_title__social a:hover > img {
  margin-left: 40px;
  transition-property: margin-left;
  transition-duration: 0.1s;
}
body .wrapper_title__social a:hover > .slide .arrow {
  right: 11px;
  opacity: 1;
  transition-property: right, opacity;
  transition-delay: 0.07s;
  transition-duration: 0.2s;
}
body .love {
  position: absolute;
  right: 20px;
  bottom: 0px;
  font-size: 11px;
  font-weight: normal;
}
body .love p {
  color: white;
  font-weight: normal;
  font-family: "Open Sans", sans-serif;
}
body .love a {
  color: white;
  font-weight: 700;
  text-decoration: none;
}
body .love img {
  position: relative;
  top: 3px;
  margin: 0px 4px;
  width: 10px;
}
body .brand {
  position: absolute;
  left: 20px;
  bottom: 14px;
}
body .brand img {
  width: 30px;
}

input {
  display: none;
}

input[type=checkbox]:checked + label > .favourite .favourite_text {
  top: 7px;
  opacity: 0;
  transition-property: top, opacity;
  transition-duration: 0.3s;
  transition-delay: 0s;
}

input[type=checkbox]:checked + label > .favourite {
  width: 20px;
  transition-delay: 0.2s;
  box-shadow: 0px 0px 0px 0px transparent;
}

input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(1) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.702s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(2) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.704s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(3) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.706s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(4) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.708s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(5) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.71s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(6) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.712s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(7) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.714s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(8) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.716s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(9) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.718s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(10) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.72s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(11) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.722s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(12) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.724s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(13) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.726s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(14) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.728s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(15) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.73s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(16) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.732s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(17) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.734s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(18) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.736s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(19) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.738s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(20) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.74s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(21) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.742s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(22) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.744s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(23) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.746s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(24) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.748s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(25) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.75s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(26) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.752s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(27) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.754s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(28) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.756s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(29) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.758s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(30) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.76s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(31) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.762s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(32) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.764s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(33) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.766s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(34) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.768s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(35) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.77s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(36) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.772s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(37) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.774s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(38) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.776s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(39) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.778s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(40) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.78s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(41) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.782s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(42) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.784s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(43) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.786s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(44) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.788s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(45) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.79s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(46) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.792s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(47) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.794s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(48) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.796s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(49) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.798s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(50) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.8s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(51) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.802s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(52) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.804s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(53) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.806s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(54) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.808s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(55) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.81s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(56) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.812s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(57) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.814s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(58) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.816s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(59) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.818s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(60) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.82s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(61) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.822s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(62) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.824s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(63) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.826s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(64) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.828s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(65) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.83s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(66) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.832s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(67) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.834s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(68) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.836s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(69) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.838s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(70) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.84s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(71) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.842s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(72) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.844s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(73) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.846s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(74) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.848s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(75) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.85s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(76) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.852s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(77) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.854s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(78) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.856s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(79) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.858s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(80) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.86s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(81) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.862s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(82) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.864s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(83) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.866s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(84) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.868s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(85) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.87s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(86) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.872s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(87) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.874s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(88) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.876s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(89) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.878s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(90) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.88s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(91) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.882s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(92) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.884s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(93) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.886s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(94) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.888s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(95) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.89s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(96) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.892s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(97) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.894s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(98) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.896s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(99) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.898s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(100) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.9s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(101) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.902s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(102) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.904s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(103) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.906s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(104) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.908s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(105) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.91s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(106) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.912s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(107) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.914s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(108) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.916s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(109) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.918s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(110) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.92s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(111) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.922s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(112) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.924s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(113) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.926s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(114) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.928s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(115) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.93s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(116) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.932s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(117) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.934s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(118) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.936s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(119) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.938s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(120) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.94s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(121) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.942s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(122) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.944s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(123) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.946s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(124) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.948s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(125) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.95s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(126) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.952s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(127) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.954s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(128) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.956s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(129) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.958s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(130) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.96s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(131) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.962s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(132) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.964s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(133) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.966s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(134) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.968s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(135) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.97s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(136) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.972s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(137) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.974s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(138) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.976s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(139) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.978s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(140) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.98s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(141) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.982s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(142) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.984s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(143) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.986s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(144) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.988s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(145) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.99s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(146) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.992s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(147) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.994s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(148) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.996s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(149) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.998s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(150) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(151) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.002s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(152) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.004s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(153) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.006s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(154) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.008s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(155) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.01s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(156) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.012s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(157) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.014s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(158) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.016s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(159) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.018s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(160) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.02s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(161) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.022s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(162) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.024s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(163) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.026s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(164) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.028s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(165) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.03s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(166) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.032s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(167) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.034s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(168) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.036s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(169) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.038s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(170) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.04s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(171) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.042s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(172) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.044s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(173) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.046s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(174) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.048s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(175) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.05s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(176) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.052s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(177) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.054s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(178) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.056s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(179) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.058s;
}
input[type=checkbox]:checked + label > .favourite .spinner_part:nth-of-type(180) {
  opacity: 1;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 1.06s;
}

input[type=checkbox]:checked + label > .favourite .favourite_heart .favourite_heart__left {
  width: 6px;
  height: 12px;
  left: 3px;
  top: 0px;
  margin-top: 8px;
  transition-property: width, height, left, top, margin-top;
  transition-duration: 0.2s;
  transition-delay: 1.2s;
}

input[type=checkbox]:checked + label > .favourite .favourite_heart .favourite_heart__right {
  width: 6px;
  transition-property: width, height, left, margin-top;
  transition-duration: 0.2s;
  transition-delay: 1.2s;
  height: 17px;
  left: 10px;
  margin-top: 4px;
}

.spinner_part {
  width: 2px;
  height: 2px;
  opacity: 0;
  background: #CB3D3D;
  position: absolute;
  top: 55px;
  left: 20px;
  transform-origin: 10px -25px;
}
.spinner_part:nth-of-type(1) {
  transform: rotate(2deg);
}
.spinner_part:nth-of-type(2) {
  transform: rotate(4deg);
}
.spinner_part:nth-of-type(3) {
  transform: rotate(6deg);
}
.spinner_part:nth-of-type(4) {
  transform: rotate(8deg);
}
.spinner_part:nth-of-type(5) {
  transform: rotate(10deg);
}
.spinner_part:nth-of-type(6) {
  transform: rotate(12deg);
}
.spinner_part:nth-of-type(7) {
  transform: rotate(14deg);
}
.spinner_part:nth-of-type(8) {
  transform: rotate(16deg);
}
.spinner_part:nth-of-type(9) {
  transform: rotate(18deg);
}
.spinner_part:nth-of-type(10) {
  transform: rotate(20deg);
}
.spinner_part:nth-of-type(11) {
  transform: rotate(22deg);
}
.spinner_part:nth-of-type(12) {
  transform: rotate(24deg);
}
.spinner_part:nth-of-type(13) {
  transform: rotate(26deg);
}
.spinner_part:nth-of-type(14) {
  transform: rotate(28deg);
}
.spinner_part:nth-of-type(15) {
  transform: rotate(30deg);
}
.spinner_part:nth-of-type(16) {
  transform: rotate(32deg);
}
.spinner_part:nth-of-type(17) {
  transform: rotate(34deg);
}
.spinner_part:nth-of-type(18) {
  transform: rotate(36deg);
}
.spinner_part:nth-of-type(19) {
  transform: rotate(38deg);
}
.spinner_part:nth-of-type(20) {
  transform: rotate(40deg);
}
.spinner_part:nth-of-type(21) {
  transform: rotate(42deg);
}
.spinner_part:nth-of-type(22) {
  transform: rotate(44deg);
}
.spinner_part:nth-of-type(23) {
  transform: rotate(46deg);
}
.spinner_part:nth-of-type(24) {
  transform: rotate(48deg);
}
.spinner_part:nth-of-type(25) {
  transform: rotate(50deg);
}
.spinner_part:nth-of-type(26) {
  transform: rotate(52deg);
}
.spinner_part:nth-of-type(27) {
  transform: rotate(54deg);
}
.spinner_part:nth-of-type(28) {
  transform: rotate(56deg);
}
.spinner_part:nth-of-type(29) {
  transform: rotate(58deg);
}
.spinner_part:nth-of-type(30) {
  transform: rotate(60deg);
}
.spinner_part:nth-of-type(31) {
  transform: rotate(62deg);
}
.spinner_part:nth-of-type(32) {
  transform: rotate(64deg);
}
.spinner_part:nth-of-type(33) {
  transform: rotate(66deg);
}
.spinner_part:nth-of-type(34) {
  transform: rotate(68deg);
}
.spinner_part:nth-of-type(35) {
  transform: rotate(70deg);
}
.spinner_part:nth-of-type(36) {
  transform: rotate(72deg);
}
.spinner_part:nth-of-type(37) {
  transform: rotate(74deg);
}
.spinner_part:nth-of-type(38) {
  transform: rotate(76deg);
}
.spinner_part:nth-of-type(39) {
  transform: rotate(78deg);
}
.spinner_part:nth-of-type(40) {
  transform: rotate(80deg);
}
.spinner_part:nth-of-type(41) {
  transform: rotate(82deg);
}
.spinner_part:nth-of-type(42) {
  transform: rotate(84deg);
}
.spinner_part:nth-of-type(43) {
  transform: rotate(86deg);
}
.spinner_part:nth-of-type(44) {
  transform: rotate(88deg);
}
.spinner_part:nth-of-type(45) {
  transform: rotate(90deg);
}
.spinner_part:nth-of-type(46) {
  transform: rotate(92deg);
}
.spinner_part:nth-of-type(47) {
  transform: rotate(94deg);
}
.spinner_part:nth-of-type(48) {
  transform: rotate(96deg);
}
.spinner_part:nth-of-type(49) {
  transform: rotate(98deg);
}
.spinner_part:nth-of-type(50) {
  transform: rotate(100deg);
}
.spinner_part:nth-of-type(51) {
  transform: rotate(102deg);
}
.spinner_part:nth-of-type(52) {
  transform: rotate(104deg);
}
.spinner_part:nth-of-type(53) {
  transform: rotate(106deg);
}
.spinner_part:nth-of-type(54) {
  transform: rotate(108deg);
}
.spinner_part:nth-of-type(55) {
  transform: rotate(110deg);
}
.spinner_part:nth-of-type(56) {
  transform: rotate(112deg);
}
.spinner_part:nth-of-type(57) {
  transform: rotate(114deg);
}
.spinner_part:nth-of-type(58) {
  transform: rotate(116deg);
}
.spinner_part:nth-of-type(59) {
  transform: rotate(118deg);
}
.spinner_part:nth-of-type(60) {
  transform: rotate(120deg);
}
.spinner_part:nth-of-type(61) {
  transform: rotate(122deg);
}
.spinner_part:nth-of-type(62) {
  transform: rotate(124deg);
}
.spinner_part:nth-of-type(63) {
  transform: rotate(126deg);
}
.spinner_part:nth-of-type(64) {
  transform: rotate(128deg);
}
.spinner_part:nth-of-type(65) {
  transform: rotate(130deg);
}
.spinner_part:nth-of-type(66) {
  transform: rotate(132deg);
}
.spinner_part:nth-of-type(67) {
  transform: rotate(134deg);
}
.spinner_part:nth-of-type(68) {
  transform: rotate(136deg);
}
.spinner_part:nth-of-type(69) {
  transform: rotate(138deg);
}
.spinner_part:nth-of-type(70) {
  transform: rotate(140deg);
}
.spinner_part:nth-of-type(71) {
  transform: rotate(142deg);
}
.spinner_part:nth-of-type(72) {
  transform: rotate(144deg);
}
.spinner_part:nth-of-type(73) {
  transform: rotate(146deg);
}
.spinner_part:nth-of-type(74) {
  transform: rotate(148deg);
}
.spinner_part:nth-of-type(75) {
  transform: rotate(150deg);
}
.spinner_part:nth-of-type(76) {
  transform: rotate(152deg);
}
.spinner_part:nth-of-type(77) {
  transform: rotate(154deg);
}
.spinner_part:nth-of-type(78) {
  transform: rotate(156deg);
}
.spinner_part:nth-of-type(79) {
  transform: rotate(158deg);
}
.spinner_part:nth-of-type(80) {
  transform: rotate(160deg);
}
.spinner_part:nth-of-type(81) {
  transform: rotate(162deg);
}
.spinner_part:nth-of-type(82) {
  transform: rotate(164deg);
}
.spinner_part:nth-of-type(83) {
  transform: rotate(166deg);
}
.spinner_part:nth-of-type(84) {
  transform: rotate(168deg);
}
.spinner_part:nth-of-type(85) {
  transform: rotate(170deg);
}
.spinner_part:nth-of-type(86) {
  transform: rotate(172deg);
}
.spinner_part:nth-of-type(87) {
  transform: rotate(174deg);
}
.spinner_part:nth-of-type(88) {
  transform: rotate(176deg);
}
.spinner_part:nth-of-type(89) {
  transform: rotate(178deg);
}
.spinner_part:nth-of-type(90) {
  transform: rotate(180deg);
}
.spinner_part:nth-of-type(91) {
  transform: rotate(182deg);
}
.spinner_part:nth-of-type(92) {
  transform: rotate(184deg);
}
.spinner_part:nth-of-type(93) {
  transform: rotate(186deg);
}
.spinner_part:nth-of-type(94) {
  transform: rotate(188deg);
}
.spinner_part:nth-of-type(95) {
  transform: rotate(190deg);
}
.spinner_part:nth-of-type(96) {
  transform: rotate(192deg);
}
.spinner_part:nth-of-type(97) {
  transform: rotate(194deg);
}
.spinner_part:nth-of-type(98) {
  transform: rotate(196deg);
}
.spinner_part:nth-of-type(99) {
  transform: rotate(198deg);
}
.spinner_part:nth-of-type(100) {
  transform: rotate(200deg);
}
.spinner_part:nth-of-type(101) {
  transform: rotate(202deg);
}
.spinner_part:nth-of-type(102) {
  transform: rotate(204deg);
}
.spinner_part:nth-of-type(103) {
  transform: rotate(206deg);
}
.spinner_part:nth-of-type(104) {
  transform: rotate(208deg);
}
.spinner_part:nth-of-type(105) {
  transform: rotate(210deg);
}
.spinner_part:nth-of-type(106) {
  transform: rotate(212deg);
}
.spinner_part:nth-of-type(107) {
  transform: rotate(214deg);
}
.spinner_part:nth-of-type(108) {
  transform: rotate(216deg);
}
.spinner_part:nth-of-type(109) {
  transform: rotate(218deg);
}
.spinner_part:nth-of-type(110) {
  transform: rotate(220deg);
}
.spinner_part:nth-of-type(111) {
  transform: rotate(222deg);
}
.spinner_part:nth-of-type(112) {
  transform: rotate(224deg);
}
.spinner_part:nth-of-type(113) {
  transform: rotate(226deg);
}
.spinner_part:nth-of-type(114) {
  transform: rotate(228deg);
}
.spinner_part:nth-of-type(115) {
  transform: rotate(230deg);
}
.spinner_part:nth-of-type(116) {
  transform: rotate(232deg);
}
.spinner_part:nth-of-type(117) {
  transform: rotate(234deg);
}
.spinner_part:nth-of-type(118) {
  transform: rotate(236deg);
}
.spinner_part:nth-of-type(119) {
  transform: rotate(238deg);
}
.spinner_part:nth-of-type(120) {
  transform: rotate(240deg);
}
.spinner_part:nth-of-type(121) {
  transform: rotate(242deg);
}
.spinner_part:nth-of-type(122) {
  transform: rotate(244deg);
}
.spinner_part:nth-of-type(123) {
  transform: rotate(246deg);
}
.spinner_part:nth-of-type(124) {
  transform: rotate(248deg);
}
.spinner_part:nth-of-type(125) {
  transform: rotate(250deg);
}
.spinner_part:nth-of-type(126) {
  transform: rotate(252deg);
}
.spinner_part:nth-of-type(127) {
  transform: rotate(254deg);
}
.spinner_part:nth-of-type(128) {
  transform: rotate(256deg);
}
.spinner_part:nth-of-type(129) {
  transform: rotate(258deg);
}
.spinner_part:nth-of-type(130) {
  transform: rotate(260deg);
}
.spinner_part:nth-of-type(131) {
  transform: rotate(262deg);
}
.spinner_part:nth-of-type(132) {
  transform: rotate(264deg);
}
.spinner_part:nth-of-type(133) {
  transform: rotate(266deg);
}
.spinner_part:nth-of-type(134) {
  transform: rotate(268deg);
}
.spinner_part:nth-of-type(135) {
  transform: rotate(270deg);
}
.spinner_part:nth-of-type(136) {
  transform: rotate(272deg);
}
.spinner_part:nth-of-type(137) {
  transform: rotate(274deg);
}
.spinner_part:nth-of-type(138) {
  transform: rotate(276deg);
}
.spinner_part:nth-of-type(139) {
  transform: rotate(278deg);
}
.spinner_part:nth-of-type(140) {
  transform: rotate(280deg);
}
.spinner_part:nth-of-type(141) {
  transform: rotate(282deg);
}
.spinner_part:nth-of-type(142) {
  transform: rotate(284deg);
}
.spinner_part:nth-of-type(143) {
  transform: rotate(286deg);
}
.spinner_part:nth-of-type(144) {
  transform: rotate(288deg);
}
.spinner_part:nth-of-type(145) {
  transform: rotate(290deg);
}
.spinner_part:nth-of-type(146) {
  transform: rotate(292deg);
}
.spinner_part:nth-of-type(147) {
  transform: rotate(294deg);
}
.spinner_part:nth-of-type(148) {
  transform: rotate(296deg);
}
.spinner_part:nth-of-type(149) {
  transform: rotate(298deg);
}
.spinner_part:nth-of-type(150) {
  transform: rotate(300deg);
}
.spinner_part:nth-of-type(151) {
  transform: rotate(302deg);
}
.spinner_part:nth-of-type(152) {
  transform: rotate(304deg);
}
.spinner_part:nth-of-type(153) {
  transform: rotate(306deg);
}
.spinner_part:nth-of-type(154) {
  transform: rotate(308deg);
}
.spinner_part:nth-of-type(155) {
  transform: rotate(310deg);
}
.spinner_part:nth-of-type(156) {
  transform: rotate(312deg);
}
.spinner_part:nth-of-type(157) {
  transform: rotate(314deg);
}
.spinner_part:nth-of-type(158) {
  transform: rotate(316deg);
}
.spinner_part:nth-of-type(159) {
  transform: rotate(318deg);
}
.spinner_part:nth-of-type(160) {
  transform: rotate(320deg);
}
.spinner_part:nth-of-type(161) {
  transform: rotate(322deg);
}
.spinner_part:nth-of-type(162) {
  transform: rotate(324deg);
}
.spinner_part:nth-of-type(163) {
  transform: rotate(326deg);
}
.spinner_part:nth-of-type(164) {
  transform: rotate(328deg);
}
.spinner_part:nth-of-type(165) {
  transform: rotate(330deg);
}
.spinner_part:nth-of-type(166) {
  transform: rotate(332deg);
}
.spinner_part:nth-of-type(167) {
  transform: rotate(334deg);
}
.spinner_part:nth-of-type(168) {
  transform: rotate(336deg);
}
.spinner_part:nth-of-type(169) {
  transform: rotate(338deg);
}
.spinner_part:nth-of-type(170) {
  transform: rotate(340deg);
}
.spinner_part:nth-of-type(171) {
  transform: rotate(342deg);
}
.spinner_part:nth-of-type(172) {
  transform: rotate(344deg);
}
.spinner_part:nth-of-type(173) {
  transform: rotate(346deg);
}
.spinner_part:nth-of-type(174) {
  transform: rotate(348deg);
}
.spinner_part:nth-of-type(175) {
  transform: rotate(350deg);
}
.spinner_part:nth-of-type(176) {
  transform: rotate(352deg);
}
.spinner_part:nth-of-type(177) {
  transform: rotate(354deg);
}
.spinner_part:nth-of-type(178) {
  transform: rotate(356deg);
}
.spinner_part:nth-of-type(179) {
  transform: rotate(358deg);
}
.spinner_part:nth-of-type(180) {
  transform: rotate(360deg);
}

.favourite {
  border-radius: 100px;
  width: 20px;
  overflow: hidden;
  height: 20px;
  cursor: pointer;
  -webkit-animation: pop 0.6s;
  padding: 20px;
  box-shadow: 0px 0px 0px 3px white;
  color: white;
  transition-property: width;
  transition-duration: 0.2s, 0.2s;
  -webkit-transition-timing-function: cubic-bezier(0.38, -0.35, 0.265, 1.15);
}
.favourite:hover {
  width: 146px;
  box-shadow: 0px 0px 0px 3px white;
}
.favourite:hover > .favourite_heart .favourite_heart__left {
  transform: scale(1.1) rotate(-45deg);
  transition-property: transform;
  transition-duration: 0.1s;
}
.favourite:hover > .favourite_text {
  top: 1px;
  opacity: 1;
  transition-property: top, opacity;
  transition-duration: 0.3s;
  transition-delay: 0.3s;
}
.favourite:hover > .favourite_heart .favourite_heart__right {
  transform: scale(1.1) rotate(45deg);
  transition-property: transform;
  transition-duration: 0.1s;
}
.favourite_text {
  margin-left: 33px;
  top: 7px;
  opacity: 0;
  position: relative;
}
.favourite_text span {
  color: white;
  text-transform: uppercase;
  font-weight: normal;
  font-size: 12px;
}
.favourite_heart {
  position: absolute;
  top: 19px;
  left: 20px;
  margin-right: 10px;
}
.favourite_heart__left {
  background: #CB3D3D;
  width: 14px;
  height: 24px;
  transform: rotate(-45deg);
  position: absolute;
  left: 0px;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
}
.favourite_heart__right {
  background: #CB3D3D;
  width: 14px;
  height: 24px;
  transform: rotate(45deg);
  position: absolute;
  left: 8px;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
}

input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(1) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.002s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(2) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.004s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(3) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.006s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(4) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.008s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(5) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.01s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(6) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.012s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(7) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.014s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(8) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.016s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(9) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.018s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(10) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.02s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(11) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.022s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(12) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.024s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(13) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.026s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(14) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.028s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(15) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.03s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(16) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.032s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(17) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.034s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(18) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.036s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(19) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.038s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(20) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.04s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(21) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.042s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(22) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.044s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(23) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.046s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(24) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.048s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(25) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.05s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(26) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.052s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(27) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.054s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(28) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.056s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(29) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.058s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(30) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.06s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(31) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.062s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(32) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.064s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(33) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.066s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(34) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.068s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(35) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.07s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(36) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.072s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(37) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.074s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(38) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.076s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(39) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.078s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(40) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.08s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(41) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.082s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(42) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.084s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(43) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.086s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(44) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.088s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(45) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.09s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(46) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.092s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(47) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.094s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(48) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.096s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(49) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.098s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(50) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.1s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(51) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.102s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(52) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.104s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(53) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.106s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(54) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.108s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(55) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.11s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(56) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.112s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(57) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.114s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(58) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.116s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(59) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.118s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(60) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.12s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(61) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.122s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(62) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.124s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(63) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.126s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(64) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.128s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(65) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.13s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(66) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.132s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(67) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.134s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(68) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.136s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(69) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.138s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(70) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.14s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(71) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.142s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(72) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.144s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(73) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.146s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(74) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.148s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(75) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.15s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(76) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.152s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(77) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.154s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(78) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.156s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(79) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.158s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(80) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.16s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(81) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.162s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(82) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.164s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(83) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.166s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(84) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.168s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(85) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.17s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(86) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.172s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(87) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.174s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(88) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.176s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(89) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.178s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(90) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.18s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(91) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.182s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(92) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.184s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(93) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.186s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(94) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.188s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(95) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.19s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(96) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.192s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(97) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.194s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(98) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.196s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(99) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.198s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(100) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.2s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(101) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.202s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(102) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.204s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(103) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.206s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(104) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.208s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(105) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.21s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(106) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.212s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(107) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.214s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(108) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.216s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(109) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.218s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(110) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.22s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(111) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.222s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(112) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.224s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(113) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.226s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(114) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.228s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(115) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.23s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(116) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.232s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(117) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.234s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(118) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.236s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(119) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.238s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(120) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.24s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(121) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.242s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(122) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.244s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(123) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.246s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(124) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.248s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(125) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.25s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(126) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.252s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(127) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.254s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(128) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.256s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(129) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.258s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(130) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.26s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(131) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.262s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(132) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.264s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(133) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.266s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(134) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.268s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(135) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.27s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(136) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.272s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(137) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.274s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(138) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.276s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(139) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.278s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(140) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.28s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(141) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.282s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(142) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.284s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(143) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.286s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(144) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.288s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(145) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.29s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(146) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.292s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(147) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.294s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(148) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.296s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(149) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.298s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(150) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.3s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(151) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.302s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(152) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.304s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(153) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.306s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(154) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.308s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(155) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.31s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(156) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.312s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(157) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.314s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(158) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.316s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(159) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.318s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(160) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.32s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(161) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.322s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(162) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.324s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(163) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.326s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(164) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.328s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(165) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.33s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(166) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.332s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(167) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.334s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(168) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.336s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(169) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.338s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(170) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.34s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(171) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.342s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(172) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.344s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(173) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.346s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(174) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.348s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(175) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.35s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(176) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.352s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(177) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.354s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(178) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.356s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(179) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.358s;
}
input[type=checkbox]:not(:checked) + label > .favourite .spinner_part:nth-of-type(180) {
  opacity: 0;
  transition-property: opacity;
  transition-duration: 0.1s;
  transition-delay: 0.36s;
}

input[type=checkbox]:not(:checked) + label > .favourite {
  transition-property: box-shadow, width;
  transition-duration: 0s, 0.2s;
  transition-delay: 0s, 0s;
  box-shadow: 0px 0px 0px 3px white;
}

/* Animations */
@keyframes pop {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes heartbeat_l {
  0% {
    transform: scale(1.1);
    transform: rotate(-45deg);
  }
  50% {
    transform: scale(0.7);
    transform: rotate(-45deg);
  }
  100% {
    transform: scale(1.1);
    transform: rotate(-45deg);
  }
}
/* Media quizzles */
    </style>
</head>
<body>
<div class='brand'>
  <a href='https://www.jamiecoulter.co.uk' target='_blank'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/logo.png'>
  </a>
</div>
<div class='wrapper'>
  <h1>Pure css favourite button</h1>
  <h2>Nice little button for favouriting blog posts etc.</h2>
  <div class='wrapper_content'>
    <div class='wrapper_content__inner'>
      <input id='click' type='checkbox'>
      <label for='click'>
        <div class='favourite'>
          <div class='spinner'>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
            <div class='spinner_part'></div>
          </div>
          <div class='favourite_heart'>
            <div class='favourite_heart__left'></div>
            <div class='favourite_heart__right'></div>
          </div>
          <div class='favourite_text'>
            <span>Favourite this</span>
          </div>
        </div>
      </label>
    </div>
  </div>
</div>
<div class='love'>
  <p>Made with <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/love_copy.png" /> by <a href='https://www.jamiecoulter.co.uk' target='_blank'> Jcoulterdesign </a></p>
</div>

</body>
</html>