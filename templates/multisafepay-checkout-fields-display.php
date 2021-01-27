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
?>

<?php if ( $this->description ) { ?>
    <p><?php echo esc_html( $this->description ); ?></p>
<?php } ?>

<?php if ( isset( $issuers ) ) { ?>
    <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_issuer_id_field">
        <label for="<?php echo esc_attr( $this->id ); ?>_issuer_id" class=""><?php echo esc_html__( 'Issuer', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
        <span class="woocommerce-input-wrapper">
            <select name="<?php echo esc_attr( $this->id ); ?>_issuer_id" id="<?php echo esc_attr( $this->id ); ?>_issuer_id">
                <option value=""><?php echo esc_html__( 'Select an issuer', 'multisafepay' ); ?></option>
                    <?php foreach ( $issuers as $issuer ) : ?>
                        <option value="<?php echo esc_attr( $issuer->getCode() ); ?>"><?php echo esc_html( $issuer->getDescription() ); ?></option>
                    <?php endforeach; ?>
            </select>
        </span>
    </p>
<?php } ?>

<?php if ( $this->checkout_fields_ids ) { ?>
    <?php if ( in_array( 'salutation', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_salutation_field">
            <label for="<?php echo esc_attr( $this->id ); ?>_salutation" class=""><?php echo esc_html__( 'Salutation', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
            <span class="woocommerce-input-wrapper">
                <select name="<?php echo esc_attr( $this->id ); ?>_salutation" id="<?php echo esc_attr( $this->id ); ?>_salutation">
                    <option value=""><?php echo esc_html__( 'Select an option', 'multisafepay' ); ?></option>
                    <option value="male"><?php echo esc_html__( 'Mr', 'multisafepay' ); ?></option>
                    <option value="female"><?php echo esc_html__( 'Mrs', 'multisafepay' ); ?></option>
                    <option value="female"><?php echo esc_html__( 'Miss', 'multisafepay' ); ?></option>
                </select>
            </span>
        </p>
    <?php } ?>
    <?php if ( in_array( 'gender', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_gender_field">
            <label for="<?php echo esc_attr( $this->id ); ?>_gender" class=""><?php echo esc_html__( 'Gender', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
            <span class="woocommerce-input-wrapper">
                <select name="<?php echo esc_attr( $this->id ); ?>_gender" id="<?php echo esc_attr( $this->id ); ?>_gender">
                    <option value=""><?php echo esc_html__( 'Select an option', 'multisafepay' ); ?></option>
                    <option value="male"><?php echo esc_html__( 'Male', 'multisafepay' ); ?></option>
                    <option value="female"><?php echo esc_html__( 'Female', 'multisafepay' ); ?></option>
                </select>
            </span>
        </p>
    <?php } ?>
    <?php if ( in_array( 'birthday', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_birthday_field">
            <label for="<?php echo esc_attr( $this->id ); ?>_birthday" class=""><?php echo esc_html__( 'Date of birth', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
            <span class="woocommerce-input-wrapper">
                <input type="date" class="input-text" name="<?php echo esc_attr( $this->id ); ?>_birthday" id="<?php echo esc_attr( $this->id ); ?>_birthday" placeholder="dd-mm-yyyy"/>
            </span>
        </p>
    <?php } ?>
    <?php if ( in_array( 'bank_account', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_bank_account_field">
            <label for="<?php echo esc_attr( $this->id ); ?>_bank_account_field" class=""><?php echo esc_html__( 'Bank Account', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
            <span class="woocommerce-input-wrapper">
                <input type="text" class="input-text" name="<?php echo esc_attr( $this->id ); ?>_bank_account" id="<?php echo esc_attr( $this->id ); ?>_bank_account_field" placeholder=""/>
            </span>
        </p>
    <?php } ?>
    <?php if ( in_array( 'account_holder_name', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_account_holder_name_field">
            <label for="<?php echo esc_attr( $this->id ); ?>_account_holder_name" class=""><?php echo esc_html__( 'Account Holder Name', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
            <span class="woocommerce-input-wrapper">
                <input type="text" class="input-text" name="<?php echo esc_attr( $this->id ); ?>_account_holder_name" id="<?php echo esc_attr( $this->id ); ?>_account_holder_name" placeholder=""/>
            </span>
        </p>
    <?php } ?>
    <?php if ( in_array( 'account_holder_iban', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide validate-required" id="<?php echo esc_attr( $this->id ); ?>_account_holder_iban_field">
            <label for="<?php echo esc_attr( $this->id ); ?>_account_holder_iban" class=""><?php echo esc_html__( 'Account IBAN', 'multisafepay' ); ?><abbr class="required" title="required">*</abbr></label>
            <span class="woocommerce-input-wrapper">
                <input type="text" class="input-text" name="<?php echo esc_attr( $this->id ); ?>_account_holder_iban" id="<?php echo esc_attr( $this->id ); ?>_account_holder_iban" placeholder=""/>
            </span>
        </p>
    <?php } ?>
    <?php if ( in_array( 'emandate', $this->checkout_fields_ids, true ) ) { ?>
        <p class="form-row form-row-wide" id="<?php echo esc_attr( $this->id ); ?>_emandate_field" style="display: none">
            <label for="<?php echo esc_attr( $this->id ); ?>_emandate" class=""><?php echo esc_html__( 'Emandate', 'multisafepay' ); ?><span class="optional"><?php echo esc_html__( '(optional)', 'multisafepay' ); ?></span></label>
            <span class="woocommerce-input-wrapper">
                <input type="hidden" name="<?php echo esc_attr( $this->id ); ?>_emandate" id="<?php echo esc_attr( $this->id ); ?>_emandate" value="1" />
            </span>
        </p>
    <?php } ?>
<?php } ?>
