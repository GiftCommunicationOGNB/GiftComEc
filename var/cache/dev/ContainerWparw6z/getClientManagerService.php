<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\Manager\Doctrine\ClientManager' shared service.

include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Manager/ClientManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Manager/Doctrine/ClientManager.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager'] = new \Trikoder\Bundle\OAuth2Bundle\Manager\Doctrine\ClientManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});