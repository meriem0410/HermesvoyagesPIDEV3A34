<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKjzPQGi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKjzPQGi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKjzPQGi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKjzPQGi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKjzPQGi\App_KernelDevDebugContainer([
    'container.build_hash' => 'KjzPQGi',
    'container.build_id' => '2d0897d4',
    'container.build_time' => 1709390318,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKjzPQGi');
