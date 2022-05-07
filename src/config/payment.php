<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Payment Service Config
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo / ZapakPay / Paytm / Mocker
    */

    'gateway' => 'ccavenue',                // Replace with the name of default gateway you want to use

    'testMode'  => true,                   // True for Testing the Gateway [For production false]

    'ccavenue' => [                         // CCAvenue Parameters
        'merchantId'  => env('PAYMENT_MERCHANT_ID', '881266'),
        'accessCode'  => env('PAYMENT_ACCESS_CODE', '2ABEB3D4F13AB86B6616B5D6C7914B39'),
        'workingKey' => env('PAYMENT_WORKING_KEY', 'AVQM04JE25AD92MQDA'),

        // Should be route address for url() function
        'redirectUrl' => env('PAYMENT_REDIRECT_URL', 'payment/response'),
        'cancelUrl' => env('PAYMENT_CANCEL_URL', 'payment/response'),

        'currency' => env('PAYMENT_CURRENCY', 'INR'),
        'language' => env('PAYMENT_LANGUAGE', 'EN'),
    ],

    'payumoney' => [                         // PayUMoney Parameters
        'merchantKey'  => env('PAYMENT_MERCHANT_KEY', ''),
        'salt'  => env('PAYMENT_SALT', ''),
        'workingKey' => env('PAYMENT_WORKING_KEY', ''),

        // Should be route address for url() function
        'successUrl' => env('PAYMENT_SUCCESS_URL', 'payment/response'),
        'failureUrl' => env('PAYMENT_FAILURE_URL', 'payment/response'),
    ],

    'ebs' => [                         // EBS Parameters
        'account_id'  => env('PAYMENT_MERCHANT_ID', ''),
        'secretKey' => env('PAYMENT_WORKING_KEY', ''),

        // Should be route address for url() function
        'return_url' => env('PAYMENT_SUCCESS_URL', 'payment/response'),
    ],

    'citrus' => [                         // Citrus Parameters
        'vanityUrl'  => env('PAYMENT_CITRUS_VANITY_URL', ''),
        'secretKey' => env('PAYMENT_WORKING_KEY', ''),

        // Should be route address for url() function
        'returnUrl' => env('PAYMENT_SUCCESS_URL', 'payment/response'),
        'notifyUrl' => env('PAYMENT_SUCCESS_URL', 'payment/response'),
    ],

    'instamojo' =>  [
        'api_key' => env('INSTAMOJO_API_KEY', ''),
        'auth_token' => env('INSTAMOJO_AUTH_TOKEN', ''),
        'redirectUrl' => env('PAYMENT_REDIRECT_URL', 'payment/response'),
    ],

    'mocker' =>  [
        'service' => env('MOCKER_SERVICE', 'default'),
        'redirect_url' => env('MOCKER_REDIRECT_URL', 'payment/response'),
    ],

    'zapakpay' =>  [
        'merchantIdentifier' => env('ZAPAKPAY_MERCHANT_ID', ''),
        'secret' => env('ZAPAKPAY_SECRET', ''),
        'returnUrl' => env('ZAPAKPAY_RETURN_URL', 'payment/response'),
    ],

    'paytm' =>  [
        'MERCHANT_KEY' => env('PAYTM_MERCHANT_KEY', ''),
        'MID' => env('PAYTM_MID', ''),
        'CHANNEL_ID' => env('PAYTM_CHANNEL_ID', 'WEB'),
        'WEBSITE' => env('PAYTM_WEBSITE', 'WEBSTAGING'),
        'INDUSTRY_TYPE_ID' => env('PAYTM_INDUSTRY_TYPE_ID', 'Retail'),
        'REDIRECT_URL' => env('PAYTM_REDIRECT_URL', 'payment/response'),
    ],

    // Add your response link here. In Laravel 5.2+ you may use the VerifyCsrf Middleware.
    'remove_csrf_check' => [
        'payment/response'
    ],





];
