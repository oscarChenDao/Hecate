<?php
namespace DDL\Controller;
use Common\Controller\BaseController;
use Common\Service;

class CreateController extends BaseController {
    
    function __construct() {
        parent::__construct();
        $this->assign('checkMenu','CreateTable');   //左侧导航选中
        
    }
    
    public function table(){
        
        $this->display();
    }
    
    /**
     * 选择表字段
     */
    public function tableIndex(){
        $table_name = I('post.name');
        $table_comment = I('post.comment');
        if($table_name == '' or $table_comment == ''){
            $this->error('请填写表名和备注。');
        }  
        if($table_name == ''){
            $this->error('请填写表名。');
        }
        if($table_comment == ''){
            $this->error('请填写备注。');
        }

        
        $this->display();
    }
    
    /**
     * 右侧数据
     */
    public function right(){
    	
    }
    
}