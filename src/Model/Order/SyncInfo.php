<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Order;

use Commercetools\Core\Model\Channel\ChannelReference;
use Commercetools\Core\Model\Common\JsonObject;

/**
 * @package Commercetools\Core\Model\Order
 * @apidoc http://dev.sphere.io/http-api-projects-orders.html#sync-info
 * @method ChannelReference getChannel()
 * @method SyncInfo setChannel(ChannelReference $channel = null)
 * @method string getExternalId()
 * @method SyncInfo setExternalId(string $externalId = null)
 * @method \DateTime getSyncedAt()
 * @method SyncInfo setSyncedAt(\DateTime $syncedAt = null)
 */
class SyncInfo extends JsonObject
{
    public function getFields()
    {
        return [
            'channel' => [static::TYPE => '\Commercetools\Core\Model\Channel\ChannelReference'],
            'externalId' => [static::TYPE => 'string'],
            'syncedAt' => [static::TYPE => '\DateTime']
        ];
    }
}