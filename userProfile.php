<!DOCTYPE HTML>
<?php session_start();?>
<html>
<head>
    <title>LPNHS - Home</title>
    
    <!--TODO: Icon-->
    
    
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

<div id = "frontImg" class = "card" style = "width: 79%;">
<img id = "User.png">
<img src ="images/User.png"/>
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Welcome User!</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Name:</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Following:</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Followers:</p>
		</div>
        
<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Current Projects/Events: Party on the train</p>
		</div>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>