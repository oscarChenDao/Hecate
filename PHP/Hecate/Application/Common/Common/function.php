<?php

/**
 * +----------------------------------------------------------
 * 公用函数
 * +----------------------------------------------------------
 */

/**
 * service方法封装
 * 
 * @param string $name            
 * @return object
 * @example service('User\User');
 */
function service($name)
{
	if(empty($name))
		throw_exception('service方法参数不能为空');
	static $_model = array();
	$layer = 'Service';
	if(isset($_model[$name . $layer]))
		return $_model[$name . $layer];
	$class = parse_res_name($name, $layer);
	if(class_exists($class))
	{
		$model = new $class(basename($name));
	} elseif(false === strpos($name, '/'))
	{
		// 自动加载公共模块下面的模型
		if(!C('APP_USE_NAMESPACE'))
		{
			import('Common/' . $layer . '/' . $class);
		} else
		{
			$class = '\\Common\\' . $layer . '\\' . $name . $layer;
		}
		$model = class_exists($class) ? new $class($name) : throw_exception($class . '不存在');
	} else
	{
		throw_exception($class . '不存在');
	}
	$_model[$name . $layer] = $model;
	return $model;
}	