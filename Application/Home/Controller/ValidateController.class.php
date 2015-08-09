<?php
/**
 * time: 2015-08-10;
 * 
 * author: Gamelife;
 * 
 * description: 用于服务器接入验证和请求转发;
 * 
 */
namespace Home\Controller;

use Think\Controller;
use LaneWeChat\Core\Wechat;
use LaneWeChat\Core\ResponsePassive;

class ValidateController extends Controller 
{
	public function validate() {

		// echo WECHAT_TOKEN;

		$wechat 	= new WeChat(WECHAT_TOKEN, true);

		//$wechat->checkSignature();
		
		$request	= $wechat->getRequest();

		//请求分发
		
		$data		= array();

		switch ($request['msgtype']) {
			case 'text':
						$data = $this->$handle_text($request);
		}

		return $data;	
	}

	public function handle_text(&$request) {
		$content = '这是游戏人生通过自定义开发的服务器，正在测试。。。。';
		return ResponsePassive::text($request['fromusername'], $request['tousername'], $content);
	}
}