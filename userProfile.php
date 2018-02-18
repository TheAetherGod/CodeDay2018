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
    
	<div id = "footerPusher">
		<!--Home Page Panels-->
		<div id = "importantInfo" class = "urgent panel">
			<p class = "urgentText">Attention: No User Profile</p>
			<p class = "urgentText"></p>
		</div>


<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Feed: User Information</p>
		</div>

<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Feed:Following/
            Followers</p>
		</div>
<body>

		<div id = "aboutUs" class = "classic panel">
			<p>User Profile Information</p>
			<p> Welcome to the user profile where you can see projects you currently managing or following</p>
		</div>
	</div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>