<html lang="en">
<head>
<meta charset="utf-8">
<title>Script Output</title>
</head>
<body>
<p>
<?php echo $output; ?>
<br>
<?php
$d=cal_days_in_month(CAL_GREGORIAN,12,2013);
echo "$d ";
?>
<br>

<?php foreach ($events as $event): 
 echo htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8')."<br>";
 echo htmlspecialchars($event['description'], ENT_QUOTES, 'UTF-8');
 endforeach; ?>
</p>
</body>
</html>
