<!DOCTYPE HTML>
<?php session_start();
include"database.php";?>
<html>
    <style>
        form{
            display: inline-block;
            font-family: Bookman, sans-serif;
            font-size: 20px;
            align-items: center;
            justify-content: center;
            text-align: left;
            }
        table{
            width: 100%;
            font-family: Bookman, sans-serif;
            text-align: center;
        }
        table td{
            padding: 5px 0;
            margin: 0;
        }
        table tr:nth-child(even){
            background-color: rgb(74, 202, 111);
        }
        #addUserTable th, td{
            width: 12.5%;
        }
        textarea, input {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            resize: vertical;
            width: 50%;
            -moz-transition: none 0s ease 0s;
            line-height: 2em;
        }
    </style>
<head>
    <title>Codeday</title>
    
    <!--TODO: Icon-->
    
    
    <!--Style Sheets-->
    <link rel="stylesheet" href="cssFolder\homePage.css">
    
    <!--Scripts-->
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="headerJQuery.js"></script>
</head>        
<header id = "header"><?php include "header.php"; ?></header>

<body>
    <div id = "footerPusher">	
        <!--Included via PHP-->
        <div id = "donationStuff" class = "card" style = "width: 80%; height: 100px;">
            <p> Donation Info here again</p>
        </div>
        <div id = "cardInfoStuff" class = "card" style = "width: 80%; height 500px;">
            <div class="container">
                <div class="main">
                    <span id="error">
                    </span>
                    <form id="eventCreator" action="sponsorConfirmation.php" method="POST" enctype="multipart/form-data">
                        <table align = "center;" style="width:100%;" class = "listing">
                            <tr>
                                <td><label>Name on Card :<span>*</span></label></td>
                                <td><input name="name" maxlength="32" type="text" placeholder="eg: Bob Bobson" required></td>
                            </tr>
                            <tr>
                                <td><label>Card # :</label></td>
                                <td><input name = "cardNum" maxlength = "16" type = "integer" placeholder = "eg: 1234567898765432" required ></td>
                            </tr>
                            <tr>
                                <td><label>Experation Date :<span>*</span></label></td>
                                <td><input name="expDate" type="date" placeholder="eg: exp date = 03/19. Input 03/01/2019." required></td>
                            </tr>
                            <tr>
                                <td><label>CVC :</label></td>
                                <td><input name = "securityCode" maxlength = "3" type = "integer" placeholder = "eg: 123" required></td>
                            </tr>
                            <tr>
                                <td><label>Amount Donated :<span>*</span></label></td>
                                <td><input name="amount" type="integer" placeholder="eg: 1000 = $1000.00" required></td>
                            </tr>
                            <tr><?php echo $_GET['eventID']; ?>
                                <td><input name="eventID" type="hidden" value="<?php echo $_GET['eventID']; ?>";required></td>
                                <td style = "text-align:center;text-sixe:200%;"><input type="submit" value="Submit" class = "classicColor"/></td>
                            </tr>
                            </table>

                    </form>
                </div>
            </div>
        </div>    
    </div>
 <!--Included via PHP-->
</body>
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>