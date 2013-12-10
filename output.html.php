<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Script Output</title>
</head>
<body>
<p>

<br>

<br>
<?php 
while($b!=$d-1)
{
  echo $b+1;
  echo  htmlspecialchars($emptyArray[$b], ENT_QUOTES, 'UTF-8')."<br>";
  echo  htmlspecialchars($emptyArrayTwo[$b], ENT_QUOTES, 'UTF-8')."<br>"."<br>";

  $b=$b+1;
}
 ?>
</p>
</body>
</html>


