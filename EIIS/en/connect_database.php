<?php /* TO DO: here you make html code , javascript any work you want */ ?>

<?php

$con = mysql_connect("localhost","root","root");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code
else
{
mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);
$message = "connect succeeded"; 

/*echo $message;*/
}

?>

