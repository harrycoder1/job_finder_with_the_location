<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *, *::before, *::after {
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  margin: 0;
  display: grid;
  align-items: center;
  justify-items: center;
  height: 100%;
  color: #f4f7f7;
  background-color: #586875;
  font: 1rem/1 'Cabin', sans-serif;
  overflow-x: hidden;
}

/* hide radio buttons, but still expose them to screen readers */
input {
  position: absolute;
  width: 1px;
  clip: rect(0 0 0 0);
  overflow: hidden;
  white-space: nowrap;
}

.selector {
  display: grid;
  grid-template-areas:
    'happy lovers'
    'pick  pick';
}

/* the cards and toggle buttons are actually fat labels that can be clicked to set radio buttons */
label {
  display: block;
  cursor: pointer;
}

.happy-card, .lovers-card {
  position: relative; /* for iOS */
  width: 250px;
  padding: 20px;
  color: #586875;
  background-color: #f4f7f7;
  box-shadow: 0 10px 20px #0006;
  animation-duration: 0.5s;
  animation-timing-function: ease-in-out; /* important to use a symmetrical timing function (linear also works) */
  animation-fill-mode: forwards;
}

.happy-card {
  grid-area: happy;
  margin-right: -10px; /* nudge closer to lover's card */
  
  /* these values are used to animate via translateX */
  --swing: -25px;
  --overlap: 25px;
}

.lovers-card {
  grid-area: lovers;
  margin-left: -10px; /* nudge closer to happy card */

  /* these values are used to animate via translateX */
  --swing: 25px;
  --overlap: -25px;
}

/* when a radio button is set, swing the corresponding card fowards */
#happy-radio:checked ~ .selector .happy-card,
#lovers-radio:checked ~ .selector .lovers-card {
  animation-name: swing-forwards;
}

@keyframes swing-forwards {
  0% {
    z-index: 1; /* start behind other card */
    transform: scale(0.9);
  }
  50% {
    transform: translateX(var(--swing));
  }
  100% {
    z-index: 2; /* end in front of other card */
    transform: translateX(var(--overlap)) scale(1.1);
  }
}

/* when a radio button is set, swing the opposite card backwards */
#happy-radio:checked ~ .selector .lovers-card,
#lovers-radio:checked ~ .selector .happy-card {
  animation-name: swing-backwards;
}

@keyframes swing-backwards {
  0% {
    z-index: 2;  /* start in front of other card */
    transform: translateX(var(--overlap)) scale(1.1);
  }
  50% {
    transform: translateX(var(--swing));
  }
  100% {
    z-index: 1; /* end behind other card */
    transform: scale(0.9);
  }
}

h1 {
  margin: 0;
  padding-bottom: 10px;
  border-bottom: 1px dashed #bdd6d2;
  font-size: 1.5rem;
}

ul {
  margin: 15px 0;
  padding-left: 30px;
  line-height: 1.5rem;
  list-style-type: square;
}

p {
  margin: 0 -20px -20px;
  padding: 15px;
  background-color: #bdd6d2;
  font-weight: bold;
  text-align: center;
}

.happy-pick, .lovers-pick {
  grid-area: pick;
  margin: 50px auto 0;
  padding: 15px;
  border: 1px solid #f4f7f7;
  border-radius: 9999px;
  background-color: #b46d73;
  font-size: 1.25rem;
  -webkit-user-select: none;
  user-select: none;
}

.happy-pick::before, .lovers-pick::after {
  display: inline-block;
  font-family: 'Font Awesome 5 Free';
  font-weight: bold;
}

.happy-pick::before {
  margin-right: 10px;
  content: '\f0a8'; /* fa-arrow-circle-left */
}

.lovers-pick::after {
  margin-left: 10px;
  content: '\f0a9'; /* fa-arrow-circle-right */
}

/* hide happy toggle button if happy is currently selected */
#happy-radio:checked ~ .selector .happy-pick {
  display: none;
}

/* hide lover's toggle button if lover's is currently selected */
#lovers-radio:checked ~ .selector .lovers-pick {
  display: none;
}

/* increase overlap and swing distance on smaller screens */
@media (max-width: 560px) {
  .happy-card {
    margin-right: -85px;
    --swing: -100px;
  }

  .lovers-card {
    margin-left: -85px;
    --swing: 100px;
  }
}
    </style>
</head>
<body>
<div>
  <!-- these radio buttons hold state of which card is in front and which toggle button is visible -->
  <input type="radio" name="sushi-lunch" id="happy-radio">
  <input type="radio" name="sushi-lunch" id="lovers-radio" checked>

  <div class="selector">
    <label for="happy-radio" class="happy-card">
      <h1>Happy Sushi Lunch</h1>
      <ul>
        <li>California Roll</li>
        <li>2 Pieces Salmon Nigiri</li>
        <li>Sea Salt Edamame</li>
        <li>Miso Soup</li>
      </ul>
      <p>$12</p>
    </label>

    <label for="lovers-radio" class="lovers-card">
      <h1>Sushi Lover's Lunch</h1>
      <ul>
        <li>Spicy Tuna Roll</li>
        <li>Shrimp Tempura Roll</li>
        <li>4 Pieces Asssorted Nigiri</li>
        <li>Wonton Soup</li>
      </ul>
      <p>$18</p>
    </label>
    
    <label for="happy-radio" class="happy-pick">Switch to Happy Sushi Lunch!</label>
    <label for="lovers-radio" class="lovers-pick">Switch to Sushi Lover's Lunch!</label>
  </div>
</div>
</body>
</html>