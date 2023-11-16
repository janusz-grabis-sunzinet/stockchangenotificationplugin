<?php declare(strict_types=1);

namespace StockChangeNotificationPlugin\Service;

use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;

class WareEmailService
{

    protected EntityRepository $wareEmailRepository;

    public function __construct(EntityRepository $wareEmailRepository)
    {

        $this->wareEmailRepository = $wareEmailRepository;

    }

    public function saveWareEmail(string $email): void
    {

        //TODO: do the saving here
        echo $email;
        exit;

    }
}