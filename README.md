### ip-location-zh project
ipip.net resource, Fetch provincial information via IP

##Install

> composer require "smartJson/ips-location-zh"

##Usage

对于普通项目：
`require 'vendor/autoload.php';  
 use smartJson\IpLocationZh\Ip;  
 var_dump(Ip::find('ip address'));`

Return info
`array:4 [
   0 => "中国"
   1 => "上海"
   2 => "上海"
   3 => ""
 ]`

对于laravel可以这样优雅的用:

1.安装该插件

2.在 app/config/app.php 文件内添加

`'aliases' => array( 
     'Ip'  => 'smartJson\IpLocationZh\Ip', 
),`

3.然后开始在你的项目里面使用了 Ip::find('ip address') 或 Ip::find(Request::getClientIp())

##License MIT