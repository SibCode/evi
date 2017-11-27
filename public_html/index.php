<?php
/**
 * Main-page with template logic.
 * All templates are being loaded and filled from here.
 *
 * Authors: Greber Michelle, Bertschinger Simon
 *
 */

    // Loading up our config file
    require_once('..\resources\config.php');

    // Including template-class
    include_once('Templates\template.class.php');
    include('Functionality\contentHandler.php');

    $page = new Template('Templates\base.tpl');
    /*$menu = new Template('Templates\menu.tpl');*/
    $header = new Template('Templates\header.tpl');
    $login = new Template('Templates\modalLogin.tpl');
    $content = new Template('Templates\content.tpl');

    if (empty($_GET['index'])) {
      $page->set('title', 'Home');
      $getContent = getHomePage();
    } else {

    }
    $content->set('pagecontent', $getContent);

    $header->set('login', $login->output());
    /*$header->set('menu', $menu->output());*/
    $page->set('header', $header->output());
    $page->set('content', $content->output());

    echo $page->output();

?>
