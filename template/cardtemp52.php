<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  width: 100%;
  height: 100vh;
  display: flex;
  position: relative;
  background: #eeeeec;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  font-family: 'Open Sans', sans-serif;
  font-size: 100%;
}
.customSlider {
  opacity: 0;
  display: none;
}
.customSlider + label {
  position: relative;
  top: 35px;
  left: 15px;
  cursor: pointer;
}
.customSlider + label:before, .customSlider + label:after {
  background: #FFFFFF;
  position: absolute;
  content: '';
}
.customSlider + label:before {
  top: -90px;
  left: -60px;
  width: 80px;
  height: 40px;
  background: #ccc;
  border-radius: 20px;
  transition: background 0.75s;
}
.customSlider + label:after {
  height: 34px;
  width: 34px;
  top: -87px;
  left: -55px;
  border-radius: 50%;
  transition: all 0.5s;
}
.customSlider:checked + label:after {
  height: 34px;
  width: 34px;
  top: -87px;
  left: -19px;
  border-radius: 50%;
}
.customSlider:checked ~ .wrapper {
  color: #fff;
  transition: background 0.6s ease;
  background: #31394D;
}
.customSlider:checked ~ .wrapper .top-icons i {
  color: #fff;
}
.customSlider:checked ~ .wrapper .profile .name {
  color: #FDFEFF;
}
.customSlider:checked ~ .wrapper .profile .title {
  color: #7C8097;
}
.customSlider:checked ~ .wrapper .profile .description {
  color: #FDFEFF;
}
.customSlider:checked ~ .wrapper .icon h4 {
  color: #FFFFFF;
}
.customSlider:checked ~ .wrapper .icon p {
  color: #666B7D;
}
.wrapper {
  width: 320px;
  height: 540px;
  background: #FDFEFF;
  transition: background 0.6s ease;
  border-radius: 10px;
  padding: 20px 20px 20px 20px;
  box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
}
.wrapper .top-icons i {
  color: #080911;
}
.wrapper .top-icons i:nth-of-type(1) {
  float: left;
}
.wrapper .top-icons i:nth-of-type(2) {
  float: right;
}
.wrapper .top-icons i:nth-of-type(3) {
  float: right;
  padding-right: 0.8em;
}
.wrapper .profile {
  margin-top: 2.2em;
  position: relative;
}
.wrapper .profile:after {
  width: 100%;
  height: 1px;
  content: ' ';
  display: block;
  margin-top: 1.3em;
  background: #E9EFF6;
}
.wrapper .profile .check {
  position: absolute;
  right: 5em;
  bottom: 12.7em;
}
.wrapper .profile .check i {
  color: #fff;
  width: 20px;
  height: 20px;
  font-size: 12px;
  line-height: 20px;
  text-align: center;
  border-radius: 100%;
  background: linear-gradient(to bottom right, #C90A6D, #FF48A0);
}
.wrapper .profile .thumbnail {
  width: 124px;
  height: 124px;
  display: flex;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 1.5em;
  border-radius: 100%;
  box-shadow: 0 13px 26px rgba(0, 0, 0, 0.2), 0 3px 6px rgba(0, 0, 0, 0.2);
}
.wrapper .profile .name {
  color: #2D354A;
  font-size: 24px;
  font-weight: 600;
  text-align: center;
}
.wrapper .profile .title {
  color: #7C8097;
  font-size: 0.75em;
  font-weight: 300;
  text-align: center;
  padding-top: 0.5em;
  padding-bottom: 0.7em;
  letter-spacing: 1.5px;
  text-transform: uppercase;
}
.wrapper .profile .description {
  color: #080911;
  font-size: 14px;
  font-weight: 300;
  text-align: center;
  margin-bottom: 1.3em;
}
.wrapper .profile .btn {
  color: #fff;
  width: 130px;
  height: 42px;
  outline: none;
  border: none;
  display: block;
  cursor: pointer;
  font-weight: 300;
  margin-left: auto;
  margin-right: auto;
  border-radius: 70px;
  box-shadow: 0 13px 26px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.16);
  background: linear-gradient(to bottom right, #C90A6D, #FF48A0);
}
.wrapper .social-icons {
  display: flex;
  margin-top: 1.2em;
  justify-content: space-between;
}
.wrapper .social-icons .icon {
  display: flex;
  align-items: center;
  flex-direction: column;
}
.wrapper .social-icons .icon a {
  color: #fff;
  width: 60px;
  height: 60px;
  font-size: 28px;
  line-height: 60px;
  text-align: center;
  border-radius: 30px;
  box-shadow: 0 13px 26px rgba(0, 0, 0, 0.2), 0 3px 6px rgba(0, 0, 0, 0.2);
}
.wrapper .social-icons .icon:nth-of-type(1) a {
  background: linear-gradient(to bottom right, #C90A6D, #FF48A0);
}
.wrapper .social-icons .icon:nth-of-type(2) a {
  background: linear-gradient(to bottom right, #5E5AEC, #3F9EFC);
}
.wrapper .social-icons .icon:nth-of-type(3) a {
  background: linear-gradient(to bottom right, #6452E9, #639FF9);
}
.wrapper .social-icons .icon h4 {
  color: #080911;
  font-size: 1em;
  margin-top: 1.3em;
  margin-bottom: 0.2em;
}
.wrapper .social-icons .icon p {
  color: #666B7D;
  font-size: 12px;
}
.concept {
  position: absolute;
  bottom: 25px;
  color: #AAB0C4;
  font-size: 0.9em;
  font-weight: 400;
}
.concept a {
  color: #ac1966;
  text-decoration: none;
}

    </style>
</head>
<body>
<input id="slider" class="customSlider" type="checkbox">
<label for="slider"></label>

<div class="wrapper">
	<div class="top-icons">
		<i class="fas fa-long-arrow-alt-left"></i>
		<i class="fas fa-ellipsis-v"></i>
		<i class="far fa-heart"></i>
	</div>
	
	<div class="profile">
		<img src="https://images.unsplash.com/photo-1484186139897-d5fc6b908812?ixlib=rb-0.3.5&s=9358d797b2e1370884aa51b0ab94f706&auto=format&fit=crop&w=200&q=80%20500w" class="thumbnail">
		<div class="check"><i class="fas fa-check"></i></div>
		<h3 class="name">Beverly Little</h3>
		<p class="title">Javascript Developer</p>
		<p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquam aliquid porro!</p>
		<button type="button" class="btn">Hire Me</button>
	</div>
	
	<div class="social-icons">
		<div class="icon">
			<a href="/"><i class="fab fa-dribbble"></i></a>
			<h4>12.8k</h4>
			<p>Followers</p>
		</div>
		
		<div class="icon">
			<a href="#"><i class="fab fa-behance"></i></a>
			<h4>12.8k</h4>
			<p>Followers</p>
		</div>
		
		<div class="icon">
			<a href="#"><i class="fab fa-twitter"></i></a>
			<h4>12.8k</h4>
			<p>Followers</p>
		</div>
	</div>
</div>

<div class="concept">concept by 
	<a href="https://dribbble.com/shots/4346772-Profile-Card" target="_blank">
		<i class="fab fa-dribbble"></i> Vijay Verma
	</a>
</div>
</body>
</html>