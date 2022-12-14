<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        /*---------- the prefixer -------------*/
body {
  font-family: "Open Sans", sans-serif;
  background-color: #cddc39;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.login {
  position: relative;
  background: #fbfbfb;
  display: block;
  width: 500px;
  height: 70px;
  margin: 10% auto;
  overflow: hidden;
  -webkit-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -ms-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -o-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-50px);
  -moz-transform: translateY(-50px);
  -ms-transform: translateY(-50px);
  -o-transform: translateY(-50px);
  transform: translateY(-50px);
}

.form-group {
  position: relative;
  top: 90%;
  left: 8%;
  -webkit-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -ms-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -o-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transition-delay: 1s;
  transition-delay: 1s;
}

.user,
.pwd {
  position: absolute;
  display: block;
  width: 80%;
  height: 60px;
  background: #fff;
  font-size: 10pt;
  text-transform: capitalize;
  padding-left: 20px;
  color: rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.2);
  border: none;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -ms-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -o-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.user:focus, .user:active:focus,
.pwd:focus,
.pwd:active:focus {
  outline: none;
  padding-left: 30px;
}

.user {
  margin-bottom: 10%;
  z-index: 2;
  -webkit-transition: 0.5s;
  -moz-transition: 0.5s;
  -ms-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

.pwd {
  margin-top: 10%;
  z-index: 1;
  background: rgba(0, 0, 0, 0.1);
  -webkit-transition: 0.5s;
  -moz-transition: 0.5s;
  -ms-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

.links {
  position: absolute;
  top: 80%;
  left: 10%;
  margin: 0 auto;
  -webkit-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -ms-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -o-transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transition-delay: 1.2s;
  transition-delay: 1.2s;
}
.links a {
  text-decoration: none;
  display: block;
  float: left;
  width: 200px;
  height: 40px;
  text-align: left;
  color: #3d5059;
  font-size: 10pt;
  font-weight: bolder;
  text-transform: capitalize;
}
.links a:last-child {
  text-align: right;
}

.btn {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 70px;
  border: none;
  background: #03a9f4;
  font-family: "Open Sans", sans-serif;
  text-align: center;
  font-size: 18pt;
  text-transform: capitalize;
  color: #fff;
  z-index: 3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
.btn:hover, .btn:focus, .btn:active:focus {
  background: #e91e63;
  cursor: pointer;
  outline: none;
  letter-spacing: 5px;
}
    </style>
</head>
<body>
<form class="login">
  <div class="form-group">
    <input type="text" class="user" name="user" placeholder="type your user name">
    <input type="password" class="pwd" name="pwd" placeholder="type your password">
  </div>
  <span class="links">
    <a href="#">signup</a>
    <a href="#">forgot password ?</a>
  </span>
  <br/>
  <input type="button" class="btn" value="login">     
</form>
<script>
    $(document).ready(function(){

$('form').find('.btn').on('click',function(){
   $(this).parent().css({
     'height' : '350px',
     'transform' : 'translateY(50px)'
   });
     $(this).siblings('.form-group').css({
       'top':'20%'
     });
     $(this).siblings('.links').css({
       'top':'65%'
     });
   });
 


/*-------- focus in ---------*/
$('.pwd').on('focusin',function(){
 $(this).siblings('.user').css({
   'z-index'   :'1',
   'background':'rgba(0,0,0,.1)',
 });
  $(this).css({
   'z-index' : '2',
   'background' : '#fff',
   });
});


$('.user').on('focusin',function(){
 $(this).siblings('.pwd').css({
   'z-index'   :'1',
   'background':'rgba(0,0,0,.1)'
 });
 $(this).css({
   'z-index' : '2',
   'background' : '#fff'
  });
});

/*----------- focus out ---------*/
$('.pwd').on('focusout',function(){
 $(this).siblings('.user').css({
   'z-index'   :'1',
   'background':'rgba(0,0,0,.1)'
 });
 $(this).css({
   'z-index' : '2',
   'background' : '#fff'
 });
});


$('.user').on('focusout',function(){
 $(this).siblings('.pwd').css({
   'z-index'   :'1',
   'background':'rgba(0,0,0,.1)'
 });
 $(this).css({
   'z-index' : '2',
   'background' : '#fff'
  });
});
})
</script>
</body>
</html>