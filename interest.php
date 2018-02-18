<!DOCTYPE HTML>
<?php 
    session_start();
    include "database.php";

        $sql = "INSERT INTO `eventinterest`(`eventID`, `userID`) VALUES (:eventid,:userid)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["eventid" => $_GET['eventID'], "userid" => $_SESSION['userID']]);

        setcookie("ERROR","Duplicate event detected.", time() + (86400 * 30), "/");
    header("Location: eventsPage.php");
?>
