<!DOCTYPE HTML>
<?php 
    session_start();
    include "database.php";

    if(isset($_POST['submit'])){
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($name)){
            if(!empty($name)){      
                $location = '../uploads/';      
                if(move_uploaded_file($temp_name, $location.$name)){
                    echo 'File uploaded successfully';
                }
            }       
        }  else {
            echo 'You should select a file to upload !!';
        }
    }
    echo"I skipped";

    foreach ($_POST as $key => $value) {
        $_SESSION['post'][$key] = $value;
    } 


    
    $currentDir = getcwd();
    $uploadDirectory = "/images/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

    // $fileName = $_FILES['file']['name'];
    // $fileSize = $_FILES['file']['size'];
    // $fileTmpName  = $_FILES['file']['tmp_name'];
    // $fileType = $_FILES['file']['type'];
    // $fileExtension = strtolower(end(explode('.',$fileName)));

    // $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 


    
    // if (isset($_POST['submit'])) {

    //     if (! in_array($fileExtension,$fileExtensions)) {
    //         $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    //     }

    //     if ($fileSize > 2000000) {
    //         $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    //     }

    //     if (empty($errors)) {
    //         if ( move_uploaded_file ( $_FILES["file"]["tmp_name"] , "YOUR_PATH".$your_file_name ) ){
    //             echo "file uploaded";
    //         }else{
    //             setcookie("ERROR","An error occurred somewhere. Try again or contact the admin", time() + (86400 * 30), "/");
    //             header("location: error.php");
    //         }
    //     } else {
    //         foreach ($errors as $error) {
    //             setcookie("ERROR",$error, time() + (86400 * 30), "/");
    //             header("location: error.php");
    //         }
    //     }
    // }


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
        $sql = "INSERT INTO `events`(`eventName`, `descript`, `donorInfo`, `startDate`,`endDate`,`location`,`moneyProposed` ,`imageFilePath`) VALUES (:name, :description, :donorinfo, :startdate, :enddate, :location, :moneyPropped, :filePath)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["name" => $name, "description" => $description, "donorinfo" => $donorInfo, "startdate" => $startdate, "enddate" => $enddate, "location" => $location, "moneyPropped" => $moneyProposed, "filePath" => $uploadPath]);

        $sql = "SELECT * FROM events WHERE eventName=:eventName";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["eventName" => $name]); //order of arrays corresponds order of ?
        $event = $stmt->fetch(PDO::FETCH_OBJ);
        $eventID = $event->eventID;
    }
    else{
        setcookie("ERROR","Duplicate event detected.", time() + (86400 * 30), "/");
    }
?>
