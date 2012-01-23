<?php

class iceCmsPluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    sfPropelBehavior::registerHooks('PropelActAsRichtextBehavior', array(
      ':save:post' => array('PropelActAsRichtextBehavior', 'postSave'),
    ));
  }
}
