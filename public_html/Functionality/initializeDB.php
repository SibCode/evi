<?php

  include_once("connectDB.php");

  $table = "Kriterien";
  $fieldseparator = ";";
  $lineseparator = "\n";
  $csvfile = "../resources/db/Kriterien.csv";

  $result = $mysqli->query("SHOW TABLES LIKE '".$table."'"));

  if($result->num_rows != 1) {
    mysqli_query(include_once("../resources/db/initialize.sql"));
    if(!file_exists($csvfile)) {
      die("File not found. Make sure you specified the correct path.");
    }
    $pdo->exec("LOAD DATA LOCAL INFILE ".$pdo->quote($csvfile)." INTO TABLE `$table`
          FIELDS TERMINATED BY ".$pdo->quote($fieldseparator)."
          LINES TERMINATED BY ".$pdo->quote($lineseparator));

  }



/*
    $query = <<<eof
        "LOAD DATA INFILE '$fileName'
         INTO TABLE tableName
         FIELDS TERMINATED BY ';'
         LINES TERMINATED BY '\n'
        (field1,field2,field3,etc)
    eof;"

    $db->query($query);
*/
?>
