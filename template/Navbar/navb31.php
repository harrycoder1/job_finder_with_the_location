<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,700);
body, html {
  height: 100%;
  background: #fff985;
  font-family: Roboto, Arial, sans-serif;
  letter-spacing: 1px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.item .content .details, .item .content .title {
  left: 0;
  transition-property: left;
  transition-duration: 350ms;
}

@-webkit-keyframes falldown {
  0% {
    top: 52px;
    left: 0;
  }
  100% {
    top: calc(100% - 50px - 18px);
    left: calc(100% - 50px - 20px);
  }
}

@keyframes falldown {
  0% {
    top: 52px;
    left: 0;
  }
  100% {
    top: calc(100% - 50px - 18px);
    left: calc(100% - 50px - 20px);
  }
}
.phone {
  box-sizing: border-box;
  padding-top: 60px;
  position: relative;
  width: 370px;
  height: 570px;
  margin: 40px auto 0 auto;
  overflow: hidden;
}
.phone .topbar {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 62px;
  line-height: 62px;
  background: #395373;
  color: white;
  text-align: center;
}
.phone .topbar .topbarbutton {
  position: absolute;
  left: 13px;
  bottom: 13px;
  width: 25px;
  height: 26px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAaCAMAAAB1owf/AAAAJ1BMVEU5U3M8VnZCXn9DW3lHY4ZZdpdlgKFyjq2DnLmKpMaQrM2Ur9GVsdN7EtFkAAAAYUlEQVR42rXPQQ6AIAxEUdpiYcD7n9eF1NiJKxMeXdFA8stfIpYn7o/O/N4oToZ6v2kYGZqt7yqTsoMYk7XwDjou3z1zjqcHGGlafKc10109Sl49WXeLHhY9DuYWPWRDzwWW4Ae416kXYQAAAABJRU5ErkJggg==);
  cursor: pointer;
}
.phone .topbar h3 {
  font-weight: normal;
  margin-top: 6px;
  font-size: 18px;
}
.phone .topbar .search {
  position: absolute;
  right: 13px;
  bottom: 12px;
  width: 25px;
  height: 26px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAMAAAC6CgRnAAAAM1BMVEU5U3M8VnZCXn9DW3lHY4ZKapBTbZBXaINZcI9ZdpdlgKFyjq2DnLmKpMaQrM2Ur9GVsdOusR5GAAAAtElEQVR42rWSwRLDIAhEm2isiLD8/9cWp0lDnPSYPakP1pXx9ayWoVuSKnPnVm7o1tWGlPOMSACoKsz6NnWJQVrJlcXheknBfpKXsSoOW7zzDZPDidQkNjYz/nl0QwmMDRQK0S7MSjS5MrRYSIER0I9sq5jmwMZ+D77yt+5Ug8Pso87uCLoOmgEIcxez+PbdaowaLoXpBBN1UVVh4hOeNBPVnNzfIQUYNUedkvX6/+ckb3tGH63FCR54WeN8AAAAAElFTkSuQmCC);
  cursor: pointer;
}
.phone .item {
  width: 100%;
  height: 200px;
  position: relative;
  overflow: hidden;
}
.phone .item:nth-of-type(2) {
  background: #f64c73;
  overflow: hidden;
  position: relative;
}
.phone .item:nth-of-type(2) .title::before {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAeCAMAAAAfOR5kAAAAdVBMVEX2THP2XYD2YYT2ZYj2aov3T3X3VHn3WXz3aIj3g5z4ZIP4lKr5bIz5cY75dZL5eZX5fZn5i6P6m7H7orX7s8P72+L8prr8qr38rsD8ytX8ztj81d389f39t8f9vcv9wc79xtL94Ob95On96u7+7/H+8/X/+Pn5WFucAAAA6klEQVR4Aa2P23KDIBCGQbOLRKFdPGik4kHs+z9ibekkO81NO9PfC3c+/mU+xJ8D+Ss+02sZgnnGdnCTg7THMCqk6Xoy4zpn+UkxkQAKTdcEQrbgaiymUoEsg2V1JQVe1DnIpoS7oR5THGBd4x1PR+vPxBvK4dHGcUEAwGEtiD0h29q+O78xWk0PQ7vf+s/Mkbg2xZev/2WrGYV6z5NmG1gbg5dpmEfJsJ9TCfot43jBNCxesbv73XwbddzEbp4KzPS4VoIFtD+2dj1app3UdD83lIvfRWoi0hlHyeF4f4v0E2NljKmU+Nd8AOqPD0OjBHsPAAAAAElFTkSuQmCC) 0 0 no-repeat;
  top: 7px;
}
.phone .item:nth-of-type(2) .button {
  background: #e6365f;
}
.phone .item:nth-of-type(2) .button.expanded {
  background: #db1a46;
  -webkit-animation: bubbleScale 300ms cubic-bezier(0.76, 0.01, 1, 0.93);
          animation: bubbleScale 300ms cubic-bezier(0.76, 0.01, 1, 0.93);
}
.phone .item:nth-of-type(2) .button.collapsed {
  -webkit-animation: bubbleScale 300ms cubic-bezier(0.76, 0.01, 1, 0.93);
          animation: bubbleScale 300ms cubic-bezier(0.76, 0.01, 1, 0.93);
}
.phone .item:nth-of-type(3) {
  background: #20d2bb;
}
.phone .item:nth-of-type(3) .title::before {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAdCAMAAABopjdHAAAAbFBMVEUg0rsg07sp1sQq1L012MU31b5F2sZI3tFT39FW2sVW4tNi49Nm4Mps5dR14dB26+B55tWG7eKI6dmN8eWS8N6T6dyU8uWj7eip8O248ezX8+jb+fbp+frz/P35/fr6///9/f39/////f3///8SbmWeAAABFklEQVR4Ab2P4Q6bMAwG7ToYN6kHnlcPBnTreP93XKCoQlr/bvcnUk656IP/QYPwERyft8/mvj5bOINHon/+Hs41VrOuMII81qU5iTZctfMwndf16zmlIQRAbPOyTHQ2qQtLADj8HH/171tqhROxKwJPj2Wy4w0Wj4p7SHMfbuNcIr9MjtIytzkzjsu8NFfsDPeUqXh0W4Dm718eAiCx51KI9eKym2n+cdkW7IaDrbBv6es0DVxPeZviYQ1RjVPa1qvjXrOCzJTdC6GG8/bzsd5S9aElOEWxDiX4WO9KtZmS54tZlFQlvJDQRGbmCVhLa7VxgOImrWptUCrfDnEEezfNkrULLwRnkIu5W52c4C+QEhH8K/4AJtQQGpIOSSoAAAAASUVORK5CYII=) 0 0 no-repeat;
  top: 7px;
  left: -4px;
}
.phone .item:nth-of-type(3) .button {
  background: #10bba7;
}
.phone .item:nth-of-type(3) .details .c .label {
  color: #91f0e0;
}
.phone .item:nth-of-type(4) {
  background: #c873f4;
  height: 105px;
}
.phone .item:nth-of-type(4) .title::before {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAATlBMVEXIc/TKdfXLevXOg/XQlvjRfPXSifbXl/jYpvnfsvnhqfjjufrkwPvrxf3rzPvs1Pzxz/rx2/zz4/327P748v/4+Pn89f3++/3//f////8ag7p9AAAAr0lEQVR42rWR2w6DIAxAoXWFCsiqW9X//9GZ6AYY9+gJNE0OvSSYe4ATleHU0NviyHWuuliMH064X79RpwbNcCg3e9MQlI4sTdgqUt4TnJK1FqwpQUbY38w9xJw9hCGz5WdmiLorlJdoyFuIg8o7JRUd4GidhAGTBMAoASFILMORmi3qrZib3fv/yp8VdZ0jvKySZVnXdF3lNuhc5SMVXHSVenDzk2AqAIm+B625hw9kZAp4LnzHSwAAAABJRU5ErkJggg==) 0 0 no-repeat;
  top: 9px;
  left: -4px;
}
.phone .item:nth-of-type(4) .button {
  background: #b752eb;
}
.phone .item .button {
  position: absolute;
  right: -70px;
  top: -70px;
  width: 140px;
  height: 140px;
  border-radius: 50%;
  z-index: 1;
  cursor: pointer;
  transition-property: background;
  transition-duration: 500ms;
}
.phone .item .check {
  position: absolute;
  top: 15px;
  right: 10px;
  z-index: 2;
  border-radius: 50%;
  padding-top: 5px;
  cursor: pointer;
}
.phone .item .check .bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 32px;
  height: 32px;
  border-radius: 50%;
}
.phone .item .check svg {
  position: relative;
  transform: scale(0.9);
  z-index: 1;
}
.phone .item .check.expanded .bg {
  -webkit-animation: fade 500ms;
          animation: fade 500ms;
}
.phone .item .check.collapsed .bg {
  -webkit-animation: fade 500ms;
          animation: fade 500ms;
}
.phone .details {
  position: relative;
  margin-top: 22px;
}
.phone .details .c {
  cursor: pointer;
  float: left;
  width: 28%;
  font-size: 12px;
}
.phone .details .c .n {
  font-weight: bold;
}
.phone .details .c:nth-child(1) {
  margin-left: 8%;
}
.phone .details .c .label {
  position: relative;
  top: 2px;
  font-size: 10px;
  color: #fbaabc;
}

