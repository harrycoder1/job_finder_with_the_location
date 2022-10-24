<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
*, button, input {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
}
:root {
  --bg-shape-color: linear-gradient(120deg, #343A4F, #0F1620);
  --lightblue: #3D9DEA;
  --darkblue: #4A4EEE;
  --text-color: #D5E1EF;
}
html, body {
  width: 100%;
  min-height: 100vh;
  background-image: linear-gradient(90deg, #414850, #131720);
  color: var(--text-color);
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px 0px;
}
.wrapper {
  width: 350px;
  border-radius: 40px;
  background-image: var(--bg-shape-color);
  overflow: hidden;
}
.overviewInfo, .productSpecifications {
  padding: 24px;
}
.overviewInfo {
  background-image: linear-gradient(176deg, var(--lightblue), var(--darkblue));
}
.actions {
  display: flex;
  justify-content: space-between;
  margin-bottom: 32px;
}
.actions .cartbutton {
  position: relative;
}
.actions .cartbutton::after {
  content: '';
  display: block;
  width: 8px;
  height: 8px;
  background-image: linear-gradient(90deg, #489be2, #0f629c);
  border-radius: 50%;
  position: absolute;
  top: 11px;
  right: 8px;
}
.actions .cartbutton svg {
  color: #ababab73;
}
.actions .backbutton, .actions .cartbutton {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}
.neurobutton {
  background-image: var(--bg-shape-color);
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: inset 3px 4px 5px 0px rgba(197, 197, 197, 0.1), inset 3px 6px 6px 5px rgba(78, 77, 77, 0.1), -2px -2px 8px 2px rgba(255, 255, 255, 0.1), 2px 2px 6px 3px rgba(0, 0, 0, 0.4);
}
.productinfo {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
  min-height: 200px;
  margin-bottom: 50px;
}
.productImage {
  position: absolute;
  width: 321px;
  height: auto;
  transform: rotate(-90deg) translate(-56px, 66px);
  transition: ease 2s all;
}
.productImage img {
  width: 100%;
  height: auto;
}
.productImage:hover {
  transition: ease 2s all;
  animation: none;
  transform: rotate(-70deg) translate(10px, 66px);
}
h1 {
  font-family: 'Michroma', sans-serif;
}
.grouptext h3 {
  letter-spacing: 3.2px;
  font-size: 14px;
  font-weight: 500;
  margin-bottom: 8px;
}
.grouptext p {
  font-size: 12px;
  opacity: 0.8;
}
/* product specifications */
.featureIcon {
  width: 40px;
  height: 40px;
  background-image: var(--bg-shape-color);
  border-radius: 8px;
  margin-right: 16px;
}
.productSpecifications h1 {
  margin-top: 10px;
  margin-bottom: 16px;
  font-size: 32px;
}
.productSpecifications p {
  opacity: 0.8;
  font-size: 15px;
  line-height: 1.5;
}
.productSpecifications .productFeatures {
  display: grid;
  grid-template-columns: 1fr 1fr;
  margin-top: 20px;
  grid-row-gap: 16px;
}
.productSpecifications .productFeatures .feature {
  display: flex;
}
.checkoutButton {
  display: flex;
  width: 100%;
  background-image: var(--bg-shape-color);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: -2px -2px 2px 0px rgba(80, 80, 80, 0.1), 2px 2px 3px 0px rgba(12, 12, 12, 0.3), inset 0px 0px 0px 2px rgba(80, 80, 80, 0.2);
  margin-top: 30px;
  padding: 14px;
  justify-content: space-between;
  align-items: center;
}
.priceTag {
  display: flex;
  align-items: center;
  font-size: 32px;
}
.priceTag span {
  color: #488dc7;
  font-size: 20px;
}
/* checkout button*/
button.preorder {
  outline: 0;
  border: 0;
  border-radius: 6px;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: linear-gradient(85deg, #61c7ef, #4833fb);
  color: white;
}
.preorder p {
  padding: 8px 17px;
  border-right: 1px solid rgba(0, 0, 0, 0.4);
}
.buttonaction {
  border-left: 1px solid rgba(255, 255, 255, 0.2);
  padding: 5px 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255, 255, 255, 0.7);
}
/* animation */
@keyframes updowncontroller {
  0% {
    transform: rotate(-90deg) translate(-56px, 66px);
  }
  80%, 100% {
    transform: rotate(-70deg) translate(10px, 66px);
  }
}

    </style>
</head>
<body>
<div class="wrapper">

  
<div class="overviewInfo">
  <div class="actions">
    <div class="backbutton ">
 <svg
width="24"
height="24"
viewBox="0 0 24 24"
fill="none"
xmlns="http://www.w3.org/2000/svg"
>
<path
  d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z"
  fill="currentColor"
/>
</svg>
    </div>
    <div class="cartbutton neurobutton"> 
<svg
width="24"
height="24"
viewBox="0 0 24 24"
fill="none"
xmlns="http://www.w3.org/2000/svg"
>
<path
  fill-rule="evenodd"
  clip-rule="evenodd"
  d="M5.79166 2H1V4H4.2184L6.9872 16.6776H7V17H20V16.7519L22.1932 7.09095L22.5308 6H6.6552L6.08485 3.38852L5.79166 2ZM19.9869 8H7.092L8.62081 15H18.3978L19.9869 8Z"
  fill="currentColor"
/>
<path
  d="M10 22C11.1046 22 12 21.1046 12 20C12 18.8954 11.1046 18 10 18C8.89543 18 8 18.8954 8 20C8 21.1046 8.89543 22 10 22Z"
  fill="currentColor"
/>
<path
  d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z"
  fill="currentColor"
/>
</svg>
    </div>
  </div>
  
  <div class="productinfo">
    <div class="grouptext">
       <h3>PLATFORM</h3>
       <p>PS5</p>
    </div>
    <div class="grouptext">
       <h3>RELEASE</h3>
       <p>Fall 2020</p>
    </div>
    <div class="grouptext">
       <h3>PRICE</h3>
       <p>$50</p>
    </div>
    
    
    <div class="productImage">
      <img src="https://i.imgur.com/ckSgzLQ.png" alt="product: ps5 controller image">
    </div>
    
</div>
   
</div> 
<!-- overview info -->

<div class="productSpecifications">
  <h1> Dual Sense </h1>
  <p> DualSense also adds a build-in microphone array, which will enable players to easily chat with friends without a headset... </p>
  
  <div class="productFeatures">
    <div class="feature">
      <div class="featureIcon">
      </div>
      <div class="featureText">
        <p> <strong>Futuristic</strong></p>
        <p>Design</p>
      </div>
    </div>
    <div class="feature">
      <div class="featureIcon">
      </div>
       <div class="featureText">
        <p> <strong>Built-in</strong></p>
        <p>Microphone</p>
      </div>
     </div>
    <div class="feature">
      <div class="featureIcon">
      </div>
       <div class="featureText">
        <p> <strong>Haptic</strong></p>
        <p>Feedback</p>
      </div>
      </div>
    <div class="feature">
      <div class="featureIcon">
      </div>
       <div class="featureText">
        <p> <strong>Fast charge</strong></p>
        <p>USB-C port</p>
      </div>
    </div>
  </div>
  
  <div class="checkoutButton">
    <div class="priceTag">
      <span>$</span>50
    </div>
    <button class="preorder">
      <p>Preorder</p>
      <div class="buttonaction">
       <svg
width="24"
height="24"
viewBox="0 0 24 24"
fill="none"
xmlns="http://www.w3.org/2000/svg"
>
<path
  d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z"
  fill="currentColor"
/>
</svg>
      </div>
    </button> 
  </div>
</div>
<!-- product specificaiton -->

</div>
<!-- wrapper-->
</body>
</html>