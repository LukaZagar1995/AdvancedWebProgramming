<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLalro7r\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLalro7r/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLalro7r.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLalro7r\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLalro7r\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Lalro7r',
    'container.build_id' => '3d8aca5f',
    'container.build_time' => 1559769226,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLalro7r');
