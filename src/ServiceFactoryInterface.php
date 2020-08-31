<?php

declare(strict_types=1);

namespace Arp\Factory;

use Arp\Factory\Exception\ServiceFactoryException;
use Psr\Container\ContainerInterface;

/**
 * @author  Alex Patterson <alex.patterson.webdev@gmail.com>
 * @package Arp\Factory
 */
interface ServiceFactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string             $name
     * @param array|null         $config
     *
     * @return mixed
     *
     * @throws ServiceFactoryException
     */
    public function __invoke(ContainerInterface $container, string $name, array $config = null);
}
