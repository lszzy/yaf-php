<?php
/**
 * added this class to handle all the global options
 * which are available when yaf.so is loaded
 *
 */

/**
 * @namespace
 */
namespace Yaf;

/********************lszzy/yaf-php<<********************/
/**
 * yaf gloab definitions
 */
define('Yaf\VERSION',                   '2.2.9');
define('Yaf\ERR\STARTUP_FAILED',        512);
define('Yaf\ERR\ROUTE_FAILED',          513);
define('Yaf\ERR\DISPATCH_FAILED',       514);
define('Yaf\ERR\AUTOLOAD_FAILED',       520);
define('Yaf\ERR\NOTFOUND\MODULE',       515);
define('Yaf\ERR\NOTFOUND\CONTROLLER',   516);
define('Yaf\ERR\NOTFOUND\ACTION',       517);
define('Yaf\ERR\NOTFOUND\VIEW',         518);
define('Yaf\ERR\CALL_FAILED',           519);
define('Yaf\ERR\TYPE_ERROR',            521);
/********************lszzy/yaf-php>>********************/

class G
{
    protected static $_globals = array(
        'throwException' => true,
        'catchException' => false,
        'autoload_started' => 0,
        'configs' => null,
        'directory' => null,
        'local_library' => null,
        'ext' => Router::YAF_DEFAULT_EXT,
        'view_ext' => Loader::YAF_DEFAULT_VIEW_EXT,
        'default_module' => Router::YAF_ROUTER_DEFAULT_MODULE,
        'default_controller' => Router::YAF_ROUTER_DEFAULT_CONTROLLER,
        'default_action' => Router::YAF_ROUTER_DEFAULT_ACTION,
        'bootstrap' => Bootstrap_Abstract::YAF_DEFAULT_BOOTSTRAP,
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
        /********************lszzy/yaf-php<<********************/
        'yaf.use_namespace' => true
        /********************lszzy/yaf-php>>********************/
    );

    public static function iniSet($key, $value)
    {
        self::$_ini[$key] = $value;
    }

    public static function iniGet($key)
    {
        if (($iniValue = ini_get($key))!==false) {
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