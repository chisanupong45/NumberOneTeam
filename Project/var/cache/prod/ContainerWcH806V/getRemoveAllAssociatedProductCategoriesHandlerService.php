<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllAssociatedProductCategoriesHandler' shared autowired service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\RemoveAllAssociatedProductCategoriesHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllAssociatedProductCategoriesHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductCategoryUpdater'] ?? $this->load('getProductCategoryUpdaterService.php')));