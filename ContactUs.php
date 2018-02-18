<!DOCTYPE HTML>
<?php session_start();
include "database.php";?>
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
            $("#attendEventsLink").addClass("active");
        });
    </script>
</head>
<body>
	<div id = "footerPusher">	
<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<div id = "frontImg" class = "card" style = "width: 79%;height:350px;display:flex;">
<div style = "Height: 350px;width:30%">
<img id = "Phone.png">
<img src ="images/Phone.png"/>
</div>
<div style = "Height: 350px;width:95%">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Contact Information</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Make It Happen Headquarters: 123-456-7890</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Make It Happen Customer Service: 098-765-4321</p>    
            <p style = "font-style: italic; font-size: 16px; text-align: left;color: black;">Twitter:<a href="https://twitter.com/mihoffical" style = "color:blue"; >@MIHOffical</a> </p>  
            <p style = "font-style: italic; font-size: 16px; text-align: left; color: black;">Email: <a href="mailto:makeithappenoffical@gmail.com ?cc=Customer Review" style = "color:blue;">makeithappenoffical@gmail.com</a>
<p> Feel free to ask any questions @ our email </p>
		</div>
        </div>
        </div>
        </body>
 <!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>