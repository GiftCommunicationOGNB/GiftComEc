<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.jg84w7j' shared service.

return $this->services['service_locator.jg84w7j'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['responseFactory' => function () {
    return ${($_ = isset($this->services['nyholm.psr7.psr17_factory']) ? $this->services['nyholm.psr7.psr17_factory'] : ($this->services['nyholm.psr7.psr17_factory'] = new \Nyholm\Psr7\Factory\Psr17Factory())) && false ?: '_'};
}]);