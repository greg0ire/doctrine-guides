<?php

declare(strict_types=1);

namespace Doctrine\GuidesExtension\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

final class DoctrineExtension extends Extension implements PrependExtensionInterface
{
    /** @param mixed[] $configs */
    public function load(array $configs, ContainerBuilder $container): void
    {
    }

    public function prepend(ContainerBuilder $container): void
    {
        $container->prependExtensionConfig('guides', [
            'themes' => [
                'doctrine' => [
                    'templates' => [dirname(__DIR__, 2) . '/resources/templates'],
                ],
            ],
        ]);
    }

}
