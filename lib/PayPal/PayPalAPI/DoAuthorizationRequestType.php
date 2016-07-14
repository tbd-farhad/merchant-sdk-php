<?php
namespace PayPal\PayPalAPI;

use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\AbstractRequestType;
use PayPal\EBLBaseComponents\AddressType;
use PayPal\EBLBaseComponents\PaymentDetailsItemType;

/**
 * The value of the order’s transaction identification number
 * returned by a PayPal product. Required Character length and
 * limits: 19 single-byte characters maximum
 */
class DoAuthorizationRequestType
  extends AbstractRequestType
{
    /**
     * The value of the order’s transaction identification number
     * returned by a PayPal product. Required Character length and
     * limits: 19 single-byte characters maximum
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionID;

    /**
     * Type of transaction to authorize. The only allowable value
     * is Order, which means that the transaction represents a
     * customer order that can be fulfilled over 29 days. Optional
     * @access    public
     * @namespace ns
     * @var string
     */
    public $TransactionEntity;

    /**
     * Amount to authorize. Required Limitations: Must not exceed
     * $10,000 USD in any currency. No currency symbol. Decimal
     * separator must be a period (.), and the thousands separator
     * must be a comma (,).
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $Amount;

    /**
     * Address the order will be shipped to. Optional
     * @access    public
     * @namespace ebl
     * @var AddressType
     */
    public $ShipToAddress;

    /**
     * Information about the individual purchased items
     * @access    public
     * @namespace ebl
     * @var PaymentDetailsItemType[]
     */
    public $PaymentDetailsItem;

    /**
     * Sum of cost of all items in this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $ItemTotal;

    /**
     * Total shipping costs for this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $ShippingTotal;

    /**
     * Total handling costs for this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $HandlingTotal;

    /**
     * Sum of tax for all items in this order. You must set the
     * currencyID attribute to one of the three-character currency
     * codes for any of the supported PayPal currencies. Optional
     * Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and
     * the thousands separator must be a comma (,).
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $TaxTotal;

    /**
     * Total shipping insurance costs for this order. Optional
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $InsuranceTotal;

    /**
     * Shipping discount for this order, specified as a negative
     * number. Optional
     * @access    public
     * @namespace ns
     * @var BasicAmountType
     */
    public $ShippingDiscount;

    /**
     * Description of items the customer is purchasing. Optional
     * Character length and limitations: 127 single-byte
     * alphanumeric characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $OrderDescription;

    /**
     * A free-form field for your own use. Optional Character
     * length and limitations: 256 single-byte alphanumeric
     * characters
     * @access    public
     * @namespace ns
     * @var string
     */
    public $Custom;

    /**
     * Unique id for each API request to prevent duplicate
     * payments. Optional Character length and limits: 38
     * single-byte characters maximum.
     * @access    public
     * @namespace ns
     * @var string
     */
    public $MsgSubID;

    /**
     * IP Address of the buyer
     * @access    public
     * @namespace ns
     * @var string
     */
    public $IPAddress;

    /**
     * Constructor with arguments
     *
     * @param string          $TransactionID
     * @param BasicAmountType $Amount
     */
    public function __construct($TransactionID = null, $Amount = null)
    {
        $this->TransactionID = $TransactionID;
        $this->Amount        = $Amount;
    }
}
