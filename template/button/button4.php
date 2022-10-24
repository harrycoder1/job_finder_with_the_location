<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat");
body {
  background: #2f2f31;
  transform: rotateX(0.003deg);
  height: 100vh;
  color: #fff;
}
a {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  color: #cecd24;
  text-decoration: none;
  font-size: 2em;
  display: inline-block;
  font-family: Montserrat;
  text-transform: uppercase;
  padding: 0.5em 2em;
  border: 2px solid #cecd24;
  transition: 0.02s 0.2s cubic-bezier(0.1, 0, 0.1, 1);
}
a::before {
  content: "";
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  right: 100%;
  bottom: 0;
  background: #cecd24;
  transition: 0.3s 0.2s cubic-bezier(0.1, 0, 0.1, 1), left 0.3s cubic-bezier(0.1, 0, 0.1, 1);
  z-index: -1;
}
a::after {
  content: "";
  display: inline-block;
  background-image: url("https://cdn-icons-png.flaticon.com/128/109/109617.png");
  position: absolute;
  top: 0;
  left: calc(100% - 3em);
  right: 3em;
  bottom: 0;
  background-size: 1.5em;
  background-repeat: no-repeat;
  background-position: center;
  transition: right 0.3s cubic-bezier(0.1, 0, 0.1, 1);
}
a:hover {
  padding: 0.5em 3.5em 0.5em 0.5em;
}
a:hover::before {
  left: calc(100% - 3em);
  right: 0;
  transition: 0.3s cubic-bezier(0.1, 0, 0.1, 1), left 0.3s 0.2s cubic-bezier(0.1, 0, 0.1, 1);
}
a:hover::after {
  right: 0;
  transition: right 0.3s 0.2s cubic-bezier(0.1, 0, 0.1, 1);
}

    </style>
</head>
<body>
<a href="#">Submit</a>
</body>
</html>