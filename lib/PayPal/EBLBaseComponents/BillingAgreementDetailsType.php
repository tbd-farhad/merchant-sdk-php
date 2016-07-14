<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

class BillingAgreementDetailsType
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BillingType;

    /**
     * Only needed for AutoBill billinng type.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BillingAgreementDescription;

    /**
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $PaymentType;

    /**
     * Custom annotation field for your exclusive use.
     * @access    public
     * @namespace ebl
     * @var string
     */
    public $BillingAgreementCustom;

    /**
     * Constructor with arguments
     *
     * @param string $BillingType
     */
    public function __construct($BillingType = null)
    {
        $this->BillingType = $BillingType;
    }
}
