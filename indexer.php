<?php

use Magento\Framework\App\Bootstrap;
    require __DIR__ . '/app/bootstrap.php';
    $bootstrap = Bootstrap::create(BP, $_SERVER);
    $obj = $bootstrap->getObjectManager();
    $state = $obj->get('Magento\Framework\App\State');

    $state->setAreaCode('frontend');
    ini_set('display_errors', 1);

$command = 'php bin/magento indexer:reindex';
    echo '<pre>' . shell_exec($command) . '</pre>';