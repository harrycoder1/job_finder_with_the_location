<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background: #f7f7f7 url("https://38.media.tumblr.com/c026c2203f47be8d0f3fb81f6c5aee25/tumblr_n2hutxfrNr1tubinno1_1280.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: "Roboto";
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body::before {
  content: '';
  position: fixed;
  z-index: -1;
  top: 0;
  left: 0;
  background: #e74c3c;
  /* IE Fallback */
  background: rgba(67, 74, 84, 0.8);
  width: 100%;
  height: 100%;
}
nav {
  position: absolute;
  width: 480px;
  top: 50%;
  left: 50%;
  margin: -23px 0 0 -240px;
}
nav ul {
  background: #48cfad;
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  position: relative;
  display: inline-block;
  margin-right: -4px;
  text-align: center;
}
nav ul li:first-child a {
  background: #37bc9b;
  width: 49px;
  padding: 15px 0;
}
nav ul li:last-child {
  margin: 0;
}
nav ul li a {
  display: block;
  background: #48cfad;
  padding: 15px 20px;
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  transition: 0.2s linear;
}
nav ul li a:hover {
  background: #37bc9b;
}
nav ul li ul {
  position: absolute;
  top: 100%;
  left: 0;
  width: 240px;
  border-bottom: 4px solid #48cfad;
}
nav ul li ul li {
  display: block;
  width: 100%;
  margin: 0;
  text-align: left;
}
nav ul li ul li a {
  display: block;
  background: #3a3a3a;
  padding: 10px 15px;
}
nav ul li ul li a:first-child {
  background: #3a3a3a;
  width: auto;
  border-left: 4px solid transparent;
  padding: 10px 15px;
  font-size: 14px;
}
nav ul li ul li a:hover {
  background: #333;
  border-left: 4px solid #48cfad;
}

    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class='animated flipInX'>
  <ul>
    <li>
      <a href='#'>
        <div class='fa fa-home'></div>
      </a>
    </li>
    <li>
      <a href='#'>
        About
      </a>
    </li>
    <li class='sub-menu'>
      <a href='#'>
        Products
        <i class='fa fa-angle-down'></i>
      </a>
      <ul>
        <li>
          <a href='#'>
            Product Item
          </a>
        </li>
        <li>
          <a href='#'>
            Product Item
          </a>
        </li>
        <li>
          <a href='#'>
            Product Item
          </a>
        </li>
      </ul>
    </li>
    <li class='sub-menu'>
      <a href='#'>
        Services
        <i class='fa fa-angle-down'></i>
      </a>
      <ul>
        <li>
          <a href='#'>
            Product Item
          </a>
        </li>
        <li>
          <a href='#'>
            Product Item
          </a>
        </li>
        <li>
          <a href='#'>
            Product Item
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href='#'>
        Contact Us
      </a>
    </li>
  </ul>
</nav>

<script>
    $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
  $(this).parent(".sub-menu").children("ul").slideToggle("200");
  $(this).find("i.fa").toggleClass("fa-angle-up fa-angle-down");
});
</script>
</body>
</html>