<?php

declare(strict_types=1);

namespace TomasChochola\Template\Mezzio;

use TomasChochola\Template\Mezzio\Bootstrap\Bootstrapper;

/**
 * @no-named-arguments
 */
final readonly class Main
{
    public function __invoke(): void
    {
        Bootstrapper::bootstrap()->app->run();
    }
}
