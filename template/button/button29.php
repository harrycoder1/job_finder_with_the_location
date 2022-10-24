<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn-download {
  cursor: pointer;
  display: block;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  -webkit-tap-highlight-color: transparent;
  position: absolute;
  top: calc(50% - 24px);
  left: calc(50% - 24px);
}
#btn-download:hover {
  background: rgba(34, 50, 84, 0.03);
}
#btn-download svg {
  margin: 16px 0 0 16px;
  fill: none;
  transform: translate3d(0, 0, 0);
}
#btn-download svg polyline,
#btn-download svg path {
  stroke: #0077FF;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: all 0.3s ease;
  transition-delay: 0.3s;
}
#btn-download svg path#check {
  stroke-dasharray: 38;
  stroke-dashoffset: 114;
  transition: all 0.4s ease;
}
#btn-download.downloaded svg .svg-out {
  opacity: 0;
  animation: drop 0.3s linear;
  transition-delay: 0.4s;
}
#btn-download.downloaded svg path#check {
  stroke: #20CCA5;
  stroke-dashoffset: 174;
  transition-delay: 0.4s;
}

@keyframes drop {
  20% {
    transform: translate(0, -3px);
  }
  80% {
    transform: translate(0, 2px);
  }
  95% {
    transform: translate(0, 0);
  }
}
.credit {
  position: fixed;
  right: 20px;
  bottom: 20px;
  transition: all 0.2s ease;
  -webkit-user-select: none;
  user-select: none;
  opacity: 0.6;
}
.credit img {
  width: 72px;
}
.credit:hover {
  transform: scale(0.95);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="btn-download">
  <svg width="22px" height="16px" viewBox="0 0 22 16">
    <path d="M2,10 L6,13 L12.8760559,4.5959317 C14.1180021,3.0779974 16.2457925,2.62289624 18,3.5 L18,3.5 C19.8385982,4.4192991 21,6.29848669 21,8.35410197 L21,10 C21,12.7614237 18.7614237,15 16,15 L1,15" id="check"></path>
    <polyline points="4.5 8.5 8 11 11.5 8.5" class="svg-out"></polyline>
    <path d="M8,1 L8,11" class="svg-out"></path>
</svg>
</div>

<!-- dribbble -->
<a class="credit" href="https://dribbble.com/shots/4570587-Download-micro-interaction" target="_blank"><img src="https://cdn.dribbble.com/assets/logo-footer-hd-a05db77841b4b27c0bf23ec1378e97c988190dfe7d26e32e1faea7269f9e001b.png" alt=""></a>
<script>
    $("#btn-download").click(function() {
  $(this).toggleClass("downloaded");
});
</script>
</body>
</html>