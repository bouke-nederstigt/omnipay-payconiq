<?php
/**
 * Date: 10/11/17
 * Time: 10:21
 */

namespace Omnipay\PayconiqA2A\Message;


class PurchaseResponse extends \Omnipay\PayconiqA2A\Message\AbstractResponse
{
    /**
     * When you do a `purchase` the request is never successful because
     * you need to redirect off-site to complete the purchase.
     *
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return false;
    }

    /**
     * Get the transaction reference.
     *
     * @return string
     */
    public function getTransactionReference()
    {
        if (isset($this->data['transactionId'])) {
            return $this->data['transactionId'];
        }
    }
}