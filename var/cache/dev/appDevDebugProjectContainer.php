<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2vxzxxg\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2vxzxxg/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container2vxzxxg.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container2vxzxxg\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container2vxzxxg\appDevDebugProjectContainer([
    'container.build_hash' => '2vxzxxg',
    'container.build_id' => '31546888',
    'container.build_time' => 1555109327,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2vxzxxg');
