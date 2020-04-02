# tp-adminlte
 A web console template integrating ThinkPHP and AdminLTE  

---  
## 感谢所有被引入项目的开发者  
 主要引入项目：
* ThinkPHP版本： [6.0.0](http://www.thinkphp.cn/)  
* AdminLTE版本： [3.0.4](https://github.com/ColorlibHQ/AdminLTE)  
* Bootstrap版本： [4.4.1](https://github.com/twbs/bootstrap)
* axios版本： [0.19.2](https://github.com/axios/axios)
* JQuery版本： [3.4.1](https://github.com/jquery/jquery)
* Font-Awesome版本： [5.13.0](https://github.com/FortAwesome/Font-Awesome)
* ionicons版本： [4.6.3](https://github.com/ionic-team/ionicons/tree/4.x)
* layer版本： [3.1.1](https://github.com/sentsin/layer)
* iCheck版本： [1.0.2](https://github.com/fronteed/icheck)
* jquery-validation版本： [1.19.1](https://github.com/jquery-validation/jquery-validation)
* ionicons版本： [4.6.3](https://github.com/ionic-team/ionicons/tree/4.x)
* clamp版本： [0.5.1](https://github.com/xavi160/Clamp.js)
* jquery.serializeJSON版本 [2.9.0](https://github.com/marioizquierdo/jquery.serializeJSON)

---
# 项目简介
 本项目是为快速搭建管理后台框架而设立。  
 项目仅做视图与控制器的整合，不会做任何业务逻辑（包括登录鉴权）方面的设计。
 同时，本项目也不涉及任何数据库与数据表的设计。  

 ## 目前已实现
 * 登录、注册、找回密码等login之前的页面  
 
 控制台页面包括：
  * 列表示例
  * 面板示例
  * 通过bootstrap的modal实现的弹出层（以修改密码为例）
  * 通过layer实现的提示框（轻提示）

------

# 使用方法
 将www目录下的所有文件复制到站点目录，并将启动目录定位到www下的public目录（与thinkphp的配置方法相同），将.example.env文件保存为.env文件并将其中的参数按照自己的需要进行修改，然后便可开箱即用。  

 项目添加了一些诸如app_name、version、developer_name之类的自定义配置，都可以在.env文件中进行配置。  

 更改浏览器图标请替换public/favicon.ico文件  

 更改页面中的logo请替换public/static/common/logo*系列文件  

 其他内容可自由发挥。  

