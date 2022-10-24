<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *, *:before, *:after {
  box-sizing: border-box;
  outline: none;
}

html {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 16px;
  font-smooth: auto;
  font-weight: 300;
  line-height: 1.5;
  color: #444;
}

body {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
}

.hide {
  display: none;
}

.button {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 12.5rem;
  magrin: 0;
  padding: 1.5rem 3.125rem;
  background-color: #3498db;
  border: none;
  border-radius: 0.3125rem;
  box-shadow: 0 12px 24px 0 rgba(0, 0, 0, 0.2);
  color: white;
  font-weight: 300;
  text-transform: uppercase;
  overflow: hidden;
}
.button:before {
  position: absolute;
  content: "";
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #54d98c;
}
.button span {
  position: absolute;
  line-height: 0;
}
.button span i {
  transform-origin: center center;
}
.button span:nth-of-type(1) {
  top: 50%;
  transform: translateY(-50%);
}
.button span:nth-of-type(2) {
  top: 100%;
  transform: translateY(0%);
  font-size: 24px;
}
.button span:nth-of-type(3) {
  display: none;
}

.active {
  background-color: #2ecc71;
}
.active:before {
  width: 100%;
  transition: width 3s linear;
}
.active span:nth-of-type(1) {
  top: -100%;
  transform: translateY(-50%);
}
.active span:nth-of-type(2) {
  top: 50%;
  transform: translateY(-50%);
}
.active span:nth-of-type(2) i {
  animation: loading 500ms linear infinite;
}
.active span:nth-of-type(3) {
  display: none;
}

.finished {
  background-color: #54d98c;
}
.finished .submit {
  display: none;
}
.finished .loading {
  display: none;
}
.finished .check {
  display: block !important;
  font-size: 24px;
  animation: scale 0.5s linear;
}
.finished .check i {
  transform-origin: center center;
}

@keyframes loading {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes scale {
  0% {
    transform: scale(10);
  }
  50% {
    transform: scale(0.2);
  }
  70% {
    transform: scale(1.2);
  }
  90% {
    transform: scale(0.7);
  }
  100% {
    transform: scale(1);
  }
}
    </style>
</head>
<body>
<button class="button">
	<span class="submit">Submit</span>
	<span class="loading"><i class="fa fa-refresh"></i></span>
	<span class="check"><i class="fa fa-check"></i></span>
</button>
<script>
    const button = document.querySelector('.button');
const submit = document.querySelector('.submit');

function toggleClass() {
	this.classList.toggle('active');
}

function addClass() {
	this.classList.add('finished');
}

button.addEventListener('click', toggleClass);
button.addEventListener('transitionend', toggleClass);
button.addEventListener('transitionend', addClass);
</script>
</body>
</html>