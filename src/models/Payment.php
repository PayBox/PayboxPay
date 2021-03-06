<?php

/*
 * This file is part of the Pay package in (c)Paybox Integration Component.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Paybox\Pay\Models;

use Paybox\Core\Abstractions\Payment as CorePayment;

/**
 * @see Paybox\Core\Abstractions\Payment
 *
 * @package Paybox\Pay\Models
 * @version 1.2.2
 * @author Sergey Astapenko <sa@paybox.money> @link https://paybox.money
 * @copyright LLC Paybox.money
 * @license GPLv3 @link https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * @property-write int $id
 *
 * @method setId(int $id):bool
 * @method setRefundAmount(int $amount):bool
 *
 */

final class Payment extends CorePayment {

    /**
     * @var int $refundAmount Using for Pay\Facade::revoke and Pay\Facade::refund
     */
    public $refundAmount;

}
