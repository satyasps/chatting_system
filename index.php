<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <script>
            function togglePopup(){
                document.getElementById("popup-1").classList.toggle("active");
            }
        </script>
    </head>
    <body>
        <nav class="navbar">
            <div class="content">
                <img src="pictures/logo.png" alt="chat logo" class="nav-logo">
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <img src="pictures/close.png" height="40px" width="40px">
                    </div>
                    <li><a href="index.php" style="color: blue">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="recovery.php">RECOVERY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
                <div class="icon menu-btn">
                    <img src="pictures/menu.png" height="40px" width="40px">
                </div>                
            </div>
        </nav>
        
        <div class="about">
            <div class="icontainer">
                <div class="row">
                    <div class="col-sm-1">
                        <h1>About this website</h1>
                        <p>For providing a chat facility in this application used in a particular organization :
                            Online chat is a form of communication that allows for two-way conversations.</p>
                        <a class="btn" onclick="togglePopup()">More details</a>
                    </div>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="contentd">
                            <div class="close-btn" onclick="togglePopup()">
                                <img src="pictures/close.png">
                            </div>
                            <h1>More details</h1>
                            <p>This chat system project has the option to chat with friends.
                                Chat application works for multiple users but each user must register with this application. 
                                After login user can enter into a particular any friend chatroom for a chat.</p>
                            <p>Manage the details of Chat Application,Online Chat,Smiles Chat,Users,Chat History.
                                It manages all the information about Chat Application, Chat Profile, Chat History, Chat Application.
                                The project is totally built at administrative end and thus only the administrator is guaranteed the access.</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <img src="pictures/chatting.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>