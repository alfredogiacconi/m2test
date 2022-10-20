<?php
 
namespace Custom\Interceptor\Plugin\Controller;

use Magento\Catalog\Model\Product;
 
class DoubleProductPrice
{
    public function afterGetPrice(Product $subject, $result)
    {
        return $result * 2;
    }
}