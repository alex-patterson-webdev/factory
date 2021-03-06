<?php

declare(strict_types=1);

namespace Arp\Factory;

use Arp\Factory\Exception\FactoryException;

/**
 * @author  Alex Patterson <alex.patterson.webdev@gmail.com>
 * @package Arp\Factory
 */
interface FactoryInterface
{
    /**
     * @param array $config The optional factory configuration options.
     *
     * @return mixed
     *
     * @throws FactoryException If the service cannot be created.
     */
    public function create(array $config = []);
}
