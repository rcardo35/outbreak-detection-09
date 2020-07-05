<?php
    include "config/database_config.php";
    
    
echo "Hello World! This is my first commit";
echo "<br> Hello World! This is my second commit (Hemanth)<br><br>";

$stmt = $covid_pdo->query('SELECT name FROM heroku_c224005b36bf596.test_table');
while( $row = $stmt->fetch()){
    echo $row['name']  . "<br>";
}

echo "<p>Hello. Do you want to view <a href=\".\Eterna\about.html\">page 2</a> ?</p>";

?>


