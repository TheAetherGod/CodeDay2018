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
			<p class = "urgentText">Attention: No User Profile Yet</p>
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