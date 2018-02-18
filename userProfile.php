<!DOCTYPE HTML>
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
    <img id = "fixedBGImg" src = "https://www.nhs.us/assets/images/nhs/NHS_header_logo.png">

<div id = "frontImg" class = "card" style = "width: 79%;">
<img id=imageProfile src="User.png">

			<p style = "font-style: italic; font-size: 16px; text-align: left;">Feed: User Information</p>
		</div>

<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Feed:Following/
            Followers</p>
		</div>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>