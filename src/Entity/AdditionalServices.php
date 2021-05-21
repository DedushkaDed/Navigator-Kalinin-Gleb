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
                'services' => [
                        [
                            'id' => 1,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => 'Описание услуги эскваватора',
                            'price' => '1 ₽/час + вызов 1000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1001, 'item' => 1000],
                        ],
                        [
                            'id' => 2,
                            'name' => 'Какой-то рандом',
                            'description' => false,
                            'price' => '2 ₽/час + вызов 2000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1002, 'item' => 2000],
                        ],
                        [
                            'id' => 3,
                            'name' => 'Какой-то рандом3',
                            'description' => false,
                            'price' => '3 ₽/час + вызов 3000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1003, 'item' => 3000],
                        ],
                        [
                            'id' => 4,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => false,
                            'price' => '4 ₽/час + вызов 4000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1004, 'item' => 4000],
                        ],
                        [
                            'id' => 5,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => false,
                            'price' => '5 ₽/час + вызов 5000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1005, 'item' => 5000],
                        ],
                        [
                            'id' => 6,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => false,
                            'price' => '6 ₽/час + вызов 6000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1006, 'item' => 6000],
                        ],
                        [
                            'id' => 7,
                            'name' => 'Услуги экскаватора-погрузчика',
                            'description' => false,
                            'price' => '7 ₽/час + вызов 7000 ₽',
                            'unit' => 'ч.',
                            'cost' => ['fix' => 1007, 'item' => 6000],
                        ],
                    ],
                'threshold' => 4,
            ];
    }
}
