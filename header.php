<div id = "banner" style = "width:100%">
	<img id = "LPLogo" src = "https://www.lphs.org/cms/lib/IL01904769/Centricity/Template/GlobalAssets/images///logos/_default.png">
        
<<<<<<< HEAD
	<h1 class = "baseText" style = "padding-bottom: 0px; margin-bottom:0px; color: #005da3;  font-size:64px; text-shadow: 2px 2px 4px #000;"><span id = "LPNHS" style = "cursor: pointer;" onclick = "location.href='index.php'">Make It Happen</span></h1>
=======
	<h1 class = "baseText" style = "padding-bottom: 0px; margin-bottom:0px; color: #005da3;  font-size:48px;"><span id = "LPNHS" onclick = "location.href='index.php'" title = "LPNHS - Home">Lake Park High School National Honor Society</span></h1>
	<h2 class = "baseText" style = "padding-top: 0px; margin-top:0px; color: #666; font-size:18px;">Scholarship | Leadership | Character | Service</h2>
>>>>>>> parent of 059a3d9... Text test
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