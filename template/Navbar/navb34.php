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
  list-style: none;
  font-family: "Lato", sans-serif;
  line-height: 1;
}

body {
  background-color: #F5F6F8;
  overflow: hidden;
}

.sidebar-navigation {
  display: inline-block;
  min-height: 100vh;
  width: 80px;
  background-color: #313443;
  float: left;
}
.sidebar-navigation ul {
  text-align: center;
  color: white;
}
.sidebar-navigation ul li {
  padding: 28px 0;
  cursor: pointer;
  transition: all ease-out 120ms;
}
.sidebar-navigation ul li i {
  display: block;
  font-size: 24px;
  transition: all ease 450ms;
}
.sidebar-navigation ul li .tooltip {
  display: inline-block;
  position: absolute;
  background-color: #313443;
  padding: 8px 15px;
  border-radius: 3px;
  margin-top: -26px;
  left: 90px;
  opacity: 0;
  visibility: hidden;
  font-size: 13px;
  letter-spacing: 0.5px;
}
.sidebar-navigation ul li .tooltip:before {
  content: "";
  display: block;
  position: absolute;
  left: -4px;
  top: 10px;
  transform: rotate(45deg);
  width: 10px;
  height: 10px;
  background-color: inherit;
}
.sidebar-navigation ul li:hover {
  background-color: #22252E;
}
.sidebar-navigation ul li:hover .tooltip {
  visibility: visible;
  opacity: 1;
}
.sidebar-navigation ul li.active {
  background-color: #22252E;
}
.sidebar-navigation ul li.active i {
  color: #98D7EC;
}
    </style>
</head>
<body>
<nav class="sidebar-navigation">
	<ul>
		<li class="active">
			<i class="fa fa-share-alt"></i>
			<span class="tooltip">Connections</span>
		</li>
		<li>
			<i class="fa fa-hdd-o"></i>
			<span class="tooltip">Devices</span>
		</li>
		<li>
			<i class="fa fa-newspaper-o"></i>
			<span class="tooltip">Contacts</span>
		</li>
		<li>
			<i class="fa fa-print"></i>
			<span class="tooltip">Fax</span>
		</li>
		<li>
			<i class="fa fa-sliders"></i>
			<span class="tooltip">Settings</span>
		</li>
	</ul>
</nav>
<script>
    
    $('ul li').on('click', function() {
	$('li').removeClass('active');
	$(this).addClass('active');
});
</script>
</body>
</html>