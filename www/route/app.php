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
    // 忘记密码 <domain>/forgot-password
    Route::rule('forgot-password', 'sign/forgotPassword');
    // 重设密码 <domain>/recover-password
    Route::rule('recover-password', 'sign/recoverPassword');
    // 登录后的页面 <domain>/logged/...
    Route::group('logged', function () {
        // 控制台首页 index.html
        Route::rule('index', 'logged.pages/index');
        // 空白面板页 blank.html
        Route::rule('blank', 'logged.pages/blank');
        // 表格示例页 table.html
        Route::rule('table', 'logged.pages/table');
        // 与账户相关页集合 <domain>/logged/account/...
        Route::group('account', function () {
            // 修改密码 change-password.html
            Route::rule('change-password', 'logged.account/changePassword');
        });
    });
})->ext('html');
