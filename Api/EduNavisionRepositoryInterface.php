<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */

namespace Edu\ExtensionAttribute\Api;

/**
 * @api
 */
interface EduNavisionRepositoryInterface
{
    public function save(\Edu\ExtensionAttribute\Api\Data\EduNavisionInterface $eduNavision);

    public function get($id);

    public function delete(\Edu\ExtensionAttribute\Api\Data\EduNavisionInterface $eduNavision);

}
