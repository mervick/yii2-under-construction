# Yii2 Under Construction Module
The simple yii2 extension which can disallow access to website.

## Installation
Via composer:
```php
composer require "mervick/yii2-under-construction" "~1.0"
```

## Usage
Add to your `config.php`:
```php
return [
    // ...
    'modules' => [
        'under-construction' => [
            'class' => '\mervick\underconstruction\Module',
            
            // this is the on off switch
            'locked' => true, 
            
            // the list of IPs that are allowed to access site.
            // Each array element represents a single IP filter which can be either an IP address
            // or an address with wildcard (e.g. 192.168.0.*) to represent a network segment.
            // The default value is `['127.0.0.1', '::1']`, which means the site can only be accessed by localhost.
            'allowedIPs' => ['127.0.0.1', '::1'],
            
            // change this to your namespace, if you want use your own controller
            'controllerNamespace' => 'mervick\underconstruction\controllers', 
            
            'layout' => 'main', // default layout
            
            // if you want redirect to external website, default is null
            'redirectURL' => 'http://example.com', 
        ],
    ],
    'bootstrap' => [
        'under-construction',
    ],
];
```

### License
MIT