<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\YamatoSubscription\Controller\Admin\YamatoSubscriptionDetailChangeContentsController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/app/Plugin/YamatoSubscription/Controller/Admin/YamatoSubscriptionDetailChangeContentsController.php';

$this->services['Plugin\\YamatoSubscription\\Controller\\Admin\\YamatoSubscriptionDetailChangeContentsController'] = $instance = new \Plugin\YamatoSubscription\Controller\Admin\YamatoSubscriptionDetailChangeContentsController(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->load('getSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['eccube.purchase.flow.order']) ? $this->services['eccube.purchase.flow.order'] : $this->load('getEccube_Purchase_Flow_OrderService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor']) ? $this->services['Eccube\\Service\\PurchaseFlow\\Processor\\OrderNoProcessor'] : $this->getOrderNoProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CategoryRepository']) ? $this->services['Eccube\\Repository\\CategoryRepository'] : $this->load('getCategoryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\DeliveryRepository']) ? $this->services['Eccube\\Repository\\DeliveryRepository'] : $this->getDeliveryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\OrderRepository']) ? $this->services['Eccube\\Repository\\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ProductRepository']) ? $this->services['Eccube\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsRepository'] : $this->getYamatoSubsRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsHistoryRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsHistoryRepository'] : $this->getYamatoSubsHistoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersOrderRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersOrderRepository'] : $this->getYamatoSubsUsersOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersOrderItemRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersOrderItemRepository'] : $this->getYamatoSubsUsersOrderItemRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersShippingRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersShippingRepository'] : $this->getYamatoSubsUsersShippingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersReferralCodeOrderRepository']) ? $this->services['Plugin\\YamatoSubscription\\Repository\\YamatoSubsUsersReferralCodeOrderRepository'] : $this->getYamatoSubsUsersReferralCodeOrderRepositoryService()) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

return $instance;