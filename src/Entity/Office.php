<?php

namespace IQDEV\Entity;

class Office
{
    /**
     * Установка координат офисов для yandexMap
     *
     * @return array
     */
    public static function getCordsAll()
    {
        return [
            'main' => [57.160288, 65.532908],
            'alpine' => [57.255012, 65.094918],
        ];
    }
}