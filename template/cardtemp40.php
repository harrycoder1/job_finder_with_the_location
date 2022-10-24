<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

body{
  background: #5c746a;
  background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAU0lEQVQoU2P8eUjvPwMDA8MLw10gCidgJFrhw88vwCYig5DbS8HcNarRcGFGihRicyhj8ObTYKv7HGTxe4ZohdjcuEUsC2y6z6tp+D1DtEJsjgUAy/UzWeLdm1gAAAAASUVORK5CYII=) repeat;
  color: #001a23;
  font-family: 'Raleway', sans-serif;
  font-size: 5vw;
}
ul {
  display: grid;
  grid-template-columns: repeat(1,1fr);
  transform-origin: top left;
  transform: skewY(4.398705355deg);
  margin: 20vw 25% 0 2%;
}
li{
  transform-origin: top left;
  transform: skewY(-4.398705355deg) rotatez(-14.03624deg);
  padding-top: 150%;
  z-index: 1;
  transition-property: z-index;
  transition-duration: .3s;
}
.details{
  position: absolute;
  z-index: 2;
  width: 98%;
  height: 95%;
  top: 0;
  background-color: #53b3cb;
  border-radius: 2vw;
  -webkit-filter: drop-shadow(2px 6px 3px rgba(0, 0, 0, 0.4));
  filter: drop-shadow(2px 6px 3px rgba(0, 0, 0, 0.4));
  transform: rotate(0deg) translate(0, 0);
  transition-property: transform;
  transition-duration: .3s;
}



li:nth-child(3n+1) .details{
  background-color: #f9c22e;
}
li:nth-child(3n+2) .details{
  background-color: #35ce8d;
}
.product{
  position: absolute;
  z-index: 3;
  width: 88%;
  height: 91%;
  top: 0;
  transform: translateX(6.5%) translateY(5%);
  border-radius: 1.2vw;
  background:#001a23;
  overflow: hidden;
}
h2, p, img {
  position: absolute;
  z-index: 4;
}
h2, p {
  background-color: #53b3cb;
  padding: 0.4em;
}
li:nth-child(3n+1) h2,li:nth-child(3n+1) p{
  background-color: #f9c22e;
}
li:nth-child(3n+2) h2,li:nth-child(3n+2) p{
  background-color: #35ce8d;
}

h2{
  top: 3.5%;
  left: 4%;
}
p {
  bottom: 3.5%;
  right: 5%;
  font-size: 1.2em;
}
img{
  height: 110%;
  left: 50%;
  transform: translateX(-50%) translateY(-2%);
  transition-property: height,transform;
  transition-duration: .3s;
}

li:hover{ 
  z-index: 4;
}
li:hover .details{ 
  transform: rotate(14.03624deg) translate(0%, 10%) scale(1.3);
}
li:hover img{ 
  height: 210%;
  transform: translateX(-50%) translateY(-14%);
}

@media (min-width:300px) { 
  body{
    font-size: 2.75vw;
  }
  ul {
    grid-template-columns: repeat(2,1fr);
    grid-column-gap: 3vw;
    margin: 10vw 14vw 0 2vw;
  }
}

@media (min-width:600px) { 
  body{
    font-size: 1.95vw;
  }
  ul {
    grid-template-columns: repeat(3,1fr);
    grid-column-gap: 2vw;
    margin: 8vw 10vw 0 1vw;
  }
}

@media (min-width:900px) { 
  body{
    font-size: 1.5vw;
  }
  ul {
    grid-template-columns: repeat(4,1fr);
    grid-column-gap: 1.5vw;
    margin: 6vw 7.5vw 0 0.5vw;
  }
}

@media (min-width:1200px) { 
  body{
    font-size: 1.25vw;
  }
  ul {
    grid-template-columns: repeat(5,1fr);
    grid-column-gap: 1vw;
    margin: 4.5vw 6vw 0 0.5vw;
  }
}

@media (min-width:1500px) { 
  body{
    font-size: 1vw;
  }
  ul {
    grid-template-columns: repeat(6,1fr);
    grid-column-gap: 1vw;
    margin: 4vw 6vw 0 0.5vw;
  }
}

    </style>
</head>
<body>
<ul>
  <li>
    <div class="details">
      <h2>Team Rainbow Unicorn</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless01.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Today We Ride</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless24.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>The Communist Party</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless03.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>My Favorite Playlist</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless06.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Watermelon</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless19.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Creature Cocktail</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless07.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>I Tried</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless18.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>A Hero's Return</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless08.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Purrrsist!</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless17.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Funkalicious</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless09.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Cutest Monster</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless16.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Krak of Dawn</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless10.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Mountains are Calling</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless15.jpg">
      </div>
    </div>
  </li>
   <li>
    <div class="details">
      <h2>'Ramen'ses Return</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless22.jpg">
      </div>
    </div>
  </li>
   <li>
    <div class="details">
      <h2>We Want Jetpacks!</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless02.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>One Impossible Ring</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless23.jpg">
      </div>
    </div>
  </li>
 <li>
    <div class="details">
      <h2>Holiday Burger Run</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless04.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>My Imaginary Friends</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless21.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Slotherin</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless05.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Everything Is Fine</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless20.jpg">
      </div>
    </div>
  </li>
 <li>
    <div class="details">
      <h2>Tokyo Kaiju</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless11.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>MTN LP</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless14.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Science!</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless12.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>The Return of Vampurr</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless13.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Team Rainbow Unicorn</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless01.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Today We Ride</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless24.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>The Communist Party</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless03.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>My Favorite Playlist</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless06.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Watermelon</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless19.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Creature Cocktail</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless07.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>I Tried</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless18.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>A Hero's Return</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless08.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Purrrsist!</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless17.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Funkalicious</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless09.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Cutest Monster</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless16.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Krak of Dawn</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless10.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Mountains are Calling</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless15.jpg">
      </div>
    </div>
  </li>
   <li>
    <div class="details">
      <h2>'Ramen'ses Return</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless22.jpg">
      </div>
    </div>
  </li>
   <li>
    <div class="details">
      <h2>We Want Jetpacks!</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless02.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>One Impossible Ring</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless23.jpg">
      </div>
    </div>
  </li>
 <li>
    <div class="details">
      <h2>Holiday Burger Run</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless04.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>My Imaginary Friends</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless21.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Slotherin</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless05.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Everything Is Fine</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless20.jpg">
      </div>
    </div>
  </li>
 <li>
    <div class="details">
      <h2>Tokyo Kaiju</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless11.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>MTN LP</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless14.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>Science!</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless12.jpg">
      </div>
    </div>
  </li>
  <li>
    <div class="details">
      <h2>The Return of Vampurr</h2>
      <p>$25</p>
      <div class="product">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/881020/threadless13.jpg">
      </div>
    </div>
  </li>
</ul>
</body>
</html>