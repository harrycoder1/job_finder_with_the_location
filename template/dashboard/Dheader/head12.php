<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,500,700,800,900,500italic,400italic,100italic,900italic,300italic,700italic,800italic);
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  border: 0;
}

main {
  height: 150vh;
  max-height: 100%;
  overflow-x: hidden;
  perspective: 1px;
  perspective-origin: center top;
  transform-style: preserve-3d;
  padding: 0 40px;
  font: 36px/1.6 Alegreya Sans, serif;
}

header {
  height: 80vh;
  background: url("https://pbs.twimg.com/media/B2XTRwtCAAEnqlP.jpg:large");
  background-size: cover;
  background-position: center center;
  position: relative;
  vertical-align: top;
  transform-origin: center top;
  transform: translateZ(-1px) scale(2);
}

section {
  min-height: 200vh;
  background: white;
  transform: translateZ(0);
  padding: 10px 0;
}

h1 {
  font-size: 30px;
  font-weight: 400;
  padding: 10px 20px;
}

p {
  font-size: 18px;
  font-size: 300;
  padding: 0 20px;
}

a {
  text-decoration: none;
  color: dodgerblue;
}

html, body {
  height: 100%;
}

body {
  background: #333;
}
    </style>
</head>
<body>
<main>
  <header>
  </header>
  <section>
    <h1>CSS Parallax Header Image</h1>
    <p>This demo uses a <a href="https://keithclark.co.uk/articles/pure-css-parallax-websites/">method discovered by Keith Clark</a> to create parallax effects in CSS, without a ton of janky Javascript and bloated jQuery plugins. </p>
  </section>
</main>
</body>
</html>