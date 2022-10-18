<?php
 
namespace Custom\Interceptor\Plugin\Controller;
 
class DoubleProductPrice
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result * 2;
    }
}