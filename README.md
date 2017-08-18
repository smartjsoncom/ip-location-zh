### ip-location-zh project
ipip.net resource, Fetch provincial information via IP

##Install

> composer require "zhuzhichao/ip-location-zh"

##Usage

对于laravel可以这样优雅的用:

1.安装该插件

2.在 app/config/app.php 文件内添加

`'aliases' => array( 
     'Ip'  => 'smartJson\IpLocationZh\Ip', 
),`

3.然后开始在你的项目里面使用了 Ip::find('171.12.10.156') 或 Ip::find(Request::getClientIp())

##License MIT