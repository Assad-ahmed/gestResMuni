<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXEKI5Hm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXEKI5Hm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXEKI5Hm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXEKI5Hm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXEKI5Hm\App_KernelDevDebugContainer([
    'container.build_hash' => 'XEKI5Hm',
    'container.build_id' => '1a38457b',
    'container.build_time' => 1724331669,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXEKI5Hm');
