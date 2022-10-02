<?php

$server="localhost";
$username="root";
$password="";
$dbname="jokes";


$conn = new mysqli($server, $username, $password, $dbname);

if(isset($_GET))
{

      $sql= "SELECT * FROM funnyjokes ORDER BY RAND() LIMIT 1 " ;

      $jokee = $conn->query($sql);

      $jonk = $jokee->fetch_array();

        echo $jonk['setup'] ;

        echo $jonk["punchline"];




      $conn->close();
}

?>