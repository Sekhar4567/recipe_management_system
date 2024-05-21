<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Le-lo</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .head {
            margin: 50px auto 0px;
            margin-top: 56px;
            color: rgb(22, 124, 207);
            font-size: 30px;
            text-align: center;
            padding: 20px;
        }
        .logform, .content {
            width: 30%;
            margin: 0px auto;
            padding: 18.5px;
            border: 1px solid #330667;
            border-radius: 10px;
        }
        .input_grp {
            margin: 10px 60px 10px 30px;
        }
        .input_grp label {
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input_grp input {
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
            border: 1px solid gray;
            border-radius: 5px;
            cursor:pointer;
        }
        .error {
            width: 92%; 
            margin: 0px auto; 
            padding: 10px; 
            border: 1px solid #a94442; 
            color: #a94442; 
            background: #f2dede; 
            border-radius: 5px; 
            text-align: left;
        }
        .success {
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }
        main{
            padding-bottom: 200px;
        }
        p{
            margin-left: 30px;
        }
        .footerBox{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
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
            <div class="head">
                <h1>Log In</h1>
            </div>
            <div class="logBox">
                <form action="login.php" method="post" class="logform">
                <?php include("errors.php");?>
                <div class="input_grp">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="input_grp">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="input_grp">
                    <button type="submit" class="btn" name="login_user">Login</button>
                </div>
                <p>Not yet a member? <a href="register.php">Sign Up</a></p>
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