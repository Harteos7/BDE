<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGvH2Muw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGvH2Muw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGvH2Muw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGvH2Muw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGvH2Muw\App_KernelDevDebugContainer([
    'container.build_hash' => 'GvH2Muw',
    'container.build_id' => '74fd4432',
    'container.build_time' => 1676907202,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGvH2Muw');
