<div id = "banner" style = "width:100%">
	<img id = "LPLogo" src = "images/Logo.png" height="140" width="160" style="padding:0px;">
<h1 class = "baseTitle" style = "padding-bottom: 0px; margin-bottom:0px; color: rgb(74, 202, 111);  font-size:64px; text-shadow: 2px 2px 4px #000;"><span id = "LPNHS" style = "cursor: pointer;" onclick = "location.href='homePage.php'">Make It Happen</span></h1>
<?php if(isset($_SESSION["userID"])) : ?> 
	<div id = "headerLogout" class = "headerSignIn" style = "width: 20%; height: 95px ;background-color: #333; margin-right: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.15), 0 6px 20px 0 rgba(0, 0, 0, 0.1);  margin-top: 10px;">
         <div id = "profileBox" style = "width: 100%; height: 50px; margin: 0px; padding-top: 5px;padding-left: 5px; text-shadow: 0px 0px 0px;box-shadow:0px 0px 0px; display: flex;">
             <div id = "profilePic" style = "width: 40%;height: 95px;padding:10px;" >
                <img src ="images/placeHolderImage.jpg" style = "width = 100%; height: 50px;">
             </div>
            <a class = "headerLogoutButton" style = "width: 60%;color: rgb(74, 202, 111);background-color:font-family: Bookman, sans-serif;" onclick = "location.href='userProfile.php'">
                 <?php $sql = "SELECT * FROM users WHERE userID=:users";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["users" => $_SESSION["userID"]]); 
                            $data = array();
                            $data = $stmt->fetchAll();
                            echo '<p style="padding:5px;cursor: pointer;">',$data[0][1],'</p>';?> 
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