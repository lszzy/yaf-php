## Introduction
The php implements of [yaf](pecl.php.net/package/yaf), forked from [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport), in order to fit yaf 2.2.9 better

## Changelog
2015-01-12:

	1. forked from [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport)

2015-01-13:

	1. loader.php fix bug for php 5.2 and remove APPLICATION_PATH
	2. add Yaf constants YAF_VERSION, YAF_ENVIRON, YAF_ERR_STARTUP_FAILED etc...
	3. implements of usage of action like yaf 2.2.9
	4. implements of catchException with Error Controller and error Action like yaf 2.2.9
	5. implements of Yaf_Request_Abstract::getException and getParam('exception')
	6. Yaf_Dispatcher::autoRender,flushInstantly return current state if parameter is null
	7. G.php fix a bug that php 5.2 ini_get return '' if not found
	8. view can render tpl in parent dir, same as yaf 2.2.9
	9. fixed a lot of bug

2015-01-14:

	1. implements of Yaf_Config_Ini::get with separator '.' such as 'a.b.c', same as yaf 2.2.9


## 中文介绍
php版本的[yaf](pecl.php.net/package/yaf)，修改自 [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport)，目的是更好的兼容yaf 2.29

## 更新日志
2015-01-12:

	1. 复制代码 [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport) 

2015-01-13:

	1. loader.php文件移除了APPLICATION_PATH常量，并兼容php 5.2版本
	2. 添加了Yaf框架YAF_VERSION, YAF_ENVIRON, YAF_ERR_STARTUP_FAILED等常量
	3. 实现了yaf 2.2.9版本的action调用机制
	4. 实现了yaf 2.2.9版本的catchException错误捕获机制，跳转Error Controller和error Action处理
	5. 实现了Yaf_Request_Abstract::getException和getParam('exception')
	6. Yaf_Dispatcher::autoRender和flushInstantly如果参数为null默认返回当前状态
	7. G.php文件修正了php 5.2版本ini_get如果配置项不存在返回空字符串而不是false导致的bug
	8. 修改了view可以渲染上层目录的tpl文件，兼容yaf 2.2.9
	9. 其它一些bug修正

2015-01-14:

	1. Yaf_Config_Ini::get支持'.'分隔符获取，如'a.b.c'，兼容yaf 2.2.9
