<?php

class iceModelCmsPageForm extends BaseiceModelCmsPageForm
{
  public function configure()
  {
    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);

    $this->widgetSchema['position'] = new sfWidgetFormChoice(array('choices' => array('after' => 'After', 'under' => 'Under')));
    $this->widgetSchema['page'] = new sfWidgetFormInput();

    $this->validatorSchema['position'] = new sfValidatorChoice(array('choices' => array('after', 'under')));
    $this->validatorSchema['page'] = new sfValidatorPass();

    $this->embedI18n(array('bg_BG', 'en_US', 'ru_RU'));
  }
}
