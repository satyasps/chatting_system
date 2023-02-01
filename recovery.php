<!DOCTYPE html>
<html>
    <head>
        <title>Recovery Password</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form2.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <nav class="navbar">
            <div class="content">
                <img src="pictures/logo.png" alt="chat logo" class="nav-logo">
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <img src="pictures/close.png" height="40px" width="40px">
                    </div>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="recovery.php" style="color: blue">RECOVERY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
                <div class="icon menu-btn">
                    <img src="pictures/menu.png" height="40px" width="40px">
                </div>                
            </div>
        </nav>
        
        <div class="about">
            <div class="container2">
                <div class="title">Recovery Form</div>
                <form method="post" action="recovery_con.jsp">
                    <div class="user-details">
                        <div class="input-box2">
                            <input type="text" name="phone_email" autocomplete="off" required>
                            <label>Email or Phone no.</label>
                        </div>
                        <div class="select-menu2">
                            <input type="radio" name="secure_question" id="ops-1" value="what is your nick name ?">
                            <input type="radio" name="secure_question" id="ops-2" value="what is your pet name ?">
                            <input type="radio" name="secure_question" id="ops-3" value="what is your first school name ?">
                            <input type="radio" name="secure_question" id="ops-4" value="Who was your childhood hero ?">
                            <input type="radio" name="secure_question" id="ops-5" value="what is your favorite subject ?">
                            <div class="select">
                                <span>Select your option</span>
                                <img src="pictures/chevron-down.png" class="chevron-down" height="20px" width="20px">
                                <img src="pictures/chevron-up.png" class="chevron-up" height="20px" width="20px">
                            </div>
                            <div class="options-list2"><br>
                                <label class="option" for="ops-1">what is your nick name ?</label><br>
                                <label class="option" for="ops-2">what is your pet name ?</label><br>
                                <label class="option" for="ops-3">what is your first school name ?</label><br>
                                <label class="option" for="ops-4">Who was your childhood hero ?</label><br>
                                <label class="option" for="ops-5">what is your favorite subject ?</label>
                            </div>
                        </div>
                        <div class="input-box2">
                            <input class="pswrd2" type="password" name="answer" required>
                            <label>Answer</label>
                            <span class="show2">SHOW</span>                            
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Find">
                    </div>
                </form>
            </div>
        </div>
        <script src="js/index2.js"></script>
    </body>
</html>