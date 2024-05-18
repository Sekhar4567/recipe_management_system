<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "recipe_management";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Error:".mysqli_connect_error() ;
}
$sql = "INSERT INTO `userdetails` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject', '$message');";
    
$result = mysqli_query($conn, $sql);
if(!$result){
    echo"Error occured!";
}

$conn->close();

echo '
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
                <h1>Thank you for contacting us. we will get back to you as soon as possible!</h1>
                <p class="back">Go Back to the <a href="index.html">Home</a></p>
                
            </div>
        </main>
        <footer>
            <div class="footerBox" style="margin-top: 436px;">
                <p>Copyright &copy; Recipe Le-lo pvt. ltd. since 2024. All rights are reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
';
?>
