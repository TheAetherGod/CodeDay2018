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
            $("#attendEventsLink").addClass("active");
        });
    </script>
</head>

<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<div id = "frontImg" class = "card" style = "width: 79%;">
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Current Events      |            Time of Event           |            Date of Event           |           Total Raised            </p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">        Disco Ball Dance        |         7:00pm             |        2/18/2018            |           $200                               </p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;"></p>

		</div>
        
 <!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>