<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Le-lo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="navContainer">
                <nav>
                    <ul id="navlist">
                        <li>
                            <p id="navLogo">Recipe Le-lo</p>
                        </li>
                        <li>
                            <div id="navItems">
                                <a href="index.php">Home</a>
                                <a href="recipes.php">Recipes</a>
                                <a href="about_us.php">About</a>
                                <a href="login.php">Log In</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="conBox" >
                <h1>Contact Me</h1>
                <p>Feel free to contact us & we will get back to you as soon as we can</p>
                <form action="mail.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="email">E-Mail:</label>
                    <input type="email" name="email" id="email">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject">
                    <label for="message">Message:</label>
                    <textarea name="message" cols="30" rows="10"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </main>
        <footer>
            <div class="footerBox">
                <p>Copyright &copy; Recipe Le-lo pvt. ltd. since 2024. All rights are reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
