<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.42ezhsf' shared service.

return $this->services['service_locator.42ezhsf'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['Shipping' => function () {
    $f = function (\Eccube\Entity\Shipping $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Eccube\\Entity\\Shipping']) ? $this->services['autowired.Eccube\\Entity\\Shipping'] : ($this->services['autowired.Eccube\\Entity\\Shipping'] = new \Eccube\Entity\Shipping())) && false ?: '_'});
}]);