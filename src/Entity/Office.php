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
        $random = Options::getPageOptions('mapOffices');
        $aResult = [];
        foreach ($random['offices'] as $iKey => $aItem) {
//            Проверка $aItem -> regexp ?.
            $aResult[$iKey] =  explode(",", $aItem);
        }
        return $aResult;
    }
}
