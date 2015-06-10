<?php
return array(
        
        
    'DEFAULT_MODULE'        =>  'Index',    //默认加载模块    
    'URL_MODEL'             =>  2,          //URL模式
    
    //缓存配置
    'DATA_CACHE_ON'         =>  true,       //自动缓存管理，缓存开关
    'DATA_CACHE_TIME'       =>  180,        //数据缓存有效期 0表示永久缓存
    'DATA_CACHE_PREFIX'     =>  'hecate_',  //缓存前缀
    'DATA_CACHE_TYPE'       =>  'File',     // 数据缓存类型
    //'DATA_CACHE_TYPE'     =>  'Redis',    //数据缓存类型
    'REDIS_HOST'            =>  '127.0.0.1',//Redis服务器地址
    'REDIS_PORT'            =>  '6379',     //Redis服务器端口
    
    //密码加密常量
    'PASS_WORD_KEY'         =>'',           //用于密码加密
        
    //数据库配置
    'DB_TYPE'               =>  'mysql',    //数据库类型
    'DB_HOST'               =>  '127.0.0.1',//数据库服务器地址
    'DB_NAME'               =>  'hecate',   //数据库名
    'DB_USER'               =>  'root',     //数据连接登录名
    'DB_PWD'                =>  '',         //数据库登录密码
    'DB_PORT'               =>  '3306',     //数据库端口

     //过滤
    'DEFAULT_FILTER'        =>  'trim,htmlspecialchars',
	'LOAD_EXT_CONFIG'		=> 'test,define',
        
);
