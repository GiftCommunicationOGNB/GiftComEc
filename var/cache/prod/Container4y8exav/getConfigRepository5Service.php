<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\FacebookAdsExtention\Repository\ConfigRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/FacebookAdsExtention/Repository/ConfigRepository.php';

return $this->services['Plugin\\FacebookAdsExtention\\Repository\\ConfigRepository'] = new \Plugin\FacebookAdsExtention\Repository\ConfigRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
