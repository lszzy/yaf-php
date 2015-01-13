<?php
/********************lszzy/yaf-php<<********************/
/**
 * yaf gloab definitions
 */
define('YAF_VERSION',                   '2.2.9');
define('YAF_ERR_STARTUP_FAILED',        512);
define('YAF_ERR_ROUTE_FAILED',          513);
define('YAF_ERR_DISPATCH_FAILED',       514);
define('YAF_ERR_AUTOLOAD_FAILED',       520);
define('YAF_ERR_NOTFOUND_MODULE',       515);
define('YAF_ERR_NOTFOUND_CONTROLLER',   516);
define('YAF_ERR_NOTFOUND_ACTION',       517);
define('YAF_ERR_NOTFOUND_VIEW',         518);
define('YAF_ERR_CALL_FAILED',           519);
define('YAF_ERR_TYPE_ERROR',            521);
/********************lszzy/yaf-php>>********************/

/**
 * added this class to handle all the global options
 * which are available when yaf.so is loaded
 *
 */
class Yaf_G
{
    protected static $_globals = array(
        'throwException' => true,
        'catchException' => false,
        'autoload_started' => 0,
        'configs' => null,
        'directory' => null,
        'local_library' => null,
        'ext' => Yaf_Router::YAF_DEFAULT_EXT,
        'view_ext' => Yaf_Loader::YAF_DEFAULT_VIEW_EXT,
        'default_module' => Yaf_Router::YAF_ROUTER_DEFAULT_MODULE,
        'default_controller' => Yaf_Router::YAF_ROUTER_DEFAULT_CONTROLLER,
        'default_action' => Yaf_Router::YAF_ROUTER_DEFAULT_ACTION,
        'bootstrap' => Yaf_Bootstrap_Abstract::YAF_DEFAULT_BOOTSTRAP,
        'modules' => null,
        'default_route' => null
    );
    //missing globals to check
    //local_namespace
    protected static $_ini = array(
        'yaf.library' => '',
        'yaf.action_prefer' => false,
        'yaf.lowcase_path' => false,
        'yaf.use_spl_autoload' => false,
        'yaf.forward_limit' => '5',
        'yaf.name_suffix' => true,
        'yaf.name_separator' => '',
        'yaf.cache_config' => false,
        'yaf.st_compatible' => false,
        'yaf.environ' => 'product',
        'yaf.use_namespace' => false
    );

    public static function iniSet($key, $value)
    {
        self::$_ini[$key] = $value;
    }

    public static function iniGet($key)
    {
        /********************lszzy/yaf-php<<********************/
        //php 5.2 ini_get return '' if not found, fixed by lszzy <admin@lszzy.com>
        if (($iniValue = ini_get($key))!==false
            && (phpversion() >= '5.3' || ini_get($key) !== '')) {
        /********************lszzy/yaf-php>>********************/
            //we have ini set from php
            if ($iniValue == '0') {
                $value = false;
            } elseif ($iniValue == '1') {
                $value = true;
            } else {
                $value = $iniValue;
            }
            self::iniSet($key, $value);
            return $value;
        } else {
            if (isset(self::$_ini[$key])) {
                return self::$_ini[$key];
            }
        }
        return null;
    }

    public static function set($key, $value)
    {
        self::$_globals[$key] = $value;
    }

    public static function get($key)
    {
        if (isset(self::$_globals[$key])) {
            return self::$_globals[$key];
        }
        return null;
    }


    public static function isAbsolutePath($path)
    {
        if (
            substr($path, 0, 1) == "/"
            ||
            (
                (strpos($path, ":") !== false)
                &&
                (strpos(PHP_OS, "WIN") !== FALSE)
            )
        ) {
            return true;
        } else {
            return false;
        }
    }
}