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

Tester\Environment::setup();

$a = 'A';
$b = 'B';


$exc = (new Webino\UnexpectedValueException('Unexpected value exception %s, %s.'))->format($a, $b);


Assert::same('Unexpected value exception `A`, `B`.', $exc->getMessage());
