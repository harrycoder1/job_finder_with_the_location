

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
  <style>
    .scont {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
  }

  .hone::before{
    
    content: '';
    background: url('./partial/imgs/vimp.jpg') 
        no-repeat center center/cover;
    position: absolute;
   
    top: 250px;
    left: 0px;
    width: 100vw;
    height: 100vh;
    z-index: -1;

    filter: blur(9px);
    -webkit-filter: blur(9px);

}
.brn{
height: 350px;
width: 1580px;
min-width: 400px;
}
  </style>

    <title>helo</title>
    <link rel="stylesheet" href="./partial/home.css">
  </head>
  <body class="hone">
     
    <?php include './partial/nav.php';?>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style=" height: 363px;" data-bs-interval="10000">
            <img class ="brn" src="./partial/imgs/img5.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Search Job Near Your Location</h5>
              <p>Click here</p>
            </div>
          </div>
          <div class="carousel-item" style=" height: 363px;" data-bs-interval="2000">
            <img class ="brn" src="./partial/imgs/br3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item" style=" height: 363px; ">
            <img class ="brn" src="./partial/imgs/re2.jpg"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="contop">
          <div class="hed21">
              Our type are 
          </div>
          <div class="scont">
              <div class="sbox">
               <a class="gh" href="./ecollege.php"> College </a> 
              </div>
              <div class="sbox">
               <a class="gh" href="./ejob.php"> For Jobs </a> 

             </div>
          </div>
      </div>
   
   
  </body>
</html>