<?php

/**
 * iceModelCmsSlot form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelCmsSlotForm extends BaseiceModelCmsSlotForm
{
  public function configure()
  {
    $this->widgetSchema['name']->setAttributes(array('style' => 'width: 250px;'));

    $this->embedI18n(array('bg_BG', 'en_US', 'ru_RU'));
  }
}
