<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMick3fm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMick3fm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerMick3fm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerMick3fm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerMick3fm\appDevDebugProjectContainer([
    'container.build_hash' => 'Mick3fm',
    'container.build_id' => '9006dbd1',
    'container.build_time' => 1554227440,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMick3fm');