.svgmenu {
  position: absolute;
  left: 0;
  top: -60px;
}

.item .content {
  position: relative;
  left: 0;
  padding-top: 60px;
  color: white;
  text-align: center;
}
.item .content.slideLeft .title {
  left: -100px;
  transition-delay: 0;
  transition-timing-function: cubic-bezier(0.03, 0.7, 0.4, 1);
}
.item .content.slideLeft .details {
  left: -100px;
  transition-delay: 70ms;
  transition-timing-function: cubic-bezier(0.03, 0.7, 0.4, 1);
}
.item .content.slideRight .title {
  transition-delay: 240ms;
  transition-timing-function: cubic-bezier(0.76, 0.01, 1, 0.93);
}
.item .content.slideRight .details {
  transition-delay: 200ms;
  transition-timing-function: cubic-bezier(0.76, 0.01, 1, 0.93);
}
.item .title {
  font-size: 21px;
  font-weight: bold;
  position: relative;
  cursor: pointer;
}
.item .title::before {
  content: "";
  position: relative;
  display: inline-block;
  width: 30px;
  height: 30px;
}

@-webkit-keyframes bubbleScale {
  0% {
    width: 140px;
    height: 140px;
  }
  50% {
    width: 145px;
    height: 145px;
  }
  100% {
    width: 140px;
    height: 140px;
  }
}

