<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSLq2w2L\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSLq2w2L/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSLq2w2L.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSLq2w2L\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSLq2w2L\App_KernelDevDebugContainer([
    'container.build_hash' => 'SLq2w2L',
    'container.build_id' => 'faead330',
    'container.build_time' => 1603965037,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSLq2w2L');