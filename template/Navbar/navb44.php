<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
  background: #f7f7f7 url("https://38.media.tumblr.com/c026c2203f47be8d0f3fb81f6c5aee25/tumblr_n2hutxfrNr1tubinno1_1280.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: "Roboto";
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body::before {
  content: '';
  position: fixed;
  z-index: -1;
  top: 0;
  left: 0;
  background: #c0392b;
  /* IE Fallback */
  background: rgba(52, 73, 94, 0.8);
  width: 100%;
  height: 100%;
}
nav {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 360px;
  margin: -78px 0 100px -180px;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  /* Sub Menu */
}
nav ul li a {
  display: block;
  background: #3498db;
  padding: 10px 15px;
  color: #fff;
  text-decoration: none;
  -webkit-transition: 0.2s linear;
  -moz-transition: 0.2s linear;
  -ms-transition: 0.2s linear;
  -o-transition: 0.2s linear;
  transition: 0.2s linear;
}
nav ul li a:hover {
  background: #2980b9;
}
nav ul li a .fa {
  width: 16px;
  text-align: center;
  margin-right: 5px;
}
nav ul li a .badge {
  display: inline-block;
  background: #fff;
  /* IE Fallback */
  background: rgba(255, 255, 255, 0.2);
  padding: 3px 7px;
  color: #fff;
  font-size: 12px;
  font-weight: 800;
}
nav ul li ul li a {
  background: #444;
  border-left: 4px solid transparent;
  padding: 10px 20px;
}
nav ul li ul li a:hover {
  background: #333;
  border-left: 4px solid #3498db;
}
/* Float Right/Left */
.right {
  float: right;
}
.left {
  float: left;
}

    </style>
</head>
<body>
<nav class='animated bounceInDown'>
  <ul>
    <li>
      <a href='#profile'>
        <div class='fa fa-user'></div>
        Profile
      </a>
    </li>
    <li>
      <a href='#message'>
        <div class='fa fa-envelope'></div>
        Messages
        <span class='badge right'>12</span>
      </a>
    </li>
    <li class='sub-menu'>
      <a href='#settings'>
        <div class='fa fa-gear'></div>
        Settings
        <div class='fa fa-caret-down right'></div>
      </a>
      <ul>
        <li>
          <a href='#settings'>
            Account
          </a>
        </li>
        <li>
          <a href='#settings'>
            Profile
          </a>
        </li>
        <li>
          <a href='#settings'>
            Secruity &amp; Privacy
          </a>
        </li>
        <li>
          <a href='#settings'>
            Password
          </a>
        </li>
        <li>
          <a href='#settings'>
            Notification
          </a>
        </li>
      </ul>
    </li>
    <li class='sub-menu'>
      <a href='#message'>
        <div class='fa fa-question-circle'></div>
        Help
        <div class='fa fa-caret-down right'></div>
      </a>
      <ul>
        <li>
          <a href='#settings'>
            FAQ's
          </a>
        </li>
        <li>
          <a href='#settings'>
            Submit a Ticket
          </a>
        </li>
        <li>
          <a href='#settings'>
            Network Status
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href='#message'>
        <div class='fa fa-sign-out'></div>
        Logout
      </a>
    </li>
  </ul>
</nav>
<script>
    $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
  $(this).parent(".sub-menu").children("ul").slideToggle("100");
  $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
</script>
</body>
</html>