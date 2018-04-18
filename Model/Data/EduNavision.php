<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */
namespace Edu\ExtensionAttribute\Model\Data;

/**
 * Catalog product model
 */
class EduNavision extends \Magento\Framework\Model\AbstractExtensibleModel implements
    \Edu\ExtensionAttribute\Api\Data\EduNavisionInterface
{
    /** @var string */
    protected $_idFieldName = self::PRODUCT_ID;

    /**
     * Get navision code
     *
     * @return string
     */
    public function getNavisionCode()
    {
        return $this->getData(self::NAVISION_CODE);
    }

    /**
     * Set navision code
     *
     * @param string $navisionCode
     *
     * @return $this
     */
    public function setNavisionCode($navisionCode)
    {
        $this->setData(self::NAVISION_CODE, $navisionCode);
        return $this;
    }

    /**
     * Get navision status
     *
     * @return string|null
     */
    public function getNavisionStatus()
    {
        return $this->getData(self::NAVISION_STATUS);
    }

    /**
     * Set navision status
     *
     * @param string $navisionStatus
     *
     * @return $this
     */
    public function setNavisionStatus($navisionStatus)
    {
        $this->setData(self::NAVISION_STATUS, $navisionStatus);
        return $this;
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Edu\ExtensionAttribute\Api\Data\EduNavisionExtensionInterface
     */
    public function getExtensionAttributes()
    {
        $extensionAttributes = $this->_getExtensionAttributes();
        if (!$extensionAttributes) {
            return $this->extensionAttributesFactory->create('Edu\ExtensionAttribute\Api\Data\EduNavisionInterface');
        }
        return $extensionAttributes;
    }

    /**
     * Set an extension attributes object.
     *
     * @param \Edu\ExtensionAttribute\Api\Data\EduNavisionExtensionInterface $extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes(\Edu\ExtensionAttribute\Api\Data\EduNavisionExtensionInterface $extensionAttributes)
    {
        $this->_setExtensionAttributes($extensionAttributes);
        return $this;
    }
}
