<?php

declare(strict_types=1);

namespace TomasChochola\Template\Mezzio\Bootstrap;

use Laminas\ServiceManager\ServiceManager;
use Mezzio\Application;

/**
 * @no-named-arguments
 */
final readonly class Kernel
{
    public Application $app;

    public ServiceManager $container;

    public function __construct(Application $app, ServiceManager $container)
    {
        $this->app = $app;
        $this->container = $container;
    }
}
