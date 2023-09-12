<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Admin\OrderItemType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Eccube/Form/Type/Admin/OrderItemType.php';

return $this->services['Eccube\\Form\\Type\\Admin\\OrderItemType'] = new \Eccube\Form\Type\Admin\OrderItemType(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\BaseInfoRepository']) ? $this->services['Eccube\\Repository\\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ProductClassRepository']) ? $this->services['Eccube\\Repository\\ProductClassRepository'] : $this->getProductClassRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\OrderItemRepository']) ? $this->services['Eccube\\Repository\\OrderItemRepository'] : $this->load('getOrderItemRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderItemTypeRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderItemTypeRepository'] : $this->getOrderItemTypeRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\TaxRuleRepository']) ? $this->services['Eccube\\Repository\\TaxRuleRepository'] : $this->getTaxRuleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
