<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  list-style: none;
  font-family: 'Montserrat', sans-serif;
}

body{
  background: #e4eefa;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.wrapper .search_box{
  width: 500px;
  background: #fff;
  border-radius: 5px;
  height: 65px;
  display: flex;
  padding: 10px;
  box-shadow: 0 8px 6px -10px #b3c6ff;
}

.wrapper .search_box .dropdown{
  width: 150px;
  border-right: 2px solid #dde2f1;
  color: #9fa3b1;
  position: relative;
  cursor: pointer;
}

.wrapper .search_box .dropdown .default_option{
  text-transform: uppercase;
  padding: 13px 15px;
  font-size: 14px;
}

.wrapper .search_box .dropdown ul{
  position: absolute;
  top: 70px;
  left: -10px;
  background: #fff;
  width: 150px;
  border-radius: 5px;
  padding: 20px;
  display: none;
  box-shadow: 8px 8px 6px -10px #b3c6ff;
}

.wrapper .search_box .dropdown ul.active{
  display: block;
}

.wrapper .search_box .dropdown ul li{
  padding-bottom: 20px;
}

.wrapper .search_box .dropdown ul li:last-child{
  padding-bottom: 0;
}

.wrapper .search_box .dropdown ul li:hover{
  color: #6f768d;
}

.wrapper .search_box .dropdown:before{
  content: "";
  position: absolute;
  top: 18px;
  right: 20px;
  border: 8px solid;
  border-color: #5078ef transparent transparent transparent;
}

.wrapper .search_box .search_field{
  width: 350px;
  height: 100%;
  position: relative;
}

.wrapper .search_box .search_field .input{
  width: 100%;
  height: 100%;
  border: 0px;
  font-size: 16px;
  padding-left: 20px;
  padding-right: 38px;
  color: #6f768d;
}

.wrapper .search_box .search_field .fas{
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 22px;
  color: #5078ef;
  cursor: pointer;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #9fa3b1;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #9fa3b1;
}

    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="search_box">
        <div class="dropdown">
            <div class="default_option">All</div>  
            <ul>
              <li>All</li>
              <li>Recent</li>
              <li>Popular</li>
            </ul>
        </div>
        <div class="search_field">
          <input type="text" class="input" placeholder="Search">
          <i class="fas fa-search"></i>
      </div>
    </div>
</div>
<script>
    $(".default_option").click(function(){
  $(".dropdown ul").addClass("active");
});

$(".dropdown ul li").click(function(){
  var text = $(this).text();
  $(".default_option").text(text);
  $(".dropdown ul").removeClass("active");
});
</script>
</body>
</html>