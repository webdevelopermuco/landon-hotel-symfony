<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNaEIW5b\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNaEIW5b/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNaEIW5b.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNaEIW5b\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNaEIW5b\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NaEIW5b',
    'container.build_id' => '751473b0',
    'container.build_time' => 1580076668,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNaEIW5b');
