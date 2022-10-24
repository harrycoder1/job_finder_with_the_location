<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  padding: 0;
  margin: 0;
}
section {
  width: 100%;
  /*   skew adds a 4.76 degree slope and the translateY equation is based on the fact that a 4.76 degree slope has a gradient of 1:12 */
  -webkit-transform: skew(0, -4.76deg) translateY(calc(50vw/-12));
      -ms-transform: skew(0, -4.76deg) translateY(calc(50vw/-12));
          transform: skew(0, -4.76deg) translateY(calc(50vw/-12));
  /*   And finally we account for the slope to make sure each section can occupy the full window... I added 10vw just to give it a little extra padding */
  min-height: calc(100vh - (110vw/-12));
}

section:not(:last-child) *{
  -webkit-transform: skew(0, 4.76deg) translateY(calc(50vw/12));
      -ms-transform: skew(0, 4.76deg) translateY(calc(50vw/12));
          transform: skew(0, 4.76deg) translateY(calc(50vw/12));
  margin-top: calc(50vw/-12);
}
  
section:last-child {
  position: relative;
  -webkit-transform: skew(0);
      -ms-transform: skew(0);
          transform: skew(0);
  margin-top: calc(100vw/-12);
  padding-top: calc(100vw/12);
  min-height: 100vh;
  z-index: -1;
}





/* COLORS AND OTHER STYLES TO ILLUSTRATE SECTIONS */
section:nth-child(1) {
  background-color: #2B4141;
}
section:nth-child(2) {
  background-color: #0EB1D2;
}
section:nth-child(3) {
  background-color: #34E4EA;
}
section:nth-child(4) {
  background-color: #3e6f6b;
}
section:nth-child(5) {
  background-color: #b19f63;
}

section{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
h1{
  font-family: sans-serif;
  color: #fff;
}
    </style>
</head>
<body>
    <!-- Only need the section-container because the full-page view of the codepen sandbox doesn't play nice with the last-child pseudo selector and the section elements. -->

<div class="section-container">
  <section>
    <h1>Each section...</h1>
  </section>
  <section>
    <h1>Full screen and slanted...</h1>
  </section>
  <section>
    <h1>Go ahead...</h1>
  </section>
  <section>
    <h1>Keep scrolling...</h1>
  </section>
  <section>
    <h1>Ok, thats it.</h1>
  </section>
</div>

<!-- The one thing you have to remember about this method of slanting sections is to have all content within the section inside of an element or else it will be slanted just like its section container (doesn't apply to last section). -->
</body>
</html>