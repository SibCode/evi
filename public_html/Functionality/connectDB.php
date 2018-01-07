<?php

  function connectToDB() {
    $databasehost = "localhost";
    $databasename = "evi";

    $databaseusername="root";
    $databasepassword = "";

    try {
        $pdo = new PDO("mysql:host=".$databasehost.";dbname=".$databasename,
            $databaseusername, $databasepassword);
        return $pdo;
    } catch (PDOException $e) {
        die("database connection failed: ".$e->getMessage());
    }
  }


/*
  $databasetable = "kriterien";

  $affectedRows = $pdo->exec("
      LOAD DATA LOCAL INFILE ".$pdo->quote($csvfile)." INTO TABLE `$databasetable`
        FIELDS TERMINATED BY ".$pdo->quote($fieldseparator)."
        LINES TERMINATED BY ".$pdo->quote($lineseparator));

  echo "Loaded a total of $affectedRows records from this csv file.\n";
*/
?>
