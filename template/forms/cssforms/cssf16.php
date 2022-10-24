<html>
	<head>
		<meta charset="utf-8">
		<title>Login to Celyes</title>
        <style>
            .input-field label {
  color: #999;
}
.input-field input[type="text"]:focus + label,
.input-field input[type="password"]:focus + label {
  color: #000;
}
.input-field input[type="text"]:focus,
.input-field input[type="password"]:focus {
  border-bottom: 1px solid #000;
  box-shadow: 0 1px 0 0 #000;
}
.input-field input[type="text"].valid,
.input-field input[type="password"].valid {
  border-bottom: 1px solid #2196f3;
  box-shadow: 0 1px 0 0 #2196f3;
}
.input-field input[type="text"].invalid,
.input-field input[type="password"].invalid {
  border-bottom: 1px solid #f44336;
  box-shadow: 0 1px 0 0 #f44336;
}
.input-field .prefix.active {
  color: #000;
}
/* Input : switch */
.switch {
  margin-top: 7px;
}
.switch label .lever {
  margin: 0 7px;
}
.switch label input[type="checkbox"]:checked + .lever {
  background-color: #add0eb;
}
.switch label input[type="checkbox"]:checked + .lever::after {
  background-color: #4fb0fd;
}
.login-body {
  background-image: url(http://i.imgur.com/aBayW5C.png);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
.input-cart {
  min-height: 400px;
  border-top: 3px solid #2196f3;
  margin-top: 80px;
  margin-bottom: 100px;
}
.login {
  margin-top: 25px;
  border-right: 1px solid #ddd;
}
.policy {
  visibility: hidden;
}
.signupForm {
  display: none;
}
.signup {
  margin-top: 25px;
}
.signup-toggle {
  cursor: pointer;
  margin-top: 140px;
}
.login h4,
.signup h4 {
  font-weight: 200;
}
.legal {
  border-top: 1px solid #ddd;
}
.email label {
  margin-left: 11px;
}
.policy {
  font-size: 13px;
}
.main-title {
  font-family: pacifico;
}

        </style>
	</head>
	<body class="login-body">
		<div class="row">
			<div class="input-cart col s12 m10 push-m1 z-depth-2 grey lighten-5">
				<div class="col s12 m5 login">
					<h4 class="center">Log in</h4>
					<br>
					<form action="check.php" method="post" autocomplete="off">
						<div class="row">
							<div class="input-field">
								<input type="text" id="user" name="username" class="validate" required="required" placeholder="Username">
                <label for="user">
                  <i class="material-icons">person</i>                </label>
							</div>	
						</div>
						<div class="row">
							<div class="input-field">
								<input type="password" id="pass" name="password" class="validate" required="required" placeholder="Password">
								<label for="pass">
                <i class="material-icons">lock</i>
                </label>
							</div>	
						</div>
						<div class="row">
							<div class="switch col s6">
								<label>
									<input type="checkbox">
									<span class="lever"></span>
									Remember Me
								</label>
							</div>
							<div class="col s6">
								<button type="submit" name="login" class="btn waves-effect waves-light blue right">Log in</button>
							</div>
						</div>
					</form>
				</div>
				<!-- Signup form -->
				<div class="col s12 m7 signup">
				<div class="signupForm">
					<h4 class="center">Sign up</h4>
					<br>
					<form action="regCheck.php" name="signup" method="post" autocomplete="off">
						<div class="row">
							<div class="input-field col s12 m6">
								<input type="text" id="name-picked" name="namepicked" class="validate" required="required" placeholder="Enter a username">
								<label for="name-picked">
                       <i class="material-icons">person_add</i>       
                </label>
							</div>
							<div class="input-field col s12 m6">
								<input type="password" id="pass-picked" name="passpicked" class="validate" required="required" placeholder="Password">
								<label for="pass-picked">
                  <i class="material-icons">lock</i>                    </label>
							</div>	
						</div>
						<div class="row">
							<div class="input-field email">
								<div class="col s12">
									<input type="text" id="email" name="email" class="validate" required="required" placeholder="Enter your email">
									<label for="email">
                    <i class="material-icons">mail</i> 
                  </label>
								</div>
							</div>	
						</div>
					</form>
					<div class="row">
						<button type="submit" name="btn-signup" class="btn blue right waves-effect waves-light">Sign Up</button>
					</div>
					</div>
					<div class="signup-toggle center" >
						<h4 class="center">Have No Account ? <a href="#!">Sign Up</a></h4>
					</div>
				</div>
				<div class="col s12">
					<br>
          <div class="legal center">
					</div>
					<div class="legal center">
					<div class="col s12 m7 right">
						<p class="grey-text policy center">By signing up, you agree on our <a href="#!">Privacy Policy</a> and  <a href="#!">Terms of Use</a> including <a href="#!">Cookie Use</a>.</p>
					</div>
					<div class="col s12 m5">
						<p class="center grey-text" style="font-size: 14px;">Coding : <a href="http://fb.com/celyes01" class="main-title red-text" target="_blank">Celyes</a></p>
					</div>
					</div>

				</div>
			</div>
		</div>
		<div class="fixed-action-btn toolbar">
			<a class="btn-floating btn-large amber black-text">
				Login
			</a>
			<ul>
				<li><a class="indigo center" href="#!">Login with FB</a></li>
				<li><a class="blue center" href="#!">Login with Twitter</a></li>
				<li><a class="red center" href="#!">Login with Google +</a></li>
			</ul>
		</div>
	</body>
</html>