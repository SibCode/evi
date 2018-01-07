<?php

  function connectToDB() {
    $databasehost = "localhost";
    $databasename = "evi";

    $databaseusername="root";
    $databasepassword = "";
    try {
      $pdo = new PDO("mysql:host=".$databasehost.";dbname=".$databasename.";charset=utf8",
          $databaseusername, $databasepassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_LOCAL_INFILE => true));
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
