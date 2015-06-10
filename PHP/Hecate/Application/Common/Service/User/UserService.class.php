<?php
/**
 *	@abstract 用户相关业务数据服务层
 */
namespace Common\Service\User;
use Common\Service\BaseService;
use Common\Model;

class UserService extends BaseService{
    
    /**
     * [login description]
     * @param  [type] $username [description]
     * @param  [type] $password [description]
     * @return [type]      $data=array(
     *                         'msg'=>''
     *                         'error'=>''
     *                     )     [description]
     */
    public function login($username,$password){
        $data=array(
                'msg'=>'登录成功',
                'error'=>'true',
            );
        if(empty($username) && empty($password)){
            $data['error']=false;
            $data['msg'] = '用户名或密码未填写';
        }

       $one = M('user')->where(array('username'=>$username))->find();
       if($one){
            if(md5($password)!=$one['password']){
               $data['error']=false;
                $data['msg'] = '密码不正确'; 
            }
            $this->loginSession($username,$one);
       }else{
            $data['error']=false;
            $data['msg'] = '用户名不存在';
       }

        return $data;
    }

    /**
     *  
     * @param  [type] $username [description]
     * @param  [type] $info     [单条用户信息]
     * @return [type]           [description]
     */
    private function loginSession($username,$info){
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
            return true;
        }else{
            $_SESSION['username'] = $info;
            return true;
        }        
    }
	
}