@keyframes bubbleScale {
  0% {
    width: 140px;
    height: 140px;
  }
  50% {
    width: 145px;
    height: 145px;
  }
  100% {
    width: 140px;
    height: 140px;
  }
}
@-webkit-keyframes fade {
  0% {
    background: #ccc;
    transform: scale(1);
  }
  10% {
    background: #ccc;
  }
  25% {
    transform: scale(0.8);
  }
  100% {
    background: none;
    transform: scale(1.3);
  }
}
@keyframes fade {
  0% {
    background: #ccc;
    transform: scale(1);
  }
  10% {
    background: #ccc;
  }
  25% {
    transform: scale(0.8);
  }
  100% {
    background: none;
    transform: scale(1.3);
  }
}
circle {
  cursor: pointer;
}
    </style>
</head>
<body>
<div class="phone">
	<div class="topbar">
		<div class="topbarbutton"></div>
		<h3>City News</h3>
		<div class="search"></div>
	</div>

	<div class="item">
		<div class="check">
			<div class="bg"></div>
			<svg width="32" height="32">
				<g fill="#ffffff">
					<path d="M8.48499124,6.449827 C8.48499124,6.449827 6.42021586,5.43771624 5.4369895,6.449827 C4.45376313,7.46193776 5.4369895,9.58737036 5.4369895,9.58737036 L14.5809947,17.9541526 C14.5809947,17.9541526 15.5826082,19 15.5969949,19 C16.5986087,19 17.6289965,17.9541526 17.6289965,17.9541526 L25.7570011,9.58737036 C25.7570011,9.58737036 26.3037486,7.01263642 25.7570011,6.449827 C25.2102536,5.88701759 22.7089994,6.449827 22.7089994,6.449827 L15.5969953,13.7707615 L8.48499124,6.449827 Z">
						<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M8.48499124,6.449827 C8.48499124,6.449827 6.42021586,5.43771624 5.4369895,6.449827 C4.45376313,7.46193776 5.4369895,9.58737036 5.4369895,9.58737036 L14.5809947,17.9541526 C14.5809947,17.9541526 15.5826082,19 15.5969949,19 C16.5986087,19 17.6289965,17.9541526 17.6289965,17.9541526 L25.7570011,9.58737036 C25.7570011,9.58737036 26.3037486,7.01263642 25.7570011,6.449827 C25.2102536,5.88701759 22.7089994,6.449827 22.7089994,6.449827 L15.5969953,13.7707615 L8.48499124,6.449827 Z" />
						<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M2.87499998,10.0000003 C2.87499998,10.0000003 0.999999989,11.1094933 1,12.2292387 C1.00000001,13.2292383 2.875,14.1833914 2.875,14.1833914 L14.6696825,14.1833913 C14.6696825,14.1833913 15.9865124,14.1833916 16,14.1833916 C16.939013,14.1833916 17.5271842,14.1833913 17.5271842,14.1833913 L30.0625,14.1833916 C30.0625,14.1833916 31,13.2292387 31,12.2292383 C31,11.2292379 29.125,10 29.125,10 L15.6221831,10.0000002 L2.87499998,10.0000003 Z" />
					</path>
				</g>
			</svg>	
		</div>
		
		<div class="button"></div>
		<div class="content slideRight">
			<div class="title">Night life</div>
			<div class="details">
				<div class="c">
					<div class="n">517</div>
					<div class="label">FOLLOWERS</div>
				</div>
				<div class="c">
					<div class="n">315</div>
					<div class="label">FAVORITES</div>
				</div>
				<div class="c">
					<div class="n">7815</div>
					<div class="label">VIEWS</div>
				</div>
			</div>
		</div>
		<svg class="svgmenu" width="400" height="400">
			<path fill="#E6365F" d="M0,60 L113,60 C113,60 228,59 229,60 C230,61 279,60 300,60 C321,60 371,61 371,60 L371,0 L0,0 L0,60 Z">
				<animate fill="freeze" attributeName="d" begin="indefinite" dur="100ms" to="M0,60 L113,60 C113,60 228,59 229,60 C230,61 279,60 300,60 C321,60 371,61 371,60 L371,0 L0,0 L0,60 Z" />
				<animate fill="freeze" attributeName="d" begin="indefinite" dur="100ms" to="M0,60 L113,60 C113,60 214.336411,103.306838 228,109 C240,114 279,129 300,131 C321,133 371,89 371,82 L371,0 L0,0 L0,60 Z" />
				<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M0,60 L85.9157895,60 C85.9157895,60 152,58 204,139 C253.616309,216.286943 281,205 299,209 C317,213 371,184 371,177 L371,0 L0,0 L0,60 Z" />
				<animate fill="freeze" attributeName="d" begin="indefinite" dur="250ms" to="M0,60 L85.9157895,60 C85.9157895,60 159,60 200,139 C241.386531,218.744779 261,222 294,225 C327,228 371,201 371,194 L371,0 L0,0 L0,60 Z" />
			</path>

			<defs>
				<pattern id="image1" width="44" height="44">
					<image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAtCAMAAADm86mrAAAAq1BMVEXgFEfjH07kOGDmP2bnKVXpL1vrM1/sSm/uOGLuVnjuZYXwb43xPmjxeZXxucbyrsDzX3/zi6L0lan0m6/0o7T07vP1bI32Q2z3e5n3prj35uv4dZX4rr34ssH4uMb4xNH4ytT4z9j43+b5vMn5v8z6tsb7gpv92+L9/f39///+ytX+ztj+1d3+4Ob+5On+6u7++/3+/fr/6en/7/H/8/X/+Pn//f3//f/////AT4wpAAAB0UlEQVR42pWVa3ebMAyGaWhrAWLltpZubSB0gXQjoR0m8f//ZRvmUKhsLn0/+eCH98iyZBm3X5KCo+WG++R3so1iDxdw8MKSi168iGyYxsHe1+Kz+C8HJnAWSZiIP1k6HOw/Z6FV4YCCg3sSU6p9IDjEtZgWl/wId6pXMcfnmzHuHcW8KnuE48tFLGjHPvBN3tDdN+VDCD3OChL4JfUT+kNl9bhPt2pmmDSv5wg6/GGnHMw0bjJBdGQdbnMNfq3kqnElDoFY5S6eoMUxEavcRYEtzrKV7rXV4l610p3ft7jdDMnaRVLBjXEVdMvkfbgpV+JDmf9gBtWmGMziFr8f/s9MFS+HaHISzOHF7XRtXDnd6q4hwXjjxniVao+aydWne5JHZWoOvv9P5HEikZhqE6nm/YgtDqGKa923IEvMaVa5v+VdRbJylXvFOhyCs9oem0xXkLKbLOp0+OY8NtTc65sPArp34Qfae4/Q47csFUsqrNGzZP9doGt3/IqBX8/STQA9LoUBn6MjJA82zvjzCJVxYMbZWU+ffNQMG/C2XBdIYoN+lGGccgrvcjY9KJn7fOIDe9rGbH4Mo/UzeE7Lokz3oWuhOoZVoYnI0ISlIb+sfxpdHHNJS+qbAAAAAElFTkSuQmCC" width="44" height="44" />
				</pattern>

				<pattern id="image2" width="44" height="44">
					<image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAuCAMAAACLUGAGAAAArlBMVEXgFEfjH07kOGDmP2bnKVXpL1vrM1/sSm/uOGLuVnjuZYXwb43xPmjxeZXxucbypr7yrsDzX3/zi6LzydT0lan0m6/0o7T07vP3e5n3prj35uv4rr34ssH4uMb4xNH4ytT4z9j43+b4+Pn5vMn5v8z6+v76///7gpv92+L9/f39//z9///+ztj+1d3+4Ob+5On+6u7++/3+/fr/7/H/8/X/+Pn//f3//f////3///9LRslMAAAB7klEQVR4AaXV+3aTMAAGcChoEhJqwYStdrYg1aEdg8il5v1fTGCruXDhePr9yfmd8CWQxPr4P7lTQ4J8yiIWYkTWNHk8lxfxFp4cMFnQIKqEniQkM5pQaRXvwymNYjGVP/wAxhqXYi4xMvVjLeaTBbrG9UUscaRqVIrlnIjU5CRW0kbwnw5bsZbKu2kw6sHz0aSP5F0zYea8oebravymSWHiOrCczHyYwkH7XBjZ2pY9mkuJBv00MbRlOYm5LM+9hq/6Q863dqdt2nB9+KdeI2X6VZzuqe/02trgkH09KnPKnU5jWfsSugOUcT35Fxeg088/1ZWzDE2/y+mgTodC5vfO1bAdKjWbwNCCRyq3/Qdh6qvKv1FbYq/UFrbXxsdJNlKn2k9f9b29Zlbr3y0DnQb6Ts9dqSNt7BPsNHzR9Ge7dx+G9toCXKPhP2GaTjvr0PgT6t7h/1CXBA86UIu3OxewpBW/Hnae62sVwaChtiuL7Zfbip1jpXfL3vcO5mIy2hwL1OuVLS+Hhrc979WrOgfy9GF8BVdYOatIuowbCtVzECxW53uin7Hg2M6PPGCpe35o5jpTOL4bYFhMtsgxnLyl0KEybfvKwNydBoN91sj+1/qFosXbFeDomJVVXRV5Sj2yfnNDABBCgMB77/m/y1ESIzbGKqIAAAAASUVORK5CYII=" width="44" height="44" />
				</pattern>

				<pattern id="image3" width="44" height="44">
					<image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAuCAMAAACPpbA7AAAArlBMVEXgFEfjH07kOGDmP2bnKVXpL1vrM1/sSm/uOGLuVnjuZYXwb43xPmjxeZXyrsDzX3/zi6LzydT0lan0m6/0o7T07vP1bI32Q2z3e5n3prj35uv4rr34ssH4uMb4xNH4ytT4z9j43+b4+Pn5vMn5v8z7gpv8k6n92+L9/f39///+ytX+ztj+1d3+4Ob+5On+6u7++/3+/fr/xtH/6en/7/H/8/X/+Pn//f3//f////9QMYrpAAACA0lEQVR42qWW23KbMBBABdiVxMWoUtoEO7FJHBcnxkBbBOj/f6zUYpwFBG4n54EZmAO7q4UV6Mv/8Xmf+NQ7MM6ZF2Jy0/e/iziX1VHVRVUmmwdM5nz8sJMK8FYlgpIpn3i7Sg0pzhybfSxKZUJuQ5NPX38qM00SkJFPT42aolkfyMDH72qOddD3/adGzZKE0Ce8UvM0Wwx8mqtbVJxcffI0WnVZqwFnevVdObBj5u5HjxCk88mmHzkObISoHJWMOx9n8JVJDzZqcUf+y6HzgwKWZaMLbNztR0f7EbgWW0izZJkpodb3d+BaukAdFn0t+n4ZXnx8hkkG6MpS9GuQQeuDZoEAGov1biiY9is1EQBZd7BtNTf4Kl624qIr23lWAKF9qYYBFqvA0gEimA/X9eaDZbOR+yJXug8M9oZpP+n7x3TVZlF/xaglgOvjXXyyVQPqy2HXRrD4m7qSU91foYwc7yy0gG/6CWvfrZSRzEbOGpxHRPt+ava/YcQG6evvRdRG/+zY8SAd7dPMPERcOAYk+/h+JwJIWNg7/pgPOFW3KAM4rzx5Qy8iH/qEF7N6vcX9+elHs35Mh/PZj2Yi7MLx/Hd+yKnc99S0vxDPvEo5v5/Y77D4Pe7BPiST+yOhPIFl1Pmj68/v19gVv5KyqguZnTYBJv/wP+Dc079gh3z+/+EPDoYbaDLTr/YAAAAASUVORK5CYII=" width="44" height="44" />
				</pattern>
			</defs>

			<circle id="icon1" r="22" style="fill: url(#image3);">
				<animateMotion dur="0.6s" begin="indefinite" fill="freeze" repeatCount="1" calcMode="spline" keyTimes="0; 1" keyPoints="0; 1" keySplines="0.35 0 1 1" path="M125,26 C170,26 191,51 222,91 C253,131 269.184608,182.272934 306,185 C333,187 338,177 338,177" rotate="auto" />

				<animateTransform attributeName="transform" calcMode="spline" keyTimes="0; 1" keySplines="0.7 0 1 1" begin="indefinite" dur="0.6s" type="rotate" from="0" to="360" repeatCount="1" />
			</circle>

			<circle id="icon2" r="22" style="fill: url(#image2);">
				<animateMotion dur="0.6s" begin="indefinite" fill="freeze" repeatCount="1" calcMode="spline" keyTimes="0; 1" keyPoints="0; 1" keySplines="0.35 0 1 1" path="M125,26 C170,26 191,51 222,91 C244.666619,120.247251 265,174 279,180" rotate="auto" />

				<animateTransform attributeName="transform" calcMode="spline" keyTimes="0; 1" keySplines="0.7 0 1 1" begin="indefinite" dur="0.6s" type="rotate" from="0" to="360" repeatCount="1" />
			</circle>

			<circle id="icon3" r="22" style="fill: url(#image1);">
				<animateMotion dur="0.6s" begin="indefinite" fill="freeze" repeatCount="1" calcMode="spline" keyTimes="0; 1" keyPoints="0; 1" keySplines="0.35 0 1 1" path="M125,26 C170,26 189.45981,51.9517711 222,91 C232,103 242,131 242,131" rotate="auto" />

				<animateTransform attributeName="transform" calcMode="spline" keyTimes="0; 1" keySplines="0.7 0 1 1" begin="indefinite" dur="0.6s" type="rotate" from="0" to="360" repeatCount="1" />
			</circle>
		</svg>
	</div>
	<div class="item">
		<div class="check">
			<div class="bg"></div>
			<svg width="32" height="32">
				<g fill="#ffffff">
					<path d="M8.48499124,6.449827 C8.48499124,6.449827 6.42021586,5.43771624 5.4369895,6.449827 C4.45376313,7.46193776 5.4369895,9.58737036 5.4369895,9.58737036 L14.5809947,17.9541526 C14.5809947,17.9541526 15.5826082,19 15.5969949,19 C16.5986087,19 17.6289965,17.9541526 17.6289965,17.9541526 L25.7570011,9.58737036 C25.7570011,9.58737036 26.3037486,7.01263642 25.7570011,6.449827 C25.2102536,5.88701759 22.7089994,6.449827 22.7089994,6.449827 L15.5969953,13.7707615 L8.48499124,6.449827 Z">
						<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M8.48499124,6.449827 C8.48499124,6.449827 6.42021586,5.43771624 5.4369895,6.449827 C4.45376313,7.46193776 5.4369895,9.58737036 5.4369895,9.58737036 L14.5809947,17.9541526 C14.5809947,17.9541526 15.5826082,19 15.5969949,19 C16.5986087,19 17.6289965,17.9541526 17.6289965,17.9541526 L25.7570011,9.58737036 C25.7570011,9.58737036 26.3037486,7.01263642 25.7570011,6.449827 C25.2102536,5.88701759 22.7089994,6.449827 22.7089994,6.449827 L15.5969953,13.7707615 L8.48499124,6.449827 Z" />
						<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M2.87499998,10.0000003 C2.87499998,10.0000003 0.999999989,11.1094933 1,12.2292387 C1.00000001,13.2292383 2.875,14.1833914 2.875,14.1833914 L14.6696825,14.1833913 C14.6696825,14.1833913 15.9865124,14.1833916 16,14.1833916 C16.939013,14.1833916 17.5271842,14.1833913 17.5271842,14.1833913 L30.0625,14.1833916 C30.0625,14.1833916 31,13.2292387 31,12.2292383 C31,11.2292379 29.125,10 29.125,10 L15.6221831,10.0000002 L2.87499998,10.0000003 Z" />
					</path>
				</g>
			</svg>	
		</div>
		<div class="button"></div>
		<div class="content">
			<div class="title">Art &amp; Culture</div>
			<div class="details">
				<div class="c">
					<div class="n">437</div>
					<div class="label">FOLLOWERS</div>
				</div>
				<div class="c">
					<div class="n">245</div>
					<div class="label">FAVORITES</div>
				</div>
				<div class="c">
					<div class="n">5432</div>
					<div class="label">VIEWS</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item">
		<div class="check">
			<div class="bg"></div>
			<svg width="32" height="32">
				<g fill="#ffffff">
					<path d="M8.48499124,6.449827 C8.48499124,6.449827 6.42021586,5.43771624 5.4369895,6.449827 C4.45376313,7.46193776 5.4369895,9.58737036 5.4369895,9.58737036 L14.5809947,17.9541526 C14.5809947,17.9541526 15.5826082,19 15.5969949,19 C16.5986087,19 17.6289965,17.9541526 17.6289965,17.9541526 L25.7570011,9.58737036 C25.7570011,9.58737036 26.3037486,7.01263642 25.7570011,6.449827 C25.2102536,5.88701759 22.7089994,6.449827 22.7089994,6.449827 L15.5969953,13.7707615 L8.48499124,6.449827 Z">
						<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M8.48499124,6.449827 C8.48499124,6.449827 6.42021586,5.43771624 5.4369895,6.449827 C4.45376313,7.46193776 5.4369895,9.58737036 5.4369895,9.58737036 L14.5809947,17.9541526 C14.5809947,17.9541526 15.5826082,19 15.5969949,19 C16.5986087,19 17.6289965,17.9541526 17.6289965,17.9541526 L25.7570011,9.58737036 C25.7570011,9.58737036 26.3037486,7.01263642 25.7570011,6.449827 C25.2102536,5.88701759 22.7089994,6.449827 22.7089994,6.449827 L15.5969953,13.7707615 L8.48499124,6.449827 Z" />
						<animate fill="freeze" attributeName="d" begin="indefinite" dur="200ms" to="M2.87499998,10.0000003 C2.87499998,10.0000003 0.999999989,11.1094933 1,12.2292387 C1.00000001,13.2292383 2.875,14.1833914 2.875,14.1833914 L14.6696825,14.1833913 C14.6696825,14.1833913 15.9865124,14.1833916 16,14.1833916 C16.939013,14.1833916 17.5271842,14.1833913 17.5271842,14.1833913 L30.0625,14.1833916 C30.0625,14.1833916 31,13.2292387 31,12.2292383 C31,11.2292379 29.125,10 29.125,10 L15.6221831,10.0000002 L2.87499998,10.0000003 Z" />
					</path>
				</g>
			</svg>	
		</div>
		<div class="button"></div>
		<div class="content">
			<div class="title">Food festivals</div>
			<div class="details"></div>
		</div>
	</div>
