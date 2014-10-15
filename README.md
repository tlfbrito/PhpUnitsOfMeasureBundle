PhpUnitsOfMeasureBundle
=======================

The `PhpUnitsOfMeasureBundle` provides integration of the [php-units-of-measure](https://github.com/triplepoint/php-units-of-measure) library into the Symfony2 framework.


## Features:

### Twig filter list

- `um_acceleration`
- `um_angle`
- `um_area`
- `um_electric_current`
- `um_length`
- `um_luminous_intensity`
- `um_mass`
- `um_pressure`
- `um_temperature`
- `um_velocity`
- `um_volume`

## Installation and configuration:

### Add PhpUnitsOfMeasureBundle to your application kernel

``` php
<?php

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Triplepoint\PhpUnitsOfMeasureBundle\TriplepointPhpUnitsOfMeasureBundle(),
            // ...
        );
    }
```

## Usage examples:

### Twig extensions examples

Convert filters :

- `{{ '5000' | um_length('m', 'km') }}` convert 5000 meters to 5 kilometers

- `{{ '0.5' | um_acceleration }}` convert 0.5 m/s2 to 6480 km/h2 using the default units

## Future work:

* Allow overriding measure classes
