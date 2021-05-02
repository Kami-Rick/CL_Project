<!DOCTYPE html>
<html>
<head>
	<title>Sign up / Sign in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sign_style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script type="text/javascript" src="sign_func.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</head>
<body>

	<div class="content-sign">
        <div class="container-sign">
            <div class="header-sign">
                <h2 style="color: black">Create Account</h2>
            </div>
            <form action="reg-up.php" method="POST" id="form-sign" class="form-sign">
                <div class="form-control-sign">
                    <label for="username">Username</label>
                    <input type="text" placeholder="username" id="username" name="uname" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <p><small>Error message</small></p>
                </div>
                <div class="form-control-sign">
                    <label for="username">Email</label>
                    <input type="email" placeholder="example@gmail.com" id="email" name="email-reg" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <p><small>Error message</small></p>
                </div>
                <div class="form-control-sign">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Password" id="password" name="pwd" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <p><small>Error message</small></p>
                </div>
                <div class="form-control-sign">
                    <label for="username">Password Confirmation</label>
                    <input type="password" placeholder="Password Confirmation" id="password2" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <p><small>Error message</small></p>
                </div>
                <button class="btn btn-outline-dark sign-btn w-100" type="submit">Sign Up</button>
                <div class="d-flex justify-content-center">
                    <p class="mt-3">If You already have an account <a href="#" id="login-toggler">Log In</a></p>
                </div>
            </form>
        </div>
        <div class="container-login d-none">
            <div class="header-login">
                <h2 style="color: black">Enter your account</h2>
            </div>
            <form action="auth.php" method="post" id="form-login" class="form-login">

                <div class="form-control-login">
                    <label for="username">Email</label>
                    <input type="email" placeholder="example@gmail.com" id="email-login" name="email-log"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <p><small>Error message</small></p>
                </div>
                <div class="form-control-login">
                    <label for="username">Password</label>
                    <input type="password" placeholder="Password" id="password-login" name="password-log"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <p><small>Error message</small></p>
                </div>
                <button class="btn btn-outline-dark sign-btn w-100" type="submit">Sign In</button>
                <div class="d-flex justify-content-center">
                    <p class="mt-3">If You don't have an account <a href="#" id="sign-toggler">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
