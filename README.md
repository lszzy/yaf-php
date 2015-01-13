# yaf-php
The php implements of [php-yaf](pecl.php.net/package/yaf) 2.2.9, forked from [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport), in order to fit better

## Changelog
2015-01-13:

	1. forked from [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport)
	2. loader.php fix bug for php 5.2 and remove APPLICATION_PATH
	3. add Yaf constants YAF_VERSION, YAF_ENVIRON, YAF_ERR_STARTUP_FAILED etc...
	4. implement usage of action like yaf 2.2.9
	5. implement catchException with Error Controller and erro Action like yaf 2.2.9
	6. implement Yaf_Request_Abstract::getException and getParam('exception')
	7. Yaf_Dispatcher::autoRender,flushInstantly return current state if parameter is null
	8. G.php fix a bug that php 5.2 ini_get return '' if not found
	9. view can render tpl in parent dir, same as yaf 2.2.9
	10. fixed a lot of bug
