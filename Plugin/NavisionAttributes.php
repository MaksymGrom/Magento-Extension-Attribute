<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */

namespace Edu\ExtensionAttribute\Plugin;

class NavisionAttributes
{
    public function afterGet(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Api\Data\ProductInterface $product
    ) {
        $product->getExtensionAttributes()->setNavisionData(['navision_code' => 'Test', 'navision_status' => 'new']);
        return $product;
    }

    public function afterGetById(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Api\Data\ProductInterface $product
    ) {
        $product->getExtensionAttributes()->setNavisionData(['navision_code' => 'Test', 'navision_status' => 'new']);
        return $product;
    }
}