<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peanut Chikki</title>
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
                                <h1>Peanut Chikki</h1>
                            </div>
                            <div class="ingBox">
                                <h2>Ingredients</h2>
                                <ul>
                                    <li>150 gm roasted peanuts</li>
                                    <li>5 green cardamom</li>
                                    <li>3 tablespoon sesame oil</li>
                                    <li>100 gm powdered jaggery</li>
                                    <li>water as required</li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="rcpBox">Recipe</h2>
                                <ol>
                                    <li>Roast unroasted peanuts in a thick-bottomed pan over medium flame for about <br> 5 minutes until crunchy.</li>
                                    <li>After roasting, cool the peanuts on a plate. Rub them between your fingers to <br> remove the husks easily, then transfer the husk-less peanuts to another plate.</li>
                                    <li>On medium flame, dissolve jaggery in water in a heavy-bottomed pan. Simmer until <br> small bubbles appear and it reaches the hardball stage, stirring frequently. <br>Reduce the flame.</li>
                                    <li>Add peanuts and cardamoms to the pan, then remove from heat and allow to cool slightly. <br> Meanwhile, grease a tray or plate with oil, preferably sesame oil for extra flavor,<br> or any oil of your choice.</li>
                                    <li>Shape the peanut and jaggery mixture into balls or slabs while still warm, then place them <br> on the greased plate to cool and harden. Store in an airtight container. <br> They stay fresh for up to 2 weeks.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="rightBox">
                            <img src="Peanut-Chikki.jpg" alt="" style="width: 570px;">
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