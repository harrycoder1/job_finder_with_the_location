<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
  background: #f4f4f4;
  height: 100vh;
}

.wrapper{
  position: relative;
  width: 100%;
  height: 100%;
}

button{
  font-family: 'Ubuntu', sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
  width: 170px;
  height: 40px;
  line-height: 1;
  font-size: 18px;
  font-weight: bold;
  letter-spacing: 1px;
  border: 3px solid #8C82FC;
  background: #fff;
  color: #8C82FC;
  border-radius: 40px;
  cursor: pointer;
  overflow: hidden;
  transition: all .35s;
}

button:hover{
  background: #8C82FC;
  color: #fff;
}

button span{
  opacity: 1;
  visibility: visible;
  transition: all .35s;
}

.success{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 50%;
  z-index: 1;
  opacity: 0;
  visibility: hidden;
  transition: all .35s;
}

.success svg{
  width: 20px;
  height: 20px;
  fill: yellowgreen;
  transform-origin: 50% 50%;
  transform: translateY(-50%) rotate(0deg) scale(0);
  transition: all .35s;
}

button.is_active{
  width: 40px;
  height: 40px;
}

button.is_active .success{
  opacity: 1;
  visibility: visible;
}

button.is_active .success svg{
  margin-top: 50%;
  transform: translateY(-50%) rotate(720deg) scale(1);
}

button.is_active span{
  opacity: 0;
  visibility: hidden;
}
    </style>
</head>
<body>
<div class="wrapper">
  <button class="">
    <span>Submit</span>
    <div class="success">
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  viewBox="0 0 29.756 29.756" style="enable-background:new 0 0 29.756 29.756;" xml:space="preserve">
      
	<path d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z"/>
 </svg>
      </div>
  </button>
</div>
<script>
    let btn = document.querySelector("button");

btn.addEventListener("click", active);

function active() {
  btn.classList.toggle("is_active");
}
</script>
</body>
</html>