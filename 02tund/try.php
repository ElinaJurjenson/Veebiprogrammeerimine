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
  ?>
  <hr>
</body>
</html>

