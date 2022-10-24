<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
  margin:0;
  padding:0;
  -webkit-box-sizing:border-box;
  box-sizing:border-box;
}

body{
  background:#311b92;
  position:relative;
}


.share{
  display:block;
  width:60px;
  height:60px;
  background:#ff9100;
  position:absolute;
  top:300px;
  left:50%;
  z-index:999;
  text-align:center;
  overflow:hidden;
  line-height:65px;
  font-size:1.5em;
  color:#fff;
  -moz-box-shadow: 0px 3px 9px rgba(0,0,0,.5);
-webkit-box-shadow: 0px 3px 9px rgba(0,0,0,.5);
box-shadow: 0px 3px 9px rgba(0,0,0,.5);
  border-radius:50px;
  -webkit-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
}

.share:hover{
  cursor:pointer;
}

.one, .two, .three{
  position:absolute;
  width:50px;
  height:50px;
  color:#fff;
  border-radius:50px;
  text-align:center;
  line-height:49px;
  font-size:1.5em;
   top:300px;
  left:50%;
   -webkit-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
  -webkit-box-shadow: 0px 3px 9px rgba(0,0,0,.2);
box-shadow: 0px 3px 9px rgba(0,0,0,.2);
  -webkit-transition:transform  .3s ease-in-out;
  transition:transform .3s ease-in-out;
}

.one:hover, 
.two:hover,
.three:hover{
  cursor:pointer;
}

.one i, .two i, .three i{
  display:none;
}


.one{
  background:#2196f3;
}

.two{
  background:#00e5ff;
}

.three{
  background:#6a1b9a;
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="share">
  <i class="fa fa-plus"></i>
</div>
  <div class="one">
    <i class="fa fa-facebook"></i>
  </div>
  <div class="two">
    <i class="fa fa-twitter"></i>
  </div>
  <div class="three">
    <i class="fa fa-instagram"></i>
  </div>
<script>
    $(function(){
  var flag=0;
  
  $('.share').on('click',function(){
   if(flag == 0)
    {
      $(this).siblings('.one').animate({
      top:'160px',
      left:'50%',
    },200);
    
     $(this).siblings('.two').delay(200).animate({
      top:'260px',
      left:'40%'
    },200);
    
     $(this).siblings('.three').delay(300).animate({
      top:'260px',
      left:'60%'
    },200);
              
    $('.one i,.two i, .three i').delay(500).fadeIn(200);  
      flag = 1;
    }
    
    
  else{
    $('.one, .two, .three').animate({
        top:'300px',
        left:'50%'
      },200);
      
  $('.one i,.two i, .three i').delay(500).fadeOut(200);
      flag = 0;
    }
  });
});
</script>
</body>
</html>