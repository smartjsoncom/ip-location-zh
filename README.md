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

For Laravel:
1. install plugin

USAGE:
```markdown
use SmartJson/IpLocationZh;

Ip::find('ip address') 或 Ip::find(Request::getClientIp());
```.

##License MIT