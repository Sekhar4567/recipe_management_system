<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulfi</title>
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
                            <form action="">
                                <input type="text" placeholder="Search your Recipe😋">
                                <button type="submit"><img src="search_icon.png" alt="" class="icon"></button>
                            </form>
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
                                <h1>Kulfi</h1>
                            </div>
                            <div class="ingBox">
                                <h2>Ingredients</h2>
                                <ul>
                                    <li>2 cups whole milk</li>
                                    <li>½ cup condensed milk</li>
                                    <li>¼ cup dry milk powder</li>
                                    <li>2 teaspoons white sugar, or to taste (Optional)</li>
                                    <li>½ teaspoon ground cardamom</li>
                                    <li>1 pinch saffron threads</li>
                                    <li>¼ cup chopped pistachio nuts</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="rcpBox">Recipe</h2>
                                <ol>
                                    <li>Stir the milk, condensed milk, and dry milk powder together <br>in a heavy-bottomed pan and bring to a boil.</li>
                                    <li>Add the sugar, cardamom, and saffron to the boiling milk; <br>reduce heat to low and simmer, stirring frequently, for 10 minutes.</li>
                                    <li>Remove from heat and allow to cool to room temperature; <br>fold the pistachio nuts into the mixture.</li>
                                    <li>Pour the mixture into popsicle molds and freeze until solid, about 1 hour</li>
                                </ol>
                            </div>
                        </div>
                        <div class="rightBox">
                            <img src="kulfi.jpeg" alt="">
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