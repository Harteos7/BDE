<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAxMOFMI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAxMOFMI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAxMOFMI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAxMOFMI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAxMOFMI\App_KernelDevDebugContainer([
    'container.build_hash' => 'AxMOFMI',
    'container.build_id' => '20135bf9',
    'container.build_time' => 1683638251,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAxMOFMI');
