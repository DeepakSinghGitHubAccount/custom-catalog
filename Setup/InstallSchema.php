<?php


namespace Btd\DemoCatalog\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        if(version_compare($context->getVersion(), '1.2.0', '<')) 
        {
          if (!$installer->tableExists('btd_democatalog_custom_catalog')) 
          {
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
                    'SKU2'
                );
                

                
                $table_btd_democatalog_custom_catalog->addColumn(
                    'VPN',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    [],
                    'VPN1'
                );
                

                
                $table_btd_democatalog_custom_catalog->addColumn(
                    'CopyWriteInfo',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    [],
                    'CopyWriteInfo'
                );
                

                $setup->getConnection()->createTable($table_btd_democatalog_custom_catalog);



                $table_btd_democatalog_custom_catalog123 = $setup->getConnection()->newTable($setup->getTable('btd_democatalog_custom_catalog123'));

                
                $table_btd_democatalog_custom_catalog123->addColumn(
                    'custom_catalog_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
                    'Entity ID'
                );
                

                
                $table_btd_democatalog_custom_catalog123->addColumn(
                    'ProductID',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    [],
                    'ProductID'
                );
                

                
                $table_btd_democatalog_custom_catalog123->addColumn(
                    'SKU',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'SKU1'
                );
                

                
                $table_btd_democatalog_custom_catalog123->addColumn(
                    'VPN',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    [],
                    'VPN2'
                );
                

                
                $table_btd_democatalog_custom_catalog123->addColumn(
                    'CopyWriteInfo',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    [],
                    'CopyWriteInfo'
                );
                

                $setup->getConnection()->createTable($table_btd_democatalog_custom_catalog123);



                $setup->endSetup();
        }
      } 
    }
}
