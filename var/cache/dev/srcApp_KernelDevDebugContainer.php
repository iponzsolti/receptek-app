<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC9P2zBx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC9P2zBx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC9P2zBx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC9P2zBx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerC9P2zBx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'C9P2zBx',
    'container.build_id' => '91aa8d0d',
    'container.build_time' => 1557136411,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC9P2zBx');
