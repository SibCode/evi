<?php

  include_once("connectDB.php");

  $connectionDB = connectToDB();
  $table = "Kriterien";
  $fieldseparator = "£";
  $lineseparator = "\n";
  $csvfile = realpath('..\resources\db\Kriterien.csv');
  $adminHashPW = '$2y$10$Vz74o8TuLRHLPpBC9k9a2eIf9UKtQM7el16L.EJxwTMbVYs6uoBfu';

  $result = $connectionDB->query("SHOW TABLES LIKE '".$table."'");

  if($result->rowCount() != 1) {
    try {
      $connectionDB->query(file_get_contents('..\resources\db\initialize.sql'));
    }
    catch (PDOException $e) {
      die("Creating tables failed: ".$e->getMessage());
    }
    try {
      $connectionDB->query("INSERT INTO `Users` (name, vorname, email, passwort) VALUES ('', 'admin', 'admin@admin.ch', '$adminHashPW')");
    }
    catch (PDOException $e) {
      die("Admin user could not be inserted: ".$e->getMessage());
    }
    if(!file_exists($csvfile)) {
      die("File not found. Make sure you specified the correct path.");
    }
    try {
      $connectionDB->query("LOAD DATA LOCAL INFILE ".$connectionDB->quote($csvfile)." INTO TABLE `$table`
          FIELDS TERMINATED BY ".$connectionDB->quote($fieldseparator)."
          LINES TERMINATED BY ".$connectionDB->quote($lineseparator)."
          (kriterien_id, kriterien_teil, kriterien_nr, titel, beschreibung, stufe3, stufe2, stufe1, stufe0)");
    }
    catch (PDOException $e) {
        die("database could not be filled with criteria: ".$e->getMessage());
    }
  }

/*PASSWORD_BCRYPT*/


?>
