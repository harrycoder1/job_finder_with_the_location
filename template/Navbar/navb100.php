<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-size: 16px;
  color: #ffffff;
  background: #c13237;
  font-family: "Raleway", arial, sans-serif;
}

h1 {
  text-align: center;
  font-size: 6em;
  font-weight: 300;
  position: absolute;
  margin: 0;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

#mainnav ul {
  padding-left: 1em;
  position: fixed;
  bottom: 0;
  font-weight: 400;
  z-index: 100;
  min-width: 20em;
}
#mainnav li {
  list-style: none;
  margin: 0.5em 0 0;
  font-size: 1.75em;
}
#mainnav li:hover span {
  opacity: 1;
  transition: 0.25s;
}
#mainnav li.invisible {
  opacity: 0;
  visibility: hidden;
  transition: all 0.25s;
}
#mainnav li.animate {
  opacity: 0;
  animation-duration: 0.25s;
  animation-name: easeOutBounce;
  animation-fill-mode: forwards;
}
#mainnav a {
  text-decoration: none;
  color: #ffffff;
}
#mainnav i {
  border: 2px solid #ffffff;
  padding: 0.5em;
  border-radius: 50%;
}
#mainnav span {
  color: #c13237;
  padding: 0.35em;
  margin-left: 0.5em;
  border-radius: 0.2em;
  font-size: 0.75em;
  transition: 0.3s;
  background: #fff;
  opacity: 0;
  position: relative;
}
#mainnav span:before {
  content: "";
  width: 0px;
  height: 0px;
  position: absolute;
  left: -0.4em;
  top: 50%;
  margin-top: -0.5em;
  border-style: solid;
  border-width: 0.5em 0.5em 0.5em 0;
  border-color: transparent #ffffff transparent transparent;
}

/* Imitates jQuery UI's ease-out-bounce animation effect */
@keyframes easeOutBounce {
  0% {
    font-size: 0;
  }
  37% {
    font-size: 1.75em;
  }
  55% {
    font-size: 1.3125em;
  }
  73% {
    font-size: 1.75em;
  }
  82% {
    font-size: 1.6275em;
  }
  91% {
    font-size: 1.75em;
  }
  96% {
    font-size: 1.715em;
  }
  100% {
    font-size: 1.75em;
    opacity: 1;
  }
}
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<body>
  <header>
    <nav id="mainnav" role="navigation">
      <ul>
        <li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-smile-o"></i><span>About</span></a></li>
        <li><a href="#"><i class="fa fa-globe"></i><span>Clients</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i><span>Contact Us</span></a></li>
        <li><a href="#"><i class="fa fa-bars"></i></a></li>
      </ul>
    </nav>
  </header>
  <section>
    <h1>Simple Nav</h1>
  </section>
  <script>
    (function() {
  var Nav;

  Nav = {
    init: function() {
      this.setup();
      return this.uiBind();
    },
    setup: function() {
      return $('#mainnav').find('li:not(:last-child)').toggleClass('invisible');
    },
    uiBind: function() {
      return $(document).on('click', '#mainnav', function(e) {
        e.preventDefault();
        return $(this).find('li:not(:last-child)').toggleClass('animate').toggleClass('invisible');
      });
    }
  };

  Nav.init();

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBOztFQUFBLEdBQUEsR0FBTTtJQUNKLElBQUEsRUFBTyxRQUFBLENBQUEsQ0FBQTtNQUNMLElBQUksQ0FBQyxLQUFMLENBQUE7YUFDQSxJQUFJLENBQUMsTUFBTCxDQUFBO0lBRkssQ0FESDtJQUtKLEtBQUEsRUFBUSxRQUFBLENBQUEsQ0FBQTthQUNOLENBQUEsQ0FBRSxVQUFGLENBQ0UsQ0FBQyxJQURILENBQ1EscUJBRFIsQ0FFRSxDQUFDLFdBRkgsQ0FFZSxXQUZmO0lBRE0sQ0FMSjtJQVVKLE1BQUEsRUFBUyxRQUFBLENBQUEsQ0FBQTthQUNQLENBQUEsQ0FBRSxRQUFGLENBQVcsQ0FBQyxFQUFaLENBQWUsT0FBZixFQUF3QixVQUF4QixFQUFvQyxRQUFBLENBQUMsQ0FBRCxDQUFBO1FBQ2pDLENBQUUsQ0FBQyxjQUFKLENBQUE7ZUFDQSxDQUFBLENBQUUsSUFBRixDQUFPLENBQUMsSUFBUixDQUFhLHFCQUFiLENBQ0UsQ0FBQyxXQURILENBQ2UsU0FEZixDQUVFLENBQUMsV0FGSCxDQUVlLFdBRmY7TUFGa0MsQ0FBcEM7SUFETztFQVZMOztFQWtCTixHQUFHLENBQUMsSUFBSixDQUFBO0FBbEJBIiwic291cmNlc0NvbnRlbnQiOlsiTmF2ID0ge1xuICBpbml0IDogLT4gXG4gICAgdGhpcy5zZXR1cCgpO1xuICAgIHRoaXMudWlCaW5kKCk7XG4gICAgXG4gIHNldHVwIDogLT5cbiAgICAkKCcjbWFpbm5hdicpXG4gICAgICAuZmluZCgnbGk6bm90KDpsYXN0LWNoaWxkKScpXG4gICAgICAudG9nZ2xlQ2xhc3MoJ2ludmlzaWJsZScpO1xuICAgIFxuICB1aUJpbmQgOiAtPlxuICAgICQoZG9jdW1lbnQpLm9uICdjbGljaycsICcjbWFpbm5hdicsIChlKS0+XG4gICAgICAoZSkucHJldmVudERlZmF1bHQoKTtcbiAgICAgICQodGhpcykuZmluZCgnbGk6bm90KDpsYXN0LWNoaWxkKScpXG4gICAgICAgIC50b2dnbGVDbGFzcygnYW5pbWF0ZScpXG4gICAgICAgIC50b2dnbGVDbGFzcygnaW52aXNpYmxlJyk7XG59XG5cbk5hdi5pbml0KCk7Il19
//# sourceURL=coffeescript
  </script>
</body>
</body>
</html>