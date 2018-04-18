<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */

namespace Edu\ExtensionAttribute\Api\Data;

/**
 * @api
 */
interface EduNavisionInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of  data array
     */
    const PRODUCT_ID = 'product_id';

    const NAVISION_CODE = 'navision_code';

    const NAVISION_STATUS = 'navision_status';

    /**#@-*/

    /**
     * Product id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set product id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Product navision code
     *
     * @return string
     */
    public function getNavisionCode();

    /**
     * Set product navision code
     *
     * @param string $navisionCode
     * @return $this
     */
    public function setNavisionCode($navisionCode);

    /**
     * Product navision status
     *
     * @return string|null
     */
    public function getNavisionStatus();

    /**
     * Set product navision status
     *
     * @param string $navisionStatus
     * @return $this
     */
    public function setNavisionStatus($navisionStatus);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Edu\ExtensionAttribute\Api\Data\EduNavisionExtensionInterface
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Edu\ExtensionAttribute\Api\Data\EduNavisionExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Edu\ExtensionAttribute\Api\Data\EduNavisionExtensionInterface $extensionAttributes);

}
