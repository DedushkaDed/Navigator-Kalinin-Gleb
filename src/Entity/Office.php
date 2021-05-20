<?php

namespace IQDEV\Entity;

use IQDEV\Options\Options;

class Office
{
    /**
     * Установка координат офисов для yandexMap
     *
     * @return array
     */
    public static function getCordsAll()
    {
        $aOfficeCoordinate = Options::getPageOptions('mapOffices');
        $aResult = [];
        foreach ($aOfficeCoordinate['offices'] as $iKey => $aItem) {
            $aResult[$iKey] =  explode(",", $aItem);
        }
            return $aResult;
    }
}
