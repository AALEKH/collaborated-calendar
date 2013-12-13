<?php

try
  {
   //To establish Database connection with local database named calendar
   
   $pdo = new PDO('mysql:host=localhost;dbname=calendar', 'userprimary','user');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $pdo->exec('SET NAMES "utf8"');
  
  }

catch (PDOException $e)
  {
   //In case the error is encountered 
   $output = 'Unable to connect to the database server.';
   include 'output.html.php';
   exit();
  
  }

try
{
$sql = 'SELECT * FROM event';
$result = $pdo->query($sql);
}
catch (PDOException $e)
{
$output = 'Error fetching events: ' . $e->getMessage();
include 'output.html.php';
exit();
}

$b=0;
$d=cal_days_in_month(CAL_GREGORIAN,12,2013);
$emptyArray = array(array());

while ($b!=$d) {

  $tomorrow = mktime(0,0,0,date("m"),1+$b,date("Y")); 
  $date=date('Y-m-d',$tomorrow);
  $indivisualdate=date('d');
  $timestamp = strtotime($date);
  $day = date('l', $timestamp);
  $emptyArray[$b]=$day;
  $b=$b+1;
  
}

while ($row = $result->fetch())
{ 
  $events[] = array('id' => $row['id'], 'title' => $row['title'],'description' => $row['description'],'start_date' => $row['start_date'],'end_date' => $row['end_date'],'start_month' => $row['start_month'],'end_month' => $row['end_month'],'end_year' => $row['end_year'],'start_year' => $row['start_year']);
}
$b=0;
$emptyArrayTwo=array();
$emptyArrayThree=array();
$c=0;
while($c <= $d-1)
{
  $tomorrow = mktime(0,0,0,date("m"),1+$c,date("Y")); 
  $date=date('Y-m-d',$tomorrow);
  $indivisualdate=date('d');
  $timestamp = strtotime($date);
  $day = date('l', $timestamp);
  $emptyArrayThree[$c]=$day;
  $c=$c+1;
}
while($b < $d)
{
  $emptyArrayTwo[$b]="";
  $b=$b+1;
}
$b=0;
while ($b <= $d) {
  foreach ($events as $event): 
   if($event['start_date']==$b+1)
    {
      
      $emptyArrayTwo[$b]=$event['title'];
      
    }
  endforeach; 
  $b=$b+1;
}

$b=0;


$output= 'database connection established';
include 'output.html.php';  
