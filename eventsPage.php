<!DOCTYPE HTML>
<html>
<head>
    <title>LPNHS - Home</title>
    
    <!--TODO: Icon-->
    <!--Style Sheets-->
	<style>
		.textStuff{
			text-align: center;
		}
	</style>

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
	 	<!--MAIN CODE-->
		<div class="textStuff">
			<p style = "font-size: 300%"> Create an Event?</p>
			<p> Here are the events.</p>
			<b1 style = "color:Yellow;"> Here are some more events.</b1>
		</div>
		<div id = "Event1">
		 	<div id = "frontImg" class = "card" style = "width: 95%;">
				 <p style = "font-style: italic; font-size: 16px; padding: 200px;"></p>
			</div>
		</div>
	</div>
</body>



<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>