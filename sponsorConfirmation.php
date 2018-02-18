<!DOCTYPE HTML>
<?php 
    session_start();
    include "database.php";

        $sql = "INSERT INTO `eventsponsor`(`eventID`, `userID`, `sponsorAmnt`) VALUES (:eventid,:userid,:sponsoramnt)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["eventid" => $_POST["eventID"], "userid" => $_SESSION['userID'], "sponsoramnt" => $_POST["amount"]]);

        $sql = "SELECT * FROM events WHERE eventID=:events";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["events" => $_POST["eventID"]]); 
        $data = array();
        $data = $stmt->fetchAll();

        $newAmount = $_POST["amount"] + $data[0][8];
        $sql = "UPDATE events SET moneyRaised=:amnt WHERE eventID=:eID";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["amnt"=>$newAmount, "eID"=>$_POST["eventID"]]);
        setcookie("ERROR","Duplicate event detected.", time() + (86400 * 30), "/");
    header("Location: eventsPage.php");
?>
