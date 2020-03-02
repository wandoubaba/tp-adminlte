<?php
namespace app\controller\logged;

use app\BaseController;
use think\facade\View;

/**
 * 登录后的页面示例
 * 仅做演示
 * 实际开发中各个页面的标题、模板等可以通过编程来实现
 */
class Pages extends BaseController
{
    /**
     * （示例）通过程序实现视图变量赋值和渲染
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-02
     * @param  [type]     $page_title [description]
     * @param  [type]     $page_name  [description]
     * @return [type]                 [description]
     */
    public function fetch($page_title, $page_name)
    {
        View::assign('pagetitle', $page_title);
        return View::fetch('pages/logged/' . $page_name);
    }

    /**
     * index
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-02
     * @return [type]     [description]
     */
    public function index()
    {
        View::assign('pagetitle', '控制台首页');
        return View::fetch('pages/logged/index');
    }

    /**
     * blank
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-02
     * @return [type]     [description]
     */
    public function blank()
    {
        View::assign('pagetitle', '空白面板');
        return View::fetch('pages/logged/blank');
    }

    /**
     * table
     * @author aaron<chenqiang@h024.cn>
     * @date   2020-03-02
     * @return [type]     [description]
     */
    public function table()
    {
        View::assign('pagetitle', '表格示例');
        return View::fetch('pages/logged/table');
    }
}