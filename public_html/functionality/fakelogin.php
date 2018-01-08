<?php

  if (empty(session_id())) {
    session_start();
  }

  $_SESSION['username'] = "admin";

  header("Location: /");

?>
