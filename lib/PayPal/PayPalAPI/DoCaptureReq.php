<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

class DoCaptureReq
  extends PPXmlMessage
{
    /**
     * @access    public
     * @namespace ns
     * @var DoCaptureRequestType
     */
    public $DoCaptureRequest;

    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:DoCaptureReq>';
        if ($this->DoCaptureRequest != null) {
            $str .= '<ns:DoCaptureRequest>';
            $str .= $this->DoCaptureRequest->toXMLString();
            $str .= '</ns:DoCaptureRequest>';
        }
        $str .= '</ns:DoCaptureReq>';
        return $str;
    }
}
