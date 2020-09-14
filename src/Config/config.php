<?php

return [
  'gcm' => [
      'priority' => 'normal',
      'dry_run' => false,
      'apiKey' => 'My_ApiKey',
      'client' => [
//            'proxy' => env('PROXY', '127.0.0.1:3128'),
      ],
  ],
  'fcm' => [
        'priority' => 'normal',
        'dry_run' => false,
        'apiKey' => 'My_ApiKey',
      'client' => [
//            'proxy' => env('PROXY', '127.0.0.1:3128'),
      ],
  ],
  'apn' => [
      'certificate' => __DIR__ . '/iosCertificates/apns-dev-cert.pem',
      'passPhrase' => '1234', //Optional
      'passFile' => __DIR__ . '/iosCertificates/yourKey.pem', //Optional
      'dry_run' => true,
      'proxy' => env('PROXY', '127.0.0.1:3128'),
  ]
];
