<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 02.02.15, 11:26
 */

namespace Sphere\Core\Request\Products;


use Sphere\Core\Http\HttpMethod;
use Sphere\Core\Http\HttpRequest;
use Sphere\Core\Model\OfTrait;
use Sphere\Core\Request\AbstractSearchRequest;
use Sphere\Core\Request\PageTrait;
use Sphere\Core\Request\SortTrait;
use Sphere\Core\Response\AbstractApiResponse;
use Sphere\Core\Response\PagedQueryResponse;

/**
 * Class ProductsSearchRequest
 * @package Sphere\Core\Request\Products
 * @method static ProductsSearchRequest of($sort = null, $limit = null, $offset = null)
 */
class ProductsSearchRequest extends AbstractSearchRequest
{
    use OfTrait;
    use PageTrait;
    use SortTrait;

    public function __construct($sort = null, $limit = null, $offset = null)
    {
        parent::__construct(ProductProjectionEndpoint::endpoint());
        $this->setSearchParams($sort, $limit, $offset);
    }

    /**
     * @return string
     */
    protected function getPath()
    {
        return (string)$this->getEndpoint() . '/search?' . $this->getParamString();
    }

    /**
     * @return HttpRequest
     */
    public function httpRequest()
    {
        return new HttpRequest(HttpMethod::GET, $this->getPath());
    }

    /**
     * @param $response
     * @return AbstractApiResponse
     */
    public function buildResponse($response)
    {
        return new PagedQueryResponse($response, $this);
    }
}
