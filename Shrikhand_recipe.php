<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrikhand</title>
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
                                <a href="#">Log In</a>
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
                                <h1>ShriKhand</h1>
                            </div>
                            <div class="ingBox">
                                <h2>Ingredients</h2>
                                <ul>
                                    <li>400 gm yoghurt (curd)</li>
                                    <li>1/4 teaspoon black cardamom</li>
                                    <li>50 ml milk</li>
                                    <li>250 gm sugar</li>
                                    <li>2 pinches saffron</li>
                                    <li>7 almonds</li>
                                    <li>7 pistachios</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="rcpBox">Recipe</h2>
                                <ol>
                                    <li>Chop almonds and pistachios. Pour curd into a muslin cloth, tie, and hang until drained. <br> Grind cardamoms into powder.</li>
                                    <li>Next, take a bowl, add curd and sugar to it. Blend them well. Make sure the consistency <br> of the mixture is smooth.</li>
                                    <li>Now, add cardamom powder and saffron strands in the mixture and stir it. While stirring <br> continuously, mix warm milk in the bowl. Mix all the ingredients well.</li>
                                    <li>Garnish the dish with chopped almonds and pistachios and refrigerate for 2-3 hours. Serve!</li>
                                </ol>
                            </div>
                        </div>
                        <div class="rightBox">
                            <img src="shrikhand.webp" alt="">
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