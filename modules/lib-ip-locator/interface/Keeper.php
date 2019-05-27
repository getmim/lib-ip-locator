<?php
/**
 * Keeper
 * @package lib-ip-locator
 * @version 0.0.1
 */

namespace LibIpLocator\Iface;

interface Keeper
{
    static function keep(string $finder, string $ip, object $result): void;
}