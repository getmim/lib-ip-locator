<?php
/**
 * Locator
 * @package lib-ip-locator
 * @version 0.0.1
 */

namespace LibIpLocator\Library;

class Locator
{
    static function find(string $ip): ?object {
        $opts = \Mim::$app->config->libIpLocator;

        $result  = null;
        $res_cls = null;

        foreach($opts->finder as $cls => $index){
            $result = $cls::find($ip);
            if(is_null($result))
                continue;
            $res_cls = $cls;
            break;
        }

        if(!$result)
            return null;

        foreach($opts->keeper as $cls => $index)
            $cls::keep($res_cls, $ip, $result);

        return $result;
    }
}