<?php
return array(

//*********************************附加设置***********************************
    'SHOW_PAGE_TRACE'       =>  true,                        //关闭Trace信息
//***********************************URL设置*********************************
    'MODULE_ALLOW_LIST'     =>  array('Home','Admin','Api'),  //允许访问列表
//***********************************URL*************************************
    'URL_MODEL'             =>  1,                            // 为了兼容性更好而设置成1 如果确认服务器开启了mod_rewrite 请设置为 2
    'URL_CASE_INSENSITIVE'  =>  false,                        // 区分url大小写
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'icarus', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => 'icarus_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  false, // 数据库调试模式 开启后可以记录SQL日志
);