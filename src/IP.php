<?php

namespace SmartJson\IpLocationZh;

class IP
{
    private static $ip = NULL;

    private static $fp = NULL;
    private static $offset = NULL;
    private static $index = NULL;

    public static function find($ip, $language = 'CN')
    {
        if (empty($ip) === TRUE) {
            return 'N/A';
        }

        $baseStation = self::init();
        return $baseStation->find($ip, $language);
    }

    public static function findInfo($ip, $language = 'CN')
    {
        if (empty($ip) === TRUE) {
            return 'N/A';
        }

        $baseStation = self::init();
        return $baseStation->findInfo($ip, $language);
    }

    public static function findMap($ip, $language = 'CN')
    {
        if (empty($ip) === TRUE) {
            return 'N/A';
        }

        $baseStation = self::init();
        return $baseStation->findMap($ip, $language);
    }

    private static function init()
    {
        $baseStation = new BaseStation(__DIR__ . '/ipipfree.ipdb');
        return $baseStation;
    }

    public function __destruct()
    {
        if (self::$fp !== NULL) {
            fclose(self::$fp);

            self::$fp = NULL;
        }
    }
}

?>