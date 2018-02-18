<?php
session_start();
//----------
//username needs to come from session
//----------
    if(isset($_POST["email"])) {
        $email = $_POST["email"];
       
    } 
    if(isset($_POST["password"])) {

        $userpassword = $_POST["password"];
 
    }
   
    

    include "database.php";

    // $sql = "SELECT * FROM user WHERE username=:myUser";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    // $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM users WHERE email=:myUser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myUser" => $email]); //order of arrays corresponds order of ?
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    $rowCount = $stmt->rowCount();
    //welcome to the hack
    if ($rowCount != 1) { 
        setcookie("ERROR","invalid username or password", time() + (86400 * 30), "/");
        header("location: error.php");

    } else if($rowCount==1){ //if only 1 user returned
        //grab info from db
        $dbemail = $user->email;
        $dbpass = $user->password;
        $dbuserID = $user->userID;

        if($email == $dbemail && $userpassword == $dbpass) { 
            $_SESSION["userID"] = $dbuserID;
            header('Location: userprofile.php'); 
            echo ("You've reached the point you should move to a different website");
        } else{
            setcookie("ERROR","invalid username or password", time() + (86400 * 30), "/");
            header("location: error.php");
        }
    }
     ?>