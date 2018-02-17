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
		<!--Home Page Main Img Card-->
		<div id = "frontImg" class = "card" style = "width: 50%;">
		   <img src = "https://www.lphs.org/cms/lib/IL01904769/Centricity/Domain/70/NHS%202017.jpg" style = "width: 100%;">
			<p style = "font-style: italic; font-size: 16px;">Promoting appropriate recognition of students who reflect outstanding accomplishments in the areas of scholarship, leadership, character, and service.</p>
		</div>
    
		<!--Home Page Panels-->
		<div id = "importantInfo" class = "urgent panel">
			<p class = "urgentText">Attention: will the real slim shady please stand up</p>
			<p class = "urgentText"></p>
		</div>
		<div id = "aboutUs" class = "classic panel">
			<p>About Us...</p>
			<p><?php echo $aboutus; ?></p>
		</div>
	</div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>