<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Product\\' => array($baseDir . '/product/productClasses'),
    'App\\Models\\' => array($baseDir . '/models'),
    'App\\Controllers\\' => array($baseDir . '/controllers'),
    'App\\Config\\' => array($baseDir . '/config'),
    'App\\' => array($baseDir . '/router'),
);
