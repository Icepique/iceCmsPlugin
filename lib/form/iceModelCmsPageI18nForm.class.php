<?php

class iceModelCmsPageI18nForm extends BaseiceModelCmsPageI18nForm
{
  public function configure()
  {
    $this->widgetSchema['slug']->setAttributes(array('style' => 'width: 500px;'));
    $this->widgetSchema['contents'] = new sfWidgetFormTextareaTinyMCE(array(
      'height' => 400
    ));

    $this->widgetSchema['meta_description']->setAttributes(array('style' => 'width: 700px;'));
    $this->widgetSchema['meta_keywords']->setAttributes(array('style' => 'width: 700px;'));

    $this->validatorSchema['slug'] = new sfValidatorRegex(array('pattern' => '/^\/([\w+а-яА-Я-\/_]+)?$/iu'));

    // We do not want to let the website be user editable
    unset($this->widgetSchema['website'], $this->validatorSchema['website']);
  }
}
