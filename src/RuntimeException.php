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
 * Class RuntimeException
 * @package exception
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
    use ExceptionFormatTrait;
}
