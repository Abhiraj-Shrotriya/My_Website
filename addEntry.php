<?php 
    session_start();
    if(isset($_SESSION['firstName']) == false){
        header("Location: loginForm.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    
    <link rel="stylesheet" href="./css/addEntry.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/addEntryMobile.css" media="screen and (max-width: 768px)">

    <script src="./javascript/addEntry.js" defer></script>
</head>
<body>
    <header>
        <h1><a href="./index.php">ABHIRAJ SHROTRIYA</a></h1>
        <div></div>
        <aside id="welcome">
            <?php
                session_start();
                if(isset($_SESSION['firstName'])){
                    echo "Welcome <br> <p>".$_SESSION['firstName']." ".$_SESSION['lastName']."</p>";
                    echo "<br>";
                    echo "<a href='./logout.php'>LOGOUT</a>";
                    echo "<br>";
                    echo "<br>";
                }
            ?>
        </aside>
    </header>

    <form action="./addPost.php" method="post">
        <fieldset>
            <legend>Add Post</legend>

            <div>
                <div id="post">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" placeholder=""></textarea>
                </div>
                <div id="buttons">
                    <input type="submit" id="cancel" name="cancel" value="Cancel" class="button">
                    <input type="button" id="clear" name="clear" value="Clear" class="button">
                    <input type="submit" id="preview" name="preview" value="Preview" class="button">
                    <input type="submit" id="addPost" name="addPost" value="Add Post" class="button">
                </div>
            </div>

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