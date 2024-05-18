<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaju Katli</title>
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
                                <a href="contact_us.php">Contact</a>
                                <a href="about_us.php">About</a>
                                <a href="login.php">Log In</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="contentBox" style="padding: 25px;">
                <section>
                    <div class="item">
                        <div class="leftBox">
                            <div class="foodName">
                                <h1>Kaju Katli</h1>
                            </div>
                            <div class="ingBox">
                                <h2>Ingredients</h2>
                                <ul>
                                    <li>1 1/2 cup powdered cashews</li>
                                    <li>1/2 cup water</li>
                                    <li>1 1/2 tablespoon ghee</li>
                                    <li>1 cup sugar</li>
                                    <li>4 inches silver vark</li>
                                    <li>1 teaspoon powdered green cardamom</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="rcpBox">Recipe</h2>
                                <ol>
                                    <li>To prepare cashew nut powder for a traditional sweet dish, <br>grind 1 1/2 cups of cashews until fine, but not too much to avoid releasing oils. <br> Sift the ground cashews to extract fine powder and set it aside.</li>
                                    <li>Heat a pan over medium flame and add water and sugar, stirring until <br>the sugar dissolves. Once boiling, reduce the flame and add the cashew powder, <br>stirring until smooth and slightly thick. Add ghee for extra taste and aroma, <br>and then add cardamom powder. Once thickened, turn off the flame and set aside.</li>
                                    <li>Transfer the Kaju katli mixture to a bowl and knead until smooth and <br> crack-free. Grease a tray with ghee, flatten the dough with a rolling pin, <br>apply silver varq, and let it set.</li>
                                    <li>Cut the Kaju Katli into diamond shapes and serve.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="rightBox">
                            <img src="KajuKatli.jpg" alt="">
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <div class="footerBox">
                <p>Copyright &copy; Recipe Le-lo pvt. ltd. since 2024. All rights are reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>';
?>