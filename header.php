<div id = "banner" style = "width:100%">
	<img id = "LPLogo" src = "images/Logo.png" height="140" width="160" style="padding:0px;">
   <!-- isset($_SESSION["userID"]) -->
<h1 class = "baseTitle" style = "padding-bottom: 0px; margin-bottom:0px; color: rgb(74, 202, 111);  font-size:64px; text-shadow: 2px 2px 4px #000;"><span id = "LPNHS" style = "cursor: pointer;" onclick = "location.href='homePage.php'">Make It Happen</span></h1>
<?php if(true) : ?> 
	<div id = "headerLogout" class = "headerSignIn" style = "width: 20%; height: 95px ;background-color: white; margin-right: 15px; margin-top: 10px;">
         <div id = "profileBox" class = "card" style = "width: 100%; height: 95px; margin: 0px; padding-top: 5px; padding-left: 5px; text-shadow: 0px 0px 0px;box-shadow:0px 0px 0px; display: flex;">
             <div id = "profilePic" style = "width: 40%;height: 95px" >
                <img src ="images/placeHolderImage.jpg" style = "width = 100%; height: 50px;">
             </div>
            <a class = "headerLogoutButton" style = "width: 60%;color: rgb(74, 202, 111);background-color: white;font-family: Bookman, sans-serif;" onclick = "location.href='userProfile.php'">
                 Nicolas C. 
                 I was born on a day
            </a>
        </div>
    </div>
	<?php else: ?>
		<div id = "headerLogin" class = "headerSignIn"><a class = "headerLoginButton" href = "login.php" style="text-decoration:none;padding:5px;">Sign In</a></div>
	<?php endif; ?>
</div>
    
<div id = "navBarWrapper">
    <nav id = "navBar" class = "topnav">
            <a class = "baseText" id = "homeLink" href = "homePage.php">Home</a>
            <a class = "baseText" id = "eventsLink" href = "eventsPage.php">Sponsor and View Events</a>
            <a class = "baseText" id = "attendEventsLink" href = "attendEvents.php">Attend Events</a>

    </nav>
</div>