<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\OrderBundle;

use Sonata\CoreBundle\Form\FormHelper;
use Sonata\OrderBundle\Form\Type\OrderStatusType;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SonataOrderBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        $this->registerFormMapping();
    }

    public function boot(): void
    {
        $this->registerFormMapping();
    }

    /**
     * Register form mapping information.
     *
     * NEXT_MAJOR: remove this method
     */
    public function registerFormMapping(): void
    {
        if (class_exists(FormHelper::class)) {
            FormHelper::registerFormTypeMapping([
                'sonata_order_status' => OrderStatusType::class,
            ]);
        }
    }
}
