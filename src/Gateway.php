<?php
/**
 * Payconiq Gateway
 */

namespace Omnipay\PayconiqA2A;

use Omnipay\Common\AbstractGateway;


class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'payconiqa2a';
    }

    public function getDefaultParameters()
    {
        return [
            'apiKey' => '',
        ];
    }

    public function getTestMode()
    {
        return $this->getParameter('testMode');
    }

    public function setTestMode($value)
    {
        return $this->setParameter('testMode', $value);
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->getParameter('apiKey');
    }

    /**
     * @param  string $value
     * @return $this
     */
    public function setApiKey($value)
    {
        return $this->setParameter('apiKey', $value);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Payconiq\Message\PurchaseRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\PayconiqA2A\Message\PurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Payconiq\Message\FetchTransactionRequest
     */
    public function fetchTransaction(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\PayconiqA2A\Message\FetchTransactionRequest', $parameters);
    }
}
