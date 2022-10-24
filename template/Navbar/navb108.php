<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background-color: #f15050;
  font-family: 'Open Sans', sans-serif;
}
body #wrapper {
  width: 100%;
}
body #wrapper ul {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0 auto;
  padding: 0;
  height: 118px;
  background-color: #fff;
  font-size: 0px;
}
body #wrapper ul:hover li {
  width: 13.33333%;
}
body #wrapper ul li {
  display: inline-block;
  float: left;
  width: 16.66667%;
  -moz-transition: all 0.1s;
  -o-transition: all 0.1s;
  -webkit-transition: all 0.1s;
  transition: all 0.1s;
  text-align: center;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  text-shadow: 0px 1px 3px white;
  border-right: thin solid lightgray;
}
body #wrapper ul li:last-child {
  border-right: none;
}
body #wrapper ul li:hover {
  background: #e6e6e6;
  width: 33.33333%;
  -moz-box-shadow: inset 10px 10px 10px -10px rgba(0, 0, 0, 0.3), inset -10px 10px 10px -10px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 10px 10px 10px -10px rgba(0, 0, 0, 0.3), inset -10px 10px 10px -10px rgba(0, 0, 0, 0.3);
  box-shadow: inset 10px 10px 10px -10px rgba(0, 0, 0, 0.3), inset -10px 10px 10px -10px rgba(0, 0, 0, 0.3);
}
body #wrapper ul li a {
  display: block;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding-top: 19px;
  height: 118px;
  text-decoration: none;
  font-size: 38px;
  color: gray;
}
body #wrapper ul li a:visited {
  color: gray;
}
body #wrapper ul li div {
  margin-top: 5px;
  font-weight: 600;
  font-size: 13px;
}

    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="wrapper">
  <ul>
    <li>
      <a href="#">
        <i class="icon-list-alt">
        </i>
        <div>
          Type
        </div>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon-calendar">
        </i>
        <div>
          Basic Settings
        </div>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon-globe">
        </i>
        <div>
          Geo
        </div>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon-bullseye">
        </i>
        <div>
          Target Groups
        </div>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon-picture">
        </i>
        <div>
          Creatives
        </div>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon-list-alt">
        </i>
        <div>
          Summery
        </div>
      </a>
    </li>
  </ul>
</div>
</body>
</html>