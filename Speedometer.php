<?php

class Speedometer {

    private const CONVERTER = 1.61;

    public static function convertKmToMiles(int $speedInKm): float
    {
        $speedInMiles = $speedInKm / SELF::CONVERTER;
        return round($speedInMiles, 2);
    }

    public static function convertMilesToKm(int $speedInMiles): float
    {
        $speedInKm = $speedInMiles * SELF::CONVERTER;
        return round($speedInKm, 2);
    }
}

echo Speedometer::convertKmToMiles(10) . PHP_EOL;