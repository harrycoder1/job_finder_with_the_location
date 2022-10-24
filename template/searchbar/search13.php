<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        $btn-d: 5em;
$txt-w: 4*$btn-d;
$txt-h: .65*$btn-d;
$txt-c: #ffeacc;
$mag-d: .5*$txt-h;
$mag-f: .125;
$mag-w: $mag-f*$mag-d;
$mag-c: #000;
$t: .65s;

*, :before, :after {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font: inherit
}

html { overflow-x: hidden }

body {
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0 auto;
	min-width: 400px; min-height: 100vh;
	background: #252525
}

[id='search-btn'] {
	position: absolute;
	left: -100vw;
	
	~ * {
		--i: var(--pos, 1);
		--j: calc(1 - var(--i))
	}
	
	&:checked ~ * { --pos: 0 }
}

[for='search-btn'] {
	order: 1;
	overflow: hidden;
	position: relative;
	z-index: 2;
	margin-left: -.25*$btn-d;
	width: $btn-d; height: $btn-d;
	border-radius: 50%;
	transform: translate(var(--pos, -.5*$txt-w)) rotate(45deg);
	background: hsl(calc(336 - var(--i)*269), calc(77% + var(--i)*2%), calc(49% + var(--i)*13%));
	text-indent: -100vw;
	transition: $t ease-out;
	cursor: pointer;
	
	&:before, &:after {
		position: absolute;
		top: 50%; left: 50%;
		margin: -.5*$mag-d;
		width: $mag-d; height: $mag-d;
		transition: inherit;
		content: ''
	}
	
	&:before {
		margin-top: -.4*$mag-w;
		height: $mag-w;
		transform-origin: 100% 0;
		transform: translate(var(--pos, .25*$mag-d)) 
			scalex(calc(1 - var(--i)*.5));
		background: currentcolor;
	}
	
	&:after {
		border: solid $mag-w currentcolor;
		border-radius: calc(var(--i)*50%);
		transform: translate(var(--pos, -.25*$mag-d)) 
			scalex(calc(var(--j)*#{$mag-f} + var(--i)));
		box-shadow: inset 0 0 0 calc(var(--j)*#{.5*$mag-d}) currentcolor;
		transition-property: border-radius, transform, box-shadow;
		transition-timing-function: 
			cubic-bezier(calc(var(--j)*.42),0,calc(1 - var(--i)*.42),1), 
			cubic-bezier(calc(var(--i)*.42),0,calc(1 - var(--j)*.42),1)
	}
}

[id='search-bar'] {
	margin-right: -.25*$btn-d;
	border: none;
	padding: 0 1em;
	width: $txt-w; height: $txt-h;
	border-radius: $txt-h;
	transform: translate(var(--pos, .5*$txt-w));
	background: #3f324d;
	--cp: inset(-2em var(--pos, 100%) -2em -2em);
	-webkit-clip-path: var(--cp);
					clip-path: var(--cp);
	color: #fff;
	font: 1em century gothic, verdana, arial, sans-serif;
	transition: $t;
	
	&::placeholder {
		opacity: .5;
		color: inherit;
		font-size: .875em;
		letter-spacing: 1px;
		text-shadow: 0 0 1px, 0 0 2px
	}
	
	&:focus {
		outline: none;
		box-shadow: 0 0 1.5em $txt-c, 0 1.25em 1.5em rgba(#000, .2);
		background: $txt-c;
		color: #000;
	}
}
    </style>
</head>
<body>
<input id='search-btn' type='checkbox'/>
<label for='search-btn'>Show search bar</label>
<input id='search-bar' type='text' placeholder='Search...'/>
</body>
</html>