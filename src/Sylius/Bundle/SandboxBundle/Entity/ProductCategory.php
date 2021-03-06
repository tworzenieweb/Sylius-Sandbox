<?php

namespace Sylius\Bundle\SandboxBundle\Entity;

use Sylius\Bundle\CategorizerBundle\Entity\NestedCategory as BaseCategory;

class ProductCategory extends BaseCategory
{
    protected $products;

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($products)
    {
        $this->products = $products;
    }
}
