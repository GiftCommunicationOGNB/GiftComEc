<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.psr7.listener.response' shared service.

include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/PsrResponseListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/psr-http-message-bridge/HttpFoundationFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/psr-http-message-bridge/Factory/HttpFoundationFactory.php';

return $this->services['sensio_framework_extra.psr7.listener.response'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\PsrResponseListener(new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory());
