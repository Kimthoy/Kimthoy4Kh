<?php


return [
'api_url'=>env('ABA_PAYWAY_API_URL', 'https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/payments/purchase'),
'api_key'=>env('ABA_PAYWAY_API_KEY', 'a081d60c541da36bc9bb73caf70f2d68974c70aa'),
'merchant_id'=>env('ABA_PAYWAY_MERCHANT_ID', 'ec437942'),
];