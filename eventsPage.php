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
            $("#eventsLink").addClass("active");
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
		</div>
		<div id = "Event1" class = "card" style = "width: 95%; height: 500px;">
			<div id = "placeHolderDiv" style = "width: 100%; height:250px; display: flex;justify-content: center;">
				<div id = "picOfEvent" style =" width: 50%; height:250px; padding:0px; margin:0px;">
					<img src = "images/placeHolderImage.jpg" style = "width: 100%;">
				</div>
				<div id = "descriptionOfEvent" style = "width: 50%; height: 250px; padding:0px; margin:0px;">
					Here's a desrciption of the Event
				</div>	
			</div>
			<div id = "intrested?Sponsor?Going?" style = "width: 100%; height: 250px; padding:0px;margin:0px;">

			</div>	
		</div>
	</div>
</body>



<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>