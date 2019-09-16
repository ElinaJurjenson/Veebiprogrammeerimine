<?php
  $userName="Elina Jürjenson";
  $fullTimeNow= date("d.m.Y H:i:s");
  $hourNow= date("H");
  $partOfDay= "hägune aeg";
  if($hourNow < 8){
	  $partOfDay="varajane hommik";
  }
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <title>
  <?php
    echo $userName;  
  ?>
  progeb veebi</title>
</head>
<body>
<?php
  echo "<h1>".$userName." koolitöö leht</h1>"; 
?>
  <p>See leht on loodud koolitöö raames ja ei sisalda tõsiseltvõetavat sisu! </a></p>
  <p>They are very colorful. You can eat the SEEDS!!!! Some are feral...</p>
  <hr>
  <p>Lehe avamise hetkel oli aeg: 
  <?php
    echo $fullTimeNow; 
  ?>
  .</p>
  <?php
    echo "<p>Lehe avamise hetkel oli ".$partOfDay ." .</p>";
	//info semestri kulgemise kohta
	$semesterStart = new DateTime("2019-9-2");
	$semesterEnd= new DateTime("2019-12-13");
	$semesterDuration= $semesterStart->diff($semesterEnd);
	$today= new DateTime("now");
	$fromSemesterStart= $semesterStart->diff($today);
	echo $fromSemesterStart;
  ?>
  <hr>
</body>
</html>

