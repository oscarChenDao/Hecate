<?php
/**
 * ************************
 * 注意：                  *
 * 不要在这写任何一个业务逻辑! *
 * ************************
 */
namespace Common\Model\Test;
use Common\Model\BaseModel;

class TestModel extends BaseModel {
    
    protected $tableName = 'test';
    protected $primaryKey = 'id';

    public function __construct(){
        parent::__construct();
    }


}
