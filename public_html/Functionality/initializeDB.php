<?php

  include_once("connectDB.php");

  $connectionDB = connectToDB();
  $table = "Kriterien";
  $fieldseparator = ";";
  $lineseparator = "\n";
  $csvfile = "../resources/db/Kriterien.csv";

  $result = $connectionDB->query("SHOW TABLES LIKE '".$table."'");

  if($result->rowCount() != 1) {
    $connectionDB->query(file_get_contents("../resources/db/initialize.sql"));
    if(!file_exists($csvfile)) {
      die("File not found. Make sure you specified the correct path.");
    }
    try {
      $connectionDB->exec("LOAD DATA LOCAL INFILE ".$connectionDB->quote($csvfile)." INTO TABLE `$table`
          FIELDS TERMINATED BY ".$connectionDB->quote($fieldseparator)."
          LINES TERMINATED BY ".$connectionDB->quote($lineseparator))."
          (kriterien_teil, kriterien_nr, titel, beschreibung, stufe3, stufe2, stufe1, stufe0)";
    }
    catch (PDOException $e) {
        die("database connection failed: ".$e->getMessage());
    }
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
