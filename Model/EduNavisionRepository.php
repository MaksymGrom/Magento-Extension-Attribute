<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */
namespace Edu\ExtensionAttribute\Model;

class EduNavisionRepository implements \Edu\ExtensionAttribute\Api\EduNavisionRepositoryInterface
{
    /** @var \Edu\ExtensionAttribute\Api\Data\EduNavisionInterfaceFactory */
    private $eduNavisionFactory;

    /** @var \Edu\ExtensionAttribute\Model\ResourceModel\EduNavision */
    private $eduNavisionResource;

    public function __construct(
        \Edu\ExtensionAttribute\Api\Data\EduNavisionInterfaceFactory $eduNavisionFactory,
        \Edu\ExtensionAttribute\Model\ResourceModel\EduNavision $eduNavisionResource
    ) {
        $this->eduNavisionFactory = $eduNavisionFactory;
        $this->eduNavisionResource = $eduNavisionResource;
    }

    public function save(\Edu\ExtensionAttribute\Api\Data\EduNavisionInterface $eduNavision)
    {
        $this->eduNavisionResource->save($eduNavision);
    }

    public function get($id)
    {
        $eduNavision = $this->eduNavisionFactory->create();
        $this->eduNavisionResource->load($eduNavision, $id);
        return $eduNavision;
    }

    public function delete(\Edu\ExtensionAttribute\Api\Data\EduNavisionInterface $eduNavision)
    {
        $this->eduNavisionResource->delete($eduNavision);
    }
}
