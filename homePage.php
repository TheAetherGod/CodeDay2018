<!DOCTYPE HTML>
<html>
<head>
    <title>LPNHS - Home</title>
    
    <!--TODO: Icon-->
    
    
    <!--Style Sheets-->
    <link rel="stylesheet" href="cssFolder\homePage.css">
    
    <!--Scripts-->
    <!--jQuery-->
    <script src="Logo.png"></script>
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
<<<<<<< HEAD
    <img id = "fixedBGImg" src = "Logo.png">
=======
>>>>>>> 5a68eaf4dda27a188e6470815474cf6ad6b8cea8
    
	<div id = "footerPusher">
		<!--Home Page Main Img Card-->
		<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left">Feed: Looking for popular events? </p>
		</div>

		<!--Home Page Panels-->
		<div id = "importantInfo" class = "urgent panel">
			<p style = "text-align: left" class = "urgentText">Web discription:</p>
			<p class = "urgentText"></p>
		</div>
		<div id = "aboutUs" class = "classic panel">
            <p>About Us...</p>
            <p>hello</p>
		</div>
	</div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>