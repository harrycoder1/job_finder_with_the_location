<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Varela+Round");
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
  padding: 0;
  margin: 0;
  letter-spacing: 1.1px;
}

body,
html {
  width: 100%;
  height: 100%;
  background: #1c1d22;
  font-family: "Varela Round", sans-serif;
}

.menu {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 720px;
  margin: 0 auto;
  height: 100vh;
  list-style: none;
}

.menu li {
  width: 125px;
  height: 50px;
  transition: background-position-x 0.9s linear;
  text-align: center;
}
.menu li a {
  font-size: 22px;
  color: #777;
  text-decoration: none;
  transition: all 0.45s;
}
.menu li:hover {
  background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB2ZXJzaW9uPSIxLjEi%0D%0AIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhs%0D%0AaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0%0D%0AaD0iMzkwcHgiIGhlaWdodD0iNTBweCIgdmlld0JveD0iMCAwIDM5MCA1MCIgZW5hYmxlLWJhY2tn%0D%0Acm91bmQ9Im5ldyAwIDAgMzkwIDUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHBhdGggZmlsbD0i%0D%0Abm9uZSIgc3Ryb2tlPSIjZDk0ZjVjIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLW1pdGVybGlt%0D%0AaXQ9IjEwIiBkPSJNMCw0Ny41ODVjMCwwLDk3LjUsMCwxMzAsMAoJYzEzLjc1LDAsMjguNzQtMzgu%0D%0ANzc4LDQ2LjE2OC0xOS40MTZDMTkyLjY2OSw0Ni41LDI0My42MDMsNDcuNTg1LDI2MCw0Ny41ODVj%0D%0AMzEuODIxLDAsMTMwLDAsMTMwLDAiLz4KPC9zdmc+Cg==");
  -webkit-animation: line 1s;
          animation: line 1s;
}
.menu li:hover a {
  color: #d94f5c;
}
.menu li:not(:last-child) {
  margin-right: 30px;
}

@-webkit-keyframes line {
  0% {
    background-position-x: 390px;
  }
}

@keyframes line {
  0% {
    background-position-x: 390px;
  }
}
    </style>
</head>
<body>
<nav>
  <ul class="menu">
    <li><a href="#!">Home</a></li>
    <li><a href="#!">About</a></li>
    <li><a href="#!">Contact</a></li>
    <li><a href="#!">Faq</a></li>
  </ul>
</nav>
</body>
</html>