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
}

body {
  overflow: hidden;
  background: #55b9f3;
  height: 100vh; 
}

.logo {
  font-family: "Montserrat", sans-serif;
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column; 
  color: #fff;
  font-size: 50px;
}

span {
  height: 50px;
  width: 50px;
  border-radius: 50px;
  position: absolute;
  pointer-events: none;
  background: #55b9f3;
  box-shadow:  20px 20px 60px #489dcf, 
             -20px -20px 60px #62d5ff;
  transform: translate(-50%, -50%);
  animation: blow 4s linear infinite;
}


@keyframes blow {
  0% {
    transform: translate(-50%, -50%);
    opacity: 1;
    filter: hue-rotate(0deg);
  }
  100% {
    transform: translate(-50%, -1000%);
    opacity: 0;
    filter: hue-rotate(720deg);
  }
}
    </style>
</head>
<body>
<body>  
  <div class="logo">
    MOVE MOUSE
  </div>  
  <script>
    document.addEventListener('mousemove', function(e) {
  let body = document.querySelector('body');
  let circle = document.createElement('span');
  let x = e.offsetX;
  let y = e.offsetY;
  circle.style.left = x + "px";
  circle.style.top = y + "px";
  let size = Math.random() * 100;
  circle.style.width = 20 + size + "px";
  circle.style.height = 20 + size + "px";
  body.appendChild(circle);
  setTimeout(function() {
    circle.remove();
  }, 1800);
});
  </script>
</body>
</body>
</html>