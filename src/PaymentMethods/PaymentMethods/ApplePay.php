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

namespace MultiSafepay\WooCommerce\PaymentMethods\PaymentMethods;

use MultiSafepay\WooCommerce\PaymentMethods\Base\BasePaymentMethod;

class ApplePay extends BasePaymentMethod {

    /**
     * ApplePay constructor.
     */
    public function __construct() {
        parent::__construct();
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script' ) );
    }

    /**
     * @return string
     */
    public function get_payment_method_id(): string {
        return 'multisafepay_applepay';
    }

    /**
     * @return string
     */
    public function get_payment_method_code(): string {
        return 'APPLEPAY';
    }

    /**
     * @return string
     */
    public function get_payment_method_type(): string {
        return 'redirect';
    }

    /**
     * @return string
     */
    public function get_payment_method_title(): string {
        return 'Apple Pay';
    }

    /**
     * @return string
     */
    public function get_payment_method_description(): string {
        $method_description = sprintf(
            /* translators: %2$: The payment method title */
            __( 'Apple Pay is a digital wallet service allowing seamless NFC payments for consumers worldwide. <br />Read more about <a href="%1$s" target="_blank">%2$s</a> on MultiSafepay\'s Documentation Center.', 'multisafepay' ),
            'https://docs.multisafepay.com/payment-methods/wallet/applepay/?utm_source=woocommerce&utm_medium=woocommerce-cms&utm_campaign=woocommerce-cms',
            $this->get_payment_method_title()
        );
        return $method_description;
    }

    /**
     * @return string
     */
    public function get_payment_method_icon(): string {
        return 'applepay.png';
    }

    /**
     * Enqueue Javascript to check if Apple Pay is available on the customer device.
     *
     * @return void
     */
    public function enqueue_script(): void {
        if ( is_checkout() ) {
            wp_enqueue_script( 'multisafepay-apple-pay-js', MULTISAFEPAY_PLUGIN_URL . '/assets/public/js/multisafepay-apple-pay.js', array( 'jquery' ), MULTISAFEPAY_PLUGIN_VERSION, true );
        }
    }

}
