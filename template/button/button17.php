<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
}

.share-icons {
  position: relative;
  display: flex;
  box-shadow: inset 0 -6px 10px -8px rgba(0, 0, 0, 0.3), inset 0 6px 10px -8px rgba(0, 0, 0, 0.3);
  cursor: pointer;
}
.share-icons__block {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: translateZ(0);
  transition: transform 0.3s, filter 0.2s;
  transition-timing-function: ease-in-out;
}
.share-icons__block-left, .share-icons__block-right {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: white;
  transition: 0.6s;
}
.share-icons__block-left {
  -webkit-clip-path: inset(0 50% 0 0);
          clip-path: inset(0 50% 0 0);
}
.share-icons__block-right {
  -webkit-clip-path: inset(0 0 0 50%);
          clip-path: inset(0 0 0 50%);
}
.share-icons__item {
  padding: 0.75rem;
}
.share-icons:hover .share-icons__block {
  filter: drop-shadow(0 0 8px rgba(0, 0, 0, 0.3));
}
.share-icons:hover .share-icons__block-left {
  transform: translateX(-50%) scale(1.2);
}
.share-icons:hover .share-icons__block-right {
  transform: translateX(50%) scale(1.2);
}
    </style>
</head>
<body>
<ul class="share-icons">
  <li class="share-icons__item"><i class="fab fa-twitter text-black"></i></li>
  <li class="share-icons__item"><i class="fab fa-codepen text-black"></i></li>
  <li class="share-icons__item"><i class="fab fa-github text-black"></i></li>
  <li class="share-icons__item"><i class="fab fa-linkedin text-black"></i></li>
  <li class="share-icons__block">
    <div class="share-icons__block-left"><i class="fas fa-share text-primary"></i></div>
    <div class="share-icons__block-right"><i class="fas fa-share text-primary"></i></div>
  </li>
</ul>
</body>
</html>