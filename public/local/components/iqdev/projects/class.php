<?php

class ProjectsNews extends \CBitrixComponent
{
    /**
     * Роутинг комплексного компонента
     *
     * @return false|string
     */
    public function getComponentRoute() {
        $sefFolder = '/projects/';
        $aTemplates = [
            "list" => "index.php",
            "detail" => "#CODE#/",
        ];

        $arVariables = [];
        $arUrlTemplates = [];

        $arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates($aTemplates, []);
        $sComponentPage = CComponentEngine::ParseComponentPath($sefFolder, $arUrlTemplates, $arVariables);

        if (empty($sComponentPage)) {
            LocalRedirect($sefFolder);
        }
        return $sComponentPage;
    }
    /**
     * Точка входа в компонент
     *
     * @return void
     */
    public function executeComponent()
    {
        $sComponentPage = $this->getComponentRoute();
        $this->includeComponentTemplate($sComponentPage);
    }
}
