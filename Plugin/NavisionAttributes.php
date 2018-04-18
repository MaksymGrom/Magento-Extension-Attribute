<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */

namespace Edu\ExtensionAttribute\Plugin;

class NavisionAttributes
{
    /** @var \Edu\ExtensionAttribute\Api\EduNavisionRepositoryInterface  */
    private $eduNavisionRepository;

    /**
     * NavisionAttributes constructor.
     *
     * @param \Edu\ExtensionAttribute\Api\EduNavisionRepositoryInterface $eduNavisionRepository
     */
    public function __construct(
        \Edu\ExtensionAttribute\Api\EduNavisionRepositoryInterface $eduNavisionRepository
    ) {
        $this->eduNavisionRepository = $eduNavisionRepository;
    }

    /**
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Catalog\Api\Data\ProductInterface      $product
     *
     * @return \Magento\Catalog\Api\Data\ProductInterface
     */
    public function afterGet(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Api\Data\ProductInterface $product
    ) {
        $eduNavision = $this->eduNavisionRepository->get($product->getId());
        $product->getExtensionAttributes()->setNavisionData($eduNavision);
        return $product;
    }

    /**
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Catalog\Api\Data\ProductInterface      $product
     *
     * @return \Magento\Catalog\Api\Data\ProductInterface
     */
    public function afterGetById(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Api\Data\ProductInterface $product
    ) {
        $eduNavision = $this->eduNavisionRepository->get($product->getId());
        $product->getExtensionAttributes()->setNavisionData($eduNavision);
        return $product;
    }
}
