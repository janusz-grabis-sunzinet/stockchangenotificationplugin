<?php declare(strict_types=1);

namespace StockChangeNotificationPlugin;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class StockChangeNotificationPlugin extends Plugin
{
    public function uninstall(UninstallContext $uninstallContext): void
    {
        // Remove or deactivate the data created by the plugin
        $uninstallContext->getMigrationCollection()->migrateInPlace();
    }

    public function install(InstallContext $installContext): void
    {
        $installContext->getMigrationCollection()->migrateDestructiveInPlace();
    }


}