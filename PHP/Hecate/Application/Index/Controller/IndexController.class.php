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
        //var_dump($_SERVER);exit;
        $username = I('post.username','','trim');
        $password = I('post.password','','trim');
        if(empty($username) && empty($password)){
            $this->error('用户名或密码错误');
        }
        $login = service('User\User')->login($username,$password);
        if($login['error']===false){
            $this->error($login['msg']);    
        }else{
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
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
        $data=array(
            'username' =>I('post.username','','trim'),
            'password' => I('post.password','','trim'),
            'repassword' => I('post.repassword','','trim'),
            'create_time' => time(),
        );
        
        $rules = array(     
            array('username','require','用户名必须！'), //默认情况下用正则进行验证  
            array('username','/^[0-9a-zA-Z\x{4e00}-\x{9fa5}][0-9a-zA-Z\x{4e00}-\x{9fa5}_]*$/u','用户名格式不正确',1,'regex'), 
            array('password','6,20','密码长度6-20',1,'length'), 
            array('username','','帐号名称已经存在！',1,'unique',1), // 在新增的时候验证name字段是否唯一       
            array('repassword','password','确认密码不正确',1,'confirm'), // 验证确认密码是否和密码一致     
        );
        $userModel = M('user');
        $va=$userModel->validate($rules)->create($data);
        if($va===false){
            //var_dump(M('user')->getError());
           $this->error((M('user')->getError()));
        }
        $userModel->password = md5($userModel->password);
        $add=M('user')->add();
        if($add){
            //TODO
            $this->success('注册成功',U('login'));    
        }else{
            $this->error('注册失败');  
        }

       // $this->display();
    }
}

