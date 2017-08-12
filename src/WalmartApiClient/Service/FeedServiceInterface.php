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

interface FeedServiceInterface
{
    /**
     * Get feed for a category
     *
     * @param string $category Category id
     * @return \WalmartApiClient\Entity\Collection\ProductCollectionInterface
     */
    public function getFeed($category);
}
