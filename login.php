<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cssFolder/login.css">
    <link rel="stylesheet" href="cssFolder/homePage.css">
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>Log In</title>
</head>
<body>
<div id="container">
<header id = "header"><?php include "header.php"; ?></header>
        <div class="body">
            <form id="login" class="form" action="session.php" method="post" style="height:350px;">
                    <h2 class="logTitle">Log In</h2>
                    <hr class="loghr">

                <label class="field">
                    <input type="text" placeholder="Username" name="username" id="usernameLogIn" class="input">
                </label>
                <label class="field">
            
                    <input type="password" placeholder="Password" name="password" id="passwordLogIn" class="input">
                </label>

                <a href="signup.php" id="newAccount" style="padding:10px;">Don't have an account?</a>

                <input type="submit" class="logButton" value="Log In">
                
            </form>
        </div>
        <footer id = "footer"><?php include "footer.php"; ?></footer>
</div>
</body>
</html>