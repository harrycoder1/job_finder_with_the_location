<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @keyframes button-loading {
  20% {
    color: transparent;
    transform: scale(1, 1);
  }
  40% {
    border-color: #5585ff;
    background-color: transparent;
    transform: scale(1, 1);
  }
  60% {
    transform: scale(0.7, 1.1);
    margin-left: 1.25rem;
    width: 2.5rem;
    text-indent: -0.6125rem;
    color: transparent;
    border-color: #5585ff;
    background-color: #5585ff;
  }
  80% {
    transform: scale(1, 1);
  }
  100% {
    margin-left: 1.25rem;
    width: 2.5rem;
    background-color: #5585ff;
    border-color: #5585ff;
    color: transparent;
  }
}
@keyframes button-dot-intro {
  0% {
    opacity: 0;
  }
  60% {
    opacity: 1;
    transform: scale(1, 1);
  }
  100% {
    transform: scale(0.75, 0.75);
  }
}
@keyframes button-dot-pulse {
  0% {
    opacity: 1;
    transform: scale(0.75, 0.75);
  }
  15% {
    transform: scale(0.85, 0.85);
  }
  45% {
    transform: scale(0.75, 0.75);
  }
  55% {
    transform: scale(0.95, 0.95);
  }
  85% {
    transform: scale(0.75, 0.75);
  }
  100% {
    opacity: 1;
    transform: scale(0.75, 0.75);
  }
}
@keyframes button-ready {
  0% {
    margin-left: 1.25rem;
    width: 2.5rem;
  }
  10% {
    background-color: #5585ff;
    border-color: #5585ff;
  }
  70% {
    margin: 0;
    width: 7.25rem;
    background-color: #fff;
    transform: scale(1.1, 1.1);
  }
  100% {
    margin: 0;
    width: 7rem;
    border-color: #8cce1e;
    background-color: #fff;
  }
}
@keyframes button-dot-outro {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: scale(1, 1);
  }
}
@keyframes button-ready-label {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
body {
  text-align: center;
  padding: 8rem 3rem;
}

button {
  position: relative;
  overflow: hidden;
  width: 7rem;
  color: #5585ff;
  border: 2px solid #5585ff;
  background-color: transparent;
  cursor: pointer;
  line-height: 2;
  margin: 0;
  padding: 0;
  border-radius: 1.5rem;
  font-size: 1.125rem;
  text-transform: lowercase;
  outline: none;
  transition: transform 0.125s;
}
button:active {
  transform: scale(0.9, 0.9);
}
button:before, button:after {
  position: absolute;
  opacity: 0;
  border-radius: 50%;
  background-color: #fff;
  top: 50%;
  left: 50%;
  margin-top: -1.125rem;
  margin-left: -1.125rem;
  width: 2.25rem;
  height: 2.25rem;
  content: "";
  z-index: 1;
}
button.loading {
  animation: button-loading 0.5s forwards;
}
button.loading:before {
  opacity: 1;
  animation: button-dot-intro 0.5s forwards;
}
button.loading:after {
  opacity: 0;
  animation: button-dot-pulse 1.5s infinite 0.5s;
}
button.ready {
  text-indent: 0;
  color: transparent;
  background-color: #5585ff;
  animation: button-ready 0.333s forwards;
}
button.ready:before {
  position: absolute;
  left: 0;
  right: 0;
  top: auto;
  margin: 0;
  width: auto;
  height: auto;
  border-radius: 0;
  background-color: transparent;
  color: #8cce1e;
  content: "ready";
  opacity: 0;
  z-index: 2;
  animation: button-ready-label 0.5s forwards 0.275s;
}
button.ready:after {
  opacity: 1;
  animation: button-dot-outro 0.333s;
}
    </style>
</head>
<body>
<button type="submit">Send</button>
<script>
    
document.querySelector('button').addEventListener('click',function clickHandler(e){

this.removeEventListener('click',clickHandler,false);

e.preventDefault();
var self = this;
setTimeout(function(){
    self.className = 'loading';
},125);

setTimeout(function(){
    self.className = 'ready';
},4300);

},false);

</script>
</body>
</html>