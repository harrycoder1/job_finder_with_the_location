<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background: url("https://hdqwalls.com/download/stranger-things-season-3-2019-4k-5k-38-1920x1080.jpg") center/cover no-repeat;
  height: 100vh;
  margin: 0;
  display: flex;
  justify-content: center;
}

.menu-bar {
  border-radius: 25px;
  height: -webkit-fit-content;
  height: -moz-fit-content;
  height: fit-content;
  display: inline-flex;
  background-color: rgba(0, 0, 0, 0.4);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  align-items: center;
  padding: 0 10px;
  margin: 50px 0 0 0;
}
.menu-bar li {
  list-style: none;
  color: white;
  font-family: sans-serif;
  font-weight: bold;
  padding: 12px 16px;
  margin: 0 8px;
  position: relative;
  cursor: pointer;
  white-space: nowrap;
}
.menu-bar li::before {
  content: " ";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  transition: 0.2s;
  border-radius: 25px;
}
.menu-bar li:hover {
  color: black;
}
.menu-bar li:hover::before {
  background: linear-gradient(to bottom, #e8edec, #d2d1d3);
  box-shadow: 0px 3px 20px 0px black;
  transform: scale(1.2);
}
    </style>
</head>
<body>
    
<!-- No bacwards compatabilty yet: I'm a terrible person!-->
<ul class="menu-bar">
  <li>Watch Now</li>
  <li>Movies</li>
  <li>TV Shows</li>
  <li>Sports</li>
  <li>Kids</li>
  <li>Library</li>
</ul>
</body>
</html>