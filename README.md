# yaf-php
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


## ����
php�汾��[yaf](pecl.php.net/package/yaf)���޸��� [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport)��Ŀ���Ǹ��õļ���yaf 2.29

## ������־
2015-01-12:

	1. ���ƴ��� [mzsolti/yaf-phpport](https://github.com/mzsolti/yaf-phpport) 

2015-01-13:

	1. loader.php�ļ��Ƴ���APPLICATION_PATH������������php 5.2�汾
	2. �����Yaf���YAF_VERSION, YAF_ENVIRON, YAF_ERR_STARTUP_FAILED�ȳ���
	3. ʵ����yaf 2.2.9�汾��action���û���
	4. ʵ����yaf 2.2.9�汾��catchException���󲶻���ƣ���תError Controller��error Action����
	5. ʵ����Yaf_Request_Abstract::getException��getParam('exception')
	6. Yaf_Dispatcher::autoRender��flushInstantly�������ΪnullĬ�Ϸ��ص�ǰ״̬
	7. G.php�ļ�������php 5.2�汾ini_get�����������ڷ��ؿ��ַ���������false���µ�bug
	8. �޸���view������Ⱦ�ϲ�Ŀ¼��tpl�ļ�������yaf 2.2.9
	9. ����һЩbug����

2015-01-14:

	1. Yaf_Config_Ini::get֧��'.'�ָ�����ȡ����'a.b.c'������yaf 2.2.9
