<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
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
            <div class="recipeList">
                <ul>
                    <li><a href="gulab_jamun_recipe.php">Gulab Jamun</a></li>
                    <li><a href="rasgulla_recipe.php">Rasgulla</a></li>
                    <li><a href="kaju_katli_recipe.php">Kaju Katli</a></li>
                    <li><a href="kulfi_recipe.php">Kulfi</a></li>
                    <li><a href="rasmalai_recipe.php">Ras Malai</a></li>
                    <li><a href="peanut_chikki_recipe.php">Peanut Chikki</a></li>
                    <li><a href="jalebi_recipe.php">Jalebi</a></li>
                    <li><a href="soan_papdi_recipe.php">Soan Papdi</a></li>
                    <li><a href="chum_chum_recipe.php">Chum Chum</a></li>
                    <li><a href="Shrikhand_recipe.php">Shrikhand</a></li>
                </ul>
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