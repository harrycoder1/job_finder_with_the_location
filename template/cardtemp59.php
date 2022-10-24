<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main[role="main"], .product .product-description {
  *zoom: 1;
}
main[role="main"]:after, .product .product-description:after {
  content: '';
  display: table;
  clear: both;
}
*, *::after, *::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
}
p {
  margin: 0 0 30px;
}
a {
  text-decoration: none;
}
h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
  color: #31353d;
  margin: 0;
}
ul {
  padding: 0;
  list-style: none;
}
abbr {
  cursor: help;
}
body {
  background: url("../img/main-bg.png");
  color: #aaa;
  font-size: 14px;
  font-family: 'MavenProRegular', arial, tahoma, trebuchet ms, verdana;
  height: 100%;
}
img {
  max-width: 100%;
}
figure {
  margin: 0;
  line-height: 0;
}
main[role="main"] {
  max-width: 500px;
  margin: 20px auto;
  position: relative;
}
.product {
  background: #fff;
  max-width: 300px;
  position: relative;
  z-index: 15;
  margin: 0 auto;
  -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
}
.product .product-description {
  position: relative;
  z-index: 15;
  background: #fff;
}
.product .product-description .info {
  padding: 15px;
  color: #aaa;
  font-size: 0.85em;
  width: 75%;
  float: left;
}
.product .product-description .info h1 {
  font-size: 20px;
  margin: 0 0 5px;
}
.product .product-description .info p {
  margin-bottom: 15px;
  line-height: 1.3em;
}
.product .product-description .price {
  width: 25%;
  float: left;
  color: #9bb6aa;
  font-size: 3.5em;
  position: relative;
  margin-top: 25px;
}
.product .product-description .price::before {
  content: '$';
  position: absolute;
  top: 0;
  left: -10px;
  font-size: 0.35em;
}
.product .product-sidebar {
  height: 100%;
  background: #31353d;
  width: 50px;
  position: absolute;
  top: 0;
  right: 0;
  z-index: -1;
  -webkit-transition: right 0.3s ease;
  -moz-transition: right 0.3s ease;
  -o-transition: right 0.3s ease;
  transition: right 0.3s ease;
  -webkit-border-radius: 0 2px 2px 0;
  -moz-border-radius: 0 2px 2px 0;
  -o-border-radius: 0 2px 2px 0;
  border-radius: 0 2px 2px 0;
}
.product .product-sidebar button {
  border: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  color: #fff;
  padding: 0.9em;
  font-size: 0.8em;
  width: 50px;
  height: 50px;
  overflow: hidden;
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.product .product-sidebar button.buy {
  background: transparent url("https://raw.githubusercontent.com/brunodsgn/productpreview/master/assets/img/icons/buy.png") no-repeat 15px;
}
.product .product-sidebar button.info {
  background: transparent url("https://raw.githubusercontent.com/brunodsgn/productpreview/master/assets/img/icons/info.png") no-repeat 15px;
}
.product .product-sidebar button.size {
  background: transparent url("https://raw.githubusercontent.com/brunodsgn/productpreview/master/assets/img/icons/sizes.png") no-repeat 15px;
}
.product .product-sidebar button.colors {
  background: transparent url("https://raw.githubusercontent.com/brunodsgn/productpreview/master/assets/img/icons/colors.png") no-repeat 15px;
}
.product .product-sidebar button.colors span {
  margin-left: 40px;
}
.product .product-sidebar button.colors:hover {
  width: 130px;
}
.product .product-sidebar button.colors .color {
  padding: 10px;
  display: inline-block;
  vertical-align: middle;
  margin: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=($opacity * 100))";
  filter: alpha(opacity=70);
  -moz-opacity: 0.7;
  -khtml-opacity: 0.7;
  opacity: 0.7;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.product .product-sidebar button.colors .color.black {
  background: #000;
  border-bottom: 2px solid #555;
}
.product .product-sidebar button.colors .color.white {
  background: #fff;
  border-bottom: 2px solid #e5e5e5;
}
.product .product-sidebar button.colors .color.red {
  background: #EA1535;
  border-bottom: 2px solid #EF566D;
}
.product .product-sidebar button.colors .color:hover {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=($opacity * 100))";
  filter: alpha(opacity=100);
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}
.product .product-sidebar button span {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=($opacity * 100))";
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  -khtml-opacity: 0;
  opacity: 0;
  white-space: nowrap;
  margin-left: 30px;
}
.product .product-sidebar button:hover {
  width: 130px;
  background-color: #9bb6aa;
  position: relative;
  background-position: 15px center;
  border-color: #9bb6aa;
}
.product .product-sidebar button:hover span {
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=($opacity * 100))";
  filter: alpha(opacity=100);
  -moz-opacity: 1;
  -khtml-opacity: 1;
  opacity: 1;
}
.product:hover .product-sidebar {
  right: -50px;
}
@media screen and (max-width: 480px) {
  #content {
    margin-top: 60px;
  }
  .product .product-sidebar {
    width: 100%;
    height: 50px;
    bottom: 0px;
    left: 0;
    top: inherit;
    -webkit-border-radius: 0 0px 2px 2px;
    -moz-border-radius: 0 0px 2px 2px;
    -o-border-radius: 0 0px 2px 2px;
    border-radius: 0 0px 2px 2px;
    -webkit-transition: bottom 0.3s ease;
    -moz-transition: bottom 0.3s ease;
    -o-transition: bottom 0.3s ease;
    transition: bottom 0.3s ease;
  }
  .product:hover .product-sidebar {
    bottom: -50px;
  }
}
@media screen and (max-width: 360px) {
  .product .product-sidebar {
    bottom: -50px;
  }
}

    </style>
</head>
<body>
<main role="main">
  <div class="product">
    <figure>
      <img src="https://raw.githubusercontent.com/itbruno/productpreview/master/assets/img/t-shirt.jpg" alt="Product Image" class="product-image">
        </figure>

      <div class="product-description">

        <div class="info">
          <h1>LOREM IPSUM</h1>
          <p>
            Lorem Ipsum is simply dummy
            printing and typesetting industry
          </p>
        </div>

        <div class="price">
          89
        </div>
      </div>

      <div class="product-sidebar">
        <button class="buy">
          <span>BUY ITEM</span>
        </button>

        <button class="info">
          <span>MORE INFO</span>
        </button>

        <button class="size">
          <span>SIZES</span>
        </button>

        <button class="colors">
          <span>
            <a href="" class="color black"></a>
            <a href="" class="color white"></a>
            <a href="" class="color red"></a>
          </span>
        </button>
      </div>
      </div>
    </main>
</body>
</html>