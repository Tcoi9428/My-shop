<?php

return
[
    'db' =>[
      'host'=>'localhost',
      'user'=>'root',
      'password'=>'9423',
      'db_name'=>'myshop'
    ],
    'template' =>[
        'template_dir' => APP_DIR . '/templates/',
        'cache_dir' => APP_DIR . '/var/templates/cache/',
        'compile_dir' => APP_DIR . '/var/templates/compile/'
    ]
];