<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2csE2dE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2csE2dE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2csE2dE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2csE2dE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2csE2dE\App_KernelDevDebugContainer([
    'container.build_hash' => '2csE2dE',
    'container.build_id' => 'e23dbaf2',
    'container.build_time' => 1709331939,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container2csE2dE');