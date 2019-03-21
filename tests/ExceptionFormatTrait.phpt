<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/exceptions
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

use Tester\Assert;

class TestException extends Exception implements \Webino\ExceptionInterface
{
    use Webino\ExceptionFormatTrait;
}


Tester\Environment::setup();

$str = 'foo';
$obj = new stdClass;
$arr = ['foo'];


$exc01 = (new TestException(''))->format();
$exc02 = (new TestException('Test exception %s.'))->format($str);
$exc03 = (new TestException('Test exception %s.'))->format($obj);
$exc04 = (new TestException('Test exception %s.'))->format($arr);


Assert::same('', $exc01->getMessage());
Assert::same('Test exception `foo`.', $exc02->getMessage());
Assert::same('Test exception `stdClass`.', $exc03->getMessage());
Assert::same('Test exception `' . var_export($arr, true) . '`.', $exc04->getMessage());
