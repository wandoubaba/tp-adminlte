<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

/**
 * 关于登入、登出、注册、改密等账户操作的控制器
 * 对应视图目录pages/sign下的页面
 */
class Sign extends BaseController
{
    /**
     * login page
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-01
     * @return [type]     [description]
     */
    public function login()
    {
        return View::fetch('pages/sign/login');
    }

    /**
     * register page
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-01
     * @return [type]     [description]
     */
    public function register()
    {
        return View::fetch('pages/sign/register');
    }

    /**
     * forgot-password page
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-01
     * @return [type]     [description]
     */
    public function forgotPassword()
    {
        return View::fetch('pages/sign/forgot-password');
    }

    /**
     * recover-password page
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-01
     * @return [type]     [description]
     */
    public function recoverPassword()
    {
        return View::fetch('pages/sign/recover-password');
    }
}