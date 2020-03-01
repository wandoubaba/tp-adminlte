<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

Route::get('hello/:name', 'index/hello');

// 首页 <domain>
Route::rule('/', function () {
    // 自动跳转到登录页
    return redirect((string) url('login'));
});

/**
 * 虚拟分组，强制所有url必须以.html后缀结尾
 */
Route::group(function () {
    // 登录页 <domain>/login.html
    Route::rule('login', 'sign/login');
    // 注册页 <domain>/register.html
    Route::rule('register', 'sign/register');
})->ext('html');
