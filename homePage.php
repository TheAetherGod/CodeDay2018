<!DOCTYPE HTML>
<?php session_start();?>
<html>
<head>
    <title>Codeday</title>
    
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
    
	<div id = "footerPusher">
		<!--Home Page Main Img Card-->
		<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Feed: Looking for popular events?</p>
		</div>

		<!--Home Page Panels-->
		<div id = "importantInfo" class = "card" style = "width: 79%;">
			<p style = "text-align: left" class = "urgentText">Web description:</p>
        <div style = "text-align: center;"><iframe  width="560" height="315" SRC="https://www.youtube.com/embed/E8sMxqufRRw"</div>
</div>
	</div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>