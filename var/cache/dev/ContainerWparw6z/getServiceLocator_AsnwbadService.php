<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.asnwbad' shared service.

return $this->services['service_locator.asnwbad'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['yamatoConfigService' => function () {
    $f = function (\Plugin\YamatoPayment4\Service\YamatoConfigService $v = null) { return $v; }; return $f(${($_ = isset($this->services['Plugin\\YamatoPayment4\\Service\\YamatoConfigService']) ? $this->services['Plugin\\YamatoPayment4\\Service\\YamatoConfigService'] : $this->load('getYamatoConfigServiceService.php')) && false ?: '_'});
}]);