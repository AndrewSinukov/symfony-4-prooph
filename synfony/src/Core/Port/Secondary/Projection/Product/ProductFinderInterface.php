<?php
declare(strict_types=1);

namespace App\Core\Port\Secondary\Projection\Product;

/**
 * Interface ProductFinderInterface
 * @package App\Core\Port\Secondary\Projection\Product
 */
interface ProductFinderInterface
{
    /**
     * @return array
     */
    public function findAll(): array;
}
