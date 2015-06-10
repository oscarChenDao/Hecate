<?php
namespace Index\Controller;
use Common\Controller\BaseController;
use Common\Service;

class IndexController extends BaseController {
    
    /**
     * 首页
     */
    public function index(){
        
        $this->display();
    }
    
    /**
     * 登录
     */
    public function login(){
    	
        $this->display();
    }
    
    /**
     * 登录流程
     */
    public function doLogin(){
         
        $this->display();
    }
    
    
    /**
     * 注册
     */
    public function register(){
        
        $this->display();
    }
    
    /**
     * 注册流程
     */
    public function doRegister(){
    
        $this->display();
    }
}

