<?php

namespace IQDEV\Components;

class OkAdditionalServices extends \CBitrixComponent {
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent() {
        $this->includeComponentTemplate();
    }
}
