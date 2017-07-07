<?php

namespace Omnipay\Globalcollect;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\GatewayInterface;

class Gateway extends AbstractGateway implements GatewayInterface
{
    public function getName()
    {
        return 'Globalcollect';
    }
}