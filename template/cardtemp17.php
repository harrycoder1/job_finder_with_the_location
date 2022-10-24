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
  box-sizing:border-box;
}
body {
  width: 100%;
  height: 100vh;
  background-color:#000;
  
  display:grid;
  place-items:center;
}
img {
  width: 30%;
  height: 100%;
  object-fit:cover;
  
  -webkit-box-reflect:below 2px linear-gradient(transparent, transparent, #0004);
  
  transform-origin:center;
  transform:perspective(800px) rotateY(25deg);
  transition:0.5s;
}
.container {
  max-width:600px;
  max-height:350px;
  
  
  
  display:flex;
  justify-content:center;
  align-items:center;
  gap:20px;
  
}
.container:hover img {
  opacity:0.3;
}
.container img:hover {
  transform:perspective(800px)       rotateY(0deg);
  opacity:1;
}
    </style>
</head>
<body>
<html>
  <body>
    <div class="container">
      <img src="https://images.unsplash.com/photo-1569390173732-5c735072c80f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
      <img src="https://images.unsplash.com/photo-1582842195329-6a0baffd2a39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
      <img src="https://images.unsplash.com/photo-1600722230999-22c256d38cb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
  </body>
</html>
</body>
</html>