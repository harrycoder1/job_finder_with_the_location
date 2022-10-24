<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Do+Hyeon';
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.clear-fix:after {
  display: block;
  clear: both;
  content: '';
}
.img-responsive {
  max-width: 100%;
  height: auto;
}
.card__collection {
  position: relative;
  display: block;
  background: rgba(10, 10, 10, 0.5);
  padding: 10px;
  font-family: 'Do Hyeon', sans-serif;
  overflow: hidden;
}
.card__collection .cards {
  width: 300px;
  height: 400px;
  display: block;
  background-size: cover;
  float: left;
  border-radius: 15px;
  position: relative;
  overflow: hidden;
  background-position: center;
  margin: 10px;
}
.card__collection .cards--one {
  backface-visiblility: hidden;
}
.card__collection .cards--one:hover:after {
  bottom: -20px;
}
.card__collection .cards--one:hover:before {
  bottom: -10px;
}
.card__collection .cards--one:hover .cards--one__rect {
  left: 45%;
}
.card__collection .cards--one:hover .cards--one__rect--back {
  left: 50%;
}
.card__collection .cards--one::after {
  content: '';
  display: block;
  position: absolute;
  height: 70px;
  transform: rotate(-3deg);
  background: #e660e3;
  position: absolute;
  bottom: -80px;
  left: 0;
  right: -10px;
  z-index: 9;
  transition: all 0.2s ease-in;
  transition-delay: 0.3s;
}
.card__collection .cards--one:before {
  content: '';
  display: block;
  position: absolute;
  height: 80px;
  transform: rotate(-3deg);
  bottom: -90px;
  left: 0;
  background: #fff;
  right: -10px;
  z-index: 5;
  transition: all 0.2s ease-in;
  transition-delay: 0.1s;
}
.card__collection .cards--one__rect {
  color: #fff;
  text-transform: uppercase;
  font-size: 18px;
  background: #0f9bc0;
  width: 126px;
  height: 55px;
  transform: skewY(5deg);
  position: absolute;
  display: block;
  top: 60%;
  left: -45%;
  z-index: 1;
  line-height: 3.3rem;
  text-align: center;
  transition: all 0.2s ease-in;
}
.card__collection .cards--one__rect--back {
  display: block;
  background: rgba(34, 65, 154, 0.8);
  width: 126px;
  height: 55px;
  transform: skewY(7deg);
  position: absolute;
  top: 65%;
  left: -50%;
  transition: all 0.2s ease-in;
  transition-delay: 0.3s;
}
.card__collection .cards--one__rect p {
  transform: skewY(-7deg);
  position: relative;
}
.card__collection .cards--two {
  position: relative;
  backface-visibility: hidden;
}
.card__collection .cards--two p {
  position: absolute;
  top: 83%;
  left: -100%;
  text-transform: capitalize;
  color: #fff;
  font-size: 20px;
  z-index: 8;
  transition: all 0.6s ease;
}
.card__collection .cards--two:hover p {
  left: 8%;
}
.card__collection .cards--two:hover img {
  transform: translateY(-15px);
}
.card__collection .cards--two:hover .cards--two__rect {
  top: 75%;
}
.card__collection .cards--two:hover .cards--two__rect:before {
  transform: translateY(15px);
}
.card__collection .cards--two:hover li {
  transform: translateY(0);
}
.card__collection .cards--two:hover .cards--two__tri {
  right: -40%;
}
.card__collection .cards--two:hover .cards--two__tri:before {
  right: -312px;
}
.card__collection .cards--two img {
  transition: all 0.2s ease;
}
.card__collection .cards--two__tri {
  border-top: 220px solid transparent;
  border-bottom: 190px solid transparent;
  border-right: 288px solid #fff;
  opacity: 0.9;
  position: absolute;
  display: block;
  top: 0;
  right: -100%;
  transition: all 0.3s ease-in-out;
}
.card__collection .cards--two__tri:before {
  border-top: 220px solid transparent;
  border-bottom: 190px solid transparent;
  border-right: 288px solid #57ccfd;
  position: absolute;
  content: '';
  display: block;
  top: -220px;
  right: -612px;
  transition: all 0.3s ease-in-out;
  transition-delay: 0.2s;
}
.card__collection .cards--two__rect {
  width: 750px;
  height: 200px;
  background: #fff;
  display: block;
  position: absolute;
  top: 175%;
  left: -78%;
  transform: rotate(30deg);
  z-index: 5;
  opacity: 0.9;
  transition: all 0.3s ease-in-out;
}
.card__collection .cards--two__rect:before {
  content: '';
  display: block;
  width: 100%;
  position: relative;
  height: 100%;
  background: #f07306;
  transform: translateY(200px);
  z-index: 2;
  transition: all 0.3s ease-in-out;
  transition-delay: 0.1s;
}
.card__collection .cards--two ul {
  list-style: none;
  position: absolute;
  bottom: 0;
  left: 10px;
  z-index: 9;
}
.card__collection .cards--two ul li {
  display: inline-block;
  font-size: 16px;
  margin: 7px;
  color: #fff;
  transition: all 0.2s ease-in-out;
  transform: translateY(100px);
}
.card__collection .cards--two ul li:nth-child(2) {
  transition-delay: 0.2s;
}
.card__collection .cards--two ul li:nth-child(3) {
  transition-delay: 0.3s;
}
.card__collection .cards--two ul li:nth-child(4) {
  transition-delay: 0.4s;
}
.card__collection .cards--three {
  position: relative;
  z-index: 10;
}
.card__collection .cards--three:hover .cards--three__rect-1 {
  left: 10%;
}
.card__collection .cards--three:hover .cards--three__rect-1 .shadow-1 {
  left: -20%;
}
.card__collection .cards--three:hover .cards--three__rect-2 {
  left: 60%;
}
.card__collection .cards--three:hover .cards--three__rect-2:before {
  left: -100%;
}
.card__collection .cards--three:hover .cards--three__rect-2:after {
  left: 80%;
}
.card__collection .cards--three:hover .cards--three__rect-2 .shadow-2 {
  left: -10%;
}
.card__collection .cards--three:hover .cards--three__circle {
  transform: scale(1);
}
.card__collection .cards--three:hover .cards--three__circle:before {
  transform: scale(0.9);
}
.card__collection .cards--three:hover .cards--three__list li {
  transform: translateX(0);
}
.card__collection .cards--three__rect-1 {
  background: #fff;
  width: 200px;
  height: 110px;
  transform: skewX(-20deg);
  display: block;
  position: absolute;
  top: 73%;
  opacity: 0.9;
  left: -100%;
  z-index: 8;
  transition: all 0.5s ease-in;
}
.card__collection .cards--three__rect-1 p {
  font-size: 20px;
  color: #fff;
  transform: skewX(20deg);
  line-height: 6rem;
}
.card__collection .cards--three__rect-1 .shadow-1 {
  background: #9b1308;
  width: 230px;
  height: 100px;
  display: block;
  position: absolute;
  left: -200%;
  z-index: -1;
  transition: all 0.3s ease-in;
}
.card__collection .cards--three__rect-2 {
  width: 100px;
  height: 70px;
  background: #fff;
  position: absolute;
  top: 65%;
  left: 1000%;
  opacity: 0.9;
  transform: skewX(-20deg);
  z-index: 8;
  transition: all 0.5s ease-in;
}
.card__collection .cards--three__rect-2::before {
  content: '';
  display: block;
  width: 50px;
  height: 40px;
  background: #57ccfd;
  opacity: 1;
  position: absolute;
  left: 500%;
  top: 10%;
  transition: all 0.3s ease-in;
}
.card__collection .cards--three__rect-2::after {
  content: '';
  display: block;
  width: 50px;
  height: 40px;
  background: #9b1308;
  opacity: 1;
  position: absolute;
  left: 500%;
  top: 114%;
  transition: all 0.5s ease-in;
  transition-delay: 0.2s;
}
.card__collection .cards--three__rect-2 .shadow-2 {
  background: #57ccfd;
  width: 100%;
  height: 100%;
  display: block;
  position: absolute;
  top: -10%;
  left: 500%;
  transition: all 0.5s ease-in;
  transition-delay: 0.2s;
}
.card__collection .cards--three__circle {
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background: #fff;
  position: absolute;
  top: -15%;
  left: 50%;
  opacity: 0.9;
  transform: scale(0);
  transition: all 0.3s ease;
}
.card__collection .cards--three__circle:before {
  content: '';
  display: block;
  width: 100%;
  height: 100%;
  background: #9b1308;
  border-radius: 50%;
  transform: scale(0);
  transition: all 0.3s ease;
  transition-delay: 0.2s;
}
.card__collection .cards--three__list {
  list-style: none;
  position: absolute;
  top: -9px;
  right: 7px;
  padding-top: 60px;
  transition: all 0.4s ease;
}
.card__collection .cards--three__list li {
  display: inline-block;
  margin: 4px;
  color: #fff;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: rgba(87, 204, 253, 0.9);
  text-align: center;
  line-height: 1.7rem;
  font-size: 12px;
  transition: all 0.3s ease;
  transform: translateX(500%);
}
.card__collection .cards--three__list li:nth-child(1) {
  transition-delay: 0.2s;
}
.card__collection .cards--three__list li:nth-child(2) {
  transition-delay: 0.3s;
}
.card__collection .cards--three__list li:nth-child(3) {
  transition-delay: 0.4s;
}

    </style>
