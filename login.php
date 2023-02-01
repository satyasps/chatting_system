<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <nav class="navbar">
            <div class="content">
                <img src="pictures/logo.png" alt="chat logo" class="nav-logo">
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="login.php" style="color: blue">LOGIN</a></li>
                    <li><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="recovery.php">RECOVERY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>                
            </div>
        </nav>
        
        <div class="about">
            <div class="">
                <div class="container">
                    <header>Login Form</header>
                    <form>
                        <div class="input-field">
                            <input type="text" required>
                            <label>Email or Phone no.</label>
                        </div>
                        <div class="input-field">
                            <input class="pswrd" type="password" required>
                            <span class="show">SHOW</span>
                            <label>Password</label>
                        </div>
                        <div class="button">
                            <div class="inner"></div>
                            <button>LOGIN</button>
                        </div>
                    </form>
                    <div class="signup">
                        Not a member ? <a href="registration.php">Signup now</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>
