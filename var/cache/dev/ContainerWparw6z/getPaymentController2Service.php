<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\YamatoPayment4\Controller\PaymentController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/app/Plugin/YamatoPayment4/Controller/PaymentController.php';

$a = ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'};

$this->services['Plugin\\YamatoPayment4\\Controller\\PaymentController'] = $instance = new \Plugin\YamatoPayment4\Controller\PaymentController(${($_ = isset($this->services['Eccube\\Repository\\ProductRepository']) ? $this->services['Eccube\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\OrderRepository']) ? $this->services['Eccube\\Repository\\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CartRepository']) ? $this->services['Eccube\\Repository\\CartRepository'] : $this->getCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderStatusRepository'] : $this->getOrderStatusRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['eccube.purchase.flow.shopping']) ? $this->services['eccube.purchase.flow.shopping'] : $this->load('getEccube_Purchase_Flow_ShoppingService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\YamatoPaymentStatusRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\YamatoPaymentStatusRepository'] : $this->load('getYamatoPaymentStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\CartService']) ? $this->services['Eccube\\Service\\CartService'] : $this->getCartServiceService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\MailService']) ? $this->services['Eccube\\Service\\MailService'] : $this->load('getMailServiceService.php')) && false ?: '_'}, $a, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\ConfigRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\ConfigRepository'] : $this->getConfigRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\YamatoPaymentMethodRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\YamatoPaymentMethodRepository'] : $this->getYamatoPaymentMethodRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\YamatoOrderRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\YamatoOrderRepository'] : $this->getYamatoOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Util\\SecurityUtil']) ? $this->services['Plugin\\YamatoPayment4\\Util\\SecurityUtil'] : $this->load('getSecurityUtilService.php')) && false ?: '_'});

$instance->setEccubeConfig($a);
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
