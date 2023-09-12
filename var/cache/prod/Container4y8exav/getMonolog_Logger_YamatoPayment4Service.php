<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'monolog.logger.YamatoPayment4' shared service.

$this->services['monolog.logger.YamatoPayment4'] = $instance = new \Symfony\Bridge\Monolog\Logger('YamatoPayment4');

$instance->pushProcessor(${($_ = isset($this->services['Eccube\\Log\\Processor\\SessionProcessor']) ? $this->services['Eccube\\Log\\Processor\\SessionProcessor'] : $this->getSessionProcessorService()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Eccube\\Log\\Processor\\TokenProcessor']) ? $this->services['Eccube\\Log\\Processor\\TokenProcessor'] : $this->getTokenProcessorService()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Monolog\\Processor\\UidProcessor']) ? $this->services['Monolog\\Processor\\UidProcessor'] : ($this->services['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Monolog\\Processor\\IntrospectionProcessor']) ? $this->services['Monolog\\Processor\\IntrospectionProcessor'] : ($this->services['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor']) ? $this->services['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] : $this->getWebProcessorService()) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.YamatoPayment4']) ? $this->services['monolog.handler.YamatoPayment4'] : $this->load('getMonolog_Handler_YamatoPayment4Service.php')) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

return $instance;
