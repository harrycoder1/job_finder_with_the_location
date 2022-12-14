<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
/*General Styling*/
body {
    font-family: 'Open Sans', Futura,     Helvetica, Arial, sans-serif;
    position:relative;
    text-align: center;
    -webkit-font-smoothing: antialiased;
    color: #FFF0A5;
    background-color: #468966;
}

.container {
  display: block;
  margin-top: 10%;
}

h1 {
  font-size: 3em;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0;
}

.container>p {
  font-size: 1em;
  text-transform: uppercase;
  margin: 0;
}

[href] {
    color: #468966;
    text-decoration: none;
    font-size: inherit;
}

hr {
    display: block;
    -webkit-margin-before: 0.5em;
    -webkit-margin-after: 0.5em;
    -webkit-margin-start: auto;
    -webkit-margin-end: auto;
    border-style: inset;
    border-width: 1px;
    width: 80px;
}

/*Burger-Menu*/

.menu {
    position: relative;
    width: 30px;
    height: 30px;
    margin: 25px;
}
.menu span {
    margin: 0 auto;
    position: relative;
    top: 12px;
}

.menu span:before, .menu span:after {
    position: absolute;
    content: '';
}
.menu span, .menu span:before, .menu span:after {
    width: 30px;
    height: 6px;
    background-color: #FFF0A5;
    display: block;
}
.menu span:before {
    margin-top: -12px;
}
.menu span:after {
    margin-top: 12px;
}

/*Fake-Trigger*/
#sized {
    width:60px;
    height:50px;
    color:transparent;
    background-color: transparent;
    border: transparent;
}

/*Modal-Box*/
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding:0.5%;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
}

.modal-content {
    position: relative;
    margin: auto;
    padding: 0;
    width: 100%;
    height: 98vh;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    background-color: #FFF0A5;
}

.modal-header {
    padding: 2px 16px;
    background-color: #FFF0A5;
    border-bottom: none;
    height:35vh;
}

.modal-body {
    padding: 2px 16px;
    background-color: #FFF0A5;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #FFF0A5;
    color: black;
    border-top: none;
    text-align: center;
}

.modal-footer hr {
    margin-top: 20vh;
}

.modal-footer>p {
  color: #468966
}

.modal-footer h3 {
    text-transform: none;
    font-size:4vh;

}

.close {
    color: #468966;
    float: left;
    font-size: 5em;
    font-weight: bold;
    opacity: 1;
}

.close:hover,
.close:focus {
    color: #B64926;
    text-decoration: none;
    cursor: pointer;
}

@-webkit-keyframes zoomIn {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3);
    }

    50% {
        opacity: 1;
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
}

.animated {
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}


/*Navigation Inner Styling*/

.nav ul li a:hover{
    text-decoration: none;
    color: #B64926;
}

.nav ul li a{
    padding:1em;
    text-transform: uppercase;
    font-weight: 700;
    font-size:3vw;
    letter-spacing: -0.05em;
}

.nav ul li{
    display: inline-block;
    font-size: 3em;
}

.nav ul{
    clear: both;
    width: 100%;
    text-align: center;
}

/*Mobile Optimization*/
/* Portrait Tablet to Landscape and Desktop */
@media (min-width:768px) and (max-width:979px) {

    .nav ul li{
        display: block;
        height: 45px;
    }

    .nav ul {
        clear: both;
        width: 100%;
        text-align: center;
        padding: 0;
    }

    .nav ul li a {
        padding: 0;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 6vw;
        letter-spacing: -0.05em;
    }
}

/* Landscape-Phone to Portrait Tablet*/
@media (max-width:767px) {
  
    .nav ul li{
        display: block;
        height:38px;
    }

    .nav ul {
        clear: both;
        width: 100%;
        text-align: center;
        padding: 0;
    }

    .nav ul li a {
        padding: 0;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 6vw;
        letter-spacing: -0.05em;
    }
}
  
  /*Landscape-Phone Downwards*/
  @media (max-width: 480px) {

        .nav ul li{
            display: block;
            height:38px;
        }

        .nav ul {
            clear: both;
            width: 100%;
            text-align: center;
            padding: 0;
        }

        .nav ul li a {
            padding: 0;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 10vw;
            letter-spacing: -0.05em;
        }
  }




</style>
</head>



<body>
  <div class=container>
  <h1>Touch Me, Taste Me</h1>
    <p>Open Me, Close Me, Resize Me</p>
    </div>
<div class="navigation">
  <button id="sized" class="menu">
    <span></span>        
  </button>
    <div id="myModal" class="modal">
    <!-- Modal content -->
      <div class="modal-content animated           zoomIn">
      <div class="modal-header">
         <span class="close">??</span>
     </div>
        
    <div class="modal-body nav">
       <ul>
         <li><a href="#">Home</a></li>
         <li><a href="#">About</a></li>
         <li><a href="#">Services</a></li>
         <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="modal-footer">
        <hr>
        <p>
        <strong>Your City</strong>
        <br>Max Mustermann &#149;                   +49 121 1734247 &#149;
        Randomstreet, 23424<br>
        <b>your@emailadress.com</b>
        </p>
      </div>
    </div>
  </div>

<script>
    // Get Modal
var modal = document.getElementById('myModal');
    
    // Get pseudoelement to open Modal
    var btn = document.getElementById("sized");
    
    // Get the <span> element to close Modal
    var span = document.getElementsByClassName("close")[0];
    
    // When user clicks button, open Modal
    btn.onclick = function() {
       modal.style.display = "block";
       };
    
    // When user clicks Close (x), close Modal
    span.onclick = function() {
       modal.style.display = "none";
       };
    
    // When user clicks anywhere outside of the Modal, close Modal
     window.onclick = function(event) {
        if (event.target == modal) {
           modal.style.display = "none";
           }
        }
</script>
</body>
</html>