</head>
<body>
<div class="card__collection clear-fix">
<div class="cards cards--two">
    <img src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d702cb99ca804bffcfa8820c46483264&auto=format&fit=crop&w=651&q=80" class="img-responsive" alt="Cards Image">
    <span class="cards--two__rect"></span>
    <span class="cards--two__tri"></span>
    <p>Lucy Grace</p>
    <ul class="cards__list">
      <li><i class="fab fa-facebook-f"></i></li>
      <li><i class="fab fa-twitter"></i></li>
      <li><i class="fab fa-instagram"></i></li>
      <li><i class="fab fa-linkedin-in"></i></li>
    </ul>
  </div>
  <div class="cards cards--three">
    <img src="https://images.unsplash.com/photo-1480408144303-d874c5e12201?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=575213599ae24b3dbdfd84be79425c50&auto=format&fit=crop&w=634&q=80" class="img-responsive" alt="">
    <span class="cards--three__rect-1">
      <span class="shadow-1"></span>
      <p>Chris Levnon</p>
    </span>
    <span class="cards--three__rect-2">
      <span class="shadow-2"></span>
    </span>
    <span class="cards--three__circle"></span>
    <ul class="cards--three__list">
      <li><i class="fab fa-facebook-f"></i></li>
      <li><i class="fab fa-twitter"></i></li>
      <li><i class="fab fa-linkedin-in"></i></li>
    </ul>
  </div>
</div>
</body>
</html>