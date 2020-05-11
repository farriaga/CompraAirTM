<?php
require_once 'Gateway.php';
 
if (isset($_POST['submit'])) {
 
    try {
        $response = $gateway->purchase(array(
            'amount' => $_POST['amount'],
            'currency' => AIRTM_CURRENCY,
            'returnUrl' => AIRTM_RETURN_URL,
            'cancelUrl' => AIRTM_CANCEL_URL,
        ))->send();
 
        if ($response->isRedirect()) {
            $response->redirect(); // this will automatically forward the customer
        } else {
            // not successful
            echo $response->getMessage();
        }
    } catch(Exception $e) {
        echo $e->getMessage();
    }
}