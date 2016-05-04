<?php
/**
*传统的加载方式：include include_once require require_once
*模块的自动加载：autoload;	
*/
require_once 'autoload.php';	//只需要加载此文件即可，自动加载类

app\Queryphone::query('1232322323');
app\Queryphone::store('phone test');
