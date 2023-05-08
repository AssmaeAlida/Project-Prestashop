<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.stock.repository.stock_available_repository' shared service.

return $this->services['prestashop.adapter.product.stock.repository.stock_available_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'Mg_', ${($_ = isset($this->services['prestashop.adapter.product.stock.validate.stock_available_validator']) ? $this->services['prestashop.adapter.product.stock.validate.stock_available_validator'] : ($this->services['prestashop.adapter.product.stock.validate.stock_available_validator'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\Validate\StockAvailableValidator())) && false ?: '_'});
