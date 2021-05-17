<?

namespace IQDEV\Entity;

class AdditionalServices {
    /**
     * Получение данных для формы 'Дополнительные услуги'.
     *
     * @return array
     */
//    Fixme: Выводить инфу через ИБ? Статика.
    public static function getAdditionalServicesAll() {
        return
        [
            'services' =>
            [
                [
                    'id' => 1,
                    'name' => 'Услуги экскаватора-погрузчика',
                    'description' => '<p>JCB, 3CX, SSM</p><ul><li>планировка участка</li><li>разработка траншей и котлованов</li><li>погрузочно-разгрузочные работы</li><li>монтаж септика</li></ul><p>Расчет: время работы + проезд к месту проведения работ</p>',
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
                ]
            ],
            'threshold' => 4,
        ];
    }
}