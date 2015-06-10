<?php
/**
 *	Model基类
 */
namespace Common\Model;
use Think\Model;

class BaseModel extends Model{

	public function __construct(){
		parent::__construct();
	}
	
	/**
	 *
	 * @abstract 模型通用查询
	 * @param array  $map
	 * @param string $field
	 * @param string $order
	 * @param array $limit
	 * @return array
	 */
	public function getData($map, $field = '*', $order = '', $limit = array()) {
	    $r = array();
	    if (empty($order)) {
	        $order = $this->primaryKey . ' ASC';
	    }
	    if (empty($limit)) {
	        $r = $this->where($map)->field($field)->order($order)->select();
	    } else {
	        $r = $this->where($map)->field($field)->order($order)->limit($limit[0] . ',' . $limit[1])->select();
	    }
	
	    return $r;
	}
	
	
	
	
}
