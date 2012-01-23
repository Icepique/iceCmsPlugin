<?php

/**
 * iceModelCmsSlotI18n form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelCmsSlotI18nForm extends BaseiceModelCmsSlotI18nForm
{
  public function configure()
  {
    $this->widgetSchema['contents'] = new sfWidgetFormTextareaTinyMCE(array(
      'height' => 400
    ));
  }
}
