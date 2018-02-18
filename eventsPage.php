<!DOCTYPE HTML>
<?php session_start();?>
<html>
<head>
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
            $("#eventsLink").addClass("active");
        });
    </script>
</head>

<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<body>
	<div id = "footerPusher">	
	 	<!--MAIN CODE-->
		<div id = "Event1" class = "card" style = "width: 95%; height: 500px;">
			<div id = "placeHolderDiv" style = "width: 100%; height:250px; display: flex;justify-content: center;">
				<div id = "picOfEvent" style =" width: 50%; height:250px; padding:0px; margin:0px;">
					<img src = "images/placeHolderImage.jpg" style = "width: 100%;height: 250px;">
				</div>
				<div id = "descriptionOfEvent" style = "width: 50%; height: 250px; padding:0px; margin:0px;">
					Here's a desrciption of the Event
				</div>	
			</div>
			<div id = "intrested?Sponsor?Going?" style = "width: 100%; height: 240px; padding:0px;margin:0px;">
				<table style = "width: 100%;height:240px; border: 2px solid black;">
					<tr style = "height: 150px; border: 2px solid black; font-size: 300%;">
						<th stlye = "text-align: center;">Intrested?</th>
						<th stlye = "text-align: center;">Sonsor?</th>
						<th stlye = "text-align: center;">Going?</th>
					</tr>
					<tr style = "height: 90px; border: 2px solid black;">
						<th stlye = "text-align: center;">This many people are intrested</th>
						<th stlye = "text-align: center;">This many parties are sponsoring it</th>
						<th stlye = "text-align: center;">This many people are going</th>
					</tr>
				</table>
			</div>	
		</div>
	</div>
</body>



<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>