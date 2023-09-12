<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\YamatoSubscription\Controller\ShoppingController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractShoppingController.php';
include_once $this->targetDirs[3].'/app/Plugin/YamatoSubscription/Controller/ShoppingController.php';

$a = ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'};

$this->services['Plugin\\YamatoSubscription\\Controller\\ShoppingController'] = $instance = new \Plugin\YamatoSubscription\Controller\ShoppingController($a, ${($_ = isset($this->services['Eccube\\Service\\CartService']) ? $this->services['Eccube\\Service\\CartService'] : $this->getCartServiceService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\OrderHelper']) ? $this->services['Eccube\\Service\\OrderHelper'] : $this->getOrderHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsRepository'] : $this->getYamatoSubsRepositoryService()) && false ?: '_'});

$instance->setPurchaseFlow(${($_ = isset($this->services['eccube.purchase.flow.shopping']) ? $this->services['eccube.purchase.flow.shopping'] : $this->load('getEccube_Purchase_Flow_ShoppingService.php')) && false ?: '_'});
$instance->setEccubeConfig($a);
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
