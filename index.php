<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

//包含微信开发框架
include './vendor/LaneWeChat/lanewechat.php';

define("WECHAT_URL"			, 'http://120.25.230.122/WeChatThink/index.php/Home/Validate/validate');
define('WECHAT_TOKEN'		, 'gamelifewechat');
define('ENCODING_AES_KEY'	, "FzIi8KK8NMDfklSosaUczoCfkb5FWLUMvckKNFMQQTU");
define("WECHAT_APPID"		, 'wxfbd63294bde0e411');
define("WECHAT_APPSECRET"	, 'ed8b5b18a7efb8bb53dca5b26789b96c');


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单