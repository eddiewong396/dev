<?php

    require('../vendor/autoload.php');
    // load up your config file
    require_once("/resources/config.php");
     
    include_once("/views/header.html");
    include_once("/views/nav.html");
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