</div>
<script>
    document.body.addEventListener('click', e => {
  let el = e.target;
  let check = getAncestor(el, 'check') || el;

  if (!el.classList.contains('button') && !check.classList.contains('check')) {
    return;
  }

  let button = getAncestor(el, 'item').querySelector('.button');
  buttonClickHandler(button);
});

let getAncestor = (el, cls) => {
  if (el.closest) {
    return el.closest('.' + cls);
  } else {
    while ((el = el.parentElement) && !el.classList.contains(cls)) {if (window.CP.shouldStopExecution(0)) break;;}window.CP.exitedLoop(0);
    return el;
  }
};

let buttonClickHandler = button => {
  scaleButton(button);
  let contentEl = button.nextElementSibling;
  let svgmenu = contentEl.nextElementSibling;

  contentEl.classList.toggle('slideRight');
  if (contentEl.classList.toggle('slideLeft')) {
    expandMenu(svgmenu);
  } else {
    collapseMenu(svgmenu);
  }
};

let scaleButton = button => {
  let check = button.previousElementSibling;
  let animates = check.querySelectorAll('animate');

  if (button.classList.contains('expanded')) {
    [button, check].forEach(el => {
      el.classList.remove('expanded');
      setTimeout(() => el.classList.add('collapsed'), 20);
    });

    animates[0].beginElement();
  } else {
    [button, check].forEach(el => {
      el.classList.remove('collapsed');
      setTimeout(() => el.classList.add('expanded'), 20);
    });

    animates[1].beginElement();
  }
};

