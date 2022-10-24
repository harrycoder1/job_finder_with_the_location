<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap");
body {
  background: #111;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

button {
  position: relative;
  padding: 0.75em 2em;
  font: 2rem "Orbitron";
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #fff;
  text-shadow: 0 5px 20px rgba(192, 36, 0, 0.4), 0 2px 2px rgba(192, 36, 0, 0.4);
  background-image: radial-gradient(100% 75% at 50% 100%, #fed262 0%, #c40900 100%);
  border: none;
  border-radius: 100px;
  box-shadow: inset 0 3px 15px 0 #ae2000, inset 0 -3px 0 0 #fed262, inset 0 40px 0 0 rgba(254, 210, 98, 0.4), inset 0 20px 20px 0 #f8bf45, 0 0 0 8px #000, 0 9px 0 0 #444, 0 0 20px 0 rgba(254, 210, 98, 0.4), 0 40px 20px -30px rgba(254, 210, 98, 0.2);
}
button:before {
  content: "";
  position: absolute;
  z-index: -2;
  top: -2rem;
  left: -4rem;
  right: -4rem;
  bottom: -2rem;
  background: linear-gradient(#333, #151515);
  border-radius: 100px;
  box-shadow: 0 2px 10px #000, inset 0 2px 0 #444;
}
button:after {
  content: "";
  position: absolute;
  z-index: -1;
  background: #000;
  box-shadow: 0 1px 0 #444;
  height: 10px;
  left: -4rem;
  right: -4rem;
  top: 50%;
  transform: translateY(-50%);
}
button:hover {
  cursor: pointer;
  background-image: radial-gradient(100% 75% at 50% 100%, #f7b940 0%, #a20700 100%);
}
button:focus, button:active {
  outline: none;
  color: #f9e3bf;
  background-image: radial-gradient(100% 75% at 50% 100%, #f58725 0%, #850600 100%);
  box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.4), inset 0 0 10px #850600, inset 0 3px 15px 0 #ae2000, inset 0 40px 0 0 rgba(254, 210, 98, 0.3), inset 0 20px 20px 0 rgba(248, 191, 69, 0.75), 0 0 0 8px #000, 0 9px 0 0 #444;
}
    </style>
</head>
<body>
<button onclick="blur()">Submit</button>
</body>
</html>