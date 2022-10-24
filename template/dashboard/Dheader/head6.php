<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
@import url("https://fonts.googleapis.com/css?family=Open+Sans");
h1 {
  font-family: "Montserrat", sans-serif;
}

p {
  font-family: "Open Sans", sans-serif;
  text-align: justify;
}

.blue-bg {
  position: fixed;
  background: url(https://live.staticflickr.com/1656/26031883676_182191d803_b.jpg);
  background-size: cover;
  background-color: #58aff6;
  top: 0;
  height: 400px;
  width: 100vw;
  z-index: -1;
  overflow-x: hidden;
}

.white-bg {
  position: absolute;
  top: 0;
  background-color: #fff;
  min-height: 500px;
  margin: 210px 0px;
  width: 100vw;
  height: 100vh;
  transform: skewY(5deg);
  z-index: -1;
}

.content {
  position: absolute;
  top: 0;
  margin: 250px 10vw;
  max-width: 60vw;
  background-color: transparent;
}

.shadow {
  box-shadow: -2px -5px 5px 0px rgba(0, 0, 0, 0.3);
}
    </style>
</head>
<body>
<div class="blue-bg"></div>
<div class="white-bg shadow"></div>
<div class="content">
  <h1>Slanted & Enchanted</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin magna ex, elementum id convallis eu, elementum id justo. Maecenas dictum sagittis leo, ut ultrices risus mollis vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
    eu lectus felis. Vivamus eget velit erat. Vivamus condimentum augue sed lacus viverra imperdiet. Etiam quis lectus non libero hendrerit porta. In sit amet molestie lacus. Praesent ultricies, lectus eget porta porttitor, sem sapien facilisis arcu,
    eu tincidunt nulla odio ac ipsu.</p>

  <p>Praesent eu arcu convallis, faucibus turpis eu, rutrum nisi. Integer rutrum ipsum at aliquam consequat. In dignissim lorem nibh, nec iaculis est fermentum vitae. Maecenas sodales, nunc eget lacinia volutpat, nibh mi lobortis leo, id varius urna tellus
    ut magna. Sed porttitor nunc et luctus efficitur. Nam sit amet congue nulla. Praesent dapibus erat arcu, at scelerisque arcu faucibus vel. Morbi blandit venenatis elit. Nam feugiat bibendum suscipit. Donec viverra eu lorem eu venenatis. Nullam posuere
    nulla id libero rutrum venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam molestie ac velit vel blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
    egestas.</p>
</div>
</body>
</html>