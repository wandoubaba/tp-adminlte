<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class Login extends BaseController
{
    /**
     * [index description]
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-01
     * @return [type]     [description]
     */
    public function index()
    {
        return View::fetch('login');
    }
}