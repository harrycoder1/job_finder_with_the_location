<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-wrapper {
  background-color: #EDF0F9;
}

.container {
  height: 100vh;
}

.rating-wrapper {
  align-self: center;
  box-shadow: 7px 7px 25px rgba(198, 206, 237, 0.7), -7px -7px 35px rgba(255, 255, 255, 0.7), inset 0px 0px 4px rgba(255, 255, 255, 0.9), inset 7px 7px 15px rgba(198, 206, 237, 0.8);
  border-radius: 5rem;
  display: inline-flex;
  direction: rtl !important;
  padding: 1.5rem 2.5rem;
  margin-left: auto;
}
.rating-wrapper label {
  color: #E1E6F6;
  cursor: pointer;
  display: inline-flex;
  font-size: 3rem;
  padding: 1rem 0.6rem;
  transition: color 0.5s;
}
.rating-wrapper svg {
  -webkit-text-fill-color: transparent;
  -webkit-filter: drop-shadow 4px 1px 6px #c6ceed;
  filter: drop-shadow(5px 1px 3px #c6ceed);
}
.rating-wrapper input {
  height: 100%;
  width: 100%;
}
.rating-wrapper input {
  display: none;
}
.rating-wrapper label:hover,
.rating-wrapper label:hover ~ label,
.rating-wrapper input:checked ~ label {
  color: #34AC9E;
}
.rating-wrapper label:hover,
.rating-wrapper label:hover ~ label,
.rating-wrapper input:checked ~ label {
  color: #34AC9E;
}
    </style>
</head>
<body>
                            
<div class="container-wrapper">  
  <div class="container d-flex align-items-center justify-content-center">
    <div class="row justify-content-center">    
      
      <!-- star rating -->
      <div class="rating-wrapper">
        
        <!-- star 5 -->
        <input type="radio" id="5-star-rating" name="star-rating" value="5">
        <label for="5-star-rating" class="star-rating">
          <i class="fas fa-star d-inline-block"></i>
        </label>
        
         <!-- star 4 -->
        <input type="radio" id="4-star-rating" name="star-rating" value="4">
        <label for="4-star-rating" class="star-rating star">
          <i class="fas fa-star d-inline-block"></i>
        </label>
        
         <!-- star 3 -->
        <input type="radio" id="3-star-rating" name="star-rating" value="3">
        <label for="3-star-rating" class="star-rating star">
          <i class="fas fa-star d-inline-block"></i>
        </label>
        
        <!-- star 2 -->
        <input type="radio" id="2-star-rating" name="star-rating" value="2">
        <label for="2-star-rating" class="star-rating star">
          <i class="fas fa-star d-inline-block"></i>
        </label>
        
        <!-- star 1 -->
        <input type="radio" id="1-star-rating" name="star-rating" value="1">
        <label for="1-star-rating" class="star-rating star">
          <i class="fas fa-star d-inline-block"></i>
        </label>
        
       </div>
      
    </div>
  </div>
</div>
          
</body>
</html>