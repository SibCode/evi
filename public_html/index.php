<?php
/*
11.09.2017 by Simon Bertschinger
This is the main window index.

18.09.2017 Greber Michelle
Changed to template-logic
*/

    // Loading up our config file
    require_once('..\resources\config.php');
    include_once('Templates\template.class.php');
    include('Functionality\contentHandler.php');
    //require_once('header.php');

    $page = new Template('Templates\base.tpl');
    $menu = new Template('Templates\menu.tpl');
    $header = new Template('Templates\header.tpl');
    $footer = new Template ('Templates\footer.tpl');
    $login = new Template('Templates\modalLogin.tpl');
    $content = new Template('Templates\content.tpl');

    if (empty($_GET['index'])) {
      $getContent = getHomePage();
    } else {
      
    }
    $content->set('pagecontent', $getContent);

    $header->set('login', $login->output());
    $header->set('menu', $menu->output());
    $page->set('header', $header->output());
    $page->set('footer', $footer->output());
    $page->set('content', $content->output());

    echo $page->output();

?>
