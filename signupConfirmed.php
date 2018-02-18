<?php
session_start();
//----------
//username needs to come from session
//----------
    if(isset($_POST["firstNameSignUp"])) {
        $firstname = $_POST["firstNameSignUp"];
       
    } 
    else{setcookie("ERROR","First Name is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["lastNameSignUp"])) {
        
        $lastname = $_POST["lastNameSignUp"];
         
    }
    else{setcookie("ERROR","Last Name is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["emailSignUp"])) {

        $useremail = $_POST["emailSignUp"];
 
    }
    else{setcookie("ERROR","Email is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["passwordSignUp"])) {
        
        $userpassword = $_POST["passwordSignUp"];
         
    }
    else{setcookie("ERROR","Password is blank.", time() + (86400 * 30), "/");header("location: error.php");}
    if(isset($_POST["passwordConfirmSignUp"])) {
        
        $userpasswordConfirm = $_POST["passwordConfirmSignUp"];
         
    }
    else{setcookie("ERROR","Password confirm is blank.", time() + (86400 * 30), "/");header("location: error.php");}
            
   
    

    include "database.php";

    // $sql = "SELECT * FROM user WHERE username=:myUser";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(["myUser" => $username]); //order of arrays corresponds order of ?
    // $rows = $stmt->fetchAll(PDO::FETCH_OBJ);


    //collecting rows of emails with same email
    $sql = "SELECT * FROM user WHERE email=:myEmail";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["myEmail" => $useremail]); //order of arrays corresponds order of ?
    $email = $stmt->fetch(PDO::FETCH_OBJ);
    $rowCountemail = $stmt->rowCount();


    //welcome to the hack
    if ($rowCountemail == 1) { 
        
        setcookie("ERROR","That email is already taken.", time() + (86400 * 30), "/");
        header("location: error.php");

    }else if ($userpassword != $userpasswordConfirm) { 
        
        setcookie("ERROR","Your password does not match the other.", time() + (86400 * 30), "/");
        header("location: error.php");
        
    }else{ //if only data is unique
        //create new user
        $sql = "INSERT INTO `users`(`firstName`, `lastName`, `email`, `password`) VALUES (:name, :lastName,:email, :pass)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["name" => $firstname, "email" => $useremail, "lastName" => $lastname, "pass" => $userpassword]);
        header("location: login.php");
    }
    ?>