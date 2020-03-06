<?php
use app\ExceptionHandle;
use app\Request;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
    // 引入bootstrap分页样式
    'think\Paginator'        => 'app\controller\common\BootstrapPaginator',
];
