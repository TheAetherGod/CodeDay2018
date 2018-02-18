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
            $("#homeLink").addClass("active");
        });
    </script>
</head>
<header id = "header"><?php include "header.php"; ?></header>
<body>
<div id = "footerPusher">
<div id = "importantInfo" class = "card" style = "width: 79%;">
            <p>About Us...</p>
            <p>Kush Shah, Ben Wagrez, Luis Pelayo and Salvador Guillen students of <a href="https://www.lphs.org/" style = "color: blue;">Lake Park High School</a> from the AP Computer Science class, created "MakeItHappen"  website at <a href="https://codeday.org/chicago" style = "color: blue;">Codeday Chicago</a> to improve events and make them easier to plan and sponsor</p>    
  </div>
  <div>
  <div id = "importantInfo" class = "card" style = "width: 79%;">
            <p>Additional Information</p> 
</form>
  </div>
    </div>
    </div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>
