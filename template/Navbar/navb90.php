<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
}

body {
  font-family: Roboto, sans-serif;
  -webkit-font-smoothing: antialiased;
  background-color: #000;
}

.page-wrapper {
  transition: 250ms;
}

.page-content {
  text-align: center;
  transition: 250ms;
  background-color: honeydew;
}
.page-content .text-content {
  padding: 40px;
}
.page-content .text-content p {
  max-width: 600px;
  margin: 20px auto;
}
.page-content .full-screen.image {
  height: 100vh;
  width: 100vw;
  max-width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://pixabay.com/get/e833b50e21f3083ed1534705fb0938c9bd22ffd41cb117449cf7c77ba4/motion-1641979_1920.jpg);
  background-size: cover;
}
.page-content .full-screen.image h1 {
  padding-top: 25vh;
  font-size: 68px;
  color: #ebebeb;
  text-shadow: 0 0 15px #333333;
}

h1, h2 {
  text-transform: uppercase;
  font-weight: 100;
}

.sidebar {
  width: 200px;
  position: fixed;
  top: 0;
  bottom: 0;
  padding-top: 66px;
  background-color: #333;
  color: #bbbbbb;
  transition: 250ms;
}
.sidebar .link {
  padding: 8px 25px;
  cursor: pointer;
  transition: 250ms;
  font-weight: 300;
}
.sidebar .link:hover {
  color: #ebebeb;
}

.sidebar.menu-1 {
  left: -200px;
}

.sidebar.menu-2 {
  right: -200px;
}

.menu-toggle {
  z-index: 100;
  position: fixed;
  top: 25px;
  padding: 5px 10px;
  border: 1px solid #ebebeb;
  color: #ebebeb;
  border-radius: 4px;
  cursor: pointer;
  transition: 250ms;
}
.menu-toggle.menu-1-toggle {
  left: 25px;
}
.menu-toggle.menu-2-toggle {
  right: 25px;
}
.menu-toggle .menu-label {
  display: block;
}
.menu-toggle .close-label {
  display: none;
}

#menu1Toggle {
  display: none;
}
#menu1Toggle:checked ~ .page-wrapper .sidebar.menu-1 {
  left: 0;
  box-shadow: 0 0 15px #000;
}
#menu1Toggle:checked ~ .page-wrapper .menu-toggle.menu-1-toggle {
  border-color: #ebebeb;
  color: #ebebeb;
  left: 115px;
}
#menu1Toggle:checked ~ .page-wrapper .menu-toggle.menu-1-toggle .menu-label {
  display: none;
}
#menu1Toggle:checked ~ .page-wrapper .menu-toggle.menu-1-toggle .close-label {
  display: block;
}

#menu2Toggle {
  display: none;
}
#menu2Toggle:checked + .page-wrapper {
  padding-right: 200px;
}
#menu2Toggle:checked + .page-wrapper .page-content {
  transform: scale(0.9);
}
#menu2Toggle:checked + .page-wrapper .sidebar.menu-2 {
  right: 0;
}
#menu2Toggle:checked + .page-wrapper .menu-toggle.menu-2-toggle {
  border-color: #ebebeb;
  color: #ebebeb;
}
#menu2Toggle:checked + .page-wrapper .menu-toggle.menu-2-toggle .menu-label {
  display: none;
}
#menu2Toggle:checked + .page-wrapper .menu-toggle.menu-2-toggle .close-label {
  display: block;
}
    </style>
</head>
<body>
    
