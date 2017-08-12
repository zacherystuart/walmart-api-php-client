<?php

/**
 * Feed service
 *
 * @package     Walmart API PHP Client
 * @author      Zachery Stuart <zachery.a.stuart@gmail.com>
 * @copyright   Copyright (c) 2017
 * @license     MIT
 * @since       05/04/2016
 */
namespace WalmartApiClient\Service;

class FeedService extends AbstractService implements FeedServiceInterface
{
    const ENTITY_CLASS    = '\\WalmartApiClient\\Entity\\Product';
    const COLLECTION_CLASS = '\\WalmartApiClient\\Entity\\Collection\\ProductCollection';
    const COLLECTION_KEY   = 'items';

    /**
     * {@inheritdoc}
     */
    public function getFeed($category)
    {
        $this->guardString($category);
        return $this->getEntityCollection('feeds/items', ['categoryId' => $category], self::COLLECTION_KEY);
    }
}
