<?php declare(strict_types=1);

/**
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the MultiSafepay plugin
 * to newer versions in the future. If you wish to customize the plugin for your
 * needs please document your changes and make backups before you update.
 *
 * @category    MultiSafepay
 * @package     Connect
 * @author      TechSupport <integration@multisafepay.com>
 * @copyright   Copyright (c) MultiSafepay, Inc. (https://www.multisafepay.com)
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MultiSafepay\WooCommerce\Utils;

use MultiSafepay\ValueObject\Money;


/**
 * Class MoneyUtil
 *
 * @package MultiSafepay\WooCommerce\Utils
 * @since    4.0.0
 */
class MoneyUtil {
    public const DEFAULT_CURRENCY_CODE = 'EUR';

    /**
     * @param float  $amount
     * @param string $currency_code
     * @return Money
     */
    public static function create_money( float $amount, string $currency_code = self::DEFAULT_CURRENCY_CODE ): Money {
        return new Money( self::price_to_cents( $amount ), $currency_code );
    }

    /**
     * @param float $price
     * @return float|integer
     */
    private static function price_to_cents( float $price ) {
        return $price * 100;
    }
}
