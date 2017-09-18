<?php
/*
11.09.2017 by Simon Bertschinger
This is the main window index.
*/
    // Loading up our config file
    require_once('..\resources\config.php');
    require_once("header.php");
?>
<div id="container">
    <div id="content">
        <!-- content here -->
    </div>
    <?php
        require_once('rightPanel.php');
    ?>
</div>
<?php
    require_once("footer.php");
?>
