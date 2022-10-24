<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0px;
  padding: 0px;
  border: 0px;
  box-sizing: border-box;
}
html {
  width: 100%;
  height: 100%;
}
body {
  background: #333;
  font: 14px Tahoma, Geneva, sans-serif;
  text-align: center;
  width: 100%;
  height: 100%;
}
h1 {
  padding: 50px 0px 20px 0px;
  color: #EEE;
  font-size: 20px;
}
.dropdown {
  margin: 0px auto;
  width: 300px;
}
.dropdown:hover h1 {
  border-radius: 5px 5px 0px 0px;
}
.dropdown:hover li {
  padding: 10px;
  border-top: 1px #383838 solid;
  height: auto;
  overflow: auto;
  opacity: 1;
}
.dropdown h1 {
  display: inline-block;
  padding: 10px;
  position: relative;
  background: #2e2e2e;
  color: #888888;
  font-size: 14px;
  font-weight: normal;
  text-align: left;
  border: 5px;
  border-radius: 5px;
  width: 100%;
  cursor: pointer;
  transition: all 0.5s linear 0s;
}
.dropdown h1 b {
  color: #EEE;
  font-weight: normal;
}
.dropdown h1:before {
  content: '';
  margin-top: -2px;
  margin-right: 10px;
  display: inline-block;
  background: #888888;
  border-radius: 5px;
  vertical-align: middle;
  width: 16px;
  height: 16px;
}
.dropdown h1.selected-1:before {
  background: #5790E6;
}
.dropdown h1.selected-2:before {
  background: #8773EB;
}
.dropdown h1.selected-3:before {
  background: #B27CD9;
}
.dropdown h1.selected-4:before {
  background: #E884B0;
}
.dropdown h1.selected-5:before {
  background: #EDA180;
}
.dropdown ul {
  display: block;
  position: relative;
  list-style: none;
}
.dropdown li {
  padding: 0px 10px;
  background: #2e2e2e;
  color: #888888;
  text-align: left;
  border: 0px;
  width: 100%;
  height: 0px;
  overflow: hidden;
  cursor: pointer;
  opacity: 0;
  transition-property: all, background-color;
  transition-duration: 0.2s, 0.4s;
}
.dropdown li b {
  color: #EEE;
  font-weight: normal;
}
.dropdown li:hover,
.dropdown li.selected {
  background-color: #292929;
}
.dropdown li:last-child {
  border-radius: 0px 0px 5px 5px;
}
.dropdown li:before {
  content: '';
  margin-top: -2px;
  margin-right: 10px;
  display: inline-block;
  border-radius: 5px;
  vertical-align: middle;
  width: 16px;
  height: 16px;
}
.dropdown li:nth-child(1) {
  transition-delay: 0s, 0s;
}
.dropdown li:nth-child(1):before {
  background: #5790E6;
}
.dropdown li:nth-child(2) {
  transition-delay: 0.1s, 0s;
}
.dropdown li:nth-child(2):before {
  background: #8773EB;
}
.dropdown li:nth-child(3) {
  transition-delay: 0.2s, 0s;
}
.dropdown li:nth-child(3):before {
  background: #B27CD9;
}
.dropdown li:nth-child(4) {
  transition-delay: 0.3s, 0s;
}
.dropdown li:nth-child(4):before {
  background: #E884B0;
}
.dropdown li:nth-child(5) {
  transition-delay: 0.4s, 0s;
}
.dropdown li:nth-child(5):before {
  background: #EDA180;
}

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h1>color dropdown menu</h1>
<div class="dropdown">
  <h1>choose a color</h1>
  <ul>
    <li data-value="#5790E6"><b>eyes</b> by kersheys</li>
    <li data-value="#8773EB"><b>status</b> by grandiloquent</li>
    <li data-value="#B27CD9"><b>costume party</b> by lemonpaste</li>
    <li data-value="#E884B0"><b>musk stix</b> by the rusty wench</li>
    <li data-value="#EDA180"><b>cymbalic</b> by clairyfairy</li>
  </ul>
</div>
<script>
    $(document).ready(function() {
  $('.dropdown ul li').click(function() {
    $('.dropdown ul li').each(function() {
      if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
      }
    });
    $(this).addClass('selected');
    $('.dropdown h1').html($(this).html()).removeClass().addClass('selected-' + ($(this).index()+1));
  });
});
</script>
</body>
</html>