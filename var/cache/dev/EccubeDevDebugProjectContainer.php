<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWparw6z\EccubeDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWparw6z/EccubeDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWparw6z.legacy');

    return;
}

if (!\class_exists(EccubeDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWparw6z\EccubeDevDebugProjectContainer::class, EccubeDevDebugProjectContainer::class, false);
}

return new \ContainerWparw6z\EccubeDevDebugProjectContainer([
    'container.build_hash' => 'Wparw6z',
    'container.build_id' => 'b39ad1bb',
    'container.build_time' => 1664986133,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWparw6z');
