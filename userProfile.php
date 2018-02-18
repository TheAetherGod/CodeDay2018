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
    <script>
        $(document).ready(function(){
            $("#homeLink").addClass("active");
        });
    </script>
</head>

<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<body>
    <!--Fixed Img in Background-->
    <div id = "frontImg" class = "card" style = "width: 75%;height:400px;">
        <div id = "topDiv" style = "width:100%; height: 50%; display:flex;">
            <div style = "Height: 100%;width:30%; margin-left: 15px;">
                <img id = "User.png">
                <img style="height:100%;width:100%;" src ="images/<?php echo $data[0][5]; ?>"/>
            </div>
            <div style = "Height: 100%;width:70%padding:10px;margin-top:15px;">
			    <p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Welcome <?php echo '<a style="color:white;text-decoration:none;">',$data[0][1],'!</a>'; ?></p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Name: <?php echo '<a style="color:white;text-decoration:none;">',$data[0][1],' ',$data[0][2],'</a>'; ?></p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Following: <?php for($x=0;$x<$following;$x++){echo '<a style="color:white;text-decoration:none;">',$userFollowingArray[0][$x]," </a>"; }?></p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Followers: <?php for($x=0;$x<$followed;$x++){echo '<a style="color:white;text-decoration:none;">',$userFollowingArrays[0][$x]," </a>"; }?></p>
                <p style = "font-style: italic; font-size: 16px; text-align: left;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">Current Projects/Events: <?php for($x=0;$x<$myEvents;$x++){echo '<a style="color:white;text-decoration:none;">',$events[0][$x]," </a>"; }?></p>
                <a type="submit" style = "color:rgb(100, 248, 144); text-shadow: 2px 2px 4px #000; value="Create +"></a>
            </div>
        </div>
        <div id = "userComments" style = "width: 100%; height: 50%;padding:10px;">
            <p>
                Comments go HERE!!!
            </p>
        </div>
    </div>
</body>        
<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>