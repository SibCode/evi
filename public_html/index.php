<?php
/**
 * Main-page with template logic.
 * All templates are being loaded and filled from here.
 *
 * Authors: Greber Michelle, Bertschinger Simon
 *
 */
    session_start();
    // Loading up our config file
    require_once('..\resources\config.php');

    require_once('functionality\initializeDB.php');

    // Including template-class
    include_once('Templates\template.class.php');
    include('Functionality\contentHandler.php');

    $page = new Template('Templates\base.tpl');
    /*$menu = new Template('Templates\menu.tpl');*/
    $header = new Template('Templates\header.tpl');
    //$login = new Template('Templates\modalLogin.tpl');
    // Button to Fake-Login
    if (!isset($_SESSION['username'])) {
      $login = '<form action="functionality\fakelogin.php" method="post">
        <input type="submit" value="Login" />
      </form>';
    }
    else {
      $username = $_SESSION['username'];
      $login = '<div style="color: #66c2ff;">Welcome <span style="color:#e5ecff;">'.$username.'</span></div>
      <form action="functionality\fakelogout.php" method="post">
        <input type="submit" value="Logout" />
      </form>';
    }

    $content = new Template('Templates\content.tpl');


    if (!isset($_SESSION['username'])) {
      $page->set('title', 'Home');
      $getContent = getHomePage();
    } else {
      $page->set('title', 'Kriterien');
      $getContent = getCriteriaPage();
    }
    $content->set('pagecontent', $getContent);

    $header->set('login', $login); // normally $login->output()
    /*$header->set('menu', $menu->output());*/
    $page->set('header', $header->output());
    $page->set('content', $content->output());

    echo $page->output();

?>
