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
 * Trait ExceptionFormatTrait
 *
 * Used to format the exception message.
 *
 * @package exception
 */
trait ExceptionFormatTrait
{
    /**
     * Format the exception message via sprintf()
     *
     * @param array<int, mixed> $params Message parameters
     * @return $this
     */
    public function format(...$params)
    {
        if (empty($this->message)) {
            return $this;
        }

        $args = [$this->message];
        foreach ($params as $param) {
            if (is_string($param)) {
                $args[] = '`' . $param . '`';
            } elseif (is_object($param)) {
                $args[] = '`' . get_class($param) . '`';
            } else {
                $args[] = '`' . var_export($param, true) . '`';
            }
        }

        $this->message = call_user_func('sprintf', ...$args);
        return $this;
    }
}
