## Introduction
The php implements of [yaf](pecl.php.net/package/yaf), forked from [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport), in order to fit yaf 2.2.9 better

## Changelog
2015-01-12:

	1. Forked from https://github.com/mzsolti/yaf-phpport

2015-01-13:

	1. Fix bug in loader.php for php 5.2 and remove APPLICATION_PATH
	2. Add Yaf constants YAF_VERSION, YAF_ENVIRON, YAF_ERR_STARTUP_FAILED etc...
	3. Implemented usage of action like yaf 2.2.9
	4. Implemented catchException with Error Controller and error Action like yaf 2.2.9
	5. Implemented Yaf_Request_Abstract::getException and getParam('exception')
	6. Yaf_Dispatcher::autoRender,flushInstantly return current state if parameter is null
	7. G.php fix a bug that php 5.2 ini_get return '' if not found
	8. View can render tpl in parent dir, same as yaf 2.2.9
	9. Fixed a lot of bug

2015-01-14:

	1. Implemented Yaf_Config_Ini::get with separator '.', such as 'a.b.c', same as yaf 2.2.9
	2. Implemented sample application and sample code
	3. Implemented Yaf_View_Simple::eval with magic method __call
	4. Implemented Yaf_Response::setBody,getBody,clearBody,prependBody,appendBody with key, same as yaf 2.2.9
	5. Yaf_Dispatcher::dispatch replace Yaf_Response_Abstract::setBody with appendBody, same as yaf 2.2.9
	6. Yaf_Dispatcher::dispatch will auto clear body after response send if returnResponse off, same as yaf 2.2.9
	7. Yaf_Dispatcher::dispatch will auto response and clear body when catchException with Error Controller and error Action, same as yaf 2.2.9

## About
Document: http://yaf.laruence.com/manual/index.html  
Yaf: http://pecl.php.net/package/yaf  
Author: http://www.lszzy.com  


## 介绍
php版本的[yaf](pecl.php.net/package/yaf)，修改自 [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport)，目的是更好的兼容yaf 2.29

## 更新日志
2015-01-12:

	1. 复制代码 https://github.com/mzsolti/yaf-phpport

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
	2. 编写sample应用和示例代码
	3. 实现了Yaf_View_Simple::eval，使用php魔术方式__call
	4. Yaf_Response::setBody,getBody,clearBody,prependBody,appendBody增加key参数，兼容yaf 2.2.9
	5. Yaf_Dispatcher::dispatch替换Yaf_Response_Abstract::setBody为appendBody，兼容yaf 2.2.9
	6. Yaf_Dispatcher::dispatch在returnResponse关闭时，response响应完成后将会自动清除body，兼容yaf 2.2.9
	7. Yaf_Dispatcher::dispatch在catchException开启时，执行Error Controller和error Action时会自动响应并清空body，兼容yaf 2.2.9

## 关于
官方文档：http://yaf.laruence.com/manual/index.html  
Yaf：http://pecl.php.net/package/yaf  
个人主页：http://www.lszzy.com  
