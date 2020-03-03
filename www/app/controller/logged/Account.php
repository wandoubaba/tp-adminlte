<?php
namespace app\controller\logged;

use app\BaseController;
use think\facade\View;

/**
 * 账户相关页面集合，对应view/pages/logged/account
 * 登录后的页面示例
 * 仅做演示
 * 实际开发中各个页面的标题、模板等可以通过编程来实现
 */
class Account extends BaseController
{
    /**
     * change-password
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-03
     * @return [type]     [description]
     */
    public function changePassword()
    {
        View::assign('pagetitle', '修改密码');
        return View::fetch('pages/logged/account/change-password');
    }
}