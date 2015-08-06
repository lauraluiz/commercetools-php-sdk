<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Channel;

use Commercetools\Core\Model\Common\Resource;
use Commercetools\Core\Model\Common\LocalizedString;

/**
 * @package Commercetools\Core\Model\Channel
 * @apidoc http://dev.sphere.io/http-api-projects-channels.html#channel
 * @method string getId()
 * @method Channel setId(string $id = null)
 * @method int getVersion()
 * @method Channel setVersion(int $version = null)
 * @method \DateTime getCreatedAt()
 * @method Channel setCreatedAt(\DateTime $createdAt = null)
 * @method \DateTime getLastModifiedAt()
 * @method Channel setLastModifiedAt(\DateTime $lastModifiedAt = null)
 * @method string getKey()
 * @method Channel setKey(string $key = null)
 * @method array getRoles()
 * @method Channel setRoles(array $roles = null)
 * @method LocalizedString getName()
 * @method Channel setName(LocalizedString $name = null)
 * @method LocalizedString getDescription()
 * @method Channel setDescription(LocalizedString $description = null)
 */
class Channel extends Resource
{
    public function getFields()
    {
        return [
            'id' => [static::TYPE => 'string'],
            'version' => [static::TYPE => 'int'],
            'createdAt' => [static::TYPE => '\DateTime'],
            'lastModifiedAt' => [static::TYPE => '\DateTime'],
            'key' => [static::TYPE => 'string'],
            'roles' => [static::TYPE => 'array'],
            'name' => [static::TYPE => '\Commercetools\Core\Model\Common\LocalizedString'],
            'description' => [static::TYPE => '\Commercetools\Core\Model\Common\LocalizedString']
        ];
    }
}