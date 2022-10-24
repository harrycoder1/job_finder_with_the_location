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
  padding: 0;
  background-color: #222;
}

* {
  font-family: Helvetica, sans-serif;
  color: #555;
}

#mmeennuu {
  display: none;
}

#mmeennuu:checked ~ .menu {
  width: 500px;
  border-radius: 5px;
  background-color: transparent;
  border: 3px solid #F44336;
  height: 85px;
}
#mmeennuu:checked ~ .menu > ul {
  display: block;
  opacity: 1;
}
#mmeennuu:checked ~ .menu > .barry {
  display: none;
}

.menu {
  display: block;
  margin: 30px auto;
  width: 100px;
  height: 100px;
  background-color: #F44336;
  border: 3px solid transparent;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
}
.menu div.barry {
  width: 40px;
  margin: 35px auto;
}
.menu div.barry .bar {
  display: block;
  width: 100%;
  height: 5px;
  margin-top: 3px;
  border-radius: 2px;
  background-color: #fff;
}
.menu ul {
  opacity: 0;
  display: none;
  transition: all 0.5s ease-in-out;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  list-style-type: none;
  padding: 0;
  width: 500px;
  text-align: center;
  margin-bottom: 0;
}
.menu ul li {
  display: inline-block;
}
.menu ul li a {
  text-decoration: none;
  display: inline-block;
  padding: 15px 25px;
  color: #F44336;
  font-size: 20px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  border: 3px solid transparent;
  border-radius: 5px;
}
.menu ul li a:hover {
  border-color: #F44336;
}
.menu ul li a:target {
  border-bottom-color: #F44336;
}
    </style>
</head>
<body>
<input type='checkbox' id='mmeennuu'>
<label class='menu' for='mmeennuu'>

<div class='barry'>
	<span class='bar'></span>
	<span class='bar'></span>
	<span class='bar'></span>
	<span class='bar'></span>
</div>
	
<ul>
	<li><a id='home' href='#home'>Home</a></li>
	<li><a id='about' href='#about'>About</a></li>
	<li><a id='contact' href='#contact'>Contact</a></li>
	<li><a id='link' href='#link'>Other</a></li>
</ul>

</label>
</body>
</html>