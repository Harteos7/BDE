<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPnxMavr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPnxMavr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPnxMavr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPnxMavr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPnxMavr\App_KernelDevDebugContainer([
    'container.build_hash' => 'PnxMavr',
    'container.build_id' => '6471f65d',
    'container.build_time' => 1683293405,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPnxMavr');
