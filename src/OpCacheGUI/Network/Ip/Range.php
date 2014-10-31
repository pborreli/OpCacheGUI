<?php
/**
 * IP range converter for a range
 *
 * E.g. 10.0.0.1-10.0.1.100
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @package    Network
 * @subpackage Ip
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2014 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace OpCacheGUI\Network\Ip;

/**
 * IP range converter for a range
 *
 * @category   OpCacheGUI
 * @package    Network
 * @subpackage Ip
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class Range implements Converter
{
    /**
     * Converts an IP address or range into a range to easily check for access
     *
     * @param string The IP address / range
     *
     * @return float[] Array containing the first and last ip in the range
     */
    public function convert($address)
    {
        $parts = explode('-', $address);

        return [
            (float) sprintf('%u', ip2long(trim($parts[0]))),
            (float) sprintf('%u', ip2long(trim($parts[1]))),
        ];
    }
}
