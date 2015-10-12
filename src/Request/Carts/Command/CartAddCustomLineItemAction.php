<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\Carts\Command;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Model\Common\LocalizedString;
use Commercetools\Core\Model\Common\Money;
use Commercetools\Core\Model\TaxCategory\TaxCategory;
use Commercetools\Core\Request\AbstractAction;
use Commercetools\Core\Model\TaxCategory\TaxCategoryReference;
use Commercetools\Core\Model\CustomField\CustomFieldObjectDraft;

/**
 * @package Commercetools\Core\Request\Carts\Command
 * @apidoc http://dev.sphere.io/http-api-projects-carts.html#add-custom-line-item
 * @method string getAction()
 * @method CartAddCustomLineItemAction setAction(string $action = null)
 * @method LocalizedString getName()
 * @method CartAddCustomLineItemAction setName(LocalizedString $name = null)
 * @method int getQuantity()
 * @method CartAddCustomLineItemAction setQuantity(int $quantity = null)
 * @method Money getMoney()
 * @method CartAddCustomLineItemAction setMoney(Money $money = null)
 * @method string getSlug()
 * @method CartAddCustomLineItemAction setSlug(string $slug = null)
 * @method TaxCategoryReference getTaxCategory()
 * @method CartAddCustomLineItemAction setTaxCategory(TaxCategoryReference $taxCategory = null)
 * @method CustomFieldObjectDraft getCustom()
 * @method CartAddCustomLineItemAction setCustom(CustomFieldObjectDraft $custom = null)
 */
class CartAddCustomLineItemAction extends AbstractAction
{
    public function fieldDefinitions()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'name' => [static::TYPE => '\Commercetools\Core\Model\Common\LocalizedString'],
            'quantity' => [static::TYPE => 'int'],
            'money' => [static::TYPE => '\Commercetools\Core\Model\Common\Money'],
            'slug' => [static::TYPE => 'string'],
            'taxCategory' => [static::TYPE => '\Commercetools\Core\Model\TaxCategory\TaxCategoryReference'],
            'custom' => [static::TYPE => '\Commercetools\Core\Model\CustomField\CustomFieldObjectDraft'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('addCustomLineItem');
    }

    /**
     * @param LocalizedString $name
     * @param int $quantity
     * @param Money $money
     * @param string $slug
     * @param TaxCategoryReference $taxCategory
     * @param Context|callable $context
     * @return CartAddCustomLineItemAction
     */
    public static function ofNameQuantityMoneySlugAndTaxCategory(
        LocalizedString $name,
        $quantity,
        Money $money,
        $slug,
        TaxCategoryReference $taxCategory,
        $context = null
    ) {
        return static::of($context)
            ->setName($name)
            ->setQuantity($quantity)
            ->setMoney($money)
            ->setSlug($slug)
            ->setTaxCategory($taxCategory);
    }
}