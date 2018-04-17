<?php
/**
 * @author Grom Maksym <MailMaximGrom@gmail.com>
 */

namespace Edu\ExtensionAttribute\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * Instalation table for attach navision data to product
     *
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     *
     * @return void
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('edu_navision_product')
        )->addColumn(
            'product_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Product Id which should attach this data'
        )->addColumn(
            'navision_code',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Custom Name'
        )->addColumn(
            'navision_status',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Status of product'
        )->setComment(
            'Navision identifiers'
        );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
