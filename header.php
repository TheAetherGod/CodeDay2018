<div id = "banner" style = "width:100%">
	<img id = "LPLogo" src = "images/Logo.png" height="140" width="160" style="padding:0px;">
        
<h1 class = "baseTitle" style = "padding-bottom: 0px; margin-bottom:0px; color: rgb(74, 202, 111);  font-size:64px; text-shadow: 2px 2px 4px #000;"><span id = "LPNHS" style = "cursor: pointer;" onclick = "location.href='homePage.php'">Make It Happen</span></h1>
<?php if(isset($_SESSION["userID"])) : ?>
	<div id = "headerLogout" class = "headerSignIn"><a class = "headerLogoutButton">User Profile</a></div>
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