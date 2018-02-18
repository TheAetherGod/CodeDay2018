<!DOCTYPE HTML>
<?php session_start();
include 'database.php';?>
<html>
<head>
    <title>LPNHS - Home</title>
    
    <!--TODO: Icon-->
    <?php $sql = "SELECT * FROM users WHERE userID=:users";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["users" => $_SESSION["userID"]]); 
                            $data = array();
                            $data = $stmt->fetchAll();
                            echo '<p style="padding:5px;">',$data[0][1],'</p>';?> 
    
    <!--Style Sheets-->
    <link rel="stylesheet" href="cssFolder\homePage.css">
    
    <!--Scripts-->
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="headerJQuery.js"></script>
    <script>
        $(document).ready(function(){
            $("#homeLink").addClass("active");
        });
    </script>
</head>

<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<body>
    <!--Fixed Img in Background-->
    <div id = "frontImg" class = "card" style = "width: 79%;height:500px;">
        <div id = "topDiv" style = "width:100%; height: 250px; display:flex;">
            <div style = "Height: 250px;width:30%; margin-left: 15px;">
                <img id = "User.png">
                <img src ="images/User.png"/>
            </div>
            <div style = "Height: 250px;width:70%">
			    <p style = "font-style: italic; font-size: 16px; text-align: left;">Welcome User!</p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;">Name:</p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;">Following:</p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;">Followers:</p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;">Current Projects/Events: Party on the train</p>
            </div>
        </div>
        <div id = "userComments" style = "width: 100%; height: 250px;">
            <p>
                Comments go HERE!!!
            </p>
        </div>
    </div>
</body>        
<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>