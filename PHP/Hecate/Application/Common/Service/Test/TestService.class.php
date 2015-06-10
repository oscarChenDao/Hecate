<?php
/**
 *	@abstract 测试服务
 * 注意：
 * 业务逻辑都写在Service
 */
namespace Common\Service\Test;
use Common\Service\BaseService;
use Common\Model;

class TestService extends BaseService{
    
    /**
     * 测试服务
     * @param int $num
     * @return str
     */
    public function test($num){
        //确定好返回类型
        $data = '';
        
        //注意来源检查
        $num = intval($num);
        if($num == 1){
            
            $data = 'Hello ';
            
            return $data;
        }
        
        return $data;
    }
    
    /**
     * 测试Mysql
     * @return array()
     */
    public function testMysql(){
        
        //确定好返回值
        $data = array();
        
        //D方法为单例方法。
        $data = D('Test\test')->getData();
        if(!empty($data)){
            return $data;
        }
        
        return $data;
    }   
    
	
}
