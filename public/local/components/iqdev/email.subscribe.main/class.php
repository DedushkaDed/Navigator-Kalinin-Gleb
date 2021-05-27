<?php

namespace IQDEV\Components;

class EmailSubscribeMain extends \CBitrixComponent
{
    /**
     * Получение данных из модуля IQDEV\Options\Options
     *
     * @return array
     */
    public function getModuleOptions(): array
    {
        
        return \IQDEV\Options\Options::getPageOptions('feedback_form_main');
    }

    /**
     * Выполнение компонента
     *
     * @return void
     */
    public function executeComponent()
    {
        $this->arParams = $this->getModuleOptions();
        $this->includeComponentTemplate();
    }
}
