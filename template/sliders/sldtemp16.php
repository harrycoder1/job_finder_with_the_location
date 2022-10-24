<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *, html, body {
  padding: 0;
  margin: 0;
  color: white;
  box-sizing: border-box;
  font-family: 'Ubuntu', sans-serif;
  font-weight: bold;
  
}

#toggleContainer label { 
  text-align: center;
  width: 70px;
}

#container {
  height: 100vh;
  width: 100%;
  box-sizing: border-box;
}

#toggleContainer {
  height: 10vh;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  width: 95vw;
  position: absolute;
}

#tilesContainer {
  min-height: 90vh;
  width: 100vw;
  margin-top: 10vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  box-sizing: border-box;
  align-content: center;
  
}

.tileItem {
  width: 250px;
  height: 250px;
  margin: 5px;
  border-radius: 5px;
  
  transition: all 0.5s ease;
}

.tileItem:hover {
   transform: scale(1.05);
  transition: all 0.5s ease;
}

#galleryContainer { 
  height: 500px;
  width: 800px;
  background: transparent;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  box-sizing: border-box;
  position: relative;
}

#toggle {
  height: 10vh;
  width: 200px;
  display: flex;
  align-items: center;
  margin: 10px;
}

#tilesView {
  min-height: 100vh;
  width: 100vw;
  background: rgb(246,210,106);
  background: linear-gradient(111deg, rgba(246,210,106,1) 0%, rgba(255,159,0,1) 52%, rgba(251,197,100,1) 100%);
  display: none;
  justify-content: center;
  align-items: center;
  
}

#galleryView {
  height: 100vh;
  width: 100vw;
  background: rgb(246,210,106);
  background: linear-gradient(111deg, rgba(246,210,106,1) 0%, rgba(255,159,0,1) 52%, rgba(251,197,100,1) 100%);
  display: flex;
  justify-content: center;
  align-items: center;
}

#outer3 {
  width: 100px;
  height: 40px;
  background-color: white;
  margin: 10px auto;
  border-radius: 3px;
  border: 2px solid white;
  transition: all 0.5s;
}

#slider3 {
  height: 36px;
  width: 46px;
  background-color: orange;
  border-radius: 3px;  
  transition: all 0.5s;
}

#slider3.active {
  -webkit-transform: translatex(50px);
  -ms-transform: translatex(50px);
  -o-transform: translatex(50px);
  transform: translatex(50px);
  transition: all 0.5s;
  background-color: orange;
}

#outer3.outerActive {
  background-color: white;
  border: 2px solid white;
  transition: all 0.5s;
}

#mainView {
  height: 450px;
  width: 450px;  
  border-radius: 5px;
  background-color: #eb9100;
  margin-left: 10px;
  margin-right: 10px;
  z-index: 1;
  transition: all 1s;  
}

#mainView:hover {
  transform: scale(1.2);
  transition: all 1s;   
}

#leftView {
  height: 400px;
  width: 150px;
  opacity: 0.5;
  border-radius: 5px;
  transform: skewy(5deg);
  transform-origin: top right;
  background-color: #eb9100;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 1s;  
}

#leftView:hover {
  opacity: 1;
  transition: all 1s;
}

#rightView {
  height: 400px;
  width: 150px;
  opacity: 0.5;
  border-radius: 5px;
  transform: skewy(-5deg);
  transform-origin: top left;
  background-color: #eb9100;
  display: flex;
  justify-content: center;
  align-items: center;
 transition: all 1s;
}

#rightView:hover {
  opacity: 1;
  transition: all 1s;
}

.navBtns {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  border: none;
  position: absolute;
  opacity: 0.8;
  background-color: transparent;
  cursor: pointer;
  color: white;
}

.navBtns:hover {
  opacity: 1;
  transition: all 1s;
  background-color: #eb9100;
}

#navLeft {
  left: 50px;
}

#navRight {
  right: 50px;
}

#linkTag { 
  cursor: pointer;
  z-index: 1;
  box-sizing: border-box;
}
    </style>
