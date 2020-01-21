<?php

declare(strict_types=1);

namespace PayNL\Sdk\Filter;

use PayNL\Sdk\Common\FactoryInterface;
use Psr\Container\ContainerInterface;

/**
 * Class Factory
 *
 * @package PayNL\Sdk\Filter
 */
class Factory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, string $requestedName, array $options = null): FilterInterface
    {
        $value = $options['value'] ?? null;

        /** @var FilterInterface $filter */
        $filter = new $requestedName($value);

        return $filter;
    }
}