let expandMenu = svgmenu => {
  let animates = svgmenu.querySelectorAll('animate');
  let firstDuration = parseInt(animates[1].getAttribute('dur'));
  let secondDuration = parseInt(animates[2].getAttribute('dur'));

  animates[1].beginElement();
  setTimeout(() => animates[2].beginElement(), firstDuration);
  setTimeout(() => animates[3].beginElement(), firstDuration + secondDuration);
  animateItems(svgmenu, {
    dur: "0.6s",
    keyPoints: "0; 1",
    keySplines: "0.35 0 1 1",
    from: "0",
    to: "360" });

};

let collapseMenu = svgmenu => {
  let animates = svgmenu.querySelectorAll('animate');
  let firstDuration = parseInt(animates[2].getAttribute('dur'));
  let secondDuration = parseInt(animates[1].getAttribute('dur'));

  animates[2].beginElement();
  setTimeout(() => animates[1].beginElement(), firstDuration);
  setTimeout(() => animates[0].beginElement(), firstDuration + secondDuration);
  animateItems(svgmenu, {
    dur: "0.4s",
    keyPoints: "1; 0",
    keySplines: "0 0 0.65 1",
    from: "360",
    to: "0" });

};

let animateItems = (svgmenu, cfg) => {
  let circles = [].slice.call(svgmenu.querySelectorAll('circle'));

  circles.forEach(circle => {
    let animateTransform = circle.querySelector('animateTransform');
    let animateMotion = circle.querySelector('animateMotion');

    animateMotion.setAttribute('dur', cfg.dur);
    animateMotion.setAttribute('keyPoints', cfg.keyPoints);
    animateMotion.setAttribute('keySplines', cfg.keySplines);

    animateTransform.setAttribute('dur', cfg.dur);
    animateTransform.setAttribute('from', cfg.from);
    animateTransform.setAttribute('to', cfg.to);

    animateTransform.beginElement();
    animateMotion.beginElement();
  });
};
setTimeout(() => document.querySelector('.button').click(), 1e3);
setTimeout(() => document.querySelector('.button').click(), 3e3);
</script>
</body>
</html>