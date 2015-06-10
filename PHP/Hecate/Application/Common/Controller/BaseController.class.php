<?php
/**
 *	控制器基类
 */
namespace Common\Controller;
use Think\Controller;

class BaseController extends Controller{
    public $uid;
	
	public function __construct(){
		parent::__construct();
		$this->_initUser();
		$this->_getNoNeedLogin();
		
	}

	/**
	 * 初始化用户的session数据
	 */
	private function _initUser(){

	}
	
	
	/**
	 * 判断用户是否需要登录
	 */
	private function _getNoNeedLogin(){
	    $arrModule = array('Test','Index','DDL');
	    if (!in_array(MODULE_NAME, $arrModule) && empty($this->uid)){
	        redirect(U('Index/Index/index'));
	        exit;
	    }
	}


}