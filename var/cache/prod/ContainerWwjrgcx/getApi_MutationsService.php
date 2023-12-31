<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api.mutations' shared service.

include_once $this->targetDirs[3].'/app/Plugin/Api/GraphQL/Mutation.php';
include_once $this->targetDirs[3].'/app/Plugin/Api/GraphQL/Mutation/UpdateProductStockMutation.php';
include_once $this->targetDirs[3].'/app/Plugin/Api/GraphQL/Mutation/UpdateShippedMutation.php';

$this->services['api.mutations'] = $instance = new \ArrayObject();

$a = ${($_ = isset($this->services['Plugin\\Api\\GraphQL\\Types']) ? $this->services['Plugin\\Api\\GraphQL\\Types'] : $this->load('getTypesService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

$instance->append(new \Plugin\Api\GraphQL\Mutation\UpdateProductStockMutation($a, ${($_ = isset($this->services['Eccube\\Repository\\ProductClassRepository']) ? $this->services['Eccube\\Repository\\ProductClassRepository'] : $this->getProductClassRepositoryService()) && false ?: '_'}, $b));
$instance->append(new \Plugin\Api\GraphQL\Mutation\UpdateShippedMutation(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'}, $b, ${($_ = isset($this->services['Eccube\\Service\\MailService']) ? $this->services['Eccube\\Service\\MailService'] : $this->load('getMailServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\OrderStateMachine']) ? $this->services['Eccube\\Service\\OrderStateMachine'] : $this->load('getOrderStateMachineService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderStatusRepository'] : $this->getOrderStatusRepositoryService()) && false ?: '_'}, $a, ${($_ = isset($this->services['Eccube\\Repository\\ShippingRepository']) ? $this->services['Eccube\\Repository\\ShippingRepository'] : $this->load('getShippingRepositoryService.php')) && false ?: '_'}));

return $instance;
