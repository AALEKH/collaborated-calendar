<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Script Output</title>
</head>
<body> 
<div style="height:40px;width:200px;background-color:#FFFFFF;margin-left:540px;border-radius:10px;border:5px ridge #6AA2D4">
  <div style="font-size:30px;color:#4B4B4B;margin-left:65px;">2013</div>
</div>
<br>
<div style="height:30px;width:800px;background-color:#FFFFFF;margin-left:260px;border-radius:10px;border:5px ridge #6AA2D4">
  <div style="font-size:30px;color:#4B4B4B;margin-left:320px;">December</div>
</div>
<div style="margin-left:130px;margin-top:20px;">	
<?php 
$c=$b+1;
$e=0;
while($c <= $d)
{
  if ($emptyArrayTwo[$e] == "")
  {
  	$f="";
  }
  else
  {
  	$f="<div style='position:absolute;color:#696969;margin-top:40px;margin-left:60px;font-size:40px;font-family:verdana'>E</div>";
  }

   

  echo "<div style='height:150px;width:150px;background-color:rgb(255,255,255);border:2px ridge rgb(212,212,255);display:inline-block;'>"."<div style='height:18px;width:20px;background-color:rgb(225,225,225);display:inline-block;'>".$c."</div>".$f."<div style='height:18px;width:80px;background-color:rgb(212,255,212);display:inline-block;margin-left:0px;'>".$emptyArrayThree[$c-1]."</div>"."</div>";
  if($c%7==0)
  {
  	echo "<br>";
  }
  $c=$c+1;
  $e=$e+1;
}
 ?>
</div>
<div style="margin-left:130px;">
<div style="display:inline-block"><form action="http://localhost/calendar/add.php" method="get"><input type="submit" value="Add New Event" style="background-color:#AAFFAA"/></form></div>
<div style="display:inline-block"><form action="http://localhost/calendar/editform.php" method="post"><input type="submit" value="Edit Event" style="background-color:#AAFFAA"/></form></div>
</div>
</body>
</html>

