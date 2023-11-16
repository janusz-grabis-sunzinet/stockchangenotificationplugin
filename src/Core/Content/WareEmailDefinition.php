<?php declare(strict_types=1);

namespace StockChangeNotificationPlugin\Core\Content;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use WareEmailCollection;

class WareEmailDefinition extends EntityDefinition
{

    public const ENTITY_NAME = 'ware_email';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;

    }

    public function getEntityClass(): string
    {
        return WareEmail::class;
    }

    public function getCollectionClass(): string
    {
        return WareEmailCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        //TODO: change ware_id to product_id, type to string
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('email', 'email'))->addFlags(new Required()),
            (new IntField('ware_id', 'ware_id'))->addFlags(new Required())
        ]);
    }


}
