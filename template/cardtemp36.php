<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 40px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


/*
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}
*/
    </style>
</head>
<body>
<div class="cards-list">
  
  <div class="card 1">
    <div class="card_image"> <img src="https://i.redd.it/b3esnz5ra34y.jpg" /> </div>
    <div class="card_title title-white">
      <p>Card Title</p>
    </div>
  </div>
  
    <div class="card 2">
    <div class="card_image">
      <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
      </div>
    <div class="card_title title-white">
      <p>Card Title</p>
    </div>
  </div>
  
  <div class="card 3">
    <div class="card_image">
      <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
    </div>
    <div class="card_title">
      <p>Card Title</p>
    </div>
  </div>
    
    <div class="card 4">
    <div class="card_image">
      <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
      </div>
    <div class="card_title title-black">
      <p>Card Title</p>
    </div>
    </div>
  
  </div>
</body>
</html>