<?php
/**
 * Resolve creating db tables
 *
 * @package dewplayer
 * @subpackage build
 */
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('dewplayer.core_path',null,$modx->getOption('core_path').'components/dewplayer/').'model/';
            $modx->addPackage('dewplayer',$modelPath);

            $manager = $modx->getManager();

            $manager->createObjectContainer('dewplayerItem');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;
