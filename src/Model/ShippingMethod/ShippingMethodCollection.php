<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\ShippingMethod;

use Commercetools\Core\Model\Common\Collection;

/**
 * @package Commercetools\Core\Model\ShippingMethod
 *
 * @method ShippingMethod current()
 * @method ShippingMethodCollection add(ShippingMethod $element)
 * @method ShippingMethod getAt($offset)
 */
class ShippingMethodCollection extends Collection
{
    const NAME = 'name';
    const ID = 'id';

    protected $type = '\Commercetools\Core\Model\ShippingMethod\ShippingMethod';

    protected function indexRow($offset, $row)
    {
        if ($row instanceof ShippingMethod) {
            $name = $row->getName();
            $id = $row->getId();
        } else {
            $name = isset($row[static::NAME]) ? $row[static::NAME] : null;
            $id = isset($row[static::ID]) ? $row[static::ID] : null;
        }
        if (!empty($name)) {
            $this->addToIndex(static::NAME, $offset, $name);
        }
        if (!empty($id)) {
            $this->addToIndex(static::ID, $offset, $id);
        }
    }

    /**
     * @param $id
     * @return ShippingMethod
     */
    public function getById($id)
    {
        return $this->getBy(static::ID, $id);
    }

    /**
     * @param $name
     * @return ShippingMethod
     */
    public function getByName($name)
    {
        return $this->getBy(static::NAME, $name);
    }
}