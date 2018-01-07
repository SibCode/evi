<?php

  session_start();

  include_once('connectDB.php');
  $connectionDB = connectToDB();

  $uname = htmlspecialchars($_POST['uname']);
  $psw = htmlspecialchars($_POST['psw']);
  $preparedStatement = $connectionDB->prepare("SELECT 'vorname', 'email', 'passwort' FROM users WHERE email=':uname'");
  try {
    $preparedStatement->execute(array(':uname' => $uname));
  }
  catch (PDOException $e) {
    die("Query was not executed: ".$e->getMessage());
  }
  $result = $preparedStatement->fetchAll();
  echo print_r($result);
  if (count($result) > 0 && password_verify($psw, $result['passwort'])) {
    //Pass
    $_SESSION['username'] = $result['vorname'];
  } else {
    //Fail
    ?>
    <script>
      alert("Error Password or Username")/*displays error message*/
    </script>
    <?php
  }
  //header('Location: /')

?>
