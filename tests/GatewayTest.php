<?php

namespace Omnipay\Globalcollect\Tests;

use Omnipay\Globalcollect\Gateway;
use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    protected $gateway;

    public function setUp()
    {
        parent::setUp();
        
        $this->gateway = new Gateway();
    }
}