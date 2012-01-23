<?php

require 'plugins/iceCmsPlugin/lib/model/om/BaseiceModelCmsPageNestedSet.php';


/**
 * Skeleton subclass for representing a row from the 'cms_page' table.
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model
 */
class iceModelCmsPage extends BaseiceModelCmsPageNestedSet
{
  public function getSlugWithLevel()
  {
    return str_repeat(' — ', $this->getLevel()) . $this->getSlug();
  }

  /**
   * Proxy method to iceModelMultimediaPeer::retrieveByModel()
   *
   * @see iceModelMultimediaPeer::retrieveByModel()
   */
  public function getMultimedia($limit = 0, $type = null, $primary = false)
  {
    return iceModelMultimediaPeer::retrieveByModel($this, $limit, $type, $primary);
  }

  /**
   * Proxy method to iceModelMultimediaPeer::countByModel()
   *
   * @see iceModelMultimediaPeer::countByModel()
   */
  public function getMultimediaCount($type = null)
  {
    return iceModelMultimediaPeer::countByModel($this, $type);
  }
}
