<?php
  session_start();

  if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
  }

  if (!empty(session_id())) {
    session_unset();
    session_destroy();
  }

  header('Location: /');

?>
