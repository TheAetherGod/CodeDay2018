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
<img id = "Phone.png">
<img src ="images/Phone.png"/>
			<p style = "font-style: italic; font-size: 16px; text-align: left;">Contact Information</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Make It Happen Headquarters: 123-456-7890</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Make It Happen Customer Service: 098-765-4321</p>
            <p style = "font-style: italic; font-size: 16px; text-align: left;">Email: MakeItHappen@Gmail.com</p>
		</div>
        
 