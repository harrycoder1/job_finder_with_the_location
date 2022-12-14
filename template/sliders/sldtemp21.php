<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,700");
:root {
  font-size: 10px;
  font-family: "Roboto", sans-serif;
  --color1: #E41936;
  --color2: #E7E31D;
  --color3: #3BB7CE;
}
:root * {
  outline: none;
}

html, body, main {
  width: 100%;
  height: 100%;
  margin: 0;
}

main {
  display: grid;
  grid-template-columns: 1fr 2fr;
}
main .layer {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
main .hero-left {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
main .hero-left h1 {
  text-align: center;
}
main .hero-left button {
  position: absolute;
  padding: 10px 15px;
  margin: 10px;
  border: none;
  background-color: black;
  color: white;
  font-size: 2.5rem;
  cursor: pointer;
  z-index: 2;
}
main .hero-left button:last-of-type {
  right: 0;
}
main .hero-left button:active {
  transform: scale(0.9);
}
main .hero-left .layers {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
main .hero-left .layers .layer {
  display: grid;
  grid-template-rows: 6rem 3fr 1fr;
  background-color: white;
  transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
  transition-delay: 0.5s;
  transform: translateX(100%);
  opacity: 0;
}
main .hero-left .layers .layer-displayed {
  transform: translateX(0);
  opacity: 1;
  z-index: 1;
}
main .hero-left .layers .layer-displayed-exit {
  transform: translateX(-100%);
  opacity: 0;
  z-index: 1;
}
main .hero-left .layers .layer > span {
  text-align: center;
  font-size: 4rem;
  font-weight: bold;
}
main .hero-left .layers .layer__image {
  background-repeat: no-repeat;
  background-size: auto 100%;
  background-position: center center;
}
main .hero-left .layers .layer__info {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  column-gap: 2rem;
  font-size: 1.5rem;
}
main .hero-left .layers .layer__info div {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
main .hero-left .layers .layer__info div:first-child {
  align-items: flex-end;
  color: gray;
}
main .hero-left .layers .layer__info div:last-child {
  font-weight: bold;
}
main .hero-left .layers .layer:nth-child(1) > span {
  color: var(--color1);
}
main .hero-left .layers .layer:nth-child(2) > span {
  color: var(--color2);
}
main .hero-left .layers .layer:nth-child(3) > span {
  color: var(--color3);
}
main .hero-right {
  grid-column: 2;
  position: relative;
  overflow: hidden;
}
main .hero-right > .layer {
  background-color: #E41936;
  transform: translateX(100%);
  transition: transform 0.5s cubic-bezier(0.55, 0, 0.1, 1);
  transition-delay: 0.5s;
}
main .hero-right > .layer-displayed {
  transform: translateX(0);
  z-index: 2;
}
main .hero-right > .layer-displayed-exit {
  transition-delay: 1s;
  transition-duration: 0;
  z-index: 1;
}
main .hero-right > .layer:nth-child(1) {
  background-color: var(--color1);
}
main .hero-right > .layer:nth-child(2) {
  background-color: var(--color2);
}
main .hero-right > .layer:nth-child(3) {
  background-color: var(--color3);
}
main .hero-right .photo-name {
  position: absolute;
  top: 33%;
  left: 50%;
  width: 20%;
  font-size: 1.5rem;
  z-index: 2;
}
main .hero-right .photo-name span {
  display: block;
}
main .hero-right .photo-name__wrapper {
  position: relative;
}
main .hero-right .photo-name__title {
  font-weight: bold;
}
main .hero-right .photo-name .layer {
  padding: 10px;
  transform: translateX(-100%);
  transition: transform 0.5s cubic-bezier(0.55, 0, 0.1, 1);
}
main .hero-right .photo-name .layer-displayed {
  transform: translateX(0);
  transition-delay: 0.5s;
}
main .hero-right .photo-frame {
  position: absolute;
  overflow: hidden;
  animation-play-state: paused;
}
main .hero-right .photo-frame:nth-child(4) {
  top: 10%;
  left: 10%;
  width: 40%;
  height: 40%;
  z-index: 3;
}
main .hero-right .photo-frame:nth-child(4) .cover {
  background-color: black;
}
main .hero-right .photo-frame:last-child {
  top: 40%;
  left: 20%;
  width: 65%;
  height: 50%;
  z-index: 2;
}
main .hero-right .photo-frame .cover {
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: white;
  transition: width 0.5s cubic-bezier(0.55, 0, 0.1, 1);
}
main .hero-right .photo-frame .layer {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transition-delay: 0.5s;
}
main .hero-right .photo-frame .layer-displayed {
  opacity: 1;
}

@keyframes cover {
  0% {
    width: 0;
  }
  50% {
    width: 100%;
  }
  95% {
    width: 0;
  }
  100% {
    width: 0;
  }
}
    </style>
</head>
<body>
<main>
  <div class="hero-left">
    <h1>NITRO</h1>
    <div class="layers">
      <div class="layer layer-displayed" data-scene="1">
        <span>THE CANNON</span>
        <div class="layer__image" style="background-image: url('http://pngimg.com/uploads/snowboard/snowboard_PNG8008.png')"></div>
        <div class="layer__info">
          <div>
            <strong>Size</strong>
            <strong>Shape</strong>
            <strong>Camber</strong>
            <strong>Width</strong>
            <strong>Flex</strong>
            <strong>Sidecut</strong>
          </div>
          <div>
            <span>123m</span>
            <span>TAPPERED SWALLONTAIL</span>
            <span>TRUE</span>
            <span>MID-WIDE</span>
            <span>ALL TERRAIN</span>
            <span>PROGRESSIVE</span>
          </div>
        </div>
      </div>
      <div class="layer" data-scene="2">
        <span>THE POW</span>
        <div class="layer__image" style="background-image: url('http://pngimg.com/uploads/snowboard/snowboard_PNG8006.png')"></div>
        <div class="layer__info">
          <div>
            <strong>Size</strong>
            <strong>Shape</strong>
            <strong>Camber</strong>
            <strong>Width</strong>
            <strong>Flex</strong>
            <strong>Sidecut</strong>
          </div>
          <div>
            <span>110m</span>
            <span>TWIN</span>
            <span>FALSE</span>
            <span>WIDE</span>
            <span>ALL TERRAIN</span>
            <span>PROGRESSIVE</span>
          </div>
        </div>
      </div>
      <div class="layer" data-scene="3">
        <span>THE SPLASH</span>
        <div class="layer__image" style="background-image: url('http://pngimg.com/uploads/snowboard/snowboard_PNG7998.png')"></div>
        <div class="layer__info">
          <div>
            <strong>Size</strong>
            <strong>Shape</strong>
            <strong>Camber</strong>
            <strong>Width</strong>
            <strong>Flex</strong>
            <strong>Sidecut</strong>
          </div>
          <div>
            <span>126m</span>
            <span>REVERSE CAMBER</span>
            <span>TRUE</span>
            <span>MID-WIDE</span>
            <span>ALL TERRAIN</span>
            <span>PROGRESSIVE</span>
          </div>
        </div>
      </div>
    </div>
    <button onclick="switchLayer(2)"><</button>
    <button onclick="switchLayer()">></button>
  </div>
  <div class="hero-right">
    <div class="layer layer-displayed" data-scene="1"></div>
    <div class="layer" data-scene="2"></div>
    <div class="layer" data-scene="3"></div>
    <div class="photo-frame">
      <div class="layer layer-displayed" style="background-image: url('https://images.unsplash.com/photo-1495468286609-71018e87abc5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=987c55a292efaa0adb9acfc26c06e22a&auto=format&fit=crop&w=670&q=80')" data-scene="1"></div>
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1536099876051-79f4cbffeed1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=451b9215ee8acc20d5d7ea354aab570e&auto=format&fit=crop&w=1350&q=80')" data-scene="2"></div>
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1512821062947-6eda5253c3e2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=305dedf0e09581de0ee68ab2c9523955&auto=format&fit=crop&w=1351&q=80')" data-scene="3"></div>
      <div class="cover"></div>
    </div>
    <div class="photo-name">
      <div class="photo-name__wrapper">
        <div class="layer layer-displayed" data-scene="1">
          <span class="photo-name__title">BRION FOX</span>
          <span>RIDING THE CANNON</span>
        </div>
        <div class="layer" data-scene="2">
          <span class="photo-name__title">AUSTIN SMITH</span>
          <span>RIDING THE POW</span>
        </div>
        <div class="layer" data-scene="3 ">
          <span class="photo-name__title">SALLY BLUE</span>
          <span>RIDING THE SPLASH</span>
        </div>
      </div>
    </div>
    <div class="photo-frame">
      <div class="layer layer-displayed" style="background-image: url('https://images.unsplash.com/photo-1486335223442-a034129506f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=564f090b8a99c189845f2ef71d4f620a&auto=format&fit=crop&w=1350&q=80')" data-scene="1"></div>
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1522056615691-da7b8106c665?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4f51ed1121800f23da98176659ba7506&auto=format&fit=crop&w=1352&q=80')" data-scene="2"></div>
      <div class="layer" style="background-image: url('https://images.unsplash.com/photo-1478700485868-972b69dc3fc4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=918195bdc5a37a2f412cf49234183427&auto=format&fit=crop&w=1350&q=80')" data-scene="3"></div>
      <div class="cover"></div>
    </div>
  </div>
</main>
<script>
    let sliderIndex = 1;
let timeout;
const layers = [...document.querySelectorAll('.layer')];
const covers = [...document.querySelectorAll('.photo-frame')];

function changeCoverAnimState(state = 0) {
  const st = state === 1 ? 'running' : 'paused';
  covers.forEach(cover => {
    // cover.style['animation-play-state'] = st;
    cover.querySelector('.cover').style.width = `${state * 100}%`;
  });
}

function switchLayer(step = 1) {
  const nextSlide = (sliderIndex + step) % 3 === 0 ? 3 : (sliderIndex + step) % 3;
  
  changeCoverAnimState(1);
  clearTimeout(timeout);
  timeout = setTimeout(() => {
    changeCoverAnimState(0)
  }, 500);
  
  for(let i of layers) {
    i.classList.remove('layer-displayed');
    i.classList.remove('layer-displayed-exit');
    if(i.dataset.scene == nextSlide) {
      i.classList.add('layer-displayed');
    }
    if(i.dataset.scene == sliderIndex) {
      i.classList.add('layer-displayed-exit');
    }
  }
  sliderIndex = nextSlide;
}
</script>
</body>
</html>