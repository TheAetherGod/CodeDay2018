<div id = "banner" style = "width:100%">
	<img id = "LPLogo" src = "https://www.lphs.org/cms/lib/IL01904769/Centricity/Template/GlobalAssets/images///logos/_default.png">
        
	<h1 class = "baseText" style = "padding-bottom: 0px; margin-bottom:0px; color: #005da3;  font-size:64px; text-shadow: 2px 2px 4px #000;"><span id = "LPNHS" onclick = "location.href='index.php'" title = "LPNHS - Home">Make It Happen</span></h1>
	<?php if(isset($_SESSION["StudentID"])) : ?>
		<div id = "headerLogout" class = "headerSignIn"><button id = "headerLogoutButton">Sign Out</button></div>
	<?php else: ?>
		<div id = "headerLogin" class = "headerSignIn"><button id = "headerLoginButton">Sign In</button></div>
	<?php endif; ?>

</div>
    
<div id = "navBarWrapper">
    <nav id = "navBar" class = "topnav">
            <a class = "baseText" id = "homeLink" href = "homePage.php">Home</a>
            <a class = "baseText" id = "eventsLink" href = "events.php">Sponsor and View Events</a>
            <a class = "baseText" id = "attendEventsLink" href = "attendEvents.php">Attend Events</a>

    </nav>
</div>