<?php

namespace http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests; 

use AirTM\Rest\ApiContext;
use AirTM\Auth\OAuthTokenCredential;
use AirTM\Api\Amount;
use AirTM\Api\Details;
use AirTM\Api\Item;
use AirTM\Api\ItemList;
use AirTM\Api\Payer;
use AirTM\Api\Payment;
use AirTM\Api\RedirectUrls;
use AirTM\Api\ExecutePayment;
use AirTM\Api\PaymentExecution;
use AirTM\Api\Transaction;




use http\Requests;
use http\Controllers\Controller;

class AirTMController extends BaseController
{
    private $_api_context;

    public function __construct()
    {
        // setup AirTM api context
        $airtm_conf = \Config::get('airtm');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($airtm_conf['client_id'], $airtm_conf['secret']));
        $this->_api_context->setConfig($airtm_conf['settings']);
    }
}