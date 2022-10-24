<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;400;500;600;700&display=swap');
html {
  box-sizing: border-box;
  font-size: 100%;
}
*, *::before, *::after {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}
body {
  height: 100vh;
  background-color: #151515;
  font-family: 'Source Code Pro', monospace;
}
.container {
  height: 100%;
  width: 100%;
  padding: 1rem 0;
  display: grid;
  place-content: center;
}
.container .cards {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 0.75rem;
  pointer-events: none;
}
.container .card {
  max-width: 15rem;
  color: #ffffffda;
  padding: 1.5rem;
  background-color: #202022;
  pointer-events: auto;
  transform: scale(1);
  opacity: 1;
  transition: all 150ms ease-in-out;
  display: flex;
  flex-direction: column;
}
.container .card .card-title {
  position: relative;
}
.container .card .card-title::before {
  content: "";
  height: 1rem;
  width: 1rem;
  border-radius: 50%;
  box-shadow: inset 0 0 3px #bb86fc;
  background-color: transparent;
  position: absolute;
  right: 0;
}
.container .card .date {
  color: #bb86fc;
  font-size: 0.85rem;
  margin-bottom: 1.5rem;
}
.container .card .description {
  font-size: 0.9rem;
}
.container .card:nth-child(even) {
  transform: translateY(8px);
}
.container .card:nth-child(n) {
  transform: rotate(-5deg);
}
.cards:hover > .card:hover {
  transform: scale(1.15);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  z-index: 10;
}
.cards:hover > .card:not(:hover) {
  opacity: 0.5;
}

    </style>
</head>
<body>
<body>
  <div class="container">
    <div class="cards">
      <div class="card card-one">
        <h2 class="card-title">Card One</h2>
        <p class="date">May 25, 2021</p>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores alias ut veniam?</p>
      </div>
      
      <div class="card card-two">
        <h2 class="card-title">Card Two</h2>
        <p class="date">May 26, 2021</p>
        <p class="description">If you read carefully, you'll find that this is not your typical lorem ipsum.</p>
      </div>
      
      <div class="card card-three">
        <h2 class="card-title">Card Three</h2>
        <p class="date">May 27, 2021</p>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores alias ut veniam?</p>
      </div>
      
      <div class="card card-four">
        <h2 class="card-title">Card Four</h2>
        <p class="date">May 28, 2021</p>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores alias ut veniam?</p>
      </div>
    </div>
  </div>
</body>
</body>
</html>