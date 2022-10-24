<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        $fonts = -apple-system, BlinkMacSystemFont, “Segoe UI”, Roboto, Helvetica, Arial, sans-serif

*,
*:before,
*:after 
  box-sizing inherit
  padding 0
  margin 0
  
body 
  font-family $fonts
  padding 0 10px
  box-sizing border-box
  height: 100vh
  background-image linear-gradient(-20deg, #ddd6f3 0%, #faaca8 100%, #faaca8 100%);

.menu__container
  width 200px
  height 300px
  margin-left auto
  margin-right auto
  margin-top 20vh
  margin-bottom 50px
  border-radius 5px
  cursor pointer
  box-shadow 0 10px 40px 2px rgba(0,0,0,0.4)
  background #000
  transform-origin center center 0px
  transition all .5s ease-out
  animation-name animate
  animation-duration 3s
  animation-iteration-count infinite
  transform perspective(1000px) rotateX(35deg) rotateY(4deg) rotateZ(-30deg)
  z-index 1
  &:hover
    animation unset
    margin-top 18vh
    transform perspective(1000px) rotateX(0deg) rotateY(0deg) rotateZ(0deg)
  .menu
    display flex
    justify-content space-around
    align-items center
    max-width 100%
    height 100%
    color #fff
    
@keyframes animate
  0%
    margin-top 20vh
  50%
    margin-top 18vh
  100%
    margin-top 20vh
    </style>
</head>
<body>
        <div class="menu__container">
            <div class="menu">Hello world</div>
        </div>

</body>
</html>