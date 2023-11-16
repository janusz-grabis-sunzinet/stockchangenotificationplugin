<?php declare(strict_types=1);

namespace StockChangeNotificationPlugin\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1700051216WareEmail extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1700051216;
    }

    public function update(Connection $connection): void
    {
        $query = <<<SQL
CREATE TABLE IF NOT EXISTS `ware_email` (
    `id` BINARY(16) NOT NULL,
    `email`   VARCHAR(255)    NOT NULL,
    `product_number`   VARCHAR(255) NOT NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3),
    
    PRIMARY KEY (id)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;
        $connection->executeStatement($query);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
        $query = "DROP TABLE ware_email";
        $connection->executeStatement($query);
    }
}
