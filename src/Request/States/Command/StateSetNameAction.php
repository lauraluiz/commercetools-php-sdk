<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\States\Command;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Model\Common\LocalizedString;
use Commercetools\Core\Request\AbstractAction;

/**
 * @package Commercetools\Core\Request\States\Command
 * 
 * @method string getAction()
 * @method StateSetNameAction setAction(string $action = null)
 * @method LocalizedString getName()
 * @method StateSetNameAction setName(LocalizedString $name = null)
 */
class StateSetNameAction extends AbstractAction
{
    public function getFields()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'name' => [static::TYPE => '\Commercetools\Core\Model\Common\LocalizedString'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('setName');
    }

    /**
     * @param LocalizedString $name
     * @param Context|callable $context
     * @return StateSetNameAction
     */
    public function ofName(LocalizedString $name, $context = null)
    {
        return static::of($context)->setName($name);
    }
}