<?php

namespace StockChangeNotificationPlugin\Storefront\Controller;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Sabre\Xml\Service;

#[Route(defaults: ['_routeScope' => ['storefront']])] class WareEmailController extends StorefrontController
{

    protected $em;

    public function __construct(/*EntityRepository $entityRepository*/) {
        //$this->em = $entityRepository;
    }

    #[Route(path: '/wareemail/save', name: 'ware.email.save', defaults: [])]
    public function generateOrderXmlById(Request $request, Context $context)
    {
        $email = $request->request->get('wareemail-customer-email');
        $productNumber = $request->request->get('wareemail-product-number');

        echo "email: $email, productNumber: $productNumber"; exit;

    }
}