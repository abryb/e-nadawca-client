
##### A simple library for e-nadawca.poczta-polska.pl wsdl
Only php-dom and php-soap dependency. 

#### 1. Installation
```shell script
composer abryb/e-nadawca-client 
```

#### 2.Usage
```php
<?php

use Abryb\ENadawca\ENadawcaClientFactory;

$client = ENadawcaClientFactory::createClient(
    'https://e-nadawca.poczta-polska.pl/websrv/en.wsdl',
    'username',
    'password',
    [
        // additional \SoapClient options
    ]
);

$urzedyNadania = $client->getUrzedyNadania(new \Abryb\ENadawca\Type\GetUrzedyNadania());

```