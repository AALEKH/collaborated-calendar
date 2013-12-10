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

while ($row = $result->fetch())
{ 
  $events[] = array('id' => $row['id'], 'title' => $row['title'],'description' => $row['description']);
}

$output= 'database connection established';
include 'output.html.php';  
