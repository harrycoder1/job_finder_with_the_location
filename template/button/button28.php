<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: lightyellow;
}

ul {
    padding: 0;
    list-style-type: none;
}

li {
    font-size: 25px;
    width: 8em;
    height: 2em;
    text-align: center;
    line-height: 2em;
    font-family: sans-serif;
    text-transform: capitalize;
    position: relative;
    transition: 0.5s;
    margin: 0.8em;
}

li::before,
li::after {
    content: '';
    position: absolute;
    width: 0.6em;
    height: 0.6em;
    background-color: gainsboro;
    border-radius: 50%;
    transition: 0.5s cubic-bezier(0.5, -0.5, 0.25, 1.5);
    top: calc(50% - 0.6em / 2);
}

li::before {left: 0; z-index: -1;}
li::after {right: 0; z-index: -2;}

li:hover {
    color: white;
}

li:hover::before,
li:hover::after {
    width: 100%;
    height: 100%;
    border-radius: 0;
    background-color: dodgerblue;
}

li:hover::before {
    top: 0;
}

li:hover::after {
    right: -0.4em;
    filter: brightness(0.8);
}

    </style>
</head>
<body>
<ul>
  <li>home</li>
  <li>products</li>
  <li>services</li>
  <li>contact</li>
</ul>
</body>
</html>