<?php
/**
* @package   lizmap
* @subpackage mapBuilderAdmin
* @author    your name
* @copyright 2018-2020 3liz
* @link      http://3liz.com
* @license    Mozilla Public License : http://www.mozilla.org/MPL/
*/


class mapBuilderAdminModuleInstaller extends jInstallerModule {

    function install() {
        if ($this->entryPoint->getEpId() == 'admin') {
            $localConfigIni = $this->entryPoint->localConfigIni->getMaster();

            $adminControllers = $localConfigIni->getValue('admin', 'simple_urlengine_entrypoints');
            $mbCtrl = 'mapBuilderAdmin~*@classic';
            if (strpos($adminControllers, $mbCtrl) === false) {
                // let's register mapBuilderAdmin controllers
                $adminControllers .= ', '.$mbCtrl;
                $localConfigIni->setValue('admin', $adminControllers, 'simple_urlengine_entrypoints');
            }
        }
    }
}
