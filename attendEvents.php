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
<iframe src="http://free.timeanddate.com/clock/i648zl2f/n64/fn6/fs16/fc9ff/tc000/ftb/bas5/bat8/bacfff/pa8/tt0/tw1/th2/ta1/tb4" frameborder="0" width="222" height="70"></iframe>


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