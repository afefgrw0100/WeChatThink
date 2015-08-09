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

class ValidateController extends Controller 
{
	public function validate() {

		// echo WECHAT_TOKEN;
		
		$wechat = new Wechat(C('WECHAT_TOKEN'), true);

		$wechat->checkSignature();
	}
}