<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jalebi</title>
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
                                <h1>Jalebi</h1>
                            </div>
                            <div class="ingBox">
                                <h2>Ingredients</h2>
                                <ul>
                                    <li>3 cup all purpose flour</li>
                                    <li>2 cup hung curd</li>
                                    <li>1/2 cup ghee</li>
                                    <li>3 cup sugar</li>
                                    <li>5 strand saffron</li>
                                    <li>1/2 teaspoon powdered green cardamom</li>
                                    <li>1/2 cup corn flour</li>
                                    <li>1 1/2 pinch baking soda</li>
                                    <li>2 cup sunflower oil</li>
                                    <li>3 cup water</li>
                                    <li>4 drops rose essence</li>
                                    <li>1/2 teaspoon edible food color</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="rcpBox">Recipe</h2>
                                <ol>
                                    <li>Mix all-purpose flour, cornflour, and baking soda. Add ghee and food color, then mix. <br>For a thick batter, add hung curd and water. Let it ferment for 8-10 hours. For the  <br>sugar syrup, dissolve sugar in water, simmer until one-string consistency. Add saffron,<br> cardamom powder, and rose essence. This syrup will soak the jalebis for sweetness.</li>
                                    <li>Heat oil for deep frying. Fill a muslin cloth or squeezy bottle with jalebi batter. <br>Squeeze batter in concentric circles in hot oil. Fry until crispy and golden on both sides.</li>
                                    <li>Soak jalebis in warm sugar syrup for 3-4 minutes. Ensure syrup is not too hot to avoid <br> making jalebis limp. Remove from syrup and place on tray. Optionally decorate with <br>silver foil. Serve hot, warm, or at room temperature with Rabri. For extra aroma, <br>add ghee to batter. Ferment batter overnight for crispiness.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="rightBox">
                            <img src="jalebi.jpg" alt="">
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
