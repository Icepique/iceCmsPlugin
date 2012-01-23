<?php

/**
 * iceModelCmsPageI18n form base class.
 *
 * @method iceModelCmsPageI18n getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelCmsPageI18nForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'name'             => new sfWidgetFormInputText(),
      'slug'             => new sfWidgetFormInputText(),
      'contents'         => new sfWidgetFormTextarea(),
      'meta_description' => new sfWidgetFormInputText(),
      'meta_keywords'    => new sfWidgetFormInputText(),
      'culture'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorPropelChoice(array('model' => 'iceModelCmsPage', 'column' => 'id', 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 128)),
      'slug'             => new sfValidatorString(array('max_length' => 255)),
      'contents'         => new sfValidatorString(),
      'meta_description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_keywords'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'culture'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getCulture()), 'empty_value' => $this->getObject()->getCulture(), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelCmsPageI18n', 'column' => array('slug', 'culture')))
    );

    $this->widgetSchema->setNameFormat('ice_model_cms_page_i18n[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelCmsPageI18n';
  }


}
