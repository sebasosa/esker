<?php

return [
    # Define your application mode here
    'mode' => 'sandbox',

    # Account credentials from developer portal
    'account' => [
        'client_id' => env('PAYPAL_CLIENT_ID', 'AVy4VWPW4mkCwIHEitsRTfQZmNRMNeAgnxrxNBaIxlQnF79nwG1gvMcP-2eYcIuBS2h7eOlMEa11WQsX'),
        'client_secret' => env('PAYPAL_CLIENT_SECRET', 'EHubyFw2xkhRtKwA_zbuVzgiwtfL80ZFeW_fALXwZOEOGB6_pQnw7_UJuFIWByPfiEmS4ZAfQ3pfU_jw'),
    ],

    # Connection Information
    'http' => [
        'connection_time_out' => 30,
        'retry' => 1,
    ],

    # Logging Information
    'log' => [
        'log_enabled' => true,

        # When using a relative path, the log file is created
        # relative to the .php file that is the entry point
        # for this request. You can also provide an absolute
        # path here
        'file_name' => '../PayPal.log',

        # Logging level can be one of FINE, INFO, WARN or ERROR
        # Logging is most verbose in the 'FINE' level and
        # decreases as you proceed towards ERROR
        'log_level' => 'FINE',
    ],
];
