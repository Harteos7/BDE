<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4zWx4Pw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4zWx4Pw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4zWx4Pw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4zWx4Pw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4zWx4Pw\App_KernelDevDebugContainer([
    'container.build_hash' => '4zWx4Pw',
    'container.build_id' => 'fe9d62e8',
    'container.build_time' => 1685952139,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4zWx4Pw');
