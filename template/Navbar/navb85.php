<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*
 * MENU BUTTON
 */
@import url("https://fonts.googleapis.com/css?family=K2D");
.menu__toggler {
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 999;
  height: 28px;
  width: 28px;
  outline: none;
  cursor: pointer;
  display: flex;
  align-items: center;
}
.menu__toggler span,
.menu__toggler span::before,
.menu__toggler span::after {
  position: absolute;
  content: "";
  width: 28px;
  height: 2.5px;
  background: #fafafa;
  border-radius: 20px;
  transition: 500ms cubic-bezier(0.77, 0, 0.175, 1);
}
.menu__toggler span::before {
  top: -8px;
}
.menu__toggler span::after {
  top: 8px;
}
.menu__toggler.active > span {
  background: transparent;
}
.menu__toggler.active > span::before, .menu__toggler.active > span::after {
  background: #005c9c;
  top: 0px;
}
.menu__toggler.active > span::before {
  transform: rotate(-225deg);
}
.menu__toggler.active > span::after {
  transform: rotate(225deg);
}

/*
 * SLIDING MENU PANEL
 */
.menu {
  position: absolute;
  left: -30%;
  z-index: 998;
  color: #005c9c;
  background: rgba(250, 250, 250, 0.7);
  -webkit-clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
          clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
  width: 30%;
  height: 100%;
  padding: 100px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  transition: 300ms left cubic-bezier(0.77, 0, 0.175, 1);
}
@media only screen and (max-width: 600px) {
  .menu {
    width: 250px;
    left: -250px;
    padding: 50px;
  }
}
.menu.active {
  left: 0;
}
.menu p {
  font-size: 1.4rem;
  margin-bottom: 1rem;
}

/*
 * BASIC STYLES
 */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  background: linear-gradient(280deg, #ff3cac 0%, #784ba0 50%, #2b86c5 100%);
  font-family: "K2D", sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
}

h1 {
  color: #fafafa;
  mix-blend-mode: overlay;
}

.twitter {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 30px;
  height: 30px;
}
    </style>
</head>
<body>
    
<!-- Menu elements-->
<div class="menu">
  <p>Section #1</p>
  <p>Section #2</p>
  <p>Section #3</p>
</div>
<div class="menu__toggler"><span></span></div>
<!-- Basic elements-->
<h1>Easy Sliding Menu</h1><a class="twitter" title="Follow Yago Estévez on Twitter" alt="Follow Yago Estévez on Twitter" href="https://twitter.com/yagoestevez/" target="_blank" rel="noopener noreferrer">
  <svg viewBox="0 0 512 512">
    <path fill="#fafafa" d="M459.4 151.7c.3 4.6.3 9.1.3 13.7 0 138.7-105.6 298.5-298.6 298.5A296.5 296.5 0 0 1 0 417a217 217 0 0 0 25.3 1.2c49 0 94.3-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8a111 111 0 0 0 47.4-2 105 105 0 0 1-84.1-103v-1.2c14 7.8 30.2 12.6 47.4 13.3A104.9 104.9 0 0 1 35.7 67.2a298.3 298.3 0 0 0 216.4 109.9 104.9 104.9 0 0 1 179-95.8 206.6 206.6 0 0 0 66.6-25.4 104.7 104.7 0 0 1-46.1 57.8c21-2.3 41.6-8.1 60.4-16.2a225.6 225.6 0 0 1-52.6 54.2z">         </path>
  </svg></a>
  <script>
    const toggler = document.querySelector('.menu__toggler');
const menu    = document.querySelector('.menu');

/*
 * Toggles on and off the 'active' class on the menu
 * and the toggler button.
 */
toggler.addEventListener('click', () => {
  toggler.classList.toggle('active');
  menu.classList.toggle('active');
})
  </script>
</body>
</html>