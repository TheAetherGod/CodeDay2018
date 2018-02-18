<!DOCTYPE HTML>
<?php session_start();
include "database.php";?>
<html>
<style>
        form{
            display: inline-block;
            font-family: Bookman, sans-serif;
            font-size: 20px;
            align-items: center;
            justify-content: center;
            text-align: left;
            }
        table{
            width: 100%;
            font-family: Bookman, sans-serif;
            text-align: center;
        }
        table td{
            padding: 5px 0;
            margin: 0;
        }
        table tr:nth-child(even){
            background-color: rgb(74, 202, 111);
        }
        #addUserTable th, td{
            width: 12.5%;
        }
        textarea, input {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            resize: vertical;
            width: 50%;
            -moz-transition: none 0s ease 0s;
            line-height: 2em;
        }
    </style>
<head>
    <title>Codeday</title>
    
    <!--TODO: Icon-->
    
    
    <!--Style Sheets-->
    <link rel="stylesheet" href="cssFolder\homePage.css">
    
    <!--Scripts-->
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="headerJQuery.js"></script>
</head>

<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<body>
    
	<div id = "footerPusher">

            <div id = "mainPanel" class = "card" style="width:79%;">
                <p style = "text-align: center;">Create Event</p>
                <?php include "eventCreationPg1.php"; ?>
            </div>
            <?php 
        if(isset($_COOKIE['ERROR'])) {
            $Error = $_COOKIE['ERROR'];
            echo '<script>
            $(document).ready(function(){
                alert("', $Error,'");
            });
            </script>';
            setcookie("ERROR","", time() - (86400 * 30), "/");
            }

?>
	</div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>