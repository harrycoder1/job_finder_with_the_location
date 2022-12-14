<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.navbar {
  position: fixed;
}
.navbar img {
  margin: 1em 0 0 1em;
  width: 200px;
}

#content {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: url("https://s3.amazonaws.com/plloyd/codepen/eidfjord.jpg") no-repeat center center;
  background-size: cover;
}
#content h1, #content h3 {
  margin: 0.5em 0;
  color: #fff;
  text-align: center;
}

#mobile-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}
@media (min-width: 768px) {
  #mobile-footer {
    display: none;
  }
}

#mobile-menu {
  background: rgba(138, 172, 214, 0.8);
}

#mobile-footer-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  overflow: hidden;
}

.mobile-link {
  padding-top: 0.75em;
  padding-bottom: 0.75em;
}

.mobile-link a {
  font-size: 16px;
  color: #fff;
  text-decoration: none;
}

#mobile-footer-close {
  position: relative;
}

#mobile-footer-btn {
  position: absolute;
  bottom: 25px;
  right: 5px;
  width: 30px;
  height: 30px;
  background-color: #959192;
  border: none;
  border-radius: 50%;
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
  cursor: pointer;
}
#mobile-footer-btn:focus {
  outline: 0;
}

.mobile-btn-close span,
.mobile-btn-close span::before {
  content: "";
  position: absolute;
  width: 5px;
  height: 18px;
  top: calc(50% - 9px);
  right: calc(50% + -2.5px);
  background-color: #fff;
  transform: rotate(-90deg);
  transition: 0.3s ease-out;
}

.mobile-btn-close {
  transition: 1s ease-out;
}
.mobile-btn-close::focus {
  transition: 1s ease-out;
}

.mobile-btn-close span {
  transform: rotate(45deg);
}
.mobile-btn-close span::before {
  content: "";
  transform: rotate(-90deg);
}

.is-rotating {
  transform: rotate(135deg);
}

.is-rotating-back {
  transform: rotate(-90deg);
}

.mobile-menu-hide {
  animation: hideFooter 10s forwards;
}

.mobile-menu-show {
  animation: showFooter 1s forwards;
}

@keyframes hideFooter {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(1000px);
    opacity: 0;
  }
}
@keyframes showFooter {
  0% {
    transform: translateY(300px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar" role="navigation">
  <img src="https://s3.amazonaws.com/plloyd/codepen/animated-menu-logo.svg" />
</nav>

<div id="content">
  <h1>Animated Mobile Footer Menu</h1>
  <h3>Shrink the browser window to see</h3>
</div>

<footer id="mobile-footer">
  <div id="mobile-menu">
    <div id="mobile-footer-container">
      <div class="mobile-link">
        <a href="#" class="text-center">My Account</a>
      </div>
      <div class="mobile-link">
        <a href="#" class="text-center">Reviews</a>
      </div>
      <div class="mobile-link">
        <a href="#" class="text-center">Contact Us</a>
      </div>
    </div>
  </div>
  <div id="mobile-footer-close">
    <button id="mobile-footer-btn">
      <div class="mobile-btn-close is-rotating-back">
        <span></span>
      </div>
    </button>
  </div>
</footer>
<script>
    (function($) {
  $(function() {
    // Store menu container
    var mobileMenu = '#mobile-menu';
    // Store Trigger
    var mobileBtn = '#mobile-footer-btn';

    var rotation = '.mobile-btn-close';

    $(mobileBtn).on("click", function(e) {
      e.stopPropagation();
      if ($(mobileMenu).hasClass('mobile-menu-hide') || $(rotation).hasClass('is-rotating')) {
        $(mobileMenu).removeClass("mobile-menu-hide").addClass("mobile-menu-show");
        $(rotation).removeClass("is-rotating").addClass("is-rotating-back");
      } else {
        $(mobileMenu).removeClass("mobile-menu-show").addClass("mobile-menu-hide");
        $(rotation).removeClass('is-rotating-back').addClass('is-rotating');
      }
    });
  });
})(jQuery);
</script>
</body>
</html>