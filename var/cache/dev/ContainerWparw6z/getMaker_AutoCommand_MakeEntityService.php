<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_entity' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/InputAwareMakerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/MakeEntity.php';

$a = ${($_ = isset($this->services['maker.file_manager']) ? $this->services['maker.file_manager'] : $this->load('getMaker_FileManagerService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['maker.generator']) ? $this->services['maker.generator'] : $this->load('getMaker_GeneratorService.php')) && false ?: '_'};

$this->services['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ${($_ = isset($this->services['maker.doctrine_helper']) ? $this->services['maker.doctrine_helper'] : $this->load('getMaker_DoctrineHelperService.php')) && false ?: '_'}, $this->targetDirs[3], $b, ${($_ = isset($this->services['maker.entity_class_generator']) ? $this->services['maker.entity_class_generator'] : $this->load('getMaker_EntityClassGeneratorService.php')) && false ?: '_'}), $a, $b);

$instance->setDescription('Creates or updates a Doctrine entity class, and optionally an API Platform resource');
$instance->setName('make:entity');

return $instance;
