<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
  --size: 100px;
  --frames: 62;
}

html {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  user-select: none;
}

input {
  display: none;
}

.like {
  display: block;
  width: var(--size);
  height: var(--size);
  cursor: pointer;
  border-radius: 999px;
  overflow: visible;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-tap-highlight-color: transparent;
}

.hearth {
  background-image: url("https://assets.codepen.io/23500/Hashflag-AppleEvent.svg");
  background-size: calc(var(--size) * var(--frames)) var(--size);
  background-repeat: no-repeat;
  background-position-x: calc(var(--size) * (var(--frames) * -1 + 2));
  background-position-y: calc(var(--size) * 0.02);
  width: var(--size);
  height: var(--size);
}

input:checked + .hearth {
  animation: like 1s steps(calc(var(--frames) - 3));
  animation-fill-mode: forwards;
}

@keyframes like {
  0% {
    background-position-x: 0;
  }
  100% {
    background-position-x: calc(var(--size) * (var(--frames) * -1 + 3));
  }
}
@media (hover: hover) {
  .like:hover {
    background-color: #E1255E15;
  }
  .like:hover .hearth {
    background-position-x: calc(var(--size) * (var(--frames) * -1 + 1));
  }
}
.hashflag {
  position: fixed;
  display: block;
  right: 114px;
  bottom: 20px;
}
.hashflag img {
  display: block;
  height: 28px;
}

.dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}
.dribbble img {
  display: block;
  height: 28px;
}

.twitter {
  position: fixed;
  display: block;
  right: 64px;
  bottom: 14px;
}
.twitter svg {
  width: 32px;
  height: 32px;
  fill: #1da1f2;
}
    </style>
</head>
<body>
<label class="like">
  <input type="checkbox"/>
  <div class="hearth"/>
</label>

<!-- hashflag-gallery - dribbble - twitter -->
<a class="hashflag" href="https://hashflaggallery.com" target="_blank" rel="noopener">
  <img src="https://hashflaggallery.com/favicon-96x96.png"/>
</a>
<a class="dribbble" href="https://dribbble.com/TaminoMartinius" target="_blank">
  <img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""/>
</a>
<a class="twitter" target="_top" href="https://twitter.com/TaminoMartinius">
  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
    <path d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"/>
  </svg>    
</a>
</body>
</html>