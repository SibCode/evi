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
    require_once('header.php');

    $home = new Template('Templates\base.tpl');
    $header = new Template('Templates\header.tpl');
    $footer = new Template ('Templates\footer.tpl');
    $content = new Template('Templates\content.tpl');

    $home->set('header', $header->output());
    $home->set('footer', $footer->output());
    $home->set('content', $content->output());
    echo $home->output();

?>
