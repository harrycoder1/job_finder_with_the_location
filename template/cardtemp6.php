<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,200');
body {   font-family: Helvetica, san-serif;
  background: -webkit-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* W3C */ }
.transition { transition: .3s cubic-bezier(.3, 0, 0, 1.3) }
.card {
    background-color: #fff;
    bottom: 0;
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
    height: 300px;
    left: 0;
    margin: auto;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    width: 300px;
}
.card:hover {
    height: 450px;
    width: 300px;
}
.card:hover .cta-container {
    display: inline;
    margin-top: 380px;
}
.card:hover .card_circle {
    background-size: cover;
    border-radius: 0;
    margin-top: -130px;
}
.card:hover h2 {
    background: #3487f7;
    color: #fff;
    margin-top: 100px;
    padding: 5px;
}
.card:hover h2 small { color: #fff }
.card:hover p { margin-top: 300px }
.card_circle {
    background: url('https://picsum.photos/400/200') no-repeat center bottom;
    background-color: #3487f7;
    background-size: cover;
    border-radius: 50%;
    height: 400px;
    margin-left: -75px;
    margin-top: -270px;
    position: absolute;
    width: 450px;
}
h2 {
    color: #3487f7;
    font-family: 'Raleway', sans-serif;
    font-size: 24px;
    font-weight: 200;
    margin-top: 150px;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 9999;
}
p {
    color: rgba(0,0,0,.6);
    font-family: 'Raleway', sans-serif;
    font-size: 100%;
    font-weight: normal;
    margin-top: 200px;
    position: absolute;
    text-align: center;
    z-index: 9999;
}
.cta-container {
    display: none;
    margin-top: 320px;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 9999;
}
.cta {
    -moz-border-radius: 2px;
    -moz-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    -webkit-border-radius: 2px;
    -webkit-transition: 0.2s ease-out;
    background-clip: padding-box;
    border: 2px solid #3487f7;
    border-radius: 2px;
    color: #3487f7;
    display: inline-block;
    font-family: 'Raleway', sans-serif;
    font-size: 17px;
    font-weight: 400;
    height: 36px;
    letter-spacing: 0.5px;
    line-height: 36px;
    margin-bottom: 15px;
    padding: 0 2rem;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.2s ease-out;
}
.cta:hover {
    background-color: #3487f7;
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    color: #fff;
    -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
    </style>
</head>
<body>
<div class="card transition">
  <h2 class="transition">Awesome Headline</h2>
  <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
  <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
  <div class="card_circle transition"></div>
</div>
</body>
</html>