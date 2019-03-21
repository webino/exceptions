<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/exceptions
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

/**
 * Interface ExceptionFormatInterface
 * @package exception
 */
interface ExceptionFormatInterface
{
    /**
     * Format the exception message
     *
     * @param array<int, mixed> $params Message parameters
     * @return $this
     */
    public function format(...$params);
}
