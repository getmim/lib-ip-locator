<?php
/**
 * Finder
 * @package lib-ip-locator
 * @version 0.0.1
 */

namespace LibIpLocator\Iface;

interface Finder
{
    static function find(string $ip): ?object;
}