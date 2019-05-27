<?php
/**
 * Config
 * @package lib-ip-locator
 * @version 0.0.1
 */

namespace LibIpLocator\Library;

class Config
{

    static function reconfig(object &$configs, string $here) {
        $options = $configs->libIpLocator;

        $keeper = $options->keeper ?? [];
        if(!is_array($keeper))
            $keeper = (array)$keeper;
        asort($keeper);

        $finder = $options->finder ?? [];
        if(!is_array($finder))
            $finder = (array)$finder;
        asort($finder);

        $configs->libIpLocator->keeper = $keeper;
        $configs->libIpLocator->finder = $finder;
    }
}