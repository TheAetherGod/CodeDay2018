<!DOCTYPE HTML>
<?php session_start();
include "database.php";
$sql = "SELECT * FROM events";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$eventCount = $stmt->rowCount();
$a=array();
array_push($a,$stmt->fetchALL(PDO::FETCH_COLUMN, 0));
//collecting home bills

?>
<html>
<style>
.meter { 
	height: 10px;  /* Can be anything */
	position: relative;
	padding:20px;
	background: #555;
	font-size: 10px;
	-moz-border-radius: 20px;
	-webkit-border-radius: 20px;
	border-radius: 20px;
	padding: 6px;
	box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
}
.meter > span {
  display: block;
  height: 100%;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background-color: rgb(100, 248, 144);
  background-image: linear-gradient(
    center bottom,
    rgb(43,194,83) 37%,
    rgb(84,240,84) 69%
  );
  box-shadow: 
    inset 0 2px 9px  rgba(255,255,255,0.3),
    inset 0 -2px 6px rgba(0,0,0,0.4);
  position: relative;
  overflow: hidden;
}
.orange > span {
  background-color: #f1a165;
  background-image: linear-gradient(to bottom, #f1a165, #f36d0a);
}

.red > span {
  background-color: #f0a3a3;
  background-image: linear-gradient(to bottom, #f0a3a3, #f42323);
}
.meter > span:after {
  content: "";
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  background-image: linear-gradient(
    -45deg, 
    rgba(255, 255, 255, .2) 25%, 
    transparent 25%, 
    transparent 50%, 
    rgba(255, 255, 255, .2) 50%, 
    rgba(255, 255, 255, .2) 75%, 
    transparent 75%, 
    transparent
  );
  z-index: 1;
  background-size: 50px 50px;
  animation: move 2s linear infinite;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  overflow: hidden;
}</style>
<head>
    <!--TODO: Icon-->
    <!--Style Sheets-->
	<style>
		.textStuff{
			text-align: center;
		}
	</style>

    <link rel="stylesheet" href="cssFolder\homePage.css">
    
    <!--Scripts-->
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="headerJQuery.js"></script>
    <script>
        $(document).ready(function(){
            $("#eventsLink").addClass("active");
        });
    </script>
</head>

<!--Included via PHP-->
<header id = "header"><?php include "header.php"; ?></header>

<body>
	<div id = "footerPusher">	
	 	<!--MAIN CODE-->
		 <?php
                        for($i = 0; $i <$eventCount; $i++){
                            
                            $sql = "SELECT * FROM events WHERE eventID=:events";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["events" => $a[0][$i]]); 
                            $data = array();
							$data = $stmt->fetchAll();

							$sql = "SELECT * FROM eventinterest WHERE eventID=:events";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["events" => $a[0][$i]]); 
							$eventInt = $stmt->rowCount();

							$sql = "SELECT * FROM eventsponsor WHERE eventID=:events";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute(["events" => $a[0][$i]]); 
							$eventSpo = $stmt->rowCount();
                            //collecting bill information
							
                            echo '
                        
		<div id = "Event1" class = "card" style = "width: 80%; height: 500px;">
		
			<div id = "placeHolderDiv" style = "width: 100%; height:60%; display: flex;justify-content: center;">
				<div id = "picOfEvent" style =" width: 40%; height:100%; padding:0px; margin:0px;border: 1px solid rgba(0,0,0,0.18);">
					<img src = "images/' , $data[0][9] ,'" style = "width: 100%;height: 100%;">
				</div>
				<div id = "descriptionOfEvent" style = "width: 60%; height: 100%; padding:0px; margin:0px;text-align:center;font-family:Bookman, sans-serif;font-size: 20px;">
				<br><b style="color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;">' , $data[0][1] ,'</b><br><hr>';if($data[0][4]===$data[0][5]):echo 'During ', $data[0][4];
                        else:echo 'From ',$data[0][4], ' to ', $data[0][5]; endif; echo' at ',$data[0][6],'<br>',$data[0][2],'<br><br><hr>',$data[0][3],'
				</div>	
			</div>
			<hr style="border: 1px solid grey;
			margin-bottom: 20px;
			width: 99%;">
			<div id = "intrested?Sponsor?Going?" style = "width: 100%; height: 40%; padding:0px;margin:0px;">
				<table style = "width: 100%;height:70%;">
				<tr style = "height: 5%; font-size: 18px;">
						<th style = "text-align: center;color:rgb(100, 248, 144);text-shadow: 1px 1px 2px #000;" colspan="2">$',$data[0][8],' has been raised out of $',$data[0][7],'</th>
					</tr>
				<tr style = "height: 15%; font-size: 40px;">
						<th style = "text-align: center;" colspan="2"><div class="meter">
						<span style="width: ',($data[0][8]/$data[0][7])*100,'%;"></span>
					  </div></th>
					</tr>
					<tr style = "height: 70%;font-size: 32px;">
						<th style = "text-align: center;text-shadow: 1px 1px 2px #000;color:rgb(100, 248, 144);"><a href = "interest.php"; style = "color:rgb(100, 248, 144); text-shadow: 1px 1px 2px #000;">Interested?</a></th>
<<<<<<< HEAD
						<th style = "text-align: center;text-shadow: 1px 1px 2px #000;color:rgb(100, 248, 144);"><a href = "sponsorPage.php"; style = "color:rgb(100, 248, 144);">Sponsor!</a></th>
=======
						<th style = "text-align: center;text-shadow: 1px 1px 2px #000;color:rgb(100, 248, 144);"><a href = "sponsors.php?eventID=',$data[0][0],'"; style = "color:rgb(100, 248, 144);">Sponsor!</a></th>
>>>>>>> 88868a8862c7a232984f00c2f3c973549adc3427
					</tr>
					<tr style = "height: 10%;font-size: 20px;">
						<th style = "text-align: center;">',$eventInt,' users are interested!</th>
						<th style = "text-align: center;">',$eventSpo,' users are sponsoring!</th>
					</tr>
				</table>
			</div>	
		</div>';}
		?>
	</div>
</body>



<!--Included via PHP-->
<footer id = "footer"><?php include "footer.php"; ?></footer>
</html>