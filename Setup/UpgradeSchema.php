<?php
namespace Btd\DemoCatalog\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

      
		
			
				


				$table_btd_democatalog_custom_catalog = $setup->getConnection()->newTable($setup->getTable('btd_democatalog_custom_catalog'));

        
			        $table_btd_democatalog_custom_catalog->addColumn(
			            'custom_catalog_id',
			            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			            null,
			            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
			            'Entity ID'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog->addColumn(
			            'ProductID',
			            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			            null,
			            [],
			            'ProductID'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog->addColumn(
			            'SKU',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            255,
			            [],
			            'SKU1'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog->addColumn(
			            'VPN',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            null,
			            [],
			            'VPN'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog->addColumn(
			            'CopyWriteInfo',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            null,
			            [],
			            'CopyWriteInfo'
			        );
			        

			        $setup->getConnection()->createTable($table_btd_democatalog_custom_catalog);



			       

			        $table_btd_democatalog_custom_catalog23 = $setup->getConnection()->newTable($setup->getTable('btd_democatalog_custom_catalog23'));

			        
			        $table_btd_democatalog_custom_catalog23->addColumn(
			            'custom_catalog_id',
			            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			            null,
			            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
			            'Entity ID'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog23->addColumn(
			            'ProductID',
			            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			            null,
			            [],
			            'ProductID'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog23->addColumn(
			            'SKU1',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            255,
			            [],
			            'SKU'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog23->addColumn(
			            'VPN',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            null,
			            [],
			            'VPN'
			        );

			        $table_btd_democatalog_custom_catalog23->addColumn(
			            'VPN2',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            null,
			            [],
			            'VPN2'
			        );
			        

			        
			        $table_btd_democatalog_custom_catalog23->addColumn(
			            'CopyWriteInfo1',
			            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			            null,
			            [],
			            'CopyWriteInfo'
			        );
			        

			        $setup->getConnection()->createTable($table_btd_democatalog_custom_catalog23);



			        $setup->endSetup();


			
	
		

		$installer->endSetup();
	}
}