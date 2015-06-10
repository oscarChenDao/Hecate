<?php
namespace Test\Controller;
use Common\Controller\BaseController;
use Common\Service;

class IndexController extends BaseController {
    
    public function index(){
        //这个首页公共模板
        //统一用$data像模板赋值
        $data = array();
        
        //echo '这是一个测试模块。';
        //echo '</br>';
        
        //这是服务是这样调用的 service
        $serviceTest = service('Test\Test');
        $hello = $serviceTest->test(1);
        
        //testMysql
        $world = $serviceTest->testMysql();
        
        //dump($world);
        
        $data['hi'] =  $hello.$world[0]['test'].'!';
        $this->assign('data', $data);
        
        $this->display();
    }
    
    //ddl 公共模板
    public function ddl(){
        
        $this->assign('checkMenu','CreateTable');   //左侧导航选中
        
        $this->display();
    }
    
}