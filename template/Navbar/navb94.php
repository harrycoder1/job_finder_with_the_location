<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:500);
body{
  width:100%; 
  margin:0;
  padding:0;
  overflow:hidden;
  background:hsla(212, 5%, 95%, 1);
  font-family: 'Raleway', sans-serif;
  
    & h1{
    text-align:center;
    margin-top:35px;
    color:hsla(0,0%,20%,1);
    letter-spacing:1px;
    text-shadow:1px 1px hsla(212, 5%, 95%, 1),
      -1px -1px hsla(212, 5%, 95%, 1);
    }
}

.nav{
  height:100%;
  position:fixed;
  left:-2em;
  top:0;
  z-index:1000;
  transform-style:preserve-3d;
  perspective:1000px;
}
.icon{
  position:absolute;
  left:0;
  top:0;
  z-index:990;
  height:100%;
  background:hsla(0,0%,15%,1);
  
    & li{
    border-bottom:1px solid hsla(0,0%,0%,.3);
    list-style-type:none;
    }
    & a{
      display:block;
      width:64px;
      height:64px;
      line-height:64px;
      text-align:center;
      font-size:1.6em;
      color:hsla(0,0%,60%,1);
      text-shadow:0 1px 0 hsla(0,0%,0%,1);
      transition:all .5s ease-out;
   
        &:hover{
          color:hsla(255,255%,255%,1);
          transform:translateX(10px) scale(1.2)
        }
    }
}

.nav:hover .text{
  transform:rotateY(0deg)
}
.text{
  position:absolute;
  left:63px;
  top:0;
  z-index:980;
  height:100%;
  background:hsla(0,0%,15%,1);
  border-right:1px solid hsla(0,0%,0%,.3);
  transition:transform .24s linear;
  backface-visibility:hidden;
  transform-origin:left;
  transform:perspective(1000px) rotateY(90deg);
  
    & li{
      border-bottom:1px solid hsla(0,0%,0%,.3);
    }
    & a{
      display:block;
      width:200px;
      height:64px;
      line-height:64px;
      text-indent:1em;
      font-size:1.4em;
      text-decoration:none;
      color:hsla(0,0%,60%,1);
      text-shadow:0 1px 0 hsla(0,0%,0%,1);
      transition:all .5s ease;
  
         &:hover{
            color:hsla(255,255%,255%,1);
            transform:translateX(-14px)
         }
    } 
}

.nav:hover .info{
  left:0;opacity:1;
  transition:opacity .5s ease-in .1s
}
.info{
  position:absolute;
  padding-left:2em;
  bottom:30px;
  z-index:999;
  width:264px;
  color:hsla(255,255%,255%,1);
  text-align:center;
  line-height:1.6;
  opacity:0;

    .logo p{
      width:100px;
      height:100px;
      margin:0 auto;
      background:hsla(0,0%,15%,1);
      color:hsla(0,0%,26%,1);
      opacity:.6;
      overflow:hidden;
      text-align:center;
      transition:all .5s ease;
      font-size:2em;
      text-shadow:-1px -1px hsla(0,0%,31%,1),1px 1px hsla(0,0%,7%,1);

      &:hover{
        opacity:1;
        color:hsla(255,255%,255%,1);
        text-shadow:-1px -1px hsla(0,0%,34%,1),
          1px 1px hsla(0,0%,7%,1);
      }
    }
  .name{
    font-size:2em;
    font-weight:bold;
    letter-spacing:2px;
    color:hsla(0,0%,26%,1);
    text-shadow:-1px -1px hsla(0,0%,31%,1),
      1px 1px hsla(0,0%,7%,1);
  }
  .quote{
    color:#444;
    text-shadow:1px 1px hsla(0,0%,7%,1);
  }
  .social a{
    font-size:2em;
    color:hsla(0,0%,20%,1);
    letter-spacing:.5em;
    text-shadow:1px 1px hsla(0,0%,27%,1),
      -1px -1px hsla(0,0%,7%,1);
    transition:all .5s ease;
    
      &:hover{
        color:hsla(255,255%,255%,1);
        text-shadow:-1px -1px hsla(0,0%,34%,1),
          1px 1px hsla(0,0%,7%,1);
      }
   }
}
/* 
Only added a nav query for height bc width is fine 
(covers full width of viewport from 270px) down to 220px.  
Bottom nav info section is hidden when screen height 
hits 550px or below.  Nav still functions as a fly-out  
*/

@media screen and ( max-height:550px ){
    .info{
      display:none;
    }
}
@media screen and ( max-width:450px ){
    h1{
      font-size:7.5vw;
    }
}


    </style>
</head>
<body>
<h1>Fly-Out Navigation</h1>
<div id="nav" class="nav">
		<div class="icon">
			<ul>
				<li><a title="Home" href="#"><i class="fa fa-home "></i></a></li>
				<li><a href="About"><i class="fa fa-search "></i></a></li>
				<li><a href="#"><i class="fa fa-edit "></i></a></li>
				<li><a href="#"><i class="fa fa-cog "></i></a></li>
	
			</ul>
		</div>
		<div class="text">
			<ul>
				<li><a title="Home" href="#">Home</a></li>
					<li><a href="#" >Search</a>
</li>
	<li><a href="#" >Contact</a>
</li>
	<li><a href="#" >Settings</a>
</li>
			</ul>
		</div>
		<div class="info">
			<div class="logo"><p>LOGO</p></div>
			<div class="name">Co. Name</div>
			<div class="quote">WHAT WE DO IS WHO WE ARE</div>
			<div class="social">
				<a target="_blank" href="https://twitter.com/tmrDevelops"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>


</body>
</html>