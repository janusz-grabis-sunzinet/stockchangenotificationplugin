<?php declare(strict_types=1);

namespace StockChangeNotificationPlugin\Service;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;

class WareEmailService
{

    protected EntityRepository $wareEmailRepository;

    //protected Context $context;

    public function __construct(EntityRepository $wareEmailRepository)
    {

        $this->wareEmailRepository = $wareEmailRepository;
        //$this->context = $context;

    }

    public function saveWareEmail(string $email, Context $context): void
    {

        $this->wareEmailRepository->create([
            [
                'email' => 'abc'
                //'ware_id' => 1
            ]], $context
        );

        //TODO: do the saving here
        echo $email;
        exit;

    }
}