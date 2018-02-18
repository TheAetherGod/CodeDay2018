<!DOCTYPE HTML>
<?php session_start();
include 'database.php';?>
<html>
<head>
    <title>LPNHS - Home</title>
    
    <!--TODO: Icon-->
    <?php                   $sql = "SELECT * FROM users WHERE userID=:users";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["users" => $_SESSION["userID"]]); 
                            $data = array();
                            $data = $stmt->fetchAll();

                            $sql = "SELECT * FROM userfollow WHERE userID=:users";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["users" => $_SESSION["userID"]]); 
                            $userFollowingArray = array();
                            $userFollowingArray = $stmt->fetchAll();
                            $following = $stmt->rowCount();

                            $sql = "SELECT * FROM userfollow WHERE followUserID=:users";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["users" => $_SESSION["userID"]]); 
                            $userFollowArrays = array();
                            $userFollowArrays = $stmt->fetchAll();
                            $followed = $stmt->rowCount();
                            
                            $sql = "SELECT * FROM eventowner WHERE userID=:users";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["users" => $_SESSION["userID"]]); 
                            $events = array();
                            $events = $stmt->fetchAll();
                            $myEvents = $stmt->rowCount();?>
    
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
    <!--Fixed Img in Background-->
    <div id = "frontImg" class = "card" style = "width: 75%;height:400px;">
        <div id = "topDiv" style = "width:100%; height: 50%; display:flex;">
            <div style = "Height: 100%;width:30%;">
                <img id = "User.png">
                <img style="height:85%;width:85%;padding:10px;" src ="images/<?php echo $data[0][5]; ?>"/>
            </div>
            <div style = "Height: 100%;width:70%;margin-top:15px;">
                <table style="width:100%;height:100%;text-align:center;">
                    <tr>
                    <th><p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Welcome <?php echo '<a style="color:white;text-decoration:none;">',$data[0][1],'!</a>'; ?></p></th>
                    <th><p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Name: <?php echo '<a style="color:white;text-decoration:none;">',$data[0][1],' ',$data[0][2],'</a>'; ?></p></th>
                    </tr><tr><th><p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Following: <?php for($x=0;$x<$following;$x++){echo '<a style="color:white;text-decoration:none;">',$userFollowingArray[0][$x]," </a>"; }?></p></th>
                    <th><p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Followers: <?php for($x=0;$x<$followed;$x++){echo '<a style="color:white;text-decoration:none;">',$userFollowingArrays[0][$x]," </a>"; }?></p></th>
                    </tr><tr><th><p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Current Projects/Events: <?php for($x=0;$x<$myEvents;$x++){echo '<a style="color:white;text-decoration:none;">',$events[0][$x]," </a>"; }?></p></th>
                    <th><a href="eventCreation.php"style = "color:rgb(100, 248, 144); text-shadow: 1px 1px 2px #000;font-size: 20px;">Create An Event!</a></th>
                </table>
            </div>
        </div>
        <hr style="border: 1px solid grey;
			margin-bottom: 35px;
			width: 99%;">
        <div id = "userComments" style = "width: 100%; height: 50%;padding:10px;">
        </div>
    </div>
</body>        
<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>