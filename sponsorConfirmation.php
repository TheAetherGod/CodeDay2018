<!DOCTYPE HTML>
<?php 
    session_start();
    include "database.php";
    foreach ($_POST as $key => $value) {
        $_SESSION['post'][$key] = $value;
    } 

    $currentDir = getcwd();
    $uploadDirectory = "/images/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    extract($_SESSION['post']); 
        $sql = "INSERT INTO `eventsponsor`(`eventID`, `userID`, `sponsorAmnt`) VALUES (:eventid,:userid,:sponsoramnt)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["eventid" => $eventID, "userid" => $_SESSION['userID'], "sponsoramnt" => $amount]);

        $sql = "UPDATE `events` SET `moneyRaised`=:sponsor WHERE eventsID=:eventID";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["eventID" => $eventID, "sponsor" => $amount]);

        setcookie("ERROR","Duplicate event detected.", time() + (86400 * 30), "/");
    
    header("Location: eventsPage.php");
?>
