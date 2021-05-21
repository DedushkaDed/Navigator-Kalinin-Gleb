<?php

namespace IQDEV\Entity;

class AdditionalServices
{
    /**
     * Получение данных для формы 'Дополнительные услуги'.
     *
     * @return array
     */
    public static function getAdditionalServicesAll()
    {
        return
            [
                'services' =>
                    [
                        [
                            'id' => 1,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => 'Описание услуги эскваватора',
                            'price' => '$priceInHour ₽/час + вызов $priceVizov ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1001, 'item' => 1000],
                        ],
                        [
                            'id' => 2,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => false,
                            'price' => '1 ₽/час + вызов 1 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1001, 'item' => 1000],
                        ],
                        [
                            'id' => 3,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => false,
                            'price' => '1 ₽/час + вызов 1 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1001, 'item' => 1000],
                        ],
                    ],
                'threshold' => 4,
            ];
    }
}
