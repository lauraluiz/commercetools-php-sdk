<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 29.01.15, 12:29
 */

namespace Sphere\Core\Model\Type;


use Sphere\Core\Model\Common\Reference;
use Sphere\Core\Model\ProductType\ProductType;
use Sphere\Core\Model\ProductType\ProductTypeReference;

class ReferenceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return Reference
     */
    protected function getReference()
    {
        return Reference::of('test', 'id');
    }

    public function testGetType()
    {
        $this->assertSame('test', $this->getReference()->getTypeId());
    }

    public function testGetId()
    {
        $this->assertSame('id', $this->getReference()->getId());
    }

    public function testFromArray()
    {
        $reference = Reference::fromArray(['typeId' => 'type', 'id' => 'id', 'obj' => 'test']);
        $reference->getId();
        $this->assertSame(['typeId' => 'type', 'id' => 'id', 'obj' => 'test'], $reference->toArray());
    }

    public function testFromObject()
    {
        $object = ProductType::of()->setId('123456');
        $reference = Reference::fromObject($object);
        $this->assertInstanceOf('\Sphere\Core\Model\Common\Reference', $reference);
        $this->assertInstanceOf('\Sphere\Core\Model\ProductType\ProductType', $reference->getObj());
        $this->assertSame('123456', $reference->getId());
        $this->assertSame('product-type', $reference->getTypeId());
    }

    public function testFromObjectTyped()
    {
        $object = ProductType::of()->setId('123456');
        $reference = ProductTypeReference::fromObject($object);
        $this->assertInstanceOf('\Sphere\Core\Model\ProductType\ProductTypeReference', $reference);
        $this->assertInstanceOf('\Sphere\Core\Model\ProductType\ProductType', $reference->getObj());
        $this->assertSame('123456', $reference->getId());
        $this->assertSame('product-type', $reference->getTypeId());
    }

    public function testJsonSerialize()
    {
        $object = ProductType::of()->setId('123456');
        $reference = Reference::fromObject($object);

        $this->assertJsonStringEqualsJsonString('{"typeId": "product-type", "id": "123456"}', json_encode($reference));
    }
}
