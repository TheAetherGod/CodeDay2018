<!DOCTYPE HTML>
<?php 
    session_start();
    include "database.php";

    foreach ($_POST as $key => $value) {
        $_SESSION['post'][$key] = $value;
    } 

    extract($_SESSION['post']); 
    $sql = "SELECT * FROM events WHERE eventName=:eventName";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["eventName" => $name]); //order of arrays corresponds order of ?
    $eventNameSame = $stmt->rowCount();

    $sql = "SELECT * FROM events WHERE startDate=:eventName";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["eventName" => $startdate]); //order of arrays corresponds order of ?
    $eventStartDateSame = $stmt->rowCount();

    $sql = "SELECT * FROM events WHERE endDate=:eventName";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["eventName" => $enddate]); //order of arrays corresponds order of ?
    $eventEndDateSame = $stmt->rowCount();
    if($eventNameSame===0 || $eventStartDateSame ===0 ||$eventEndDateSame ===0){
        $sql = "INSERT INTO `events`(`eventName`, `descript`, `donorInfo`, `startDate`,`endDate`,`location`,`moneyProposed`) VALUES (:name, :description, :donorinfo, :startdate, :enddate, :location, :moneyPropped)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["name" => $name, "description" => $description, "donorinfo" => $donorInfo, "startdate" => $startdate, "enddate" => $enddate, "location" => $location, "moneyPropped" => $moneyProposed]);

        $sql = "SELECT * FROM events WHERE eventName=:eventName";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["eventName" => $name]); //order of arrays corresponds order of ?
        $event = $stmt->fetch(PDO::FETCH_OBJ);
        $eventID = $event->eventID;
    }
    else{
        setcookie("ERROR","Duplicate event detected.", time() + (86400 * 30), "/");
    }
    header("Location: eventCreation.php");
?>
