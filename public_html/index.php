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
    //require_once('header.php');

    $page = new Template('Templates\base.tpl');
    $header = new Template('Templates\header.tpl');
    $footer = new Template ('Templates\footer.tpl');
    $content = new Template('Templates\modalLogin.tpl');

    $page->set('header', $header->output());
    $page->set('footer', $footer->output());
    $page->set('content', $content->output());
    echo $page->output();

?>
