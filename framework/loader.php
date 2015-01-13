<?php
function yaf_auto_load($classname)
{
    $yafNamespace = 'Yaf';
    $namespaceSeparator = '\\';
    $fileName = '';
    $namespace = '';
    if ($yafNamespace.$namespaceSeparator === substr($classname, 0, strlen($yafNamespace.$namespaceSeparator))) {
            $fileName = '';
            $namespace = '';
            if (false !== ($lastNsPos = strripos($classname, $namespaceSeparator))) {
                $namespace = substr($classname, 0, $lastNsPos);
                $classname = substr($classname, $lastNsPos + 1);
                $fileName = str_replace($namespaceSeparator, DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
    }
    /********************lszzy/yaf-php<<********************/
    if ($namespace == 'Yaf' || stripos($namespace, 'Yaf'.$namespaceSeparator) === 0) {
        $fileName = str_replace('Yaf'.DIRECTORY_SEPARATOR, 'Yaf_Namespace'.DIRECTORY_SEPARATOR, $fileName);
    }
    $path = $fileName. str_replace('_', DIRECTORY_SEPARATOR, $classname) . '.php';
    if (file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . $path )) {
        require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . $path);
    }
    /********************lszzy/yaf-php>>********************/
}
spl_autoload_register('yaf_auto_load');