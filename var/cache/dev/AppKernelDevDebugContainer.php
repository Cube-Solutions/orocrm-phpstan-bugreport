<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD6qHxMk\AppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD6qHxMk/AppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD6qHxMk.legacy');

    return;
}

if (!\class_exists(AppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD6qHxMk\AppKernelDevDebugContainer::class, AppKernelDevDebugContainer::class, false);
}

return new \ContainerD6qHxMk\AppKernelDevDebugContainer([
    'container.build_hash' => 'D6qHxMk',
    'container.build_id' => '779901fe',
    'container.build_time' => 1653490841,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD6qHxMk');
