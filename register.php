<?php include('server.php') ;
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Le-lo</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .reghead {
            /* width: 30%; */
            margin: 50px auto 0px;
            margin-top: 96px;
            color: rgb(22, 124, 207);
            font-size: 30px;
            /* background: #5F9EA0; */
            text-align: center;
            /* border: 1px solid #B0C4DE; */
            /* border-bottom: none; */
            /* border-radius: 10px 10px 0px 0px; */
            padding: 20px;
        }
        .regform, .content {
            width: 30%;
            margin: 0px auto;
            padding: 18.5px;
            border: 1px solid #330667;
            /* background: white; */
            border-radius: 10px;
        }
        .input-group {
            margin: 10px 60px 10px 30px;
        }
        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .btn {
            padding: 10px;
            font-size: 15px;
            color: rgb(22, 124, 207);
            /* background: #5F9EA0; */
            border: 1px solid gray;
            border-radius: 5px;
            cursor:pointer;
        }
        main{
            padding-bottom: 90px;
        }
        p{
            margin-left: 30px;
        }
    </style>
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
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="reghead">
                <h2>Register</h2>
            </div>
            <form method="post" action="register.php" class="regform">
                <?php include("errors.php"); ?>
                <div class="input-group">
                  <label>Username</label>
                  <input type="text" name="username" value="';?><?php echo $username; ?>"><?php echo '
                </div>
                <div class="input-group">
                  <label>Email</label>
                  <input type="email" name="email" value="';?><?php echo $email; ?>"><?php echo'
                </div>
                <div class="input-group">
                  <label>Password</label>
                  <input type="password" name="password_1">
                </div>
                <div class="input-group">
                  <label>Confirm password</label>
                  <input type="password" name="password_2">
                </div>
                <div class="input-group">
                  <button type="submit" class="btn" name="reg_user">Register</button>
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
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
