<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\Customers\Command;

use Commercetools\Core\Model\Common\Address;
use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractAction;

/**
 * @package Commercetools\Core\Request\Customers\Command
 * @apidoc http://dev.sphere.io/http-api-projects-customers.html#add-address
 * @method Address getAddress()
 * @method CustomerAddAddressAction setAddress(Address $address = null)
 * @method string getAction()
 * @method CustomerAddAddressAction setAction(string $action = null)
 */
class CustomerAddAddressAction extends AbstractAction
{
    public function fieldDefinitions()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'address' => [static::TYPE => '\Commercetools\Core\Model\Common\Address'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('addAddress');
    }

    /**
     * @param Address $address
     * @param Context|callable $context
     * @return CustomerAddAddressAction
     */
    public static function ofAddress(Address $address, $context = null)
    {
        return static::of($context)->setAddress($address);
    }
}