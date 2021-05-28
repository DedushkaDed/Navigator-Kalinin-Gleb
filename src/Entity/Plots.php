<?php

namespace IQDEV\Entity;

class Plots
{
    public static function getFilters($aInputData)
    {
        $aFilters = [];

        switch ($aInputData) {
            case $aInputData['locationQuery']:
                $aLocationFilters = [];
                foreach ($aInputData['locationQuery'] as $aItem) {
                    $aCard = [];
                    $aCard['id'] = $aItem;

                    $aLocationFilters[] = $aCard;
                }
                $aFilters['locationQuery'] = $aLocationFilters;
                break;
            case $aInputData['communicationsQuery']:
                $aCommunicationFilters = [];
                foreach ($aInputData['communicationsQuery'] as $aItem) {
                    $aCard = [];
                    $aCard['id'] = $aItem;

                    $aCommunicationFilters[] = $aCard;
                }
                $aFilters['communicationsQuery'] = $aCommunicationFilters;
                break;
            case $aInputData['infrastructureQuery']:
                $aInfrastructureFilters = [];
                foreach ($aInputData['infrastructureQuery'] as $aItem) {
                    $aCard = [];
                    $aCard['id'] = $aItem;

                    $aInfrastructureFilters[] = $aCard;
                }
                $aFilters['infrastructureQuery'] = $aInfrastructureFilters;
                break;
            case $aInputData['villageNameQuery']:
                $aVillageNameFilters = [];
                foreach ($aInputData['villageNameQuery'] as $aItem) {
                    $aCard = [];
                    $aCard['id'] = $aItem;

                    $aVillageNameFilters[] = $aCard;
                }
                $aFilters['villageNameQuery'] = $aVillageNameFilters;
                break;
            default:
                $aFilters = [
                    'villageName' => [
                        [
                            'id' => 152,
                            'name' => 'Альпийская долина',
                        ],
                        [
                            'id' => 163,
                            'name' => 'Ушаково',
                        ],
                        [
                            'id' => 164,
                            'name' => 'Есенино',
                        ],
                        [
                            'id' => 165,
                            'name' => 'Ёлки',
                        ],
                    ],
                    'remoteness' => [
                        [
                            'id' => 11,
                            'name' => 'string',
                        ],
                        [
                            'id' => 12,
                            'name' => 'string',
                        ],
                    ],
                    'communications' => [
                        [
                            'id' => 'UF_GAS',
                            'name' => 'Заведен газ',
                        ],
                        [
                            'id' => 'UF_ELECTRICITY',
                            'name' => 'Заведено электричество',
                        ],
                        [
                            'id' => 'UF_ASPHALT',
                            'name' => 'Дороги из асфальта',
                        ],
                        [
                            'id' => 'UF_ROAD',
                            'name' => 'Дороги из щебня',
                        ],
                    ],
                    'infrastructure' => [
                        [
                            'id' => 'UF_WITHOUT_BUILDINGS',
                            'name' => 'Участок без построек',
                        ],
                        [
                            'id' => 'UF_BATH_HOUSE',
                            'name' => 'Участок с баней-домом',
                        ],
                        [
                            'id' => 'UF_HOUSE',
                            'name' => 'Участок с домом',
                        ],
                    ],
                    'location' => [
                        [
                            'id' => 'UF_FOREST',
                            'name' => 'Рядом с лесом',
                        ],
                        [
                            'id' => 'UF_APPERANCE',
                            'name' => 'Участок с хорошим видом',
                        ],
                        [
                            'id' => 'UF_RIVER',
                            'name' => 'Рядом с рекой',
                        ],
                        [
                            'id' => 'UF_HILL',
                            'name' => 'Участок на холме',
                        ],
                        [
                            'id' => 'UF_EDGE',
                            'name' => 'Участок с краю',
                        ],
                        [
                            'id' => 'UF_CORNER',
                            'name' => 'Участок на углу',
                        ],
                        [
                            'id' => 'UF_DEADLOCK',
                            'name' => 'Участок на тупиковой улице',
                        ],
                        [
                            'id' => 'UF_PARK',
                            'name' => 'Рядом с парком',
                        ],
                        [
                            'id' => 'UF_CENTRAL_STREET',
                            'name' => 'Участок на центральной улице',
                        ],
                    ],
                ];
        }
        return $aFilters;
    }
}