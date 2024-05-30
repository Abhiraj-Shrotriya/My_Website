<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/loginMobile.css" media="screen and (max-width: 768px)">
</head>
<body>
    <header>
        <h1><a href="./index.php">ABHIRAJ SHROTRIYA</a></h1>

        <?php 
            session_start();
            if($_SESSION['incorrect_email'] == true){
                
                echo "<aside>";
                echo "<p>Incorrect Email or Password</p>";
                echo "</aside>";
            }
        ?>
    </header>

    <form action="./login.php" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="password">

            <input type="submit" value="Login" id="submit">
        </fieldset>
    </form>

    <footer>

        <div>
            <div>
                <ul>
                    <li><a href="./about_me.html">About</a></li>
                    <li><a href="./loginForm.php">Login/Sign up</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>

                <div>
                    <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/480px-LinkedIn_logo_initials.png" alt="Linkedin"></a>
                    <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Instagram"></a>
                </div>
            </div>
            <address>
                <a href="mailto: sidedphoneofgriff@gmail.com">sidedphoneofgriff@gmail.com</a>
                <a href="tel: +44 79xxxxxxxx">+44 79XX50XX95</a>
                1XX GAR LAN WNDSWRT LONDON UK
            </address>
            <p>Abhiraj Shrotriya © 2024</p>
        </div>
    </footer>
</body>
</html>