PHPUnitsOfMeasureBundle
=======================

The `PHPUnitsOfMeasureBundle` provides integration of the [php-units-of-measure](https://github.com/triplepoint/php-units-of-measure) library into the Symfony2 framework.


## Features:


## Installation and configuration:

### Add PHPUnitsOfMeasureBundle to your application kernel

``` php
<?php

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Triplepoint\PHPUnitsOfMeasureBundle\PHPUnitsOfMeasureBundle(),
            // ...
        );
    }
```

## Usage examples:

### Twig extensions examples

Convert filters :

- `{{ '5000' | um_length('m', 'km') }}` convert 5000 meters to 5 kilometers

- `{{ '0.5' | um_acceleration }}` convert 0.5 m/s2 to 6480 km/h2 using the default units
