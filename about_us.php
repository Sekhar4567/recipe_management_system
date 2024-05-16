<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
                                <a href="login.php">Log In</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="aboutBox">
                <h1>About Us</h1>
                <span>Recipe Le-lo is a recipe management website designed to help users organize, discover, and share recipes. A comprehensive collection of recipes covering various cuisines, dietary preferences, and meal types.Users can search for recipes by ingredients, cuisine, cooking time, dietary restrictions, and more. Advanced filtering options make it easier to find specific recipes. Users can rate and review recipes based on their experience, helping others decide which recipes to try. For the aspiring home cook, recipe management websites offer a treasure trove of inspiration, guidance, and community support. From step-by-step tutorials to insightful cooking tips, these platforms nurture culinary creativity and ignite a passion for exploration. Whether it is learning the art of perfecting a fluffy soufflé or crafting the ultimate comfort food, the journey begins with a simple search and a willingness to experiment. In this modern age of digital connectivity, recipe management websites serve as guiding stars in the vast universe of culinary possibilities. With a few clicks, a world of recipes unfolds before our eyes, offering everything from comforting classics to exotic delicacies. These platforms democratize cooking, empowering enthusiasts of all skill levels to embark on epicurean adventures with confidence and ease. </span>
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