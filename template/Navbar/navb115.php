<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  height: 100%;
}

body {
  background: #E0E0E0;
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  font-size: 18px;
  line-height: 24px;
  color: #000;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: center;
}

.navigation__checkbox {
  display: none;
}
.navigation__button {
  background-color: #fff;
  height: 7rem;
  width: 7rem;
  position: fixed;
  top: 6rem;
  right: 6rem;
  border-radius: 50%;
  z-index: 2000;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.1);
  text-align: center;
  cursor: pointer;
}
.navigation__background {
  height: 6rem;
  width: 6rem;
  border-radius: 50%;
  position: fixed;
  top: 6.5rem;
  right: 6.5rem;
  background-image: radial-gradient(#03A9F4, #03A9F4);
  z-index: 1000;
  transition: transform 0.8s cubic-bezier(0.86, 0, 0.07, 1);
}
.navigation__nav {
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1500;
  opacity: 0;
  width: 0;
  transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.navigation__list {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  list-style: none;
  text-align: center;
  width: 100%;
}
.navigation__item {
  margin: 1rem;
}
.navigation__link:link, .navigation__link:visited {
  display: inline-block;
  font-size: 3rem;
  font-weight: 300;
  padding: 1rem 2rem;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  background-image: linear-gradient(120deg, transparent 0%, transparent 50%, #fff 50%);
  background-size: 220%;
  transition: all 0.4s;
}
.navigation__link:link span, .navigation__link:visited span {
  margin-right: 1.5rem;
  display: inline-block;
}
.navigation__link:hover, .navigation__link:active {
  background-position: 100%;
  color: #90CAF9;
  transform: translateX(1rem);
}
.navigation__checkbox:checked ~ .navigation__background {
  transform: scale(80);
}
.navigation__checkbox:checked ~ .navigation__nav {
  opacity: 1;
  width: 100%;
}
.navigation__icon {
  position: relative;
  margin-top: 3.5rem;
}
.navigation__icon, .navigation__icon::before, .navigation__icon::after {
  width: 3rem;
  height: 2px;
  background-color: #B0BEC5;
  display: inline-block;
}
.navigation__icon::before, .navigation__icon::after {
  content: "";
  position: absolute;
  left: 0;
  transition: all 0.2s;
}
.navigation__icon::before {
  top: -0.8rem;
}
.navigation__icon::after {
  top: 0.8rem;
}
.navigation__button:hover .navigation__icon::before {
  top: -1rem;
}
.navigation__button:hover .navigation__icon::after {
  top: 1rem;
}
.navigation__checkbox:checked + .navigation__button .navigation__icon {
  background-color: transparent;
}
.navigation__checkbox:checked + .navigation__button .navigation__icon::before {
  top: 0;
  transform: rotate(135deg);
}
.navigation__checkbox:checked + .navigation__button .navigation__icon::after {
  top: 0;
  transform: rotate(-135deg);
}</style>
</head>
<body>
<div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>About Us</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Your benfits</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular tours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Book now</a></li>
                    </ul>
            </nav>
        </div>
</body>
</html>