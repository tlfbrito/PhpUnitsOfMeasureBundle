<?php

namespace Triplepoint\PhpUnitsOfMeasureBundle\Twig;


use PhpUnitsOfMeasure\PhysicalQuantity\Acceleration;
use PhpUnitsOfMeasure\PhysicalQuantity\Angle;
use PhpUnitsOfMeasure\PhysicalQuantity\Area;
use PhpUnitsOfMeasure\PhysicalQuantity\ElectricCurrent;
use PhpUnitsOfMeasure\PhysicalQuantity\Length;
use PhpUnitsOfMeasure\PhysicalQuantity\LuminousIntensity;
use PhpUnitsOfMeasure\PhysicalQuantity\Mass;
use PhpUnitsOfMeasure\PhysicalQuantity\Pressure;
use PhpUnitsOfMeasure\PhysicalQuantity\Temperature;
use PhpUnitsOfMeasure\PhysicalQuantity\Velocity;
use PhpUnitsOfMeasure\PhysicalQuantity\Volume;

class TwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('um_acceleration', array($this, 'accelerationFilter')),
            new \Twig_SimpleFilter('um_angle', array($this, 'angleFilter')),
            new \Twig_SimpleFilter('um_area', array($this, 'areaFilter')),
            new \Twig_SimpleFilter('um_electric_current', array($this, 'electricCurrentFilter')),
            new \Twig_SimpleFilter('um_length', array($this, 'lengthFilter')),
            new \Twig_SimpleFilter('um_luminous_intensity', array($this, 'luminousIntensityFilter')),
            new \Twig_SimpleFilter('um_mass', array($this, 'massFilter')),
            new \Twig_SimpleFilter('um_pressure', array($this, 'pressureFilter')),
            new \Twig_SimpleFilter('um_temperature', array($this, 'temperatureFilter')),
            new \Twig_SimpleFilter('um_velocity', array($this, 'velocityFilter')),
            new \Twig_SimpleFilter('um_volume', array($this, 'volumeFilter')),
        );
    }
    public function accelerationFilter($value, $originalUnit = 'm/s^2', $unit = 'km/h^2')
    {
        $acceleration = new Acceleration($value, $originalUnit);
        return $acceleration->toUnit($unit);
    }

    public function angleFilter($value, $originalUnit = 'radian', $unit = 'degrees')
    {
        $angle = new Angle($value, $originalUnit);
        return $angle->toUnit($unit);
    }

    public function areaFilter($value, $originalUnit = 'm^2', $unit = 'km^2')
    {
        $area = new Area($value, $originalUnit);
        return $area->toUnit($unit);
    }

    public function electricCurrentFilter($value, $originalUnit = 'ampere', $unit = 'microampere')
    {
        $length = new ElectricCurrent($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function lengthFilter($value, $originalUnit = 'm', $unit = 'km')
    {
        $length = new Length($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function luminousIntensityFilter($value, $originalUnit = 'candela', $unit = 'lumens')
    {
        $length = new LuminousIntensity($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function massFilter($value, $originalUnit = 'kg', $unit = 'g')
    {
        $length = new Mass($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function pressureFilter($value, $originalUnit = 'pascal', $unit = 'psi')
    {
        $length = new Pressure($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function temperatureFilter($value, $originalUnit = 'kelvin', $unit = 'celsius')
    {
        $length = new Temperature($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function velocityFilter($value, $originalUnit = 'm/s', $unit = 'km/h')
    {
        $length = new Velocity($value, $originalUnit);
        return $length->toUnit($unit);
    }

    public function volumeFilter($value, $originalUnit = 'liters', $unit = 'gallons')
    {
        $length = new Volume($value, $originalUnit);
        return $length->toUnit($unit);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'php_units_of_measure_extension';
    }
}