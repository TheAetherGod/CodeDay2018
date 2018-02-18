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
            $("#homeLink").addClass("active");
        });
    </script>
</head>
<header id = "header"><?php include "header.php"; ?></header>
<body>
<div id = "footerPusher">
<div id = "importantInfo" class = "card" style = "width: 79%; text-align: center;">
            <b  style = "font-size: 25px;">Privacy Policy</b>
            <p>If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at MakeItHappen, unless otherwise defined in this Privacy Policy. We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it.</p>
		
    </div>
    <div id = "importantInfo" class = "card" style = "width: 79%; text-align: center;">
    <b  style = "font-size: 25px; ">Information Collection and Use</b>
        <p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.</p>
    </div>
    </div>
    </div>
</body>

<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>