<input id="menu1Toggle" type="checkbox"/>
<input id="menu2Toggle" type="checkbox"/>
<div class="page-wrapper">
  <div class="page-content">
    <div class="full-screen image">
      <h1>Beach?</h1>
    </div>
    <div class="text-content">
      <h1>Some title or something</h1>
      <p>Bacon ipsum dolor amet corned beef meatball short ribs brisket, tongue beef ribs shankle sirloin. Tri-tip frankfurter shankle, corned beef flank kielbasa meatball bresaola landjaeger pig. Ground round kevin turkey tri-tip tenderloin. Sausage beef ribs t-bone meatball. Sausage bacon cow strip steak short ribs beef ribs drumstick pastrami meatball. Tri-tip chuck shoulder andouille tenderloin pancetta beef frankfurter turkey ham hock. Pork loin short ribs picanha tail alcatra pork belly shankle porchetta ribeye jerky flank pancetta cupim short loin kevin.</p>
      <p>Swine ham short ribs ribeye shank t-bone tenderloin drumstick kielbasa. Salami ground round hamburger chicken. Meatball brisket ground round shoulder rump tenderloin capicola landjaeger corned beef chuck. Bresaola tri-tip andouille shoulder. Doner corned beef beef ribs salami sirloin kevin hamburger.</p>
      <p>Turkey sausage shankle swine venison tongue ribeye spare ribs tri-tip leberkas salami prosciutto. Pork loin porchetta shoulder corned beef, alcatra ham hock fatback rump short loin bacon pig swine tongue. Doner boudin pork t-bone filet mignon bresaola beef, spare ribs alcatra short ribs jerky chuck kevin tail. Drumstick cow tri-tip, shoulder boudin turducken sirloin pig sausage ground round ham hock pork loin jowl jerky. Jowl turducken beef, frankfurter ball tip andouille pastrami.</p>
      <p>Bacon ipsum dolor amet corned beef meatball short ribs brisket, tongue beef ribs shankle sirloin. Tri-tip frankfurter shankle, corned beef flank kielbasa meatball bresaola landjaeger pig. Ground round kevin turkey tri-tip tenderloin. Sausage beef ribs t-bone meatball. Sausage bacon cow strip steak short ribs beef ribs drumstick pastrami meatball. Tri-tip chuck shoulder andouille tenderloin pancetta beef frankfurter turkey ham hock. Pork loin short ribs picanha tail alcatra pork belly shankle porchetta ribeye jerky flank pancetta cupim short loin kevin.</p>
      <p>Swine ham short ribs ribeye shank t-bone tenderloin drumstick kielbasa. Salami ground round hamburger chicken. Meatball brisket ground round shoulder rump tenderloin capicola landjaeger corned beef chuck. Bresaola tri-tip andouille shoulder. Doner corned beef beef ribs salami sirloin kevin hamburger.</p>
      <p>Turkey sausage shankle swine venison tongue ribeye spare ribs tri-tip leberkas salami prosciutto. Pork loin porchetta shoulder corned beef, alcatra ham hock fatback rump short loin bacon pig swine tongue. Doner boudin pork t-bone filet mignon bresaola beef, spare ribs alcatra short ribs jerky chuck kevin tail. Drumstick cow tri-tip, shoulder boudin turducken sirloin pig sausage ground round ham hock pork loin jowl jerky. Jowl turducken beef, frankfurter ball tip andouille pastrami.</p>
      <p>Bacon ipsum dolor amet corned beef meatball short ribs brisket, tongue beef ribs shankle sirloin. Tri-tip frankfurter shankle, corned beef flank kielbasa meatball bresaola landjaeger pig. Ground round kevin turkey tri-tip tenderloin. Sausage beef ribs t-bone meatball. Sausage bacon cow strip steak short ribs beef ribs drumstick pastrami meatball. Tri-tip chuck shoulder andouille tenderloin pancetta beef frankfurter turkey ham hock. Pork loin short ribs picanha tail alcatra pork belly shankle porchetta ribeye jerky flank pancetta cupim short loin kevin.</p>
      <p>Swine ham short ribs ribeye shank t-bone tenderloin drumstick kielbasa. Salami ground round hamburger chicken. Meatball brisket ground round shoulder rump tenderloin capicola landjaeger corned beef chuck. Bresaola tri-tip andouille shoulder. Doner corned beef beef ribs salami sirloin kevin hamburger.</p>
      <p>Turkey sausage shankle swine venison tongue ribeye spare ribs tri-tip leberkas salami prosciutto. Pork loin porchetta shoulder corned beef, alcatra ham hock fatback rump short loin bacon pig swine tongue. Doner boudin pork t-bone filet mignon bresaola beef, spare ribs alcatra short ribs jerky chuck kevin tail. Drumstick cow tri-tip, shoulder boudin turducken sirloin pig sausage ground round ham hock pork loin jowl jerky. Jowl turducken beef, frankfurter ball tip andouille pastrami.</p>
      <p>Bacon ipsum dolor amet corned beef meatball short ribs brisket, tongue beef ribs shankle sirloin. Tri-tip frankfurter shankle, corned beef flank kielbasa meatball bresaola landjaeger pig. Ground round kevin turkey tri-tip tenderloin. Sausage beef ribs t-bone meatball. Sausage bacon cow strip steak short ribs beef ribs drumstick pastrami meatball. Tri-tip chuck shoulder andouille tenderloin pancetta beef frankfurter turkey ham hock. Pork loin short ribs picanha tail alcatra pork belly shankle porchetta ribeye jerky flank pancetta cupim short loin kevin.</p>
      <p>Swine ham short ribs ribeye shank t-bone tenderloin drumstick kielbasa. Salami ground round hamburger chicken. Meatball brisket ground round shoulder rump tenderloin capicola landjaeger corned beef chuck. Bresaola tri-tip andouille shoulder. Doner corned beef beef ribs salami sirloin kevin hamburger.</p>
      <p>Turkey sausage shankle swine venison tongue ribeye spare ribs tri-tip leberkas salami prosciutto. Pork loin porchetta shoulder corned beef, alcatra ham hock fatback rump short loin bacon pig swine tongue. Doner boudin pork t-bone filet mignon bresaola beef, spare ribs alcatra short ribs jerky chuck kevin tail. Drumstick cow tri-tip, shoulder boudin turducken sirloin pig sausage ground round ham hock pork loin jowl jerky. Jowl turducken beef, frankfurter ball tip andouille pastrami.</p>
    </div>
  </div>
  <label class="menu-toggle menu-1-toggle" for="menu1Toggle"><span class="menu-label">Menu 1</span><span class="close-label">Close</span></label>
  <label class="menu-toggle menu-2-toggle" for="menu2Toggle"><span class="menu-label">Menu 2</span><span class="close-label">Close</span></label>
  <div class="sidebar menu-1">
    <div class="link">Home</div>
    <div class="link">About</div>
    <div class="link">Portfolio</div>
    <div class="link">Contact</div>
  </div>
  <div class="sidebar menu-2">
    <div class="link">Home</div>
    <div class="link">About</div>
    <div class="link">Portfolio</div>
    <div class="link">Contact</div>
  </div>
</div>
</body>
</html>