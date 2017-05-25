<?php 
require_once(__DIR__.'/../../../../core.php');
class products extends Dataset
{
	public static $profile= array(
		'target' =>'products',
		'Accessor'=>array( 
			'Primary' => 'id',
			'Reference'=>array(  array('','',''), array('','',''), array('','',''), array('','',''), array('','',''), array('','',''),)),
		'header'=>array( 
			'id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'id', 'ORDINAL_POSITION' => '1', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'type', 'ORDINAL_POSITION' => '2', 'COLUMN_DEFAULT' => '104', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'total_orders' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'total_orders', 'ORDINAL_POSITION' => '3', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'total_orders_monthly' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'total_orders_monthly', 'ORDINAL_POSITION' => '4', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'parent_type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'parent_type', 'ORDINAL_POSITION' => '5', 'COLUMN_DEFAULT' => '104', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'user' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'user', 'ORDINAL_POSITION' => '6', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'amazon-order-id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'amazon-order-id', 'ORDINAL_POSITION' => '7', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'merchant-order-id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'merchant-order-id', 'ORDINAL_POSITION' => '8', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'storefront' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'storefront', 'ORDINAL_POSITION' => '9', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'tags' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'tags', 'ORDINAL_POSITION' => '10', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'varchar',),
			'purchase-date' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'purchase-date', 'ORDINAL_POSITION' => '11', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'timestamp',),
			'created-date' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'created-date', 'ORDINAL_POSITION' => '12', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'timestamp',),
			'last-update-date' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'last-update-date', 'ORDINAL_POSITION' => '13', 'COLUMN_DEFAULT' => 'CURRENT_TIMESTAMP', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'timestamp',),
			'item-name' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'item-name', 'ORDINAL_POSITION' => '14', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'item-description' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'item-description', 'ORDINAL_POSITION' => '15', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'listing-id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'listing-id', 'ORDINAL_POSITION' => '16', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'seller-sku' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'seller-sku', 'ORDINAL_POSITION' => '17', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'price' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'price', 'ORDINAL_POSITION' => '18', 'COLUMN_DEFAULT' => '0.00', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'expend' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'expend', 'ORDINAL_POSITION' => '19', 'COLUMN_DEFAULT' => '0.00', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'cost_to_ship' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'cost_to_ship', 'ORDINAL_POSITION' => '20', 'COLUMN_DEFAULT' => '0.00', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'quantity' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'quantity', 'ORDINAL_POSITION' => '21', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'int',),
			'open-date' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'open-date', 'ORDINAL_POSITION' => '22', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'timestamp',),
			'img-url' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'img-url', 'ORDINAL_POSITION' => '23', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'item-is-marketplace' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'item-is-marketplace', 'ORDINAL_POSITION' => '24', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'product-id-type' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'product-id-type', 'ORDINAL_POSITION' => '25', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'int',),
			'zshop-shipping-fee' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'zshop-shipping-fee', 'ORDINAL_POSITION' => '26', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'decimal',),
			'item-note' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'item-note', 'ORDINAL_POSITION' => '27', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'item-condition' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'item-condition', 'ORDINAL_POSITION' => '28', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'zshop-category1' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'zshop-category1', 'ORDINAL_POSITION' => '29', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'zshop-browse-path' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'zshop-browse-path', 'ORDINAL_POSITION' => '30', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'zshop-storefront-feature' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'zshop-storefront-feature', 'ORDINAL_POSITION' => '31', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'asin1' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'asin1', 'ORDINAL_POSITION' => '32', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'asin2' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'asin2', 'ORDINAL_POSITION' => '33', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'asin3' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'asin3', 'ORDINAL_POSITION' => '34', 'COLUMN_DEFAULT' => '', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'will-ship-internationally' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'will-ship-internationally', 'ORDINAL_POSITION' => '35', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'expedited-shipping' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'expedited-shipping', 'ORDINAL_POSITION' => '36', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'zshop-boldface' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'zshop-boldface', 'ORDINAL_POSITION' => '37', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'active' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'active', 'ORDINAL_POSITION' => '38', 'COLUMN_DEFAULT' => '1', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'tinyint',),
			'product-id' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'product-id', 'ORDINAL_POSITION' => '39', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'NO', 'DATA_TYPE' => 'bigint',),
			'fulfillment-channel' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'fulfillment-channel', 'ORDINAL_POSITION' => '40', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'bid-for-featured-placement' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'bid-for-featured-placement', 'ORDINAL_POSITION' => '41', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'add-delete' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'add-delete', 'ORDINAL_POSITION' => '42', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'varchar',),
			'pending-quantity' => array(  'TABLE_CATALOG' => 'def', 'TABLE_SCHEMA' => 'SellerSumo', 'TABLE_NAME' => 'products', 'COLUMN_NAME' => 'pending-quantity', 'ORDINAL_POSITION' => '43', 'COLUMN_DEFAULT' => '0', 'IS_NULLABLE' => 'YES', 'DATA_TYPE' => 'int',),
		)
	);
	public $data;
}
?>