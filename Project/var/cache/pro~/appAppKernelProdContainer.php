<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1aNTfuf\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1aNTfuf/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container1aNTfuf.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container1aNTfuf\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container1aNTfuf\appAppKernelProdContainer([
    'container.build_hash' => '1aNTfuf',
    'container.build_id' => '52f5f0f7',
    'container.build_time' => 1706609692,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1aNTfuf');