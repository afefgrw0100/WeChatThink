<?php
/**
 * time: 2015-08-10;
 * 
 * author: Gamelife;
 * 
 * description: 主要用于服务器接入验证;
 * 
 */
namespace Home\Controller;

use Think\Controller;
use LaneWeChat\Core\Wechat;

class ValidateController extends Controller 
{
	public function validate() {

		$wechat = new Wechat(C('WECHAT_TOKEN'), true);

		$wechat->checkSignature();

	}
}