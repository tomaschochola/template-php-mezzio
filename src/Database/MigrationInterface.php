<?php

declare(strict_types=1);

namespace TomasChochola\Template\Mezzio\Database;

/**
 * @no-named-arguments
 */
interface MigrationInterface
{
    public function selector(): string;

    /**
     * @return iterable<mixed, string>
     */
    public function up(): iterable;
}
