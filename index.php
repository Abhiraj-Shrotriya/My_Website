<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhiraj Shrotriya</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/index.css">
    <link href="./index.html#name">

    <link rel="stylesheet" href="./css/indexMobile.css" media="screen and (max-width: 768px)">
</head>
<body>
    <header>
        <h1>ABHIRAJ SHROTRIYA</h1>
        <nav role="navigation">
            <ul>
                <li><a href="./about_me.html">ABOUT</a></li>
                <li><a href="./education.html">EDUCATION</a></li>
                <li><a href="./experience.html">EXPERIENCE</a></li>
                <li><a href="./projects.html">PROJECTS</a></li>
                <li><a href="./skills.html">SKILLS</a></li>
                <li><a href="./contact.html">CONTACT</a></li>
                <li><a href="./blog.php">BLOG</a></li>
            </ul>
        </nav>

        <aside>
            <?php
                session_start();
                if(isset($_SESSION['firstName'])){
                    echo "Welcome <br> <p>".$_SESSION['firstName']." ".$_SESSION['lastName']."</p>";
                    echo "<br>";
                    echo "<a href='./logout.php'>LOGOUT</a>";
                }
            ?>
        </aside>
    </header>

    <article id="name">
        <section>
            <h2>A B H I R A J 
                <br>
                S H R O T R I Y A</h2>
            <ul>
                <li>Computer Science</li>
                <li>Music</li>
                <li>Art</li>
                <li>Games</li>
            </ul>
        </section>

        <section id="login">
            <?php 
                if(isset($_SESSION['firstName'])){
                    echo "<a href='./logout.php'>LOGOUT</a>";
                }
                else{
                    echo "<a href='./loginForm.php'>LOGIN</a>";
                }
            ?>
        </section>
    </article>

    <article id="pillars">

        <div id="my_pillars">
    
            <section id="perfection_pillar">
                <h2>Perfection</h2>
                <p> Perfection is very important, for it is responsible for making a thing become a masterpeice.</p>
            </section>

            <section id="trust_pillar">
                <h2>Trust</h2>
                <p>Trust is a sweet ingredient of humanity which I like to keep and want others to keep.</p>
            </section>
    
            <section id="passion_pillar">
                <h2>Passion</h2>
                <p>I highly respect my and anyone else's passion for anything.</p>
            </section>
        </div>
    </article>

    <article id="featured_projects">
        <h2>Featured Projects</h2>
        <section id="projects">
            
            <a href="https://github.com/Qiskit/qiskit/pull/10521" class="project">
                <div>
                    <figure>
                        <img src="https://github.githubassets.com/assets/GitHub-Mark-ea2971cee799.png" alt="">
                    </figure>
                    <div>
                        <h3>Qiskit v0.45.0 - Open source contribution</h3>
                        <p>I helped implement a type check in copy method of QuantumCircuit class of Qiskit module for Python programming language. Qiskit is an open source Quantum programming python package by IBM hosted on Github.</p>
                    </div>
                </div>
            </a>

            <a href="https://play.google.com/store/apps/details?id=com.brain.griff&hl=en" class="project">
                <div>
                    <figure>
                        <img src="https://play-lh.googleusercontent.com/Px4jUbc_Km6xsXrZ6YJL46-QQh3VScnH_PRdmH0l26zwGonBnbsX2Ha6jUrg1s2T2ko=w480-h960-rw" alt="">
                    </figure>
                    <div>
                        <h3><q>Brain</q> - A video game</h3>
                        <p>This is a mobile video game developed by me. Now available on Google Play store.</p>
                    </div>
                </div>
            </a>
            
        </section>
    </article>

    <article id="skills">
        <section>
            <h2>My Top Skills</h2>
            <ul>
                <li>
                    <figure>
                        <img src="https://www.python.org/static/img/python-logo@2x.png" alt="">
                    </figure>
                    Python Programming Language
                </li>

                <li>
                    <figure>
                        <img src="https://cdn0.iconfinder.com/data/icons/social-network-9/50/22-512.png">
                    </figure>
                    HTML
                </li>

                <li>
                    <figure>
                        <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/java_logo_icon_168609.png">
                    </figure>
                    Java Programming Language
                </li>

                <li>
                    <figure>
                        <img src="https://godotengine.org/assets/logo_dark.svg" alt="">
                    </figure>
                    Godot Game Engine
                </li>

                <li>
                    <figure>
                        <img src="https://qiskit-community.github.io/qiskit-machine-learning/_static/images/logo.png" alt="">
                    </figure>
                    Qiskit Quantum Programming Package
                </li>
            </ul>
        </section>
    </article>

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