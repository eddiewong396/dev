<?php

    require('../vendor/autoload.php');
    // load up your config file
    require_once("/resources/config.php");
     
    require_once(TEMPLATES_PATH . "/views/header.html");
    require_once(TEMPLATES_PATH . "/views/nav.html");
?>
<div id="container">
    <div id="content">
        <!-- content -->
    </div>
    <?php
        require_once(TEMPLATES_PATH . "/views/rightPanel.php");
    ?>
</div>
<?php
    require_once(TEMPLATES_PATH . "/views/footer.php");
?>