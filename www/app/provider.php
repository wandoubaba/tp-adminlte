<?php
use app\ExceptionHandle;
use app\Request;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
    // 启用bootstrap分页样式（需要前端引用对应的样式库）
    'think\Paginator'        => \bigDream\thinkPaginatorDriver\Bootstrap4::class,
    // 启用layui分页样式（需要前端引用对应的样式库）
    // 'think\Paginator'        => \bigDream\thinkPaginatorDriver\Layui::class,
    // 启用AmazeUI分页样式（需要前端引用对应的样式库）
    // 'think\Paginator'        => \bigDream\thinkPaginatorDriver\AmazeUI::class,
    // 启用Foundation分页样式（需要前端引用对应的样式库）
    // 'think\Paginator'        => \bigDream\thinkPaginatorDriver\Foundation::class,
];
