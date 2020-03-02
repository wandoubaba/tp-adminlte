# tp-adminlte
 A web console template integrating ThinkPHP and AdminLTE
----
 * ThinkPHP版本：[6.0.0](http://www.thinkphp.cn/)
 * AdminLTE版本：[3.0.2](https://github.com/ColorlibHQ/AdminLTE)
   
 感谢ThinkPHP和AdminLTE开发者
----
 本项目是为快速搭建管理后台框架而设立。  

 项目仅做视图与控制器的整合，不会做任何业务逻辑（包括登录鉴权）方面的设计。  

 同时，本项目也不涉及任何数据库与数据表的设计。  
----

## 使用方法  

将www目录下的所有文件复制到站点目录，并将启动目录定位到www下的public目录（与thinkphp的配置方法相同），将.example.env文件保存为.env文件并将其中的参数按照自己的需要进行修改，然后便可开箱即用。  

项目添加了一些诸如app_name、version、developer_name之类的自定义配置，都可以在.env文件中进行配置。  

更改浏览器图标请替换public/favicon.ico文件  

更改页面中的logo请替换public/static/common/logo*系列文件  

其他内容可自由发挥。  

