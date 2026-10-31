<?php

declare(strict_types=1);

namespace TomasChochola\Template\Mezzio\Bootstrap;

use PDO;
use TomasChochola\Template\Mezzio\Database\Migrations;
use TomasChochola\Template\Mezzio\Database\Migrator;
use TomasChochola\Template\Mezzio\Database\PdoSettings;
use TomasChochola\Template\Mezzio\Database\PdoSettingsInterface;
use TomasChochola\Template\Mezzio\Handler\PingRequestHandler;
use TomasChochola\Template\Mezzio\Migration\CreateUsersTableMigration;
use TomasChochola\Template\Mezzio\Provider\PdoForge;

/**
 * @no-named-arguments
 */
final readonly class ConfigManifest
{
    /**
     * @return array<mixed, mixed>
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    /**
     * @return array<mixed, mixed>
     */
    public function getDependencies(): array
    {
        return [
            'factories' => [
                CreateUsersTableMigration::class => [CreateUsersTableMigration::class, 'inject'],
                Migrations::class => [Migrations::class, 'inject'],
                Migrator::class => [Migrator::class, 'inject'],
                PDO::class => [PdoForge::class, 'produce'],
                PdoSettings::class => [PdoSettings::class, 'inject'],
                PdoSettingsInterface::class => [PdoSettings::class, 'inject'],
                PingRequestHandler::class => [PingRequestHandler::class, 'inject'],
            ],
        ];
    }
}