</head>
<body>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
     <script src="https://kit.fontawesome.com/2c7fc28a2f.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="toggleContainer">
         <label>Carousel</label>
         <div id="toggle">
           <div id="outer3">
              <div id="slider3"></div>
           </div>
           <label>Tiles</label>
        </div>
      </div>
      <div id="galleryView">
        <div id="galleryContainer">
           <div id="leftView"></div>
           <button id="navLeft" class="navBtns"><i class="fas fa-arrow-left fa-3x"></i></button>
           <a id="linkTag">
              <div id="mainView"></div>
           </a>
           <div id="rightView"></div>
           <button id="navRight" class="navBtns"><i class="fas fa-arrow-right fa-3x"></i></button>
        </div>
      </div>
      <div id="tilesView">
        <div id="tilesContainer"></div>
      </div>
    </div>
    <script>
        document.getElementById("outer3").addEventListener("click", toggleState3);
    
    function toggleState3() {
      let galleryView = document.getElementById("galleryView")
      let tilesView = document.getElementById("tilesView")
      let outer = document.getElementById("outer3");
      let slider = document.getElementById("slider3");
      let tilesContainer = document.getElementById("tilesContainer");
      if (slider.classList.contains("active")) {
        slider.classList.remove("active");
        outer.classList.remove("outerActive");
        galleryView.style.display = "flex";
        tilesView.style.display = "none";
        
        while (tilesContainer.hasChildNodes()) {
          tilesContainer.removeChild(tilesContainer.firstChild)
          }  
      } else {
        slider.classList.add("active");
        outer.classList.add("outerActive");
        galleryView.style.display = "none";
        tilesView.style.display = "flex";
         
        for (let i = 0; i < imgObject.length - 1; i++) {
          let tileItem = document.createElement("div");
          tileItem.classList.add("tileItem");
          tileItem.style.background =  "url(" + imgObject[i] + ")";
          tileItem.style.backgroundSize = "contain";  
          tilesContainer.appendChild(tileItem);      
        }
      };
    }
    
    let imgObject = [
      "https://placeimg.com/450/450/any",
      "https://placeimg.com/450/450/animals",
      "https://placeimg.com/450/450/architecture",
      "https://placeimg.com/450/450/nature",
      "https://placeimg.com/450/450/people",
      "https://placeimg.com/450/450/tech",
      "https://picsum.photos/id/1/450/450",
      "https://picsum.photos/id/8/450/450",
      "https://picsum.photos/id/12/450/450",
      "https://picsum.photos/id/15/450/450",
      "https://picsum.photos/id/5/450/450",
    ];
    
    let mainImg = 0;
    let prevImg = imgObject.length - 1;
    let nextImg = 1;
    
    function loadGallery() {
    
      let mainView = document.getElementById("mainView");
      mainView.style.background = "url(" + imgObject[mainImg] + ")";
    
      let leftView = document.getElementById("leftView");
      leftView.style.background = "url(" + imgObject[prevImg] + ")";
      
      let rightView = document.getElementById("rightView");
      rightView.style.background = "url(" + imgObject[nextImg] + ")";
      
      let linkTag = document.getElementById("linkTag")
      linkTag.href = imgObject[mainImg];
    
    };
    
    function scrollRight() {
      
      prevImg = mainImg;
      mainImg = nextImg;
      if (nextImg >= (imgObject.length -1)) {
        nextImg = 0;
      } else {
        nextImg++;
      }; 
      loadGallery();
    };
    
    function scrollLeft() {
      nextImg = mainImg
      mainImg = prevImg;
       
      if (prevImg === 0) {
        prevImg = imgObject.length - 1;
      } else {
        prevImg--;
      };
      loadGallery();
    };
    
    document.getElementById("navRight").addEventListener("click", scrollRight);
    document.getElementById("navLeft").addEventListener("click", scrollLeft);
    document.getElementById("rightView").addEventListener("click", scrollRight);
    document.getElementById("leftView").addEventListener("click", scrollLeft);
    document.addEventListener('keyup',function(e){
        if (e.keyCode === 37) {
        scrollLeft();
      } else if(e.keyCode === 39) {
        scrollRight();
      }
    });
    
    loadGallery();
    
    
    
    
    </script>
  </body>
</html>
</body>
</html>