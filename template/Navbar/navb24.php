<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Pacifico|Roboto:300');
html
{
  background: #ecf0f1;
}

body
{
  margin:0;
  padding:0;
}
h1
{
  font-family: 'Roboto';
  font-weight:100;
  position:absolute;
  top:35%;
  left:48%;
}
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 32px;  /* Preferred icon size */
  display: inline-block;
  color:#fff;
  line-height: 1;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;

  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
.FABMenu
{
  position:absolute;
  top:0;
  left:0;
  bottom:0;
  right:0;
  margin:auto;
  width:600px;
  height:200px;
}
.FABMenu input
{
  position:absolute;
  top: 0%;
  left:50%;
  width:80px;
  height:80px;
  z-index:20;
  border-radius: 80px;
  opacity:0;
  cursor:pointer;
}
.hamburger
{
  position:absolute;
  top:0%;
  left:50%;
  width: 80px;
  height:80px;
  background-color: #E84F3E;
  border-radius:100%;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.15);
  z-index:10;
  cursor:pointer;
}
.dots span
{
  position: absolute;
  top: 45%;
  width:8px;
  height:8px;
  border-radius:8px;
  background:#fff;
  z-index:20;
    transition: all .3s ease-in-out;
}

.first
{
  margin-left:1em;
}
.second
{
  
  margin-left:2.3em;
}
.third
{
   margin-left:3.6em;
}
.FABMenu input:checked ~ .hamburger .dots .first
{
 top:20px;
  height:60px;
  transform-origin:top;
  transform:rotate(-45deg);
   transition: all .3s ease-in-out;
  
}
.FABMenu input:checked ~ .hamburger .dots .third
{
 top:20px;
  height:60px;
  transform-origin:top;
  transform:rotate(45deg);
   transition: all .3s ease-in-out;
}
.action_items_bar
{
  position:absolute;
  top:4.5%;
  left:25%;
  width:380px;
  height:60px;
  background-color: #E84F3E;
  border-radius:60px;
  box-shadow: 0px 5px 20px #F19181;
  z-index:5;
  
/*   animation-name: expand-the-bar;
  animation-duration: 2s;
  animation-timing-function: ease-in-out; */
  transform:scaleX(0);
  transition: all .3s ease-in-out;
}
.FABMenu input:checked ~ .action_items_bar
{
  transform:scaleX(1);
}
.action_items span
{
  position: absolute;
  top: 25%;
  width:20px;
  padding-left:35px;
  opacity:0;
  transition: all .2s ease-in-out;
  cursor:pointer; 
}
.first_item
{
  left:0%;
}
.second_item
{
  left:15%;
}
.third_item
{
  left:55%;
}
.fourth_item
{
  left:70%;
}
.FABMenu input:checked ~ .action_items_bar .action_items .first_item
{
    opacity:1;
  transition-delay:.45s;
}
.FABMenu input:checked ~ .action_items_bar .action_items .second_item
{
    opacity:1;
  transition-delay:.40s;

}
.FABMenu input:checked ~ .action_items_bar .action_items .third_item
{
    opacity:1;
  transition-delay:.40s;
}
.FABMenu input:checked ~ .action_items_bar .action_items .fourth_item
{
    opacity:1;
  transition-delay:.45s;
}

    </style>
</head>
<body>
    
<div class="FABMenu">
  <input type="checkbox" checked/>
  <div class="hamburger">
    <div class="dots">
      <span class="first"></span>
      <span class="second"></span>
      <span class="third"></span>
    </div>
  </div>
  <div class="action_items_bar">
    <div class="action_items">
      <span class="first_item">
        <i class="material-icons">
        favorite
        </i>
      </span>
      <span class="second_item">
        <i class="material-icons">
        chat
        </i>
      </span>
      <span class="third_item">
        <i class="material-icons">
        get_app
        </i>
      </span>
      <span class="fourth_item">
        <i class="material-icons">
        share
        </i>
      </span>
    </div>
  </div>
</div>
</body>
</html>