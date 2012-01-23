<?php



/**
 * This class defines the structure of the 'cms_slot' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.map
 */
class iceModelCmsSlotTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceCmsPlugin.lib.model.map.iceModelCmsSlotTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('cms_slot');
    $this->setPhpName('iceModelCmsSlot');
    $this->setClassname('iceModelCmsSlot');
    $this->setPackage('plugins.iceCmsPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('TYPE', 'Type', 'CHAR', false, null, 'RichText');
    $this->addColumn('NAME', 'Name', 'VARCHAR', false, 64, null);
    $this->getColumn('NAME', false)->setPrimaryString(true);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('iceModelCmsSlotI18n', 'iceModelCmsSlotI18n', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null, 'iceModelCmsSlotI18ns');
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'symfony_i18n' => array('i18n_table' => 'cms_slot_i18n', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
