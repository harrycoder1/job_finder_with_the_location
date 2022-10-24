<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        $yellow: #f4d03f;
$blue: #16a085;
$gradient-bg: linear-gradient(90deg, $blue, $yellow);
$transparent-gray: rgba(0, 0, 0, 0.3);
$transparent-white: rgba(255, 255, 255, 0.15);

*,
*::before,
*::after {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body {
	background: $gradient-bg;
	font-family: "Montserrat", sans-serif;
	color: #fff;

	// For codepen only
	height: 100vh;
}

.menu {
	ol {
		list-style: none;
		padding: 0;
		margin: 0;

		&:first-child {
			width: 100%;
			max-width: 960px;
			margin: 1rem auto 0 auto;
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			align-items: center;
			box-shadow: 0px 3px 8px $transparent-gray;
		}
	}

	&-item {
		display: flex;
		align-items: center;
		justify-content: center;
		border-top: 2px solid $blue;
		position: relative;
		transition: background 0.3s ease-in-out;

		&:nth-child(1) > a::before {
			content: "\f015";
		}

		&:nth-child(2) > a::before {
			content: "\f05a";
		}

		&:nth-child(3) > a::before {
			content: "\f0ad";
		}

		&:nth-child(4) > a::before {
			content: "\f2e7";
		}

		&:nth-child(5) > a::before {
			content: "\f007";
		}

		@for $i from 1 through 5 {
			&:nth-child(#{$i}) > a::before {
				font-family: "Font Awesome 5 Free";
				font-size: 1.2rem;
				display: block;
				margin-bottom: 1rem;
				font-weight: 900;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				display: inline-block;
				font-style: normal;
				font-variant: normal;
				text-rendering: auto;
				line-height: 1;
				color: $blue;

				@media (min-width: 768px) {
					font-size: 1.5rem;
				}
			}
		}

		.sub-menu > a {
			color: red;
		}

		&:not(:last-child) {
			border-right: 1px solid $transparent-white;
		}

		.sub-menu {
			position: absolute;
			top: 100%;
			width: 100%;
			transform-origin: top;
			transform: rotateX(-90deg);
			transition: transform 0.3s linear;
			background-color: $yellow;

			.menu-item {
				border-color: $transparent-white;

				a::before {
					content: "";
				}

				&:first-child {
					border: 0;
				}
			}
		}

		&:hover,
		&.active {
			border-top: 2px solid $yellow;
			background-color: $transparent-white;

			a::before {
				color: white;
			}
		}

		&:hover .sub-menu {
			transform: rotateX(0deg);
		}

		a {
			font-size: 0.8rem;
			display: flex;
			flex-direction: column;
			align-items: center;
			color: #fff;
			text-decoration: none;
			text-transform: uppercase;
			height: 100%;
			width: 100%;
			padding: 1.5em 1em;

			@media (min-width: 768px) {
				font-size: 1rem;
			}
		}
	}
}

    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="menu">
  <ol>
    <li class="menu-item active"><a href="#0">Home</a></li>
    <li class="menu-item"><a href="#0">About</a></li>
    <li class="menu-item">
      <a href="#0">Widgets</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Kabobs</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
		<li class="menu-item"><a href="#0">Contact</a></li>
  </ol>
</nav>
</body>
</html>