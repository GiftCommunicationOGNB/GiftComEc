<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\League\Repository\ClientRepository' shared service.

include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Repositories/RepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Repositories/ClientRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/League/Repository/ClientRepository.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\ClientRepository'] = new \Trikoder\Bundle\OAuth2Bundle\League\Repository\ClientRepository(${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager'] : $this->load('getClientManagerService.php')) && false ?: '_'});
