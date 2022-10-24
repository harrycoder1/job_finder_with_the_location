<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./nav2.css">
</head>
<body>
<div class="container">
		<div class="menu-button">Menu</div>
		<ul class="flexnav" data-breakpoint="800">
			<li><a href="#">Home</a></li>
			<li>
				<a href="#">Portofolio</a>
				<ul>
					<li><a href="#">Web design</a></li>
					<li><a href="#">Web development</a></li>
					<li>
						<a href="#">Programming</a>
						<ul>
							<li><a href="#">Sublink 1</a></li>
							<li><a href="#">Sublink 2</a></li>
							<li><a href="#">Sublink 3</a></li>
							<li><a href="#">Sublink 4</a></li>
							<li>
								<a href="#">Sublink 5</a>
								<ul>
									<li><a href="#">Sublink 1</a></li>
									<li><a href="#">Sublink 2</a></li>
									<li><a href="#">Sublink 3</a></li>
									<li><a href="#">Sublink 4</a></li>
									<li><a href="#">Sublink 5</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Identity</a></li>
					<li><a href="#">App Development</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
<script>
    $(".flexnav").flexNav();
</script> 
</body>
</html>



