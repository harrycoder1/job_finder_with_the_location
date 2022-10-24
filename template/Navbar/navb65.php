<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background: #F9F8FD;
  font-family: "Lexend Exa", sans-serif;
}

nav {
  position: absolute;
  top: 15px;
  left: 50%;
  transform: translateX(-50%);
  display: inline-block;
  border: 2px solid #EBECF1;
  border-radius: 30px;
  animation: slide-in 1s ease-out;
}

ul {
  position: relative;
  display: flex;
  flex: 1 1 auto;
  margin: 0;
  padding: 0 30px;
  list-style-type: none;
}
ul li:not(:last-child) {
  margin-right: 40px;
}
ul li {
  border: 2px solid transparent;
  border-radius: 5px;
  padding: 10px;
  transition: background 0.2s;
}
ul li a {
  color: #2375D8;
  text-decoration: none;
  text-transform: uppercase;
  transition: color 0.2s;
}
ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  display: block;
  margin: 12px -12px;
  padding: 0;
  background: #FFA91B;
  border: 2px solid #F7C833;
  border-right: 2px solid #F89329;
  border-bottom: 2px solid #F89329;
  border-radius: 5px;
  transition: opacity 0.2s, visibility 0.2s;
}
ul li ul li {
  margin: -2px 0 0 -2px;
  width: calc(100% - 20px);
  line-height: 1.7;
}
ul li ul li a {
  color: #2375D8;
}
ul li:hover {
  background: #EC4138;
  border: 2px solid #F05749;
  border-right: 2px solid #E02A21;
  border-bottom: 2px solid #E02A21;
}
ul li:hover a {
  color: #F9F8FD;
}
ul li:hover ul {
  visibility: visible;
  opacity: 1;
  box-shadow: 0px 3px 5px 2px #EBECF1;
}
ul li:hover ul li a {
  color: #F9F8FD;
}

@keyframes slide-in {
  0% {
    top: -50px;
  }
  40% {
    top: 20px;
  }
  70% {
    top: 10px;
  }
  100% {
    top: 15px;
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
  <ul>
    <li><a href="#0">Home</a></li>
    <li><a href="#0">About</a></li>
    <li>
      <a href="#0">Clients</a>
      <ul>
        <li><a href="#0">Burger King</a></li>
        <li><a href="#0">Southwest Airlines</a></li>
        <li><a href="#0">Levi Strauss</a></li>
      </ul>
    </li>
    <li>
      <a href="#0">Services</a>
      <ul>
        <li><a href="#0">Print Design</a></li>
        <li><a href="#0">Web Design</a></li>
        <li><a href="#0">Mobile App Development</a></li>
      </ul>
    </li>
    <li><a href="#0">Contact</a></li>
  </ul>
</nav>
</body>
</html>