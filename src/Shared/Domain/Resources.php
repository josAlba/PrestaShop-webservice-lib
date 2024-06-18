<?php

namespace prestashop\prestashopWebserviceLib\Shared\Domain;

enum Resources: string
{
    case STOCKS = 'stocks';
    case STOCK_AVAILABLES = 'stock_availables';
    case PRODUCTS = 'products';
    case COMBINATIONS = 'combinations';
}