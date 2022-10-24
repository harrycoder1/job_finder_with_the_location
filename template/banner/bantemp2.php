<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  padding: 0px;
  margin: 0px;
}

body {
  background-color: #212121;
  font-family: Verdana, Geneva, sans-serif;
}

.container {
  height: 100vh;
  width: 100%;
  position: relative;
  text-align: center;
  overflow: hidden;
}

.title {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  z-index: -1;
  color: #ECEFF1;
  font-size: 120px;
  font-weight: 600;
}

.title-large {
  height: 130px;
  margin-left: -5px;
  opacity: 0.1;
}

.img-container {
  display: inline-block;
  overflow: hidden;
  margin-left: -2.8px;
  margin-right: -2.8px;
  width: 170px;
  vertical-align: top;
  border-radius: 0px 0px 80px 80px;
  animation-name: flow;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-delay: -2s;
  transition-timing-function: cubic-bezier(0,.57,1,.46);
  box-shadow: 2px 2px 16px 2px rgba(0,0,0,0.5);
}

.second-animation {
  animation-delay: -1.5s;
}

.third-animation {
  animation-delay: -1s; 
}

.fourth-animation {
  animation-delay: -0.5s; 
}

.fifth-animation {
  animation-delay: 0s; 
}

.sixth-animation {
  animation-delay: 0.5s; 
}
  
.seventh-animation {
  animation-delay: 1s;
}

.img {
  object-fit: cover;
  width: 170px;
  height: 100vh;
  margin-top: -60px;
}

.nba {
  margin-top: -20px;
}

@keyframes flow {
  0% {height: 20%; border-radius: 0px 0px 30px 30px;}
  50% {height: 90%; border-radius: 0px 0px 100px 100px;}
  100% {height: 20%; border-radius: 0px 0px 30px 30px;}
}

@media only screen and (max-width: 1200px) {
  #img-7 {
    display: none;
  }
}

@media only screen and (max-width: 1028px) {
  #img-1 {
    display: none;
  }
}

@media only screen and (max-width: 860px) {
  #img-6 {
    display: none;
  }
}
    </style>
</head>
<body>
<div class="container">
  <h1 class="title">eFuse</h1>
  <h1 class="title title-large">eFuse</h1>
  <div id="img-1" class="img-container">   
    <img class="img" src="https://cdn.wallpapersafari.com/78/74/QfSdUt.jpg">
  </div>
  
  <div class="img-container second-animation">    
    <img class="img" src="https://wallpapershome.com/images/pages/pic_v/13886.jpg">
  </div>
  
  <div class="img-container third-animation">    
    <img class="img" src="https://images2.alphacoders.com/474/thumb-1920-474206.jpg">
  </div>
  
  <div class="img-container fourth-animation">    
    <img class="img nba" src="https://wallpapercave.com/wp/wp3639738.jpg">
  </div>

  <div class="img-container fifth-animation">    
    <img class="img" src="http://hdqwalls.com/wallpapers/fortnite-g5.jpg">
  </div>  
  
  <div id="img-6" class="img-container sixth-animation">    
    <img class="img" src="http://orig15.deviantart.net/3c71/f/2016/121/9/4/reaper_wallpaper__overwatch__by_prollgurke-da0wf9m.png">
  </div>  
    
  <div id="img-7" class="img-container seventh-animation">    
    <img class="img" src="https://images4.alphacoders.com/885/thumb-1920-885543.jpg">
  </div>
</div>
</body>
</html>