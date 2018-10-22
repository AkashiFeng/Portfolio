<?php
    $command = 'php bin/magento setup:static-content:deploy';
    echo '<pre>' . shell_exec($command) . '</pre>';
?> 