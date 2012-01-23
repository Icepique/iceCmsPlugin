<?php



/**
 * This class defines the structure of the 'cms_slot_i18n' table.
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
class iceModelCmsSlotI18nTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceCmsPlugin.lib.model.map.iceModelCmsSlotI18nTableMap';

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
    $this->setName('cms_slot_i18n');
    $this->setPhpName('iceModelCmsSlotI18n');
    $this->setClassname('iceModelCmsSlotI18n');
    $this->setPackage('plugins.iceCmsPlugin.lib.model');
    $this->setUseIdGenerator(false);
    // columns
    $this->addForeignPrimaryKey('ID', 'Id', 'INTEGER' , 'cms_slot', 'ID', true, null, null);
    $this->addColumn('CONTENTS', 'Contents', 'LONGVARCHAR', false, null, null);
    $this->addPrimaryKey('CULTURE', 'Culture', 'VARCHAR', true, 7, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('iceModelCmsSlot', 'iceModelCmsSlot', RelationMap::MANY_TO_ONE, array('id' => 'id', ), 'CASCADE', null);
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
      'symfony_i18n_translation' => array('culture_column' => 'culture', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
