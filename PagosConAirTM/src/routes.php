<?php

// AirTM

// Envio a AirTM

Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'AirTMController@postPayment',
));

// Redireccion ruta 

Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'AirTMController@getPaymentStatus',
));
