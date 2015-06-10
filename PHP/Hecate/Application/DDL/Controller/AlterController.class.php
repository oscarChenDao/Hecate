<?php
namespace DDL\Controller;
use Common\Controller\BaseController;
use Common\Service;

class AlterController extends BaseController {
    
    function __construct() {
        parent::__construct();
        $this->assign('checkMenu','AlterTable');   //左侧导航选中
    }
    
    public function table(){
        
        $this->display();
    }
    